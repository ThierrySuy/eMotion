<!DOCTYPE html>
<html dir="ltr">
    <head>
        <?php
        try {
            //Récupération des informations de la Base De Données
            echo $id_vehicule = $_POST['id'];
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
            $bdd = new PDO('mysql:host=localhost;dbname=emotion', 'root', '');
            $bdd->exec("UPDATE vehicule SET marque = '$marque', modele = '$modele', numeroserie = '$numeroserie', couleur = '$couleur', plaque = '$plaque', nombre_km = '$nombre_km', date_achat = '$date_achat', prix_achat = '$prix_achat', nombre_passager = '$nombre_passager', autonomie = '$autonomie', ville = '$ville', type_vehicule = '$type_vehicule', img = '$img', description = '$description', disponibilite = '$disponibilite' WHERE id_vehicule = '$id_vehicule'");
            $lien = 'Location: modif_vehicule.php?id=' . $id_vehicule;
            header($lien); //on fait une redirection vers la page de modification
            exit(); //on quitte cette page
        } catch (Exception $e) {
            echo 'Echec de la connexion à la base de données';
            exit();
        }
        ?>
    </head>
</html>
