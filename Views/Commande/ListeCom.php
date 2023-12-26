<!DOCTYPE html>
<html>
  <head>
    <title>The Tunisia Hand |Commandes |TRADITIONAL |MODERN |TUNISIE</title>
    <link rel="stylesheet" href="http://localhost/TheTunisiaHandVMVC/Views/CSS/Formulaire.css">
  </head>
  <body>
  <div class="container">
  <div class="label-container">
        <label id="categorie">Commande </label>
    </div>
    <br>    <br>
    <table>
    <tr>
        <th> ID </th>
        <th> Prix Total </th>
        <th> Quantité </th>
        <th> Modifier </th>
        <th> Supprimer </th>
        

    </tr>
    <?php
    require_once __DIR__ .'\../../Models/Commande/Commande.php';
        foreach($commandes as $c){?>
    <tr>
        <td><?=$c->getAtt("idCom")?></td>
        <td><?=$c->getAtt("prixT")?></td>
        <td><?=$c->getAtt("qte")?></td>
        <td><a href="http://localhost/TheTunisiaHandVMVC/Controllers/Commande/TestControleur.php?page=form&action=update&idCom=<?=$c->getAtt('idCom')?>&prixT=<?=$c->getAtt("prixT")?>&qte=<?=$c->getAtt("qte")?>">Modifier</a></td>
        <td><a href="http://localhost/TheTunisiaHandVMVC/Controllers/Commande/TestControleur.php?action=delete&idCom=<?= $c->getAtt('idCom')?> ">Supprimer</a></td>

    </tr>  
    <?php }?>
    </table>
    <br>    <br>
    <a href="http://localhost/TheTunisiaHandVMVC/Controllers/Commande/TestControleur.php?page=form">Ajouter une nouveulle commande </a>
    <a href="http://localhost/TheTunisiaHandVMVC/">Accueil </a>
    
</div>
    </body>
</html> 