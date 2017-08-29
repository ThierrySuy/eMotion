<?php
include 'header.php';

if (isset($_SESSION['Auth']['role']) && ($_SESSION['Auth']['role'] == 2) || ($_SESSION['Auth']['role'] == 4)) {
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
    <title>Historique de Location</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Historique de vos Locations</strong>
                    </h2>
                    <hr>
                </div>
                <section class="col-sm-12">
                    <div class="panel panel-primary">
                        <!-- Création du tableau -->
                        <table class="table table-striped table-condensed">
                            <div class="panel-heading">
                                <center><h3 class="panel-title">Historique de vos Locations</h3></center>
                            </div>
                            <thead>
                                <tr>
                                    <th>Marque</th>
                                    <th>Modèle</th>
                                    <th>Début</th>
                                    <th>Fin</th>
                                    <th>Prix</th>
                                    <th>Actions</th>
                                    <th>Facture</th>
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
                                    // $id = $_GET['id'];
                                    $donnees = $bdd->query("SELECT * FROM location l, vehicule v"
                                            . " WHERE v.numero_serie = l.numero_serie"
                                            . " AND l.id_user = " . $_SESSION['id'] . "");
                                    // echo $id_client = $_POST['id'];
                                    //$donnees = $bdd->query("SELECT * FROM location WHERE id_client = '$id'");
                                    while ($ligne = $donnees->fetch()) {
                                        ?>
                                        <!-- Ajout des lignes présentes dans la Base De Données -->
                                    <tr>
                                        <td><?php echo $ligne['marque']; ?></td>
                                        <td><?php echo $ligne['modele']; ?></td>
                                        <td><?php echo $ligne['date_debut']; ?></td>
                                        <td><?php echo $ligne['date_fin']; ?></td>
                                        <td><?php echo $ligne['prix']; ?> €/jour</td>
                                        <td><a href="supp_loc.php?id=<?php echo $ligne['id_location']; ?>">
                                                <img src="images/supprimer.png" alt="">
                                            </a>&nbsp;&nbsp;
                                            <a href="modif_loc.php?id=<?php echo $ligne['id_location']; ?>">
                                                <img src="images/modifier.png" alt="">
                                            </a></td>
                                        <td><a href="facture.php" target="_blank">Obtenir la facture</a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
    </div>
        <?php include 'footer.php'; ?>
</body>
</html>
