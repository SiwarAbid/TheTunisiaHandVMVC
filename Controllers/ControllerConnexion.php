<?php
require_once __DIR__ .'/../Models/Client/ClientCrud.php';
require_once __DIR__ .'/../Models/Client/Client.php';

session_start();

class ControllerConnexion{

    public static function findByCin($cin,$password){
        $clientCrud = new ClientCrud();
        //$client = array();
        $client= $clientCrud->findByCin($cin);
        //var_dump( $clients);

       // foreach($clients as $k=>$client ){
    if ($client !== null && $password == $client->getAtt('motdepasse')) {
                // Les identifiants sont valides, on connecte l'utilisateur et on le redirige vers la page d'accueil
                $_SESSION['cin'] = $cin;
                echo"----";
                header('Location: http://localhost/TheTunisiaHandVMVC/Controllers/Controller.php');
                exit();

    }else{
            // Les identifiants sont invalides, on affiche un message d'erreur
            if ($client === null) {
                // Aucun client n'a été trouvé avec cette adresse e-mail
                $errorMessage = 'Numero CIN incorrecte';
                echo $errorMessage;

                include '../Views/Connexion.php';
                return;
            }
            if ($password != $client->getAtt('motdepasse')) {
                // Le mot de passe fourni est incorrect
                $errorMessage = 'Mot de passe incorrect';
                echo $errorMessage;
                include '../Views/Connexion.php';
                return;
            }
        //}

    }}
    public static function liste(){
    
        require_once __DIR__ .'\..\Views\Connexion.php';
        }
}
if(isset($_GET['action']) && $_GET['action'] == 'Seconnecter'){
// Si l'utilisateur est déjà connecté, on le redirige vers la page d'accueil
if (isset($_SESSION['cin'])) {
    //echo"----";

    header('Location: http://localhost/TheTunisiaHandVMVC/Controllers/Controller.php');
    exit();
}

// Si l'utilisateur a soumis le formulaire de connexion
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cin']) && isset($_POST['nom']) && isset($_POST['password'])) {
    $cin = $_POST['cin'];
    $password = $_POST['password'];
    ControllerConnexion::findByCin($cin,$password);
    }
}

if(isset($_GET['action']) && $_GET['action'] == 'Sinsecrir'){
    $tab=array("cin"=>$_POST['cin'],"nom"=>$_POST['nom'], "prenom"=>$_POST['prenom'], "adr"=>$_POST['adr'], "motdepasse"=>$_POST['motdepasse']);
    $c= new Client($tab);
    ClientCrud::add($c);

    }

if(isset($_GET["page"]) && $_GET["page"]=== 'inscrire')
require_once __DIR__ .'\..\Views\Insecription.php';

ControllerConnexion::liste();

    ?>