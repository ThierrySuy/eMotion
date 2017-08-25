<?php
session_start();
$_SESSION['connect'] = 0;

if (isset($_POST["connexion"])) {
    $mail = $_POST["mail"];
    $mdp = $_POST["mdp"];
    $_SESSION['mail'] = $mail;
    try {
        $_SESSION['mail'] = $_POST['mail'];
        $bdd = new PDO('mysql:host=localhost;dbname=emotion', 'root', '');
        $reponse = $bdd->query("SELECT mdp FROM client WHERE mail='$mail'");
        $donnee = $reponse->fetch();

        if ($code != $donnee['mdp']) {
            $_SESSION['connect'] = 0;
            $erreur = "Erreur, le mot de passe ou l'identifiant et incorrect, merci de réessayer.";
        } else {
            $_SESSION['connect'] = 1;
            header(("location:index.php"));
        }
    } catch (Exception $e) {
        echo 'Echec de la connexion à la base de données';
        exit();
    }
}
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css" type="text/css" />
        <meta charset="utf-8" />
        <title>Accueil</title>
    </head>

    <body>
        <?php include 'header.php'; ?>
        <div id="header">
            <div id="content">
                <label>eMotion : Location de véhicules éléctriques</label>
            </div>
        </div>
    <center>
        <div id="body">
            <div id="content">
                <form action="index.php" method="POST">
                    <table align="center">
                        <tr>
                            <td>Email : <input type="email" name="mail" value="<?php if (isset($_POST['mail'])) echo htmlentities(trim($_POST['mail'])); ?>"><br /></td>
                        </tr>
                        <tr>
                            <td>Mot de passe : <input type="password" name="mdp" value="<?php if (isset($_POST['mdp'])) echo htmlentities(trim($_POST['mdp'])); ?>"><br /></td>
                        </tr>
                        <tr>
                            <td><button type="submit" name="connexion" value="connexion">Connexion</button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <table>
            <tr>
                <td><a href="index.php">S'inscrire</a></td>
            </tr>
        </table>
    </center>
    <?php
    if (isset($erreur))
        echo '<br /><br />', $erreur;
    ?>
    <?php include 'footer.php'; ?>
</body>
</html>
