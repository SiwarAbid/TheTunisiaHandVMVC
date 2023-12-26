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
<table >
    <tr>
        <th> ID </th>
        <th> Nom </th>
        <th> Modifier </th>
        <th> Supprimer </th>
        

    </tr>
    <?php
    require_once __DIR__ .'\..\..\Models\Categorie\Categorie.php';
        foreach($categories as $c){?>
    <tr>
        <td><?=$c->getAtt("idCateg")?></td>
        <td><?=$c->getAtt("nom")?></td>
        <td><a href="http://localhost/TheTunisiaHandVMVC/Controllers/Categorie/TestControleur.php?page=form&action=update&idCateg=<?=$c->getAtt('idCateg')?>&nom=<?=$c->getAtt("nom")?>">Modifier</a></td>
        <td><a href="http://localhost/TheTunisiaHandVMVC/Controllers/Categorie/TestControleur.php?action=delete&idCateg=<?= $c->getAtt('idCateg')?> ">Supprimer</a></td>
        <!-- Aller directement au fonction delete quand on clique sur Supprimer -->
        
    </tr>  
    <?php }?>
</table> 
<br>    <br>
<a href="http://localhost/TheTunisiaHandVMVC/Controllers/Categorie/TestControleur.php?page=form">Ajouter une nouveulle catégorie </a>
<a href="http://localhost/TheTunisiaHandVMVC/">Accueil </a>

</div>
</body>
</html>