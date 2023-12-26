<?php
require_once 'CouleurControleur.php';

if(isset($_POST["submitBtnText"],$_POST["ref"])){
    $tab= array("ref"=> $_POST["ref"], "nom"=>$_POST["nom"]);

    if($_POST["submitBtnText"]== 'Ajouter')
        CouleurControleur::insert($tab);
    else if ($_POST["submitBtnText"]== 'Enregistrer les modifications')
        CouleurControleur::update($tab);

    
}

if(isset($_GET['page'] ) && $_GET['page'] === 'form') 
    require_once __DIR__ .'/../../Views/Couleur/FormulaireCouleur.php';

if(isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['ref']))
CouleurControleur::delete();
CouleurControleur::liste();
?>