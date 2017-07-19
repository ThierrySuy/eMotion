<html>
	<head>
		<title>Inscription</title>
	</head>

	<body>
		Inscription sur la plateforme: <br />
		<form action="recup.php" method="post">

		Nom : <input type="text" name="nom" value="<?php if (isset($_POST['nom'])) echo htmlentities(trim($_POST['nom'])); ?>" required="">
		<br />

		Prenom : <input type="text" name="prenom" value="<?php if (isset($_POST['prenom'])) echo htmlentities(trim($_POST['prenom'])); ?>" required=""><br />

		Date de Naissance : <input type="Date" name="date_naissance" value="<?php if (isset($_POST['date_naissance'])) echo htmlentities(trim($_POST['date_naissance'])); ?>" required=""><br />

		Adresse Postale : <input type="text" name="adresse" value="<?php if (isset($_POST['adresse'])) echo htmlentities(trim($_POST['adresse'])); ?>" required=""><br />

		Téléphone : <input type="number" name="telephone" value="<?php if (isset($_POST['telephone'])) echo htmlentities(trim($_POST['telephone'])); ?>" required=""><br />

		Numero de permis : <input type="text" name="numero_permis" value="<?php if (isset($_POST['numero_permis'])) echo htmlentities(trim($_POST['numero_permis'])); ?>" required=""><br />

		E-Mail : <input  type="text" name="mail" value="<?php if (isset($_POST['mail'])) echo htmlentities(trim($_POST['mail'])); ?>" required=""><br />

		Mot de passe : <input  type="password" name="mdp" value="<?php if (isset($_POST['mdp'])) echo htmlentities(trim($_POST['mdp'])); ?>" required=""><br />

		Confirmation du mot de passe : <input type="password" name="pass_confirm" value="<?php if (isset($_POST['pass_confirm'])) echo htmlentities(trim($_POST['pass_confirm'])); ?>" required=""><br />

		<input type="submit" name="inscription" value="Inscription">
		</form>

<?php

if (isset($erreur)) echo '<br />',$erreur;

?>

</body>
</html>