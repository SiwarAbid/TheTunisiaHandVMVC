<?php
require_once 'TypeControleur.php';

if(isset($_POST["submitBtnText"],$_POST["idtype"])){
    $tab= array("idtype"=> $_POST["idtype"], "lib"=>$_POST["lib"]);
    if($_POST["submitBtnText"]== 'Ajouter')
        TypeControleur::insert($tab);
    else //if ($_POST["submitBtnText"]== 'Enregistrer les modifications')
     {   TypeControleur::update($tab);
        var_dump($tab);

     }
    //modification ne sont pas enregistrer
}

if(isset($_GET['page'] ) && $_GET['page'] === 'form') 
    require_once __DIR__ .'/../../Views/Type/FormulaireType.php';

if(isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['idtype']))
TypeControleur::delete();


TypeControleur::liste();
?>