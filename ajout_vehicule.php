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
    <title>Ajout Véhicule de Location</title>
</head>
<body>
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
                                    <label class="col-md-4 control-label" for="numero_serie">Numero de série du véhicule *</label>
                                    <div class="col-md-5">
                                        <input id="numero_serie" name="numero_serie" type="text" placeholder="Numéro de série du véhicule." class="form-control input-md" required="">
                                    </div>
                                </div>
                                </br>
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
                                    <label class="col-md-4 control-label" for="couleur">Couleur du véhicule *</label>
                                    <div class="col-md-5">
                                        <input id="couleur" name="couleur" type="text" placeholder="Couleur du véhicule." class="form-control input-md" required="">
                                    </div>
                                </div>
                                </br>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="immatriculation">Plaque d'immatriculation du véhicule *</label>
                                    <div class="col-md-5">
                                        <input id="immatriculation" name="immatriculation" type="text" placeholder="Plaque d'immatriculation du véhicule." class="form-control input-md" required="">
                                    </div>
                                </div>
                                </br>
                                <div class="form-group">
                                    <label for="id_type_vehicule">Type de véhicule :</label>
                                    <select name="id_type_vehicule" id="id_type_vehicule" class = "" required>
                                        <option value="">[Choisir ...]</option>
                                        <option value="1">Scooter</option>
                                        <option value="2">Voiture</option>
                                    </select>
                                </div>
                                <br/>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="prix">Prix du véhicule *</label>
                                    <div class="col-md-5">
                                        <input id="prix" name="prix" type="text" placeholder="Prix du véhicule." class="form-control input-md" required="">
                                    </div>
                                </div>
                                </br>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="annee">Année du véhicule *</label>
                                    <div class="col-md-5">
                                        <input id="annee" name="annee" type="number" placeholder="Année du véhicule." class="form-control input-md" min="1990" max="2018" required="">
                                    </div>
                                </div>
                                </br>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="date_achat">Date d'achat du véhicule *</label>
                                    <div class="col-md-5">
                                        <input id="date_achat" name="date_achat" type="date" placeholder="Date d'achat du véhicule." class="form-control input-md" required="">
                                    </div>
                                </div>
                                </br>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="prix_achat">Prix d'achat du véhicule *</label>
                                    <div class="col-md-5">
                                        <input id="prix_achat" name="prix_achat" type="text" placeholder="Prix d'achat du véhicule." class="form-control input-md" required="">
                                    </div>
                                </div>
                                </br>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="kilometres">Kilomètres du véhicule *</label>
                                    <div class="col-md-5">
                                        <input id="kilometres" name="kilometres" type="text" placeholder="Kilomètres du véhicule." class="form-control input-md" min="1" max="1000000" required="">
                                    </div>
                                </div>
                                </br>
                                <div class="form-group">
                                    <label for="ville">Agence :</label>
                                    <select name="ville" id="ville" class = "" required>
                                        <option value="">[Choisir ...]</option>
                                        <option value="1">Paris</option>
                                        <option value="2">Lyon</option>
                                        <option value="2">Marseille</option>
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
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>