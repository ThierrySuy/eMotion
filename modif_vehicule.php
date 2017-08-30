<?php
include 'header.php';

if (isset($_SESSION['Auth']['role']) && ($_SESSION['Auth']['role'] == 4)) {
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
        $id = $_GET['id'];
        $bdd = new PDO('mysql:host=localhost;dbname=emotion', 'root', '');
        $donnees = $bdd->query("SELECT * FROM vehicule WHERE numero_serie = '$id'");
        $ligne = $donnees->fetch();
        //Récupération des informations de la Base De Données
        $numero_serie = $ligne['numero_serie'];
        $marque = $ligne['marque'];
        $modele = $ligne['modele'];
        $couleur = $ligne['couleur'];
        $immatriculation = $ligne['immatriculation'];
        $id_type_vehicule = $ligne['id_type_vehicule'];
        $prix = $ligne['prix'];
        $annee = $ligne['annee'];
        $date_achat = $ligne['date_achat'];
        $prix_achat = $ligne['prix_achat'];
        $kilometres = $ligne['kilometres'];
        $ville = $ligne['ville'];
    } catch (Exception $e) {
        echo 'Echec de la connexion à la base de données';
        exit();
    }
    ?>
    <meta charset="utf-8">
    <title>Modification Véhicule de Location</title>
</head>
<body>

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
                                    <label class="col-md-4 control-label" for="numero_serie">Numero de série du véhicule *</label>
                                    <div class="col-md-5">
                                        <input id="numero_serie" name="numero_serie" type="text" placeholder="Numéro de série du véhicule." class="form-control input-md" value="<?php echo $numero_serie; ?>" required="">
                                    </div>
                                </div>
                                </br>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="marque">Marque du véhicule *</label>
                                    <div class="col-md-5">
                                        <input id="marque" name="marque" type="text" placeholder="Marque du véhicule." class="form-control input-md" value="<?php echo $marque; ?>" required="">
                                    </div>
                                </div>
                                </br>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="modele">Modèle du véhicule *</label>
                                    <div class="col-md-5">
                                        <input id="modele" name="modele" type="text" placeholder="Modèle du véhicule." class="form-control input-md" value="<?php echo $modele; ?>" required="">
                                    </div>
                                </div>
                                </br>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="couleur">Couleur du véhicule *</label>
                                    <div class="col-md-5">
                                        <input id="couleur" name="couleur" type="text" placeholder="Couleur du véhicule." class="form-control input-md" value="<?php echo $couleur; ?>" required="">
                                    </div>
                                </div>
                                </br>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="immatriculation">Plaque d'immatriculation du véhicule *</label>
                                    <div class="col-md-5">
                                        <input id="immatriculation" name="immatriculation" type="text" placeholder="Plaque d'immatriculation du véhicule." class="form-control input-md" value="<?php echo $immatriculation; ?>" required="">
                                    </div>
                                </div>
                                </br>
                                <div class="form-group">
                                    <label for="id_type_vehicule">Type de véhicule :</label>                            
                                    <select name="id_type_vehicule" id="id_type_vehicule" class = "" required>
                                        <option value="">[Choisir ...]</option>
                                        <option value="1" <?php
                                        if ($id_type_vehicule == 1) {
                                            echo "selected";
                                        }
                                        ?> >Scooter</option>
                                        <option value="2" <?php
                                        if ($id_type_vehicule == 2) {
                                            echo "selected";
                                        }
                                        ?> >Voiture</option>            
                                    </select><br>
                                </div>
                                <br/>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="prix">Prix du véhicule *</label>
                                    <div class="col-md-5">
                                        <input id="prix" name="prix" type="text" placeholder="Prix du véhicule." class="form-control input-md" value="<?php echo $prix; ?>" required="">
                                    </div>
                                </div>
                                </br>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="annee">Année du véhicule *</label>
                                    <div class="col-md-5">
                                        <input id="annee" name="annee" type="number" placeholder="Année du véhicule." class="form-control input-md" min="1990" max="2018" value="<?php echo $annee; ?>"  required="">
                                    </div>
                                </div>
                                </br>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="date_achat">Date d'achat du véhicule *</label>
                                    <div class="col-md-5">
                                        <input id="date_achat" name="date_achat" type="date" placeholder="Date d'achat du véhicule." class="form-control input-md" value="<?php echo $date_achat; ?>"  required="">
                                    </div>
                                </div>
                                </br>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="prix_achat">Prix d'achat du véhicule *</label>
                                    <div class="col-md-5">
                                        <input id="prix_achat" name="prix_achat" type="text" placeholder="Prix d'achat du véhicule." class="form-control input-md" value="<?php echo $prix_achat; ?>"  required="">
                                    </div>
                                </div>
                                </br>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="kilometres">Kilomètres du véhicule *</label>
                                    <div class="col-md-5">
                                        <input id="kilometres" name="kilometres" type="text" placeholder="Kilomètres du véhicule." class="form-control input-md" min="1" max="1000000" value="<?php echo $kilometres; ?>" required="">
                                    </div>
                                </div>
                                </br>
                                <div class="form-group">
                                    <label for="ville">Agence du véhicule :</label>                            
                                    <select name="ville" id="ville" class = "" required>
                                        <option value="">[Choisir ...]</option>
                                        <option value="1" <?php
                                        if ($ville == 1) {
                                            echo "selected";
                                        }
                                        ?> >Paris</option>
                                        <option value="2" <?php
                                        if ($ville == 2) {
                                            echo "selected";
                                        }
                                        ?> >Lyon</option>                      
                                    </select>
                                </div><br>
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
            <div class="clearfix"></div>
        </div>
    </div>
<?php include 'footer.php'; ?>
</body>
</html>
