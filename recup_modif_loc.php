<?php

try {
    //Récupération des informations de la Base De Données
    $id_location = $_POST['id_location'];
    $id_user = $_POST['id_user'];
    $numero_serie = $_POST['numero_serie'];
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST['date_fin'];
    $etat_location = $_POST['etat_location'];
    $duree_jour = $_POST['duree_jour'];

    $bdd = new PDO('mysql:host=localhost;dbname=emotion', 'root', '');
    $bdd->exec("UPDATE location SET id_location = '$id_location', id_user = '$id_user' , numero_serie = '$numero_serie',date_debut = '$date_debut' ,date_fin = '$date_fin' ,etat_location = '$etat_location' ,duree_jour = '$duree_jour' WHERE id_location = '$id_location'");
    $lien = 'Location: modif_loc.php?id=' . $id_location;
    header($lien); //on fait une redirection vers la page de modification
    exit(); //on quitte cette page
} catch (Exception $e) {
    echo 'Echec de la connexion à la base de données';
    exit();
}
?>

