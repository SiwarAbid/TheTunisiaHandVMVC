<!DOCTYPE html>
<html>
  <head>
    <title>The Tunisia Hand |Clients |TRADITIONAL |MODERN |TUNISIE</title>
    <link rel="stylesheet" href="http://localhost/TheTunisiaHandVMVC/Views/CSS/Formulaire.css">
  </head>
  <body>
<div class="container">


    <div class="label-container">
        <label id="categorie">Client </label>
    </div>
    <br>    <br>
    <?php


    // Vérifier si nous sommes en train d'ajouter ou de modifier un client

    $action = 'add'; // Par défaut, nous ajoutons un nouveau client

    if (isset($_GET['action']) && $_GET['action'] === 'update' && isset($_GET['cin'])) {
      $action = 'update';
      $cin = $_GET['cin'];
      /* Définissez le titre de la formulaire et le texte du bouton de soumission en conséquence */
      $formulaireTitle = 'Modifier le client ' . $_GET['nom'];
      $submitBtnText = 'Enregistrer les modifications';
  } else {
      /* Si aucun ID de client n'est spécifié dans le paramètre GET, il s'agit d'une création de nouveau client */
      $formulaireTitle = 'Ajouter un nouveau client';
      $submitBtnText = 'Ajouter';
  }
  
    ?>
    
    <form method="POST" action="http://localhost/TheTunisiaHandVMVC/Controllers/Client/TestControleur.php">
    <label><?=$formulaireTitle?> :</label> <br>
    <label for="id">CIN :</label>
   <?php        // echo $submitBtnText;
if ($action === 'update') :?> 
    <input type="number" id="id" name="cin" value="<?= $cin?>"><br>

    <label for="name">Nom :</label>
    <input type="text" id="name" name="nom" value="<?= $_GET['nom']?>"><br>

    <label for="name">Prénom :</label>
    <input type="text" id="name" name="prenom" value="<?= $_GET['prenom']?>"><br>

    <label for="name">Adresse :</label>
    <input type="text" id="name" name="adr" value="<?= $_GET['adr']?>"><br>

    <label for="name">Mot de passe :</label>
    <input type="text" id="name" name="motdepasse" value="<?= $_GET['motdepasse']?>"><br>

    <?php else: ?>
      <input type="number" id="id" name="cin" ><br>

      <label for="name">Nom :</label>
      <input type="text" id="name" name="nom" ><br>

      <label for="name">Prénom :</label>
      <input type="text" id="name" name="prenom" ><br>

      <label for="name">Adresse :</label>
      <input type="text" id="name" name="adr" ><br>

      <label for="name">Mot de passe :</label>
      <input type="text" id="name" name="motdepasse" ><br> 

    <?php endif;
           // echo $_POST["submitBtn"];
            ?>  
    <input type="submit" name="submitBtnText" value="<?= $submitBtnText?>">
  </form>
</div>
</body>
</html>
