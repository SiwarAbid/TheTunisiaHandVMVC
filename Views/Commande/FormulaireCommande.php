<!DOCTYPE html>
<html>
  <head>
    <title>The Tunisia Hand |Commandes |TRADITIONAL |MODERN |TUNISIE</title>
    <link rel="stylesheet" href="../CSS/Formulaire.css">
  </head>
  <body>
<div class="container">
<div class="label-container">
        <label id="categorie">Commande </label>
    </div>
    <br>    <br>
    <?php

    // Vérifier si nous sommes en train d'ajouter ou de modifier une commande

    $action = 'add'; // Par défaut, nous ajoutons une nouvelle commande

    if (isset($_GET['action']) && $_GET['action'] === 'update' && isset($_GET['idCom'])) {
      $action = 'update';
      $idCom = $_GET['idCom'];
      /* Définissez le titre de la formulaire et le texte du bouton de soumission en conséquence */
      $formulaireTitle = 'Modifier la commande ' . $_GET['idCom'];
      $submitBtnText = 'Enregistrer les modifications';
    } else {
      /* Si aucun ID de commande n'est spécifié dans le paramètre GET, il s'agit d'une création de nouvelle commande */
      $formulaireTitle = 'Ajouter une nouvelle commande';
      $submitBtnText = 'Ajouter';
    }

    ?>
    <form method="POST" action="http://localhost/TheTunisiaHandVMVC/Controllers/Commande/TestControleur.php">
    <label><?=$formulaireTitle?> :</label> <br>
    <label for="id">ID :</label>

    <?php if ($action === 'update') :?>
    <input type="number" id="id" name="idCom" value="<?= $idCom?>"><br>

    <label for="name">Prix Total :</label>
    <input type="text" id="name" name="prixT" value="<?= $_GET['prixT']?>"><br>

    <label for="name">Quantité :</label>
    <input type="text" id="name" name="qte" value="<?= $_GET['qte']?>"><br>

    <?php else: ?>
    <input type="number" id="id" name="idCom"><br>

    <label for="name">Prix Total :</label>
    <input type="text" id="name" name="prixT"><br>

    <label for="name">Quantité :</label>
    <input type="text" id="name" name="qte"><br>
    <?php endif;?>

    <input type="submit" name="submitBtnText" value="<?= $submitBtnText?>">
  </form>
</div>
</body>
</html>
