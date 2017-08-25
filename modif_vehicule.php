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
        <?php
        try {
            //Connexion à la Base De Données
            //$id_vehicule = $ligne['id_vehicule'];
            //$_SESSION['id_vehicule'] = $id_vehicule;
            //var_dump($_SESSION);
            //$bdd = new PDO('mysql:host=localhost;dbname=emotion', 'root', '');
            //$donnees = $bdd->query("SELECT * FROM vehicule WHERE id_vehicule = '$id_vehicule'");
            //$ligne = $donnees->fetch();

            $id = $_GET['id'];
            $bdd = new PDO('mysql:host=localhost;dbname=emotion', 'root', '');
            $donnees = $bdd->query("SELECT * FROM vehicule WHERE id_vehicule = '$id'");
            $ligne = $donnees->fetch();


            //@mysql_connect("localhost","root","");
            //mysql_select_db("emotion");
            //$req = "SELECT * FROM vehicule WHERE id_vehicule = '$id'";
            //$res = mysql_query($req);
            //$ligne = mysql_fetch_assoc($res);
            //Récupération des informations de la Base De Données
            $marque = $ligne["marque"];
            $modele = $ligne["modele"];
            $numeroserie = $ligne["numeroserie"];
            $couleur = $ligne["couleur"];
            $plaque = $ligne["plaque"];
            $nombre_km = $ligne["nombre_km"];
            $date_achat = $ligne["date_achat"];
            $prix_achat = $ligne["prix_achat"];
            $nombre_passager = $ligne["nombre_passager"];
            $autonomie = $ligne["autonomie"];
            $ville = $ligne["ville"];
            $type_vehicule = $ligne["type_vehicule"];
            $img = $ligne["img"];
            $description = $ligne["description"];
            $disponibilite = $ligne["disponibilite"];
        } catch (Exception $e) {
            echo 'Echec de la connexion à la base de données';
            exit();
        }
        ?>
        <meta charset="utf-8">
        <title>Modification Véhicule de Location</title>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <div class="container">
            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center">
                            <strong>Modifier véhicule de location</strong>
                        </h2>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="recup_modif.php" method="POST">
                                <input name="id" type="hidden" value="<?php echo $_GET['id']; ?>"> 
                                <fieldset>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="marque">Marque du véhicule *</label>
                                        <div class="col-md-5">
                                            <input id="marque" name="marque" type="text" placeholder="" class="form-control input-md" value="<?php echo $marque ?>" required="">
                                        </div>
                                    </div>
                                    </br>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="modele">Modèle du véhicule *</label>
                                        <div class="col-md-5">
                                            <input id="modele" name="modele" type="text" placeholder="" class="form-control input-md" value="<?php echo $modele ?>" required="">
                                        </div>
                                    </div>
                                    </br>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="numeroserie">Numéro de série du véhicule *</label>
                                        <div class="col-md-5">
                                            <input id="numeroserie" name="numeroserie" type="text" placeholder="" class="form-control input-md" value="<?php echo $numeroserie ?>" required="">
                                        </div>
                                    </div>
                                    </br>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="couleur">Couleur du véhicule *</label>
                                        <div class="col-md-5">
                                            <input id="cout" name="couleur" type="text" placeholder="" class="form-control input-md" value="<?php echo $couleur ?>" required="">
                                        </div>
                                    </div>
                                    </br>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="plaque">Plaque d'immatriculation du véhicule *</label>
                                        <div class="col-md-5">
                                            <input id="plaque" name="plaque" type="text" placeholder="" class="form-control input-md" value="<?php echo $plaque ?>" required="">
                                        </div>
                                    </div>
                                    </br>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="nombre_km">Nombre de kilomètre du véhicule *</label>
                                        <div class="col-md-5">
                                            <input id="nombre_km" name="nombre_km" type="int" placeholder="" class="form-control input-md" value="<?php echo $nombre_km ?>" required="">
                                        </div>
                                    </div>
                                    </br>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="date_achat">Date d'achat du véhicule *</label>
                                        <div class="col-md-5">
                                            <input id="date_achat" name="date_achat" type="date" placeholder="" class="form-control input-md" value="<?php echo $date_achat ?>" required="">
                                        </div>
                                    </div>
                                    </br>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="prix_achat">Prix d'achat du véhicule *</label>
                                        <div class="col-md-5">
                                            <input id="prix_achat" name="prix_achat" type="int" placeholder="" class="form-control input-md" value="<?php echo $prix_achat ?>" required="">
                                        </div>
                                    </div>
                                    </br>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="nombre_passager">Nombre de passager du véhicule *</label>
                                        <div class="col-md-5">
                                            <input id="nombre_passager" name="nombre_passager" type="int" placeholder="" class="form-control input-md" value="<?php echo $nombre_passager ?>" required="">
                                        </div>
                                    </div>
                                    </br>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="autonomie">Autonomie du véhicule *</label>
                                        <div class="col-md-5">
                                            <input id="autonomie" name="autonomie" type="int" placeholder="" class="form-control input-md" value="<?php echo $autonomie ?>" required="">
                                        </div>
                                    </div>
                                        </br>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="ville">Ville de disponibilité du véhicule *</label>
                                            <div class="col-md-5">
                                                <input id="ville" name="ville" type="varchar" placeholder="" class="form-control input-md" value="<?php echo $ville ?>" required="">
                                            </div>
                                        </div>
                                            </br>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="type_vehicule">Type de véhicule *</label>
                                                <div class="col-md-5">
                                                    <input id="type_vehicule" name="type_vehicule" type="varchar" placeholder="" class="form-control input-md" value="<?php echo $type_vehicule ?>" required="">
                                                </div>
                                            </div>
                                                </br>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" for="img">Image de véhicule *</label>
                                                    <div class="col-md-5">
                                                        <input id="img" name="img" type="varchar" placeholder="Nom de l'image de véhicule." class="form-control input-md" value="<?php echo $img ?>" required="">
                                                    </div> 
                                                </div>
                                                    </br>       
                                                            </br>
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label" for="description">Description du véhicule *</label>
                                                                <div class="col-md-5">
                                                                    <input id="description" name="description" type="varchar" placeholder="" class="form-control input-md" value="<?php echo $description ?>" required="">
                                                                </div>
                                                            </div>
                                                                </br>
                                                                <div class="form-group">
                                                                    <label class="col-md-4 control-label" for="disponibilite">Disponibilité du véhicule *</label>
                                                                    <div class="col-md-5">
                                                                        <input id="disponibilite" name="disponibilite" type="tinyint" placeholder="" class="form-control input-md" value="<?php echo $disponibilite ?>" required="">
                                                                    </div>
                                                                </div>
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
                                                                        <a href="control_vehicule.php"><img src="images/retour.png" alt=""></a>
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
                                            <?php
                                        } else {
                                            header('Location: index.php');
                                            exit();
                                        }
                                        ?>
