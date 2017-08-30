<?php
include 'header.php';

if (isset($_SESSION['Auth']['role']) && ($_SESSION['Auth']['role'] == 2) || ($_SESSION['Auth']['role'] == 4)) {
    $role = $_SESSION['Auth']['role'];
    $id = $_SESSION['id'];
} else {
    header('Location:index.php');
}
?>
    <?php
    	try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=emotion', 'root', '');
            $id = $_GET['id'];// on récupere l'id du véhicule voulu
            $bdd->exec("DELETE FROM location WHERE id_location = '$id'");
		    header('Location: control_loc.php');//une fois la suppression faite on redirige vers la page de modification
		    exit();//on quitte cette page de traitement
        }
        catch(Exception $e)
        {
            echo 'Echec de la connexion à la base de données';
            exit();
        }
   ?>

