<?php

session_start();

if (isset($_POST) && !empty($_POST['mail']) && !empty($_POST['pass'])) {
    $pass = $_POST['pass'];
    $mail = $_POST['mail'];
    $pass = $pass;
    $bdd = new PDO('mysql:host=localhost;dbname=emotion;charset=utf8', 'root', '');
    $reponse = $bdd->query("SELECT * FROM user WHERE mail='$mail' AND pass='$pass'");

    if ($reponse->rowCount() > 0) {
        $user = $reponse->fetch();
        $_SESSION['Auth'] = array(
            'mail' => $mail,
            'pass' => $pass,
            'role' => $user['role']
        );
        $_SESSION['id'] = $user['id_user'];
        header('Location:index.php');
    } else {
        $_SESSION['badId'] = ' <strong id="message">Identifiants Inconnus</strong>';
        header('Location:connexion.php');
    }
} else {
    $_SESSION['badId'] = '<strong id="message">Veuillez saisir vos identifiants</strong>';
    header('Location:connexion.php');
}
?>