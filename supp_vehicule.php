<?php
    session_start();
    if (isset($_SESSION['connect']))//On vérifie que le variable existe.
    {
        $connect=$_SESSION['connect'];//On récupère la valeur de la variable de session.
    }
    else
    {
            $connect=0;//Si $_SESSION['connect'] n'existe pas, on donne la valeur "0".
    }

    if ($connect == "1") // Si le visiteur s'est identifié.
    {
    // On affiche la page cachée.
?>
    <?php
    	try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=emotion', 'root', '');
            $id = $_GET['id'];// on récupere l'id du véhicule voulu
            $bdd->exec("DELETE FROM vehicule WHERE id_vehicule = '$id'");
		    header('Location: control_vehicule.php');//une fois la suppression faite on redirige vers la page de modification
		    exit();//on quitte cette page de traitement
        }
        catch(Exception $e)
        {
            echo 'Echec de la connexion à la base de données';
            exit();
        }
   ?>
        </div>

</body>
</html>
<?php
}
else
{
   header('Location: index.php');//dans le cas ou l'uilisateur n'est pas connecté on redirige vers la page de connexion
   exit();
}
