<?php include('/header.php'); ?>

<html>

	<head>
		<title>Inscription</title>
	</head>



	<body>
		Inscription sur la plateforme:
		
		
	<form class="form-inline" action="recup.php" method="post"></br>

		<!-- <div class="container"> -->

		<!--<div class="container-fluid col-md-offset-4"> -->

		<!-- <div class="container-fluid col-md-5"> -->
		


	

	<div class="container-fluid col-md-3 col-md-offset-2 text-right">

		<input placeholder="Nom" type="text" class="form-control" name="nom" value="<?php if (isset($_POST['nom'])) echo htmlentities(trim($_POST['nom'])); ?>" required="">

		</br></br>
		
		<input placeholder="Adresse Postale" type="text" class="form-control" name="adresse" value="<?php if (isset($_POST['adresse'])) echo htmlentities(trim($_POST['adresse'])); ?>" required="">

		</br></br>


		<input placeholder="Code Postal" type="text" class="form-control" name="code_postal" value="<?php if (isset($_POST['code_postal'])) echo htmlentities(trim($_POST['code_postal'])); ?>" required="">
		
		
		</div>

	<div class="container-fluid col-md-6 col-md-offset-1">

		<input placeholder="Prenom" type="text" class="form-control" name="prenom" value="<?php if (isset($_POST['prenom'])) echo htmlentities(trim($_POST['prenom'])); ?>" required="">
		
		</br></br>

		<input placeholder="Telephone" type="number" class="form-control" name="telephone" value="<?php if (isset($_POST['telephone'])) echo htmlentities(trim($_POST['telephone'])); ?>" required="">

		</br></br>

		<input placeholder="Ville" type="text" class="form-control" name="ville" value="<?php if (isset($_POST['ville'])) echo htmlentities(trim($_POST['ville'])); ?>" required="">

		</div>

		<div class="col-md-12"></div>
	

	<div class="container-fluid col-md-3 col-md-offset-2 text-right"></br>

		<input placeholder="N° Permis" type="text" class="form-control" name="numero_permis" value="<?php if (isset($_POST['numero_permis'])) echo htmlentities(trim($_POST['numero_permis'])); ?>" required=""></br>
		
		</br>

		
		<input  placeholder="E-mail" type="text" class="form-control" name="mail" value="<?php if (isset($_POST['mail'])) echo htmlentities(trim($_POST['mail'])); ?>" required="">

		</div>

	<div class="container-fluid col-md-6 col-md-offset-1"></br>
 
		<input  placeholder="Mot de Passe" type="password" class="form-control" name="pass" value="<?php if (isset($_POST['pass'])) echo htmlentities(trim($_POST['pass'])); ?>" required="">
		
		</br></br>
 
		<input placeholder="Confirmation du mot de passe" type="password" class="form-control" name="pass_confirm" value="<?php if (isset($_POST['pass_confirm'])) echo htmlentities(trim($_POST['pass_confirm'])); ?>" required="">

		
		</div>

		</br>


		<input class="container-fluid col-md-3 col-md-offset-4" type="submit" name="inscription" value="S'inscrire">

		</form>


	

<?php

if (isset($erreur)) echo '<br />',$erreur;

?>



</body>

</html>