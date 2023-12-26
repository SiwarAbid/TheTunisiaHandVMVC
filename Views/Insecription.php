<!DOCTYPE html>
<html>
  <head>
    <title>The Tunisia Hand |Inscription |TRADITIONAL |MODERN |TUNISIE</title>
    <link rel="stylesheet" href="http://localhost/TheTunisiaHandVMVC/Views/CSS/Formulaire.css">
    <div class="container">
  <div class="label-container">

      <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;❤
      <label id="categorie">The Tunisia Hand</label></label>

    <br>    <br>  <br>    <br>
        <label id="categorie">Inscription </label>
    </div>  
    </head>
    <body>
	<div class="container">
	<form method="post" action="../Controllers/ControllerConnexion.php?action=Sinsecrir">
        <label for="nom">CIN :</label>
		<input type="number" id="nom" name="password" required>

		<label for="name">Nom :</label>
		<input type="text" id="name" name="name" required>

        <label for="name">Prénom :</label>
		<input type="text" id="name" name="prenom" required>
        
		<label for="email">Adresse e-mail :</label>
		<input type="email" id="email" name="adr" required>
        
		<label for="password">Mot de passe :</label>
		<input type="password" id="password" name="password" required>
        
		<input type="submit" value="S'inscrire">
	</form>
    </div>
    <a href="http://localhost/TheTunisiaHandVMVC/">Accueil</a>
    <a href="ttp://localhost/TheTunisiaHandVMVC/Controllers/ControllerConnexion.php">Se connecter</a>
    </body>
</html>
