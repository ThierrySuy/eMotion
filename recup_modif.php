<?php

try {
    //Récupération des informations de la Base De Données
    $numero_serie = $_POST['numero_serie'];
    $marque = $_POST['marque'];
    $modele = $_POST['modele'];
    $couleur = $_POST['couleur'];
    $immatriculation = $_POST['immatriculation'];
    $id_type_vehicule = $_POST['id_type_vehicule'];
    $prix = $_POST['prix'];
    $annee = $_POST['annee'];
    $date_achat = $_POST['date_achat'];
    $prix_achat = $_POST['prix_achat'];
    $kilometres = $_POST['kilometres'];
    $ville = $_POST['ville'];

    $bdd = new PDO('mysql:host=localhost;dbname=emotion', 'root', '');
    $bdd->exec("UPDATE vehicule SET marque = '$marque' , modele = '$modele',couleur = '$couleur' ,immatriculation = '$immatriculation' ,id_type_vehicule = '$id_type_vehicule' ,prix = '$prix' ,annee = '$annee' , date_achat = '$date_achat', prix_achat = '$prix_achat', kilometres = '$kilometres', ville = '$ville' WHERE numero_serie = '$numero_serie'");
    $lien = 'Location: modif_vehicule.php?id=' . $numero_serie;
    header($lien); //on fait une redirection vers la page de modification
    exit(); //on quitte cette page
} catch (Exception $e) {
    echo 'Echec de la connexion à la base de données';
    exit();
}
?>