<?php
require_once 'CategorieControleur.php';


if(isset($_POST["submitBtnText"],$_POST["idCateg"], $_POST["nom"])){
    $tab= array("idCateg"=> $_POST["idCateg"], "nom"=>$_POST["nom"]);
    //var_dump($tab);
    if($_POST["submitBtnText"]== 'Ajouter')
        CategorieControleur::insert($tab);
    else if ($_POST["submitBtnText"]== 'Enregistrer les modifications')
        CategorieControleur::updateCateg($tab);   
}

if(isset($_GET['page'] ) && $_GET['page'] === 'form') 
    require_once __DIR__ .'/../../Views/Categorie/FormulaireCategorie.php';


if(isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['idCateg']))
CategorieControleur::delete();
CategorieControleur::liste();
?>