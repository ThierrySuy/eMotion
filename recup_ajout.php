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
    <html dir="ltr">
        <head>
            <meta http-equiv="content-type" content="text/html; charset=utf-8" />
            <meta name="viewport" content="initial-scale=1.0">
        </head>
        <body>
            <!-- Connexion à la Base De Données -->
    <?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=emotion', 'root', '');
    } catch (Exception $e) {
        echo 'Echec de la connexion à la base de données';
        exit();
    }
    //Récupération des informations de la Base De Données
    $marque = $_POST ["marque"];
    $modele = $_POST ["modele"];
    $numeroserie = $_POST ["numeroserie"];
    $couleur = $_POST ["couleur"];
    $plaque = $_POST ["plaque"];
    $nombre_km = $_POST ["nombre_km"];
    $date_achat = $_POST ["date_achat"];
    $prix_achat = $_POST ["prix_achat"];
    $nombre_passager = $_POST ["nombre_passager"];
    $autonomie = $_POST ["autonomie"];
    $ville = $_POST ["ville"];
    $type_vehicule = $_POST ["type_vehicule"];
    $img = $_POST["img"];
    $description = $_POST ["description"];
    $disponibilite = $_POST ["disponibilite"];
    $bdd->exec("INSERT INTO vehicule (marque, modele,
        	numeroserie, couleur, plaque, nombre_km, date_achat, prix_achat, nombre_passager, autonomie, ville, type_vehicule, img, description, disponibilite)
            VALUES('$marque', '$modele', '$numeroserie', '$couleur', '$plaque', '$nombre_passager', '$date_achat', '$prix_achat', '$nombre_passager', '$autonomie', '$ville', '$type_vehicule', '$img', '$description', '$disponibilite')"); //on insère les données dans la table
    header('Location: control_vehicule.php'); //on fait une redirection vers la page d'ajout
    exit(); //on quitte cette page
    ?>
        </div>
    </body>
    </html>
            <?php
        } else {
            header('Location: index.php'); // si l'utilisateur n'est pas connecter on renvoi vers la page de connexion
            exit();
        }
