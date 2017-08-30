<?php

$base = mysqli_connect('localhost', 'root', '','emotion');


/*$insert = "INSERT INTO `location` (`id_location`, `nom_loc`, `id_client`, `nom_client`, `id_vehicule`, `numeroserie`, `plaque`, `adresse_client`, `date_debut`, `date_fin`) VALUES (NULL, '$nom_loc', '$id_client', '$nom_client', '$id_vehicule', '$numeroserie', '$plaque', '$adresse_client', '$date_debut', '$date_fin')";

$select = mysql_query(SELECT * FROM vehicule WHERE id_vehicule = ".$img["id_vehicule"]");

/*$_GET_["id"]

$var = SELECT vehicule WHERE id_vehicule = $_GET[".$id"] */

// your php code

if ($_POST && isset($_POST['Submit']))

	{

   // $db = new \PDO('......'); // enter your db details

    $stmt = $base->prepare("INSERT INTO `location` (`id_location`, `nom_loc`, `id_client`, `nom_client`, `id_vehicule`, `numeroserie`, `plaque`, `adresse_client`, `date_debut`, `date_fin`) VALUES (NULL, '$nom_loc', '$id_client', '$nom_client', '$id_vehicule', '$numeroserie', '$plaque', '$adresse_client', '$date_debut', '$date_fin')");


    $result = $stmt->execute(array($_POST['Submit']));

    echo $result->rowCount() ? 'Data saved in db' : 'Unknown error occured'; 

	}

?>