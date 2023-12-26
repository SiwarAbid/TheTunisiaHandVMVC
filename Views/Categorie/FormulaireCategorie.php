<!DOCTYPE html>
<html>
  <head>
    <title>The Tunisia Hand |Categories |TRADITIONAL |MODERN |TUNISIE</title>
    <link rel="stylesheet" href="http://localhost/TheTunisiaHandVMVC/Views/CSS/Formulaire.css">
  </head>
  <body>
  <div class="container">
    <div class="label-container">
        <label id="categorie">Catégorie </label>
    </div>
    <br>    <br>
    <?php


    // Vérifier si nous sommes en train d'ajouter ou de modifier une catégorie

    $action = 'add'; // Par défaut, nous ajoutons une nouvelle catégorie

    if (isset($_GET['action']) && $_GET['action'] === 'update' && isset($_GET['idCateg'])) {
      $action = 'update';
      $idCateg = $_GET['idCateg'];
      /* Définissez le titre de la formulaire et le texte du bouton de soumission en conséquence */
      $formulaireTitle = 'Modifier la catégorie ' . $_GET['nom'];
      $submitBtnText = 'Enregistrer les modifications';
  } else {
      /* Si aucun ID de catégorie n'est spécifié dans le paramètre GET, il s'agit d'une création de nouvelle catégorie */
      $formulaireTitle = 'Ajouter une nouvelle catégorie';
      $submitBtnText = 'Ajouter';
  }
  
    ?>
    <form method="POST" action="http://localhost/TheTunisiaHandVMVC/Controllers/Categorie/TestControleur.php">
    <label><?=$formulaireTitle?> :</label> <br>
    <label for="id">ID :</label>
    <?php if ($action === 'update') :?>
    <input type="number" id="id" name="idCateg" value="<?= $idCateg?>" ><br>

    <label for="name">Nom :</label>
    <input type="text" id="name" name="nom" value="<?= $_GET['nom']?>" ><br>
    
    <?php else: ?>
    <input type="number" id="id" name="idCateg" ><br>
    
    <label for="name">Nom :</label>
    <input type="text" id="name" name="nom" ><br>
    
    <?php endif;?>
    <input type="submit" name="submitBtnText" value="<?= $submitBtnText?>">
  </form>
</div>
</body>
</html>
