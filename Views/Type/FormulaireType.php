<!DOCTYPE html>
<html>
  <head>
    <title>The Tunisia Hand |Types |TRADITIONAL |MODERN |TUNISIE</title>
    <link rel="stylesheet" href="../CSS/Formulaire.css">
  </head>
  <body>
  <div class="container">
  <div class="label-container">
      <label id="categorie">Type </label>
  </div>
  <br>    <br>
    <?php

    // Vérifier si nous sommes en train d'ajouter ou de modifier une type

    $action = 'add'; // Par défaut, nous ajoutons une nouvelle type

    if (isset($_GET['action']) && $_GET['action'] === 'update' && isset($_GET['idtype'])) {
      $action = 'update';
      $idtype = $_GET['idtype'];
      /* Définissez le titre de la formulaire et le texte du bouton de soumission en conséquence */
      $formulaireTitle = 'Modifier la type ' . $_GET['idtype'];
      $submitBtnText = 'Enregistrer les modifications';
    } else {
      /* Si aucun ID de type n'est spécifié dans le paramètre GET, il s'agit d'une création de nouvelle type */
      $formulaireTitle = 'Ajouter une nouvelle type';
      $submitBtnText = 'Ajouter';
    }

    ?>
    <form method="POST" action="http://localhost/TheTunisiaHandVMVC/Controllers/Type/TestControleur.php">
      <label><?=$formulaireTitle?> :</label> <br>
      <label for="id">ID :</label>

      <?php if ($action === 'update') :?>
      <input type="number" id="id" name="idtype" value="<?= $idtype?>"><br>

      <label for="name">Libellé :</label>
      <input type="text" id="name" name="lib" value="<?= $_GET['lib']?>"><br>

      <?php else: ?>
      <input type="number" id="id" name="idtype"><br>

      <label for="name">Libellé :</label>
      <input type="text" id="name" name="lib"><br>

      <?php endif;?>
      <input type="submit" name="submitBtnText" value="<?= $submitBtnText?>">
    </form>
  </div>
  </body>
</html>
