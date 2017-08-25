<?php
session_start();
if (isset($_SESSION['connect'])) {//On vérifie que le variable existe.
    $connect = $_SESSION['connect']; //On récupère la valeur de la variable de session.
} else {
    $connect = 0; //Si $_SESSION['connect'] n'existe pas, on donne la valeur "0".
}
if ($connect == "1") { // Si le visiteur s'est identifié.
// On affiche la page cachée.
    ?>
    <!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Ajout Véhicule de Location</title>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <div class="brand">Ajout Véhicule de Location</div>
        <div class="container">
            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center">
                            <strong>Ajouter un ou plusieurs véhicules de locations</strong>
                        </h2>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="recup_ajout.php" method="POST">
                                <fieldset>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="marque">Marque du véhicule *</label>
                                        <div class="col-md-5">
                                            <input id="marque" name="marque" type="text" placeholder="Marque du véhicule." class="form-control input-md" required="">
                                        </div>
                                    </div>
                                    </br>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="modele">Modèle du véhicule *</label>
                                        <div class="col-md-5">
                                            <input id="modele" name="modele" type="text" placeholder="Modèle du véhicule." class="form-control input-md" required="">
                                        </div>
                                    </div>
                                    </br>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="numeroserie">Numéro de série du véhicule *</label>
                                        <div class="col-md-5">
                                            <input id="numeroserie" name="numeroserie" type="text" placeholder="Numéro de série du véhicule." class="form-control input-md" required="">
                                        </div>
                                    </div>
                                    </br>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="couleur">Couleur du véhicule *</label>
                                        <div class="col-md-5">
                                            <input id="couleur" name="couleur" type="text" placeholder="Couleur du véhicule." class="form-control input-md" required="">
                                        </div>
                                    </div>
                                    </br>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="plaque">Plaque du véhicule *</label>
                                        <div class="col-md-5">
                                            <input id="plaque" name="plaque" type="text" placeholder="Plaque du véhicule." class="form-control input-md" required="">
                                        </div>
                                    </div>
                                    </br>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="nombre_km">Nombre de kilomètre du véhicule *</label>
                                        <div class="col-md-5">
                                            <input id="nombre_km" name="nombre_km" type="int" placeholder="Nombre de kilomètre du véhicule." class="form-control input-md" required="">
                                        </div>
                                    </div>
                                    </br>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="date_achat">Date d'achat du véhicule *</label>
                                        <div class="col-md-5">
                                            <input id="date_achat" name="date_achat" type="date" placeholder="" class="form-control input-md" required="">
                                            <span class="help-block">Veuillez entrer une date valide.</span>
                                        </div>
                                    </div>
                                    </br>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="prix_achat">Prix d'achat du véhicule *</label>
                                        <div class="col-md-5">
                                            <input id="nombre_km" name="prix_achat" type="float" placeholder="Prix d'achat du véhicule." class="form-control input-md" required="">
                                        </div>
                                    </div>
                                    </br>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="nombre_passager">Nombre de passager du véhicule *</label>
                                        <div class="col-md-5">
                                            <input id="nombre_passager" name="nombre_passager" type="int" placeholder="Nombre de passager du véhicule." class="form-control input-md" required="">
                                        </div>
                                    </div>
                                    </br>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="autonomie">Autonomie du véhicule *</label>
                                        <div class="col-md-5">
                                            <input id="autonomie" name="autonomie" type="flaot" placeholder="Autonomie du véhicule." class="form-control input-md" required="">
                                        </div>
                                    </div>
                                    </br>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="ville">Ville de disponibilité du véhicule *</label>
                                        <div class="col-md-5">
                                            <input id="ville" name="ville" type="varchar" placeholder="Ville du véhicule." class="form-control input-md" required="">
                                        </div>
                                    </div>
                                        </br>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="type_vehicule">Type de véhicule *</label>
                                            <div class="col-md-5">
                                                <input id="type_vehicule" name="type_vehicule" type="varchar" placeholder="Type de véhicule." class="form-control input-md" required="">
                                            </div>
                                        </div>
                                            </br>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="img">Image de véhicule *</label>
                                                <div class="col-md-5">
                                                    <input id="img" name="img" type="varchar" placeholder="Nom de l'image de véhicule." class="form-control input-md" required="">
                                                </div> 
                                            </div>
                                                </br>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" for="description">Description du véhicule *</label>
                                                    <div class="col-md-5">
                                                        <input id="description" name="description" type="varchar" placeholder="Description du véhicule." class="form-control input-md" required="">
                                                    </div>
                                                </div>
                                                </br>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" for="disponibilite">Disponibilité du véhicule *</label>
                                                    <div class="col-md-5">
                                                        <input id="disponibilite" name="disponibilite" type="tinyint" placeholder="Disponibilité du véhicule." class="form-control input-md" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" for="but"></label>
                                                    <div class="col-md-8">
                                                        <button id="buton" name="bouton" class="btn btn-success" value="Submit">Valider</button>
                                                        <span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span>
                                                        <button type="reset" class="btn btn-danger" value="Annuler">Annuler</button>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" for="buton"></label>
                                                    <div class="col-md-8">
                                                        <a href="control_vehicule.php"><img src="images/retour.png" alt=""></a>
                                                    </div>
                                                </div>
                                                </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                    <?php include 'footer.php'; ?>
                                    </body>
                                    </html>
                                    <?php
                                } else {
                                    header('Location: index.php');
                                    exit();
                                }
                                ?>
