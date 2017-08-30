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
    <meta charset="utf-8">
    <title>Véhicules en cours de Location</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Véhicules en cours de Locations</strong>
                    </h2>
                    <hr>
                </div>
                <section class="col-sm-12">
                    <div class="panel panel-primary">
                        <!-- Création du tableau -->
                        <table class="table table-striped table-condensed">
                            <div class="panel-heading">
                                <center><h3 class="panel-title">Véhicules en cours de Locations</h3></center>
                            </div>
                            <thead>
                                <tr>
                                    <th>ID location</th>
                                    <th>Numéro de série du véhicule</th>
                                    <th>Marque du véhicule</th>
                                    <th>Modèle du véhicule</th>
                                    <th>Date de début de la location</th>
                                    <th>Date de fin de la location</th>
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
                                    $donnees = $bdd->query("SELECT * FROM location l, vehicule v WHERE v.numero_serie = l.numero_serie");
                                    while ($ligne = $donnees->fetch()) {
                                        ?>
                                        <!-- Ajout des lignes présentes dans la Base De Données -->
                                    <tr>
                                        <td><?php echo $ligne['id_location']; ?></td>
                                        <td><?php echo $ligne['numero_serie']; ?></td>
                                        <td><?php echo $ligne['marque']; ?></td>
                                        <td><?php echo $ligne['modele']; ?></td>
                                        <td><?php echo $ligne['date_debut']; ?></td>
                                        <td><?php echo $ligne['date_fin']; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>
<div class="col-md-12">  
    <?php include('/footer.php'); ?>
</div>
</html>

