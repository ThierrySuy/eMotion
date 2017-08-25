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
        <title>Contrôle Véhicule de Location</title>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <div class="container">
            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center">
                            <strong>Modifier un ou plusieurs véhicules de Locations</strong>
                        </h2>
                        <hr>
                    </div>
                    <section class="col-sm-12">
                        <div class="panel panel-primary">
                            <!-- Création du tableau -->
                            <table class="table table-striped table-condensed">
                                <div class="panel-heading">
                                    <center><h3 class="panel-title">Véhicules de Locations</h3></center>
                                </div>
                                <thead>
                                    <tr>
                                        <th>Marque</th>
                                        <th>Modele</th>
                                        <th>Numero de série</th>
                                        <th>Couleur</th>
                                        <th>Plaque d'immatriculation</th>
                                        <th>Nombre de kilomètre</th>
                                        <th>Date d'achat</th>
                                        <th>Prix d'achat</th>
                                        <th>Nombre de passager</th>
                                        <th>Autonomie</th>
                                        <th>Ville</th>
                                        <th>Type de véhicule</th>
                                        <th>Description</th>
                                        <th>Disponibilité</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <!-- Récupération pour le contenu du tableau grâce à la Base De Données -->
                                <tbody>
                                    <tr>
                                        <?php
                                        try {
                                            $bdd = new PDO('mysql:host=localhost;dbname=emotion', 'root', '');
                                        } catch (Exception $e) {
                                            echo 'Echec de la connexion à la base de données';
                                            exit();
                                        }
                                        ?>
                                        <?php
                                        $donnees = $bdd->query('SELECT * FROM vehicule');
                                        while ($ligne = $donnees->fetch()) {
                                            ?>
                                            <!-- Ajout des lignes présentes dans la Base De Données -->
                                        <tr>
                                            <td><?php echo $ligne['marque']; ?></td>
                                            <td><?php echo $ligne['modele']; ?></td>
                                            <td><?php echo $ligne['numeroserie']; ?></td>
                                            <td><?php echo $ligne['couleur']; ?></td>
                                            <td><?php echo $ligne['plaque']; ?></td>
                                            <td><?php echo $ligne['nombre_km']; ?></td>
                                            <td><?php echo $ligne['date_achat']; ?></td>
                                            <td><?php echo $ligne['prix_achat']; ?></td>
                                            <td><?php echo $ligne['nombre_passager']; ?></td>
                                            <td><?php echo $ligne['autonomie']; ?></td>
                                            <td><?php echo $ligne['ville']; ?></td>
        <!--                                <td><?php echo $ligne['img']; ?></td></td>-->
                                            <td><?php echo $ligne['type_vehicule']; ?></td>
                                            <td><?php echo $ligne['description']; ?></td>
                                            <td><?php echo $ligne['disponibilite']; ?></td>
                                            <td><a href="supp_vehicule.php?id=<?php echo $ligne['id_vehicule']; ?>">
                                                    <img src="images/supprimer.png" alt="">
                                                </a>&nbsp;&nbsp;
                                                <a href="modif_vehicule.php?id=<?php echo $ligne['id_vehicule']; ?>">
                                                    <img src="images/modifier.png" alt="">
                                                </a></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                <a href="ajout_vehicule.php"><button id="Ajout" name="ajouter" class="btn btn-success">Ajouter un vehicule</button></a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </body>
    </html>
    <!-- Si pas connecté en admin, impossible d'accéder à la page -->
    <?php
} else {
    header('Location: index.php');
    exit();
}
?>

