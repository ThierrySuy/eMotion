<!DOCTYPE html>
<html dir="ltr">
    <head>
        <?php
        try {
            //Récupération des informations de la Base De Données
            echo $id_location = $_POST['id'];
            $nom_loc = $_POST ["nom_loc"];
            $id_client = $_POST ["id_client"];
            $nom_client = $_POST ["nom_client"];
            $id_vehicule = $_POST ["id_vehicule"];
            $numeroserie = $_POST ["numeroserie"];
            $plaque = $_POST ["plaque"];
            $adresse_client = $_POST ["adresse_client"];
            $date_debut = $_POST ["date_debut"];
            $date_fin = $_POST ["date_fin"];
            $bdd = new PDO('mysql:host=localhost;dbname=emotion', 'root', '');
            $bdd->exec("UPDATE location SET nom_loc = '$nom_loc', id_client = '$id_client', nom_client = '$nom_client', id_vehicule = '$id_vehicule', numeroserie = '$numeroserie', plaque = '$plaque', adresse_client = '$adresse_client', date_debut = '$date_debut', date_fin = '$date_fin' WHERE id_location = '$id_location'");
            $lien = 'Location: modif_loc.php?id=' . $id_location;
            header($lien); //on fait une redirection vers la page de modification
            exit(); //on quitte cette page
        } catch (Exception $e) {
            echo 'Echec de la connexion à la base de données';
            exit();
        }
        ?>
    </head>
</html>
