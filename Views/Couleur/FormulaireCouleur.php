<!DOCTYPE html>
<html>
  <head>
    <title>The Tunisia Hand |Couleurs |TRADITIONAL |MODERN |TUNISIE</title>
    <link rel="stylesheet" href="../CSS/Formulaire.css">
  </head>
  <body>
<div class="container">


    <div class="label-container">
        <label id="categorie">Couleur </label>
    </div>
    <br>    <br>
    <?php

    // Vérifier si nous sommes en train d'ajouter ou de modifier une couleur

    $action = 'add'; // Par défaut, nous ajoutons une nouvelle couleur

    if (isset($_GET['action']) && $_GET['action'] === 'update' && isset($_GET['ref'])) {
      $action = 'update';
      $ref = $_GET['ref'];
      /* Définissez le titre de la formulaire et le texte du bouton de soumission en conséquence */
      $formulaireTitle = 'Modifier la couleur ' . $_GET['ref'];
      $submitBtnText = 'Enregistrer les modifications';
    } else {
      /* Si aucun ID de couleur n'est spécifié dans le paramètre GET, il s'agit d'une création de nouvelle couleur */
      $formulaireTitle = 'Ajouter une nouvelle couleur';
      $submitBtnText = 'Ajouter';
    }

    ?>
    <form method="POST" action="http://localhost/TheTunisiaHandVMVC/Controllers/Couleur/TestControleur.php">
      <label><?=$formulaireTitle?> :</label> <br>
      <label for="id">Référence :</label>

      <?php if ($action === 'update') :?>
      <input type="number" id="id" name="ref" value="<?= $ref?>"><br>

      <label for="name">Nom :</label>
      <input type="text" id="name" name="nom" value="<?= $_GET['nom']?>"><br>

      <?php else: ?>
      <input type="number" id="id" name="ref"><br>

      <label for="name">Nom :</label>
      <input type="text" id="name" name="nom"><br>

      <?php endif;?>
      <input type="submit" name="submitBtnText" value="<?= $submitBtnText?>" >
  </form>
</div>
</body>
</html>
