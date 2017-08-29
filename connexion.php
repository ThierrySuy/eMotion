<?php include 'header.php'; ?>
<!doctype html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>eMotion</title>
        <meta content="width=device-width, initial-scale=1" name="viewport">
    </head>
    <body>
        <div class="header">
            <div class="form-container">
                <div class="box">
                    <p class="headline">Inscrivez-vous gratuitement</p>
                    <p class="description">En tant que client eMotion enregistré, vous pouvez bénéficier d'avantages tels que :</p>
                    <p class="advantages">Réservez des véhicules disponibles</p>
                    <p class="advantages">Des offres promotionnelles</p>
                    <p class="advantages">Générez des points de fidélités</p>
                    <a class="button" href="inscription.php">Inscription</a>
                </div>
                <div class="box">
                    <p class="headline">Connectez-vous</p>
                    <form action="validate.php" method="post">
                        <input type="hidden" name="louer" value="<?php if (isset($_GET['id'])) {echo $_GET['id'];} ?>">
                        <input type="hidden" name="num" value="<?php if (isset($_GET['num'])) {echo $_GET['num'];} ?>">
                        <div class="inside-form">
                            <div>
                                <label class="mail">Votre identifiant</label>
                                <input class="form-control" name="mail" id="mail" type="email" placeholder="Veuillez rentrer votre mail comme identifiant." required autofocus>
                                <label class="pass">Votre mot de passe</label>
                                <input class="form-control" name="pass" id="pass" type="password" placeholder="Veuillez rentrer votre mot de passe." required>
                                <input type="submit" class="button" value="Connexion">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </body>
    <div class="col-md-12">  
<?php include('/footer.php'); ?>
    </div>
</html>
