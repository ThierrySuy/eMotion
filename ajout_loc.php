<?php
include 'header.php';

if (isset($_SESSION['Auth']['role']) && ($_SESSION['Auth']['role'] == 4)) {
    $role = $_SESSION['Auth']['role'];
    $id = $_SESSION['id'];
    //var_dump($_SESSION);
} else {
    header('Location:index.php');
}
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Ajout Location</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Ajouter une ou plusieurs locations</strong>
                    </h2>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form action="recup_ajout_loc.php" method="POST">
                            <fieldset>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="id_user">ID client de la location *</label>
                                    <div class="col-md-5">
                                        <select name="id_user">
                                            <option value="">Choisir un client</option>
                                            <?php
                                            @mysql_connect("localhost", "root", "");
                                            mysql_select_db("emotion");
                                            $req = "select id_user, nom, prenom from user";
                                            $res = mysql_query($req);
                                            if (!$res)
                                                echo mysql_error();
                                            $ligne = mysql_fetch_assoc($res);
                                            while ($ligne) {
                                                echo '<option value="' . $ligne["id_user"] . '">'
                                                . $ligne["nom"] . ' '. $ligne['prenom'] .'</option>';
                                                $ligne = mysql_fetch_assoc($res);
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
<!--                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="id_user">ID client de la location *</label>
                                    <div class="col-md-5">
                                        <input id="id_user" name="id_user" type="int" placeholder="ID client de la location." class="form-control input-md" required="">
                                    </div>
                                </div>-->
                                <br/>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="numero_serie">Numéro de série du véhicule de la location *</label>
                                    <div class="col-md-5">
                                        <select name="numero_serie">
                                            <option value="">Choisir un véhicule</option>
                                            <?php
                                            @mysql_connect("localhost", "root", "");
                                            mysql_select_db("emotion");
                                            $req = "select distinct * from vehicule";
                                            $res = mysql_query($req);
                                            if (!$res)
                                                echo mysql_error();
                                            $ligne = mysql_fetch_assoc($res);
                                            while ($ligne) {
                                                echo '<option value="' . $ligne["numero_serie"] . '">'
                                                . $ligne["numero_serie"] . ' '. $ligne['marque'] . ' '. $ligne['modele'] . ' '. $ligne['couleur'] . ' '. $ligne['immatriculation'] . '</option>';
                                                $ligne = mysql_fetch_assoc($res);
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <!--                                <div class="form-group">
                                                                    <label class="col-md-4 control-label" for="numero_serie">Numéro de série du véhicule de la location *</label>
                                                                    <div class="col-md-5">
                                                                        <input id="numero_serie" name="numero_serie" type="varchar" placeholder="Numéro de série du véhicule de la location." class="form-control input-md" required="">
                                                                    </div>
                                                                </div>-->
                                </br>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="date_debut">Date début de la location *</label>
                                    <div class="col-md-5">
                                        <input id="date_debut" name="date_debut" type="date" placeholder="Date début de la location." class="form-control input-md" required="">
                                    </div>
                                </div>
                                </br>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="date_fin">Date fin de la location *</label>
                                    <div class="col-md-5">
                                        <input id="date_fin" name="date_fin" type="date" placeholder="Date fin de la location." class="form-control input-md" required="">
                                    </div>
                                </div>
                                </br>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="etat_location">État de la location *</label>
                                    <div class="col-md-5">
                                        <input id="etat_location" name="etat_location" type="int" placeholder="Obligatoirement à 1 car location en cours." class="form-control input-md" required="">
                                    </div>
                                </div>
                                </br>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="duree_jour">Durée jour de la location *</label>
                                    <div class="col-md-5">
                                        <input id="duree_jour" name="duree_jour" type="int" placeholder="Durée jour de la location." class="form-control input-md" required="">
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
</body>
<div class="col-md-12">  
    <?php include('/footer.php'); ?>
</div>
</html>