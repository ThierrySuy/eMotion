<?php

Class Auth{
    static function isLogged(){
        if(isset($_SESSION['Auth']) && isset($_SESSION['Auth']['mail']) && isset($_SESSION['Auth']['pass']))
        {
            extract($_SESSION['Auth']);
            $bdd = new PDO('mysql:host=localhost;dbname=emotion;charset=utf8', 'root', '');
            $reponse = $bdd->prepare("SELECT id_user FROM user WHERE mail=? AND pass=?");
            $reponse->execute(array($mail, $pass));
            // $donnees = $reponse->fetch();
            if($reponse -> rowCount()>0){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
    function Loggin(){
    }
}
?>