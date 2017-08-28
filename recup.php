<?php

			   	$base = mysqli_connect('localhost', 'root', '','emotion');


			   	
			    $pass=$_POST["pass"];
				$mail=$_POST["mail"];
			    $nom=$_POST["nom"];
				$prenom=$_POST["prenom"];
				$adresse=$_POST["adresse"];
				$code_postal=$_POST["code_postal"];
				$ville=$_POST["ville"];
				$telephone=$_POST["telephone"];
				$numero_permis=$_POST["numero_permis"];
				
				
	
			    $sql = "INSERT INTO user (id_user, pass, mail, nom, prenom, adresse, code_postal, ville, telephone, numero_permis, role, point_fidelite) VALUES(NULL,'$pass', '$mail', '$nom', '$prenom', '$adresse', '$code_postal', '$ville', '$telephone', '$numero_permis', '2', '10')";


			    mysqli_query ($base,$sql) or die ('Erreur SQL !' .$sql.'</br />'. mysqli_error($base));

			    mysqli_close($base);   

			    header('Location: index.php');
			    exit();

			    /* ce fichier permet de récupérer les données via le formulaire d'inscription

			    foreach $resultat {
			    ?>
			    
			    <?php ?>
			    }
			    */

?>