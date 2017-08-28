<?php
include 'header.php';

if (isset($_SESSION['Auth']['role']) && ($_SESSION['Auth']['role']==2 || $_SESSION['Auth']['role']==4)) {
    $role = $_SESSION['Auth']['role'];
    $id   = $_SESSION['id'];
    var_dump($_SESSION);
}else{
    header('Location:index.php');
}
    ?>
    <!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Ajout Location</title>
    </head>
    <body>
        <div class="brand">Ajout de Location</div>
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
                                        <label class="col-md-4 control-label" for="nom_loc">Nom de la location *</label>
                                        <div class="col-md-5">
                                            <input id="nom_loc" name="nom_loc" type="text" placeholder="Nom de la location." class="form-control input-md" required="">
                                        </div>
                                    </div>
                                    </br>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="id_client">ID du client de la location *</label>
                                        <div class="col-md-5">
                                            <input id="id_client" name="id_client" type="int" placeholder="ID du client de la location." class="form-control input-md" required="">
                                        </div>
                                    </div>
                                    </br>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="nom_client">Nom du client de la location *</label>
                                        <div class="col-md-5">
                                            <input id="nom_client" name="nom_client" type="text" placeholder="Nom du client de la location." class="form-control input-md" required="">
                                        </div>
                                    </div>
                                    </br>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="id_vehicule">ID du véhicule de la location *</label>
                                        <div class="col-md-5">
                                            <input id="id_vehicule" name="id_vehicule" type="int" placeholder="ID du véhicule de la location." class="form-control input-md" required="">
                                        </div>
                                    </div>
                                    </br>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="numeroserie">Numéro de série du véhicule de la location *</label>
                                        <div class="col-md-5">
                                            <input id="numeroserie" name="numeroserie" type="text" placeholder="Numéro de série du véhicule de la location." class="form-control input-md" required="">
                                        </div>
                                    </div>
                                    </br>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="plaque">Plaque d'immatriculation du véhicule de la location *</label>
                                        <div class="col-md-5">
                                            <input id="plaque" name="plaque" type="text" placeholder="Plaque d'immatriculation du véhicule de la location." class="form-control input-md" required="">
                                        </div>
                                    </div>
                                    </br>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="adresse_client">Adresse du client de la location *</label>
                                        <div class="col-md-5">
                                            <input id="adresse_client" name="adresse_client" type="text" placeholder="Adresse du client de la location." class="form-control input-md" required="">
                                        </div>
                                    </div>
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
        <?php include 'footer.php'; ?>
    </body>
    </html>