<!DOCTYPE html>
<html>
  <head>
    <title>The Tunisia Hand |Couleurs |TRADITIONAL |MODERN |TUNISIE</title>
    <link rel="stylesheet" href="http://localhost/TheTunisiaHandVMVC/Views/CSS/Formulaire.css">
  </head>
  <body>
  <div class="container">
  <div class="label-container">
        <label id="categorie">Couleur </label>
    </div>
    <br>    <br>
    <table>
    <tr>
        <th> Réference </th>
        <th> Nom </th>
        <th> Modifier </th>
        <th> Supprimer </th>

    </tr>
    <?php
    require_once __DIR__ .'\../../Models/Couleur/Couleur.php';
        foreach($couleurs as $c){?>
    <tr>
        <td><?=$c->getAtt("ref")?></td>
        <td><?=$c->getAtt("nom")?></td>
        <td><a href="http://localhost/TheTunisiaHandVMVC/Controllers/Couleur/TestControleur.php?page=form&action=update&ref=<?=$c->getAtt('ref')?>&nom=<?=$c->getAtt("nom")?>">Modifier</a></td>
        <td><a href="http://localhost/TheTunisiaHandVMVC/Controllers/Couleur/TestControleur.php?action=delete&ref=<?= $c->getAtt('ref')?> ">Supprimer</a></td>


    </tr>  
    <?php }?>
    </table> 
    <br>    <br>
    <a href="http://localhost/TheTunisiaHandVMVC/Controllers/Couleur/TestControleur.php?page=form">Ajouter une nouveulle couleur </a>
    <a href="http://localhost/TheTunisiaHandVMVC/">Accueil </a>
    
</div>
    </body>
</html> 