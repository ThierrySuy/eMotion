<?php
	session_start();
	$_SESSION['connect']=0;

			if(isset($_POST["bouton"]))
			{
				$mail = $_POST["mail"];
				$mdp = $_POST["mdp"];
				$_SESSION['mail'] = $mail;
			    try
                {
                	    $_SESSION['mail'] = $_POST['mail'] ;
                        $bdd = new PDO('mysql:host=localhost;dbname=emotion', 'root', '');
                        $reponse = $bdd->query("SELECT mdp FROM client WHERE mail='$mail'");
                        $donnee=$reponse->fetch();
                        if($mdp!=$donnee['mdp'])
						{
							$_SESSION['connect']=0;
							$erreur="Erreur, le mot de passe ou l'email est incorrect, merci de réessayer.";
						}
						else
						{
							$_SESSION['connect']=1;
							header(("location:index.php"));

						}
                }
                catch(Exception $e)
                {
                    echo 'Echec de la connexion à la base de données';
                    exit();
                }


			}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Connexion</title>
</head>
<body>
    <div class="brand">Connexion</div>
		<div class="address-bar">eMotion</div>
		<!-- container -->
    <div class="container">
        <div class="row">
            <div class="box">
              <div class="col-lg-12">
                  <form class="form-horizontal" action="test.php" method="POST">
                  <fieldset>
                    <!-- Text input-->
                    <div class="form-group">
                    <?php if(isset($erreur)) echo "<center><h4 style='color:red'>$erreur</h4></center>"; ?>
                      <label class="col-md-4 control-label" for="mdp">Identifiant</label>
                      <div class="col-md-5">
                        <input type="email" name="mail" value="<?php if (isset($_POST['mail'])) echo htmlentities(trim($_POST['mail'])); ?>">
                        <span class="help-block">Veuillez entrer votre adresse mail</span>
                      </div>
                    </div>
                    <!-- Password input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="mdp">Mot de passe</label>
                      <div class="col-md-5">
                        <input type="password" name="mdp" value="<?php if (isset($_POST['mdp'])) echo htmlentities(trim($_POST['mdp'])); ?>">
                        <span class="help-block">Veuillez entrer votre mot de passe</span>
                      </div>
                    </div>
                    <!-- Buton -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="bouton"></label>
                      <div class="col-md-8">
                        <button type="submit" value="Valider" name="bouton" class="btn btn-success">Valider</button>
											</div>
                    </div>
                  </fieldset>
                </form>
              </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
		<!-- footer
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; eMotion - 2017</p>
                </div>
            </div>
        </div>
    </footer> /.footer -->
</body>
</html>
