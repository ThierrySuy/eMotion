<?php
include 'header.php';

if (isset($_SESSION['Auth']['role']) && ($_SESSION['Auth']['role'] == 2) || ($_SESSION['Auth']['role'] == 4)) {
    $role = $_SESSION['Auth']['role'];
    $id = $_SESSION['id'];
    //var_dump($_SESSION);
} else {
    header('Location:index.php');
}
?>
<!DOCTYPE html>
<head>
    <?php
    try {
        //Connexion à la Base De Données
        $id = $_GET['id'];
        $bdd = new PDO('mysql:host=localhost;dbname=emotion', 'root', '');
        $donnees = $bdd->query("SELECT * FROM location WHERE id_location = '$id'");
        $ligne = $donnees->fetch();
        //Récupération des informations de la Base De Données
        $id_location = $ligne['id_location'];
        $id_user = $ligne['id_user'];
        $numero_serie = $ligne['numero_serie'];
        $date_debut = $ligne['date_debut'];
        $date_fin = $ligne['date_fin'];
        $etat_location = $ligne['etat_location'];
        $duree_jour = $ligne['duree_jour'];
    } catch (Exception $e) {
        echo 'Echec de la connexion à la base de données';
        exit();
    }
    ?>
    <meta charset="utf-8">
    <title>Modification Location</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Modifier location</strong>
                    </h2>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form action="recup_modif_loc.php" method="POST">
                            <input name="id_location" type="hidden" value="<?php echo $_GET['id']; ?>">  
                            <fieldset>
                                <!-- Text input-->
<!--                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="id_location">ID de la location *</label>
                                    <div class="col-md-5">
                                        <input id="id_location" name="id_location" type="int" placeholder="ID client de la location." class="form-control input-md" value="<?php echo $id_location; ?>" required="">
                                    </div>
                                </div>-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="id_user">ID client de la location *</label>
                                    <div class="col-md-5">
                                        <input id="id_user" name="id_user" type="int" placeholder="ID client de la location." class="form-control input-md" value="<?php echo $id_user; ?>" required="">
                                    </div>
                                </div>
                                </br>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="numero_serie">Numéro de série du véhicule de la location *</label>
                                    <div class="col-md-5">
                                        <input id="numero_serie" name="numero_serie" type="varchar" placeholder="Numéro de série du véhicule de la location." class="form-control input-md" value="<?php echo $numero_serie; ?>" required="">
                                    </div>
                                </div>
                                </br>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="date_debut">Date début de la location *</label>
                                    <div class="col-md-5">
                                        <input id="date_debut" name="date_debut" type="date" placeholder="Date début de la location." class="form-control input-md" value="<?php echo $date_debut; ?>" required="">
                                    </div>
                                </div>
                                </br>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="date_fin">Date fin de la location *</label>
                                    <div class="col-md-5">
                                        <input id="date_fin" name="date_fin" type="date" placeholder="Date fin de la location." class="form-control input-md" value="<?php echo $date_fin; ?>" required="">
                                    </div>
                                </div>
                                </br>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="etat_location">État de la location *</label>
                                    <div class="col-md-5">
                                        <input id="etat_location" name="etat_location" type="int" placeholder="Obligatoirement à 1 car location en cours." class="form-control input-md" value="<?php echo $etat_location; ?>" required="">
                                    </div>
                                </div>
                                </br>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="duree_jour">Durée jour de la location *</label>
                                    <div class="col-md-5">
                                        <input id="duree_jour" name="duree_jour" type="int" placeholder="Durée jour de la location." class="form-control input-md" value="<?php echo $duree_jour; ?>" required="">
                                    </div>
                                </div>
                                </br>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="buton"></label>
                                    <div class="col-md-8">
                                        <button id="buton" name="bouton" class="btn btn-success" value="Submit">Valider</button>
                                        <span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span>
                                        <button id="buton2" name="bouton2" class="btn btn-danger" value="Annuler">Annuler</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="buton"></label>
                                    <div class="col-md-8">
                                        <a href="control_loc.php"><img src="images/retour.png" alt=""></a>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
<?php
include ('footer.php');
?>
</body>
</html>