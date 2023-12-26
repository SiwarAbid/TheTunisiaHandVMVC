<!DOCTYPE html>
<html>
  <head>
    <title>The Tunisia Hand |Produits |TRADITIONAL |MODERN |TUNISIE</title>
    <link rel="stylesheet" href="http://localhost/TheTunisiaHandVMVC/Views/CSS/Formulaire.css">
  </head>
  <body>
  <div class="container">
  <div class="label-container">
        <label id="categorie">Produit </label>
    </div>
    <br>    <br>
    <table>
    <tr>
        <th> ID </th>
        <th> Type </th>
        <th> Nom </th>
        <th> Image </th>
        <th> Stock </th>
        <th> Prix </th>
        <th> Couleur </th>
        <th> Catégorie </th>
        <th> Modifier </th>
        <th> Supprimer </th>
        

    </tr>
    <?php
    require_once __DIR__ .'/../../Models/Produit/Produit.php';
        foreach($produits as $c){?>
    <tr>
        <td><?=$c->getAtt("idProd")?></td>
        <td><?=$c->getAtt("type")?></td>

        <td><?=$c->getAtt("nom")?></td>
        <td><img src='..\<?=$c->getAtt("img")?>'/></td>
        <td><?=$c->getAtt("stock")?></td>
        <td><?=$c->getAtt("prix")?></td>
        <td><?=$c->getAtt("couleur")?></td>
        <td><?=$c->getAtt("categ")?></td>
        <td><a href="http://localhost/TheTunisiaHandVMVC/Controllers/Produit/TestControleur.php?page=form&action=update&idProd=<?=$c->getAtt('idProd')?>&type=<?=$c->getAtt("type")?>&nom=<?=$c->getAtt("nom")?>&stock=<?=$c->getAtt("stock")?>&prix=<?=$c->getAtt("prix")?>&couleur=<?=$c->getAtt("couleur")?>&categ=<?=$c->getAtt("categ")?>&img=<?=$c->getAtt("img")?>">Modifier</a></td>
        <td><a href="http://localhost/TheTunisiaHandVMVC/Controllers/Produit/TestControleur.php?action=delete&idProd=<?= $c->getAtt('idProd')?> ">Supprimer</a></td>


        

    </tr>  
    <?php }?>
    </table> 
    <br>    <br>
<a href="http://localhost/TheTunisiaHandVMVC/Views/Produit/FormulaireProduit.php">Ajouter un nouveau Produit </a>
<a href="http://localhost/TheTunisiaHandVMVC/">Accueil </a>

</div>
</body>
</html>