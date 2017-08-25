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
            $nom_loc = $_POST ["nom_loc"];
            $id_client = $_POST ["id_client"];
            $nom_client = $_POST ["nom_client"];
            $id_vehicule = $_POST ["id_vehicule"];
            $numeroserie = $_POST ["numeroserie"];
            $plaque = $_POST ["plaque"];
            $adresse_client = $_POST ["adresse_client"];
            $date_debut = $_POST ["date_debut"];
            $date_fin = $_POST ["date_fin"];
            $bdd->exec("INSERT INTO location (nom_loc, id_client, nom_client, id_vehicule, numeroserie, plaque, adresse_client, date_debut, date_fin)
            VALUES('$nom_loc','$id_client', '$nom_client', '$id_vehicule', '$numeroserie', '$plaque', '$adresse_client', '$date_debut', '$date_fin')"); //on insère les données dans la table
            header('Location: control_loc.php'); //on fait une redirection vers la page d'ajout
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
