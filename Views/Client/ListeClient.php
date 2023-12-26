<!DOCTYPE html>
<html>
  <head>
    <title>The Tunisia Hand |Clients |TRADITIONAL |MODERN |TUNISIE</title>
    <link rel="stylesheet" href="http://localhost/TheTunisiaHandVMVC/Views/CSS/Formulaire.css">
  </head>
  <body>
  <div class="container">
  <div class="label-container">
        <label id="categorie">Client </label>
    </div>
    <br>    <br>
<table>
    <tr>
        <th> CIN </th>
        <th> Nom </th>
        <th> Prenom </th>
        <th> Adresse </th>
        <th> Mot de passe </th>
        <th> Modifier </th>
        <th> Supprimer </th>
        

    </tr>
    <?php
    require_once __DIR__ .'\../../Models/Client/Client.php';
        foreach($clients as $c){?>
    <tr>
        <td><?=$c->getAtt("cin")?></td>
        <td><?=$c->getAtt("nom")?></td>
        <td><?=$c->getAtt("prenom")?></td>
        <td><?=$c->getAtt("adr")?></td>
        <td><?=$c->getAtt("motdepasse")?></td>
        <td><a href="http://localhost/TheTunisiaHandVMVC/Controllers/Client/TestControleur.php?page=form&action=update&cin=<?=$c->getAtt('cin')?>&nom=<?=$c->getAtt("nom")?>&prenom=<?=$c->getAtt("prenom")?>&adr=<?=$c->getAtt("adr")?>&motdepasse=<?=$c->getAtt("motdepasse")?>">Modifier</a></td>
        <td><a href="http://localhost/TheTunisiaHandVMVC/Controllers/Client/TestControleur.php?action=delete&cin=<?= $c->getAtt('cin')?> ">Supprimer</a></td>
        

    </tr>  
    <?php }?>
</table>  
<br>    <br>
<a href="http://localhost/TheTunisiaHandVMVC/Controllers/Client/TestControleur.php?page=form">Ajouter un nouveau client </a>
<a href="http://localhost/TheTunisiaHandVMVC/">Accueil </a>
</div>
</body>
</html>