<?php include 'header.php'; ?>
<!doctype html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>eMotion</title>
        <meta content="width=device-width, initial-scale=1" name="viewport">
    </head>
    <body>
            <div class="form-group">
                <center>
                    <h1>Inscrivez-vous</h1>
                    <p>En tant que client eMotion enregistré, vous pouvez bénéficier d'avantages tels que :</p>
                    <p>Réservez des véhicules disponibles</p>
                    <p>Des offres promotionnelles</p>
                    <p>Générez des points de fidélités</p>
                    <a class="button" href="inscription.php">Inscription</a>
                </center>
                <div class="box">
                    <center><h1>Connectez-vous</h1></center>
                    <form action="validate.php" method="post">
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="mail">Votre identifiant *</label>
                            <div class="col-md-5">
                                <input id="mail" name="mail" type="email" placeholder="Veuillez rentrer votre mail comme identifiant." class="form-control input-md" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="pass">Votre mot de passe *</label>
                            <div class="col-md-5">
                                <input id="pass" name="pass" type="password" placeholder="Veuillez rentrer votre mot de passe." class="form-control input-md" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="but"></label>
                            <div class="col-md-8">
                                <button id="buton" name="bouton" class="btn btn-success" value="Submit">Connexion</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </body>
    <div class="col-md-12">  
        <?php include('/footer.php'); ?>
    </div>
</html>
