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