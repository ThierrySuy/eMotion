
<html>

	<head>
		<title>Inscription</title>


		<link rel="stylesheet" href="emoji.css"> 
        <link rel="stylesheet" href="jquery-ui.min.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="external/jquery/jquery.js"></script>
        <script src="jquery-ui.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        
	</head>

	<center><body>

		<img src="./images/slogan.png">

		<div class="col-md-6 col-sm-offset-3" class="blockquote"></br></br>
  <p>Emotion est une entreprise de location de voiture française. Elle est à la fois une entreprise familiale et internationale. Créée en 1912 par IPSSI Emotion avec seulement sept voitures, aujourd’hui nous vous offrons nos services dans plus de 105 pays à travers le monde.
Emotion s’engage à vous offrir un service premium et une voiture de location qui vous conviennent. Notre personnel hautement qualifié fera tout pour satisfaire vos envies et vos besoins.
Que vous ayez besoin d'une petite voiture, d’une voiture compacte ou d’un break spacieux, notre flotte  vous propose des véhicules neufs, en moyenne six mois d’ancienneté, de grandes marques telles que BMW, Audi, VW et Mercedes-Benz. </p>

<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>

</div>

</br></br></br></br></br>
</br></br></br></br></br>
</br></br></br></br></br>
		
		
	<form class="form-inline" action="recup.php" method="post"></br>
		

</br>

<center><h1 class="display-2">Inscription</h1></center>
	

	<div class="container-fluid col-md-3 col-md-offset-2">

		<input placeholder="Nom" type="text" class="form-control" name="nom" value="<?php if (isset($_POST['nom'])) echo htmlentities(trim($_POST['nom'])); ?>" required="">

		</br></br>
		
		<input placeholder="Adresse Postale" type="text" class="form-control" name="adresse" value="<?php if (isset($_POST['adresse'])) echo htmlentities(trim($_POST['adresse'])); ?>" required="">

		</br></br>


		<input placeholder="Code Postal" type="text" class="form-control" name="code_postal" value="<?php if (isset($_POST['code_postal'])) echo htmlentities(trim($_POST['code_postal'])); ?>" required="">
		
		
		</div>

	<div class="container-fluid col-md-6 col-md-offset-1">

		<input placeholder="Prenom" type="text" class="form-control" name="prenom" value="<?php if (isset($_POST['prenom'])) echo htmlentities(trim($_POST['prenom'])); ?>" required="">
		
		</br></br>

		<input placeholder="Telephone" type="text" class="form-control" name="telephone" value="<?php if (isset($_POST['telephone'])) echo htmlentities(trim($_POST['telephone'])); ?>" required="">

		</br></br>

		<input placeholder="Ville" type="text" class="form-control" name="ville" value="<?php if (isset($_POST['ville'])) echo htmlentities(trim($_POST['ville'])); ?>" required="">

		</div>

		<div class="col-md-12"></div>
	

	<div class="container-fluid col-md-3 col-md-offset-2"></br>

		<input placeholder="N° Permis" type="text" class="form-control" name="numero_permis" value="<?php if (isset($_POST['numero_permis'])) echo htmlentities(trim($_POST['numero_permis'])); ?>" required=""></br>
		
		</br>

		
		<input  placeholder="E-mail" type="text" class="form-control" name="mail" value="<?php if (isset($_POST['mail'])) echo htmlentities(trim($_POST['mail'])); ?>" required="">

		</div>

	<div class="container-fluid col-md-6 col-md-offset-1"></br>
 
		<input  placeholder="Mot de Passe" type="password" class="form-control" name="pass" value="<?php if (isset($_POST['pass'])) echo htmlentities(trim($_POST['pass'])); ?>" required="">
		
		</br></br>
 
		<input placeholder="Confirmation du mot de passe" type="password" class="form-control" name="pass_confirm" value="<?php if (isset($_POST['pass_confirm'])) echo htmlentities(trim($_POST['pass_confirm'])); ?>" required="">

</br></br></br></br></br>

		</div>

		</br>


		<!--<input class="container-fluid col-md-3 col-md-offset-4" type="submit" name="inscription" value="S'inscrire">-->
		<button name="inscription" type="submit" class="btn btn-success">Sinscrire</button></center>



		</form>
	

<?php

if (isset($erreur)) echo '<br />',$erreur;

?>



</body>

</html>