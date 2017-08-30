<?php
include 'header.php';

if (isset($_SESSION['Auth']['role']) && ($_SESSION['Auth']['role'] == 2) || ($_SESSION['Auth']['role'] == 4)) {
    $role = $_SESSION['Auth']['role'];
    $id = $_SESSION['id'];
} else {
    header('Location:index.php');
}
?>
<!DOCTYPE html>
<head>
    <?php
    try {
        //Connexion à la Base De Données
       // $id = $_GET['id'];
        $id = $_SESSION['id'];
        $bdd = new PDO('mysql:host=localhost;dbname=emotion', 'root', '');
        $donnees = $bdd->query("SELECT * FROM user WHERE id_user = '$id'");
        $ligne = $donnees->fetch();
        //Récupération des informations de la Base De Données
        $pass = $ligne['pass'];
        $mail = $ligne['mail'];
        $nom = $ligne['nom'];
        $prenom = $ligne['prenom'];
        $adresse = $ligne['adresse'];
        $code_postal = $ligne['code_postal'];
        $ville = $ligne['ville'];
        $telephone = $ligne['telephone'];
        $numero_permis = $ligne['numero_permis'];
        $point_fidelite = $ligne['point_fidelite'];

    } catch (Exception $e) {
        echo 'Echec de la connexion à la base de données';
        exit();
    }
    ?>
    <meta charset="utf-8">
    <title>Modification de votre profil</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Modifier votre profil</strong>
                    </h2>
                    <hr>
                    <p>Vous bénéficiez actuellement de : <?php echo $point_fidelite;?> points de fidelités.</p>
                    <p>Réductions de locations : </p>
                        <ul>
                            <li>À partir de 100€ de locations vous bénéficiez de 10% de réducation de votre prochaine réservation;</li>
                            <li>À partir de 200€ de locations vous bénéficiez de 20% de réducation de votre prochaine réservation;</li>
                            <li>À partir de 300€ de locations vous bénéficiez de 30% de réducation de votre prochaine réservation.</li>
                        </ul>
                    <br>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form action="recup_modif_profil.php" method="POST">
                            <input name="id_user" type="hidden" value="<?php echo $_GET['id']; ?>">  
                            <fieldset>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="pass">Mot de passe *</label>
                                    <div class="col-md-5">
                                        <input id="pass" name="pass" type="password" placeholder="Votre mot de passe." class="form-control input-md" value="<?php echo $pass; ?>" required="">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="mail">Mail *</label>
                                    <div class="col-md-5">
                                        <input id="mail" name="mail" type="text" placeholder="Votre mail." class="form-control input-md" value="<?php echo $mail; ?>" required="">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="nom">Nom *</label>
                                    <div class="col-md-5">
                                        <input id="nom" name="nom" type="text" placeholder="Votre nom." class="form-control input-md" value="<?php echo $nom; ?>" required="">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="prenom">Prénom *</label>
                                    <div class="col-md-5">
                                        <input id="prenom" name="prenom" type="text" placeholder="Votre prénom." class="form-control input-md" value="<?php echo $prenom; ?>" required="">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="adresse">Adresse *</label>
                                    <div class="col-md-5">
                                        <input id="adresse" name="adresse" type="text" placeholder="Votre adresse." class="form-control input-md" value="<?php echo $adresse; ?>" required="">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="code_postal">Code Postal *</label>
                                    <div class="col-md-5">
                                        <input id="code_postal" name="code_postal" type="number" placeholder="Votre code postal." class="form-control input-md" value="<?php echo $code_postal; ?>" min="00001" required="">
                                    </div>
                                </div>
                                <br/>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="ville">Ville *</label>
                                    <div class="col-md-5">
                                        <input id="ville" name="ville" type="text" placeholder="Votre ville." class="form-control input-md" value="<?php echo $ville; ?>" required="">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="telephone">Téléphone *</label>
                                    <div class="col-md-5">
                                        <input id="telephone" name="telephone" type="text" placeholder="Votre téléphone." class="form-control input-md" min="1990" max="2018" value="<?php echo $telephone; ?>"  required="">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="numero_permis">Numéro permis *</label>
                                    <div class="col-md-5">
                                        <input id="numero_permis" name="numero_permis" type="text" placeholder="Votre numéro de permis." class="form-control input-md" value="<?php echo $numero_permis; ?>"  required="">
                                    </div>
                                </div>
                                <br/>
                                </div><br>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="but"></label>
                                    <div class="col-md-8">
                                        <button id="buton" name="bouton" class="btn btn-success" value="Submit">Valider</button>
                                        <span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span>
                                        <button type="reset" class="btn btn-danger" value="Annuler">Annuler</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
<?php include 'footer.php'; ?>
</body>
</html>

