<!DOCTYPE html>
<html>
  <head>
    <title>The Tunisia Hand |Produits |TRADITIONAL |MODERN |TUNISIE</title>
    <link rel="stylesheet" href="http://localhost/TheTunisiaHandVMVC/Views/CSS/Formulaire.css">
  </head>
  <body>
  <div class="container">
  <div class="label-container">
        <label id="categorie">Panier </label>
    </div>
    <br>    <br>
    <?php

    $articles = $this->panier->getArticles();
    // if(empty($articles)):
    // ?>

        <table>
            <thead>
                <tr>
                    <th>Article</th>
                    <th> Image </th>
                    <th> Prix unitaire</th>
                    <th>Quantité</th>
                    <th>Prix total</th>
                    <th> Supprimer </th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    require_once __DIR__ .'/../Models/Produit/Produit.php';
                    foreach($articles as $article): 
                    foreach($produits as $p) {
                    if($p->getAtt("idProd") == $article['idProd'] )
                    {?>
                    <tr>
                        <td><?=$p->getAtt("nom")?></td>
                        <td><img width='100' src ='<?=$p->getAtt("img")?>'/></td>
                        <?php }}?>
                        <td><?php echo number_format($article['prix'], 2); ?> TND</td>
                        <td><?php echo $article['quantite']; ?></td>
                        <td><?php echo number_format($article['prix'] * $article['quantite'], 2); ?> </td>
                        <td>
                        <form action="http://localhost/TheTunisiaHandVMVC/Controllers/PanierController.php" method="post">
                                <input type="hidden" name="action" value="supprimer">
                                <input type="hidden" name="nom" value="<?php echo $article['idProd']; ?>">
                                <button type="submit">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="4">Montant total :</td>
                    <td><?php echo number_format($total, 2); ?> €</td>
                    <td>
                        <form action="http://localhost/TheTunisiaHandVMVC/Controllers/PanierController.php" method="post">
                            <input type="hidden" name="action" value="vider">
                            <button type="submit">Vider le panier</button>
                        </form>
                    </td>
                </tr>
            </tbody>
            <?php// endif; ?>
        </table>
</body>
</html>