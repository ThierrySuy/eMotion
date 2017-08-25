<?php

			   	$base = mysqli_connect('localhost', 'root', '','emotion');

			    $nom=$_POST["nom"];
				$prenom=$_POST["prenom"];
				$date_naissance=$_POST["date_naissance"];
				$adresse=$_POST["adresse"];
				$telephone=$_POST["telephone"];
				$numero_permis=$_POST["numero_permis"];
				$mail=$_POST["mail"];
				$mdp=$_POST["mdp"];


			    $sql = "INSERT INTO client (id_client, nom, prenom, date_naissance, adresse, telephone, numero_permis, mail, mdp, role) VALUES(NULL,'$nom', '$prenom', '$date_naissance', '$adresse', '$telephone', '$numero_permis', '$mail', '$mdp', '1')";


			    mysqli_query ($base,$sql) or die ('Erreur SQL !' .$sql.'</br />'. mysqli_error($base));

			    mysqli_close($base);   

			    echo "La table a bien été ajoutée!";
			    echo "teststring";

			    /* ce fichier permet de récupérer les données via le formulaire d'inscription

			    foreach $resultat {
			    ?>
			    
			    <?php ?>
			    }
			    */

?>