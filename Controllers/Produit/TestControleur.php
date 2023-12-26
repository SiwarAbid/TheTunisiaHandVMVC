<?php
require_once 'ProduitControleur.php';
//echo "------";
//echo $_POST["idProd"];
if(isset($_POST["submitBtnText"],$_POST["idProd"])){
    $tab= array("idProd"=> $_POST["idProd"], "type"=>$_POST["type"], "nom"=>$_POST["nom"], "img"=>$_POST["img"], "stock"=>$_POST["stock"], "prix"=>$_POST["prix"], "couleur"=>$_POST["couleur"], "categ"=>$_POST["categ"]);
//var_dump($tab);
    if($_POST["submitBtnText"]== 'Ajouter'){
        //var_dump($tab);
        ProduitControleur::insert($tab);
    }else //if ($_POST["submitBtnText"]== 'Enregistrer les modifications')
        ProduitControleur::update($tab);
}
    




//echo $_GET["img"];

// Vérifier si nous sommes en train d'ajouter ou de modifier un produit
if(isset($_GET['page'] ) && $_GET['page'] === 'form') {
if (isset($_GET['action']) && $_GET['action'] === 'update' && isset($_GET['idProd'])) 
    require_once __DIR__ .'/../../Views/Produit/FormulaireProduit.php';

else 
    require_once __DIR__.'/../../Views/Produit/FormulaireProduit.php';
}
// ProduitControleur::getProduitsByCategorie(6);
if(isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['idProd']))
ProduitControleur::delete();
ProduitControleur::liste();
?>