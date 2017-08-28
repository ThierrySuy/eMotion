
    <?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=emotion', 'root', '');
    } catch (Exception $e) {
        echo 'Echec de la connexion à la base de données';
        exit();
    }
    //Récupération des informations de la Base De Données
    $id_user = $_POST['id_user'];
    $numero_serie = $_POST['numero_serie'];
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST['date_fin'];
    $etat_location = $_POST['etat_location'];
    $duree_jour = $_POST['duree_jour'];
 
    $bdd->exec("INSERT INTO location(id_user, numero_serie, date_debut, date_fin, etat_location, duree_jour) 
			VALUES ( '$id_user', '$numero_serie', '$date_debut', '$date_fin', '$etat_location', '$duree_jour' )"); //on insère les données dans la table
    header('Location: control_loc.php'); //on fait une redirection vers la page d'ajout
    exit(); //on quitte cette page
    ?>