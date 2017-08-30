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
    <title>Contrôle Véhicule de Location</title>
</head>
<body>
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
                                    <th>Numéro de série</th>
                                    <th>Marque</th>
                                    <th>Modèle</th>
                                    <th>Couleur</th>
                                    <th>Plaque d'immatriculation</th>
                                    <th>Prix</th>
                                    <th>Année</th>
                                    <th>Date d'achat</th>
                                    <th>Prix d'achat</th>
                                    <th>Kilomètres</th>
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
                                        <td><?php echo $ligne['numero_serie']; ?></td>
                                        <td><?php echo $ligne['marque']; ?></td>
                                        <td><?php echo $ligne['modele']; ?></td>
                                        <td><?php echo $ligne['couleur']; ?></td>
                                        <td><?php echo $ligne['immatriculation']; ?></td>
                                        <td><?php echo $ligne['prix']; ?></td>
                                        <td><?php echo $ligne['annee']; ?></td>
                                        <td><?php echo $ligne['date_achat']; ?></td>
                                        <td><?php echo $ligne['prix_achat']; ?></td>
                                        <td><?php echo $ligne['kilometres']; ?></td>
                                        <td><a href="supp_vehicule.php?id=<?php echo $ligne['numero_serie']; ?>">
                                                <img src="images/supprimer.png" alt="">
                                            </a>&nbsp;&nbsp;
                                            <a href="modif_vehicule.php?id=<?php echo $ligne['numero_serie']; ?>">
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
</body>
<div class="col-md-12">  
    <?php include('/footer.php'); ?>
</div>
</html>