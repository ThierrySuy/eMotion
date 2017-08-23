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
		


	

	<div class="container-fluid col-md-3 col-md-offset-2" >

		<label for="nom">Nom :</label> 
		<input type="text" class="form-control" name="nom" value="<?php if (isset($_POST['nom'])) echo htmlentities(trim($_POST['nom'])); ?>" required="">

		</br></br>
		
		<label for="date_naissance">Naissance :</label> 
		<input type="Date" class="form-control" name="date_naissance" value="<?php if (isset($_POST['date_naissance'])) echo htmlentities(trim($_POST['date_naissance'])); ?>" required="">
		
		</div>

	<div class="container-fluid col-md-6 col-md-offset-1" >

		<label for="prenom">Prénom :</label> 
		<input type="text" class="form-control" name="nom" value="<?php if (isset($_POST['prenom'])) echo htmlentities(trim($_POST['prenom'])); ?>" required="">
		
		</br></br>

		<label for="number">Téléphone :</label> 
		<input type="number" class="form-control" name="telephone" value="<?php if (isset($_POST['telephone'])) echo htmlentities(trim($_POST['telephone'])); ?>" required="">

		</br></div>
		
		<div class="col-md-12"></div>

		<div class="container-fluid col-md-6 col-md-offset-3"></br>

		<label for="adresse">Adresse Postale :</label> 
		<input type="text" class="form-control" name="adresse" value="<?php if (isset($_POST['adresse'])) echo htmlentities(trim($_POST['adresse'])); ?>" required="">
	

		</div></br>

		<div class="col-md-12"></div>
	

	<div class="container-fluid col-md-3 col-md-offset-2"></br>

		<label for="numero_permis">N° Permis :</label> 
		<input type="text" class="form-control" name="numero_permis" value="<?php if (isset($_POST['numero_permis'])) echo htmlentities(trim($_POST['numero_permis'])); ?>" required=""></br>
		
		</br></br>

		
		<label for="mail">E-Mail :</label> 
		<input  type="text" class="form-control" name="mail" value="<?php if (isset($_POST['mail'])) echo htmlentities(trim($_POST['mail'])); ?>" required="">

		</div>

	<div class="container-fluid col-md-6 col-md-offset-1"></br>

		<label for="password">Mot de Passe :</label> 
		<input  type="password" class="form-control" name="mdp" value="<?php if (isset($_POST['mdp'])) echo htmlentities(trim($_POST['mdp'])); ?>" required="">
		
		</br></br></br>

		<label for="pass_confirm">Confirmation du Mot de passe :</label> 
		<input type="password" class="form-control" name="pass_confirm" value="<?php if (isset($_POST['pass_confirm'])) echo htmlentities(trim($_POST['pass_confirm'])); ?>" required="">

		</div>

		</br>


		<input type="submit" name="inscription" value="Inscription">

		</form>


	

<?php

if (isset($erreur)) echo '<br />',$erreur;

?>

</body>
</html>