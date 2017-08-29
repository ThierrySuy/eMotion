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
    <title>Contrôle de Location</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Modifier une ou plusieurs Locations</strong>
                    </h2>
                    <hr>
                </div>
                <section class="col-sm-12">
                    <div class="panel panel-primary">
                        <!-- Création du tableau -->
                        <table class="table table-striped table-condensed">
                            <div class="panel-heading">
                                <center><h3 class="panel-title">Contrat de Locations</h3></center>
                            </div>
                            <thead>
                                <tr>
                                    <th>ID location</th>
                                    <th>ID client</th>
                                    <th>Numéro de série du véhicule</th>
                                    <th>Date de début de la location</th>
                                    <th>Date de fin de la location</th>
                                    <th>Durée de la location</th>
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
                                    $donnees = $bdd->query('SELECT * FROM location');
                                    while ($ligne = $donnees->fetch()) {
                                        ?>
                                        <!-- Ajout des lignes présentes dans la Base De Données -->
                                    <tr>
                                        <td><?php echo $ligne['id_location']; ?></td>
                                        <td><?php echo $ligne['id_user']; ?></td>
                                        <td><?php echo $ligne['numero_serie']; ?></td>
                                        <td><?php echo $ligne['date_debut']; ?></td>
                                        <td><?php echo $ligne['date_fin']; ?></td>
                                        <td><?php echo $ligne['duree_jour']; ?></td>
                                        <td><a href="supp_loc.php?id=<?php echo $ligne['id_location']; ?>">
                                                <img src="images/supprimer.png" alt="">
                                            </a>&nbsp;&nbsp;
                                            <a href="modif_loc.php?id=<?php echo $ligne['id_location']; ?>">
                                                <img src="images/modifier.png" alt="">
                                            </a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8">
                            <a href="ajout_loc.php"><button id="Ajout" name="ajouter" class="btn btn-success">Ajouter un location</button></a>
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

