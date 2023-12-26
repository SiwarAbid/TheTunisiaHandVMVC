<!DOCTYPE html>
<html>
  <head>
    <title>The Tunisia Hand |Connexion |TRADITIONAL |MODERN |TUNISIE</title>
    <link rel="stylesheet" href="http://localhost/TheTunisiaHandVMVC/Views/CSS/Formulaire.css">

  <div class="container">
  <div class="label-container">

      <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;❤
      <label id="categorie">The Tunisia Hand</label></label>

    <br>    <br>  <br>    <br>
        <label id="categorie">Connexion </label>
    </div>
    
</head>
<body>
	<div class="container">
		
		<form action="../Controllers/ControllerConnexion.php?action=Seconnecter" method="post">
    <label for="nom">CIN :</label>
			<input type="number" id="nom" name="cin" required>

			<label for="nom">Nom d'utilisateur:</label>
			<input type="text" id="nom" name="nom" required>

			<label for="password">Mot de passe:</label>
			<input type="password" id="password" name="password" required>

			<input type="submit" value="Se connecter">
		</form>
	</div>
  <a href="http://localhost/TheTunisiaHandVMVC/">Accueil</a>
  <a href="http://localhost/TheTunisiaHandVMVC/Controllers/ControllerConnexion.php?page=inscrire">Créer un compte !</a>
</body>

</html>
