<?php
try {
    //Récupération des informations de la Base De Données
    $id_user = $_POST['id_user'];
    $pass = $_POST['pass'];
    $mail = $_POST['mail'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $code_postal = $_POST['code_postal'];
    $ville = $_POST['ville'];
    $telephone = $_POST['telephone'];
    $numero_permis = $_POST['numero_permis'];


    $bdd = new PDO('mysql:host=localhost;dbname=emotion', 'root', '');
    $bdd->exec("UPDATE user SET id_user = '$id_user', mail = '$mail' , nom = '$nom',prenom = '$prenom' ,adresse = '$adresse' ,code_postal = '$code_postal' ,ville = '$ville' ,telephone = '$telephone' , numero_permis = '$numero_permis' WHERE id_user = '$id_user'");
    header('Location: profil.php?id='.$id_user); //on fait une redirection vers la page du profil soit la même page
    exit(); //on quitte cette page
} catch (Exception $e) {
    echo 'Echec de la connexion à la base de données';
    exit();
}
?>