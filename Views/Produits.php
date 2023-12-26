<!DOCTYPE html>
<html>
  <head>
    <title>The Tunisia Hand |Produits |TRADITIONAL |MODERN |TUNISIE</title>
    <link rel="stylesheet" href="http://localhost/TheTunisiaHandVMVC/Views/CSS/Style.css">
  </head>
  <body>
  <div class="container">
  <div class="label-container">
        <label id="categorie">Liste Produits </label>
    </div>
    <br>    <br>
    <div class="produits">
    <?php
    require_once __DIR__ .'\..\Models\Categorie\Categorie.php';
    require_once __DIR__ .'/../Models/Produit/Produit.php';
    require_once __DIR__ .'/../Models/Couleur/Couleur.php';



        foreach($categories as $c){?>
    <div class="bande">
          <h2><?=$c->getAtt("nom")?></h2>
    </div>

  <div class="produit">
  <?php
        foreach($produits as $p){
          if($p->getAtt("categ") == $c->getAtt("idCateg")){?>
    <div class="image">
    <img width='10' src='<?=$p->getAtt("img")?>' alt="Produit 1">
    </div>
    <div class="info">
      <h3> <?=$p->getAtt("nom")?> </h3> 
          Couleur: 
          <?php
            foreach($couleurs as $k){
            if($p->getAtt("couleur") == $k->getAtt("ref")){
              echo $k->getAtt("nom");}}?></p>
      <div class="prix">
        <span class="prix-nouveau"> <?=$p->getAtt("prix")?> TND</span>
      </div>
      <div class="quantity-selector">
        <form action="http://localhost/TheTunisiaHandVMVC/Controllers/PanierController.php" method="post">
        <label for="quantity">Quantité :</label>
        <input type="number" id="quantity" name="quantity" min="1" value="1">
        <input type="hidden" name="idProd" value="<?= $p->getAtt("idProd") ?>">
        <input type="hidden" name="prix" value="<?= $p->getAtt("prix") ?>">
        <button type="submit" class="bouton-ajouter">Ajouter au panier</button>
        </form> 
      </div>
      <div class="boutons">
        <a href="#" class="bouton-details">En savoir plus</a>
      </div>

      </div>
    <?php }}?>
  </div>
  <?php }?>
  
</div>
<a href="http://localhost/TheTunisiaHandVMVC/">Accueil </a>

</body>
</html>