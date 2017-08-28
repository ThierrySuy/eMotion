<!-- Connexion à la Base De Données -->
<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=emotion', 'root', '');
} catch (Exception $e) {
    echo 'Echec de la connexion à la base de données';
    exit();
}
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


$bdd->exec("INSERT INTO vehicule(numero_serie, marque, modele, couleur, immatriculation, id_type_vehicule, prix, annee, date_achat, prix_achat, kilometres, ville) "
        . "VALUES ( '$numero_serie', '$marque', '$modele', '$couleur', '$immatriculation', '$id_type_vehicule', '$prix', '$annee', '$date_achat', '$prix_achat', '$kilometres', '$ville')"); //on insère les données dans la table
header('Location: control_vehicule.php'); //on fait une redirection vers la page d'ajout
exit(); //on quitte cette page
?>

