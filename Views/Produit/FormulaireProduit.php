<!DOCTYPE html>
<html>
  <head>
    <title>The Tunisia Hand |Produits |TRADITIONAL |MODERN |TUNISIE</title>
    <link rel="stylesheet" href="../CSS/Formulaire.css">
  </head>
  <body>
  <div class="label-container">
        <label id="categorie">Produit </label>
    </div>
    <br>    <br>
<div class="container">
<?php


// Vérifier si nous sommes en train d'ajouter ou de modifier un produit

$action = 'add'; // Par défaut, nous ajoutons un nouveau Produit

if (isset($_GET['action']) && $_GET['action'] === 'update' && isset($_GET['idProd'])) {
  $action = 'update';
  $idProd = $_GET['idProd'];
  /* Définissez le titre de la formulaire et le texte du bouton de soumission en conséquence */
  $formulaireTitle = 'Modifier le produit ' . $_GET['nom'];
  $submitBtnText = 'Enregistrer les modifications';
} else {
  /* Si aucun ID de produit n'est spécifié dans le paramètre GET, il s'agit d'une création de nouveau produit */
  $formulaireTitle = 'Ajouter un nouveau produit';
  $submitBtnText = 'Ajouter';
}

?>

  <form method="post" action="http://localhost/TheTunisiaHandVMVC/Controllers/Produit/TestControleur.php">
    <label><?=$formulaireTitle?> :</label> <br>
    <label for="id">ID :</label>

    <?php if ($action === 'update') :?>
    <input type="number" id="id" name="idProd" value="<?= $idProd?>"><br>

    <label for="id">Type :</label>
    <input type="number" id="id" name="type" value="<?= $_GET['type']?>"><br>

    <label for="name">Nom :</label>
    <input type="text" id="name" name="nom" value="<?= $_GET['nom']?>"><br>

    <label for="name">Image :</label>
    <input type="text" id="name" name="img" value="<?= $_GET['img']?>"><br>

    <label for="id">Stock :</label>
    <input type="number" id="id" name="stock" value="<?= $_GET['stock']?>"><br>

    <label for="name">Prix :</label>
    <input type="text" id="name" name="prix" value="<?= $_GET['prix']?>"><br>

    <label for="id">Couleur :</label>
    <input type="number" id="id" name="couleur" value="<?= $_GET['couleur']?>"><br>

    <label for="id">Catégorie :</label>
    <input type="number" id="id" name="categ" value="<?= $_GET['categ']?>"><br>

    <?php else: ?>
    <input type="number" id="id" name="idProd"><br>

    <label for="id">Type :</label>
    <input type="number" id="id" name="type"><br>

    <label for="name">Nom :</label>
    <input type="text" id="name" name="nom"><br>

    <label for="name">Image :</label>
    <input type="text" id="name" name="img"><br>

    <label for="id">Stock :</label>
    <input type="number" id="id" name="stock"><br>

    <label for="name">Prix :</label>
    <input type="text" id="name" name="prix"><br>

    <label for="id">Couleur :</label>
    <input type="number" id="id" name="couleur"><br>

    <label for="id">Catégorie :</label>
    <input type="number" id="id" name="categ"><br>

    <?php endif; ?>
    <input type="submit" name="submitBtnText" value="<?= $submitBtnText?>">
  </form>
</div>
</body>
</html>
