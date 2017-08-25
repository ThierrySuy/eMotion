<?php

class connect {

    public function connect() { //Fonction de connexion à la Base De Données
        $link = @mysql_connect("localhost", "root", "");
        $dblink = mysql_select_db("emotion");
        if (!$link || !$dblink) {
            die("Impossible de se connecter : " . mysql_error());
        }
    }

    public function setdata($sql) { //fonction de cr�ation et d'update de donnée
        mysql_query($sql);
    }

    public function getdata($sql) { //Fonction de lecture de donnée
        return mysql_query($sql);
    }

    public function delete($sql) {//fonction de supression de donnée
        mysql_query($sql);
    }

}

$con = new connect();
session_start();
if (!isset($_SESSION['id_client'])) {

    header('Location: index.php');
}
$emailreal = $_SESSION['mail'];

if (isset($_GET['id_client'])) {
    $res = $con->getdata("SELECT * FROM client WHERE id=" . $_GET['id_client']);
    $row = mysql_fetch_array($res);
}

if (isset($_POST['btn-update'])) {
    // variables pour mise à jour
    $nom = $_POST ['nom'];
    $prenom = $_POST ['prenom'];
    $date_naissance = $_POST ['date_naissance'];
    $adresse = $_POST ['adresse'];
    $telephone = $_POST ['telephone'];
    $numero_permis = $_POST ['numero_permis'];
    $mail = $_POST ['mail'];
    $mdp = $_POST ['mdp'];

    $_SESSION['nom'] = $nom;
    $_SESSION['prenom'] = $prenom;
    $_SESSION['date_naissance'] = $date_naissance;
    $_SESSION['adresse'] = $adresse;
    $_SESSION['telephone'] = $telephone;
    $_SESSION['numero_permis'] = $numero_permis;
    $_SESSION['mail'] = $mail;
    $_SESSION['mdp'] = $mdp;

    // sql query pour mettre à jour les données dans la base de données
    $sql_query = "UPDATE client SET nom='$nom',prenom='$prenom',date_naissance='$date_naissance',adresse='$adresse',telephone='$telephone',numero_permis='$numero_permis',mail='$mail',mdp='$mdp' WHERE id=" . $_GET['id_client'];

    mysql_query($sql_query) or die('Erreur SQL !' . $sql_query . '<br />' . mysql_error());
    header("Location: myprofil.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>CRUD Emotion</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <body>
        <?php include'header.php'; ?>
        <center>
            <div id="header">
                <div id="content">
                    <label>Emotion : Modification Profil : <?php echo $_SESSION['nom']; ?></label>
                </div>
            </div>
            <div id="body">
                <div id="content">
                    <form method="post">
                        <table align="center">
                            <tr>
                                <td align="center"><a href="index.php">Retourner a la page principale</a></td>
                            </tr>
                            <tr>
                                <td>Nom : <input type="text" name="nom" placeholder="Nom" value="<?php if (isset($row)) echo $row['nom']; ?>" required /></td>
                            </tr>
                            <tr>
                                <td>Prénom : <input type="text" name="prebnom" placeholder="Prenom" value="<?php if (isset($row)) echo $row['prenom']; ?>" required /></td>
                            </tr>
                            <tr>     
                                <td>Date de naissance : <input type="date" name="date_naissance" placeholder="Date de naissance" value="<?php if (isset($row)) echo $row['date_naissance']; ?>" required /></td>
                            </tr>
                            <tr>     
                                <td>Adresse : <input type="text" name="adresse" placeholder="Adresse" value="<?php if (isset($row)) echo $row['adresse']; ?>" required /></td>
                            </tr>
                            <tr>
                                <td>Telephone : <input type="int" name="telephone" placeholder="Telephone" value="<?php if (isset($row)) echo $row['telephone']; ?>" required /></td>
                            </tr>
                            <tr>
                                <td>Numero de permis : <input type="text" name="numero_permis" placeholder="Numero de permis" value="<?php if (isset($row)) echo $row['numero_permis']; ?>" required /></td>
                            </tr>
                            <tr>
                                <td>Mail : <input type="text" name="mail" placeholder="Mail" value="<?php if (isset($row)) echo $row['mail']; ?>" /></td>
                            </tr>
                            <tr>
                                <td>Mot de passe : <input type="text" name="mdp" placeholder="Mot de passe" value="<?php if (isset($row)) echo $row['mdp']; ?>" /></td>
                            </tr>
                            <tr>
                                <td>
                                    <?php
                                    if (isset($_GET['id_client'])) {
                                        ?><button type="submit" name="btn-update"><strong>UPDATE</strong></button></td><?php
                                }
                                ?>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
            <?php
            if (isset($erreur))
                echo '<br /><br />', $erreur;
            ?>
        </center>
        <?php include'footer.php'; ?>
    </body>
</html>