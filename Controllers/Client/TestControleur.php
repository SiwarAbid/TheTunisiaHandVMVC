<?php
require_once 'ClientControleur.php';

if(isset($_POST["submitBtnText"],$_POST["cin"])){
    $tab= array("cin"=> $_POST["cin"], "nom"=>$_POST["nom"], "prenom"=>$_POST["prenom"], "adr"=>$_POST["adr"], "motdepasse"=>$_POST["motdepasse"]);

    if($_POST["submitBtnText"]== 'Ajouter'){
        ClientControleur::insert($tab);
    }else //if ($_POST["submitBtnText"]== 'Enregistrer les modifications')
    var_dump($tab);
        ClientControleur::update($tab);

    
}

if(isset($_GET['page'] ) && $_GET['page'] === 'form') 
    require_once __DIR__ .'/../../Views/Client/FormulaireClient.php';


if(isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['cin']))  
ClientControleur::delete();
ClientControleur::liste();
?>