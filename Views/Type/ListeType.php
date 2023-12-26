<!DOCTYPE html>
<html>
  <head>
    <title>The Tunisia Hand |Types |TRADITIONAL |MODERN |TUNISIE</title>
    <link rel="stylesheet" href="http://localhost/TheTunisiaHandVMVC/Views/CSS/Formulaire.css">
  </head>
  <body>
  <div class="container">
  <div class="label-container">
        <label id="categorie">Type </label>
    </div>
    <br>    <br>
<table>
    <tr>
        <th> ID </th>
        <th> Libellé </th>
        <th> Modifier </th>
        <th> Supprimer </th>
        

    </tr>
    <?php
    require_once __DIR__ .'\../../Models/Type/Type.php';
        foreach($types as $c){?>
    <tr>
        <td><?=$c->getAtt("idtype")?></td>
        <td><?=$c->getAtt("lib")?></td>
        <td><a href="http://localhost/TheTunisiaHandVMVC/Controllers/Type/TestControleur.php?page=form&action=update&idtype=<?=$c->getAtt('idtype')?>&lib=<?=$c->getAtt("lib")?>">Modifier</a></td>
        <td><a href="http://localhost/TheTunisiaHandVMVC/Controllers/Type/TestControleur.php?action=delete&idtype=<?= $c->getAtt('idtype')?> ">Supprimer</a></td>
        

    </tr>  
    <?php }?>
    </table>
    <br>    <br>
    <a href="http://localhost/TheTunisiaHandVMVC/Controllers/Type/TestControleur.php?page=form">Ajouter une nouveulle Type </a>
    <a href="http://localhost/TheTunisiaHandVMVC/">Accueil </a>
    
</div>
    </body>
</html>