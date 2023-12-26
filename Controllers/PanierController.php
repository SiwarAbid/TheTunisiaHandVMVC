<?php
   session_start();

   if(isset($_POST["idProd"])){
   $id=$_POST["idProd"];
   if(!isset($_SESSION["panier"][$id]))
   $_SESSION["panier"][$id]=1;
   else
   $_SESSION["panier"][$id]++; }
   
   
   
require_once '../Models/Panier.php';
require_once __DIR__ .'/../Models/Produit/ProduitCrud.php';

class PanierController {
    private $panier;

    public function __construct() {
        $this->panier = new Panier();
    }

    public function ajouterArticle($idProd, $prix, $quantite) {
        if (isset($_SESSION['panier'])) {
            $panier = $_SESSION['panier'];
        } else {
            $panier = array();
        }
        $this->panier->ajouterArticle($idProd, $prix, $quantite);
        $_SESSION['panier'] = $panier;

        $this->listeProduit();
        // require_once __DIR__ .'/Controller.php';
    
    }

    public function supprimerArticle($idProd) {
        if (isset($_SESSION['panier'])) {
            $panier = $_SESSION['panier'];
        } else {
            $panier = array();
        }
        if (isset($panier[$idProd])) {
            unset($panier[$idProd]);
        }
        // Mettre à jour le panier de la session
         $_SESSION['panier'] = $panier;
       // $this->panier->supprimerArticle($idProd);
        $this->listeProduit(); //afficherPanier
    }

    public function viderPanier() {
        unset($_SESSION['panier']);
        //$this->panier->viderPanier();
        $this->listeProduit();
    }

    // public function afficherPanier() {
    //     $articles = $this->panier->getArticles();
    //     $total = $this->panier->montantTotal();
    //     include '../Views/Panier.php';
    // }

    public function listeProduit(){
        if (isset($_SESSION['panier'])) {
            $panier = $_SESSION['panier'];
        } else {
            $panier = array();
        }
        $articles = array();

        foreach ($panier as $idProd => $produit) {
            $articles[] = array(
                'idProd' => $idProd,
                'prix' => $produit['prix'],
                'quantite' => $produit['quantite']
            );}
        $total = $this->panier->montantTotal();
        $produits =ProduitCrud::getAll();
        require_once __DIR__ .'/../Views/Panier.php';

    }
}

$panierController = new PanierController();

if(isset($_POST['idProd'],$_POST['prix']))
$panierController ->ajouterArticle($_POST['idProd'],$_POST['prix'],$_POST['quantity']);

if(isset($_POST['action']) && $_POST['action'] === 'delete')
$panierController ->supprimerArticle($_POST['idProd']);

if(isset($_POST['action']) && $_POST['action'] === 'vider')
$panierController ->viderPanier();
//echo"----";
$panierController->listeProduit();
?>
