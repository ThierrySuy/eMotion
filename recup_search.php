<?php

			   	$base = mysqli_connect('localhost', 'root', 'root','emotion');

                                $ville = $_POST["ville"];
				$type = $_POST["type"];
				


			    $sql = "SELECT * FROM vehicule WHERE ville = ".$ville."AND type_vehicule = ".$type_vehicule." AND disponibilite = 1";

			    mysqli_query ($base,$sql) or die ('Erreur SQL !' .$sql.'</br />'. mysqli_error($base));

			    mysqli_close($base);

			    echo "La table a bien été ajoutée!";

?>