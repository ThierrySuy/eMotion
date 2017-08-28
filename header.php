<!Doctype html>
<html>
<?php
session_start();
?>
  <head>
        
        <link rel="stylesheet" href="emoji.css"> 
        <link rel="stylesheet" href="jquery-ui.min.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="external/jquery/jquery.js"></script>
        <script src="jquery-ui.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </head>

<header>
	<span> <img src="http://glennsmith.me" alt="Emotion" style="width:75px; height:50px;"></img></span>
  	<button class="hamburger">&#9776;</button>
 	<button class="cross">&#735;</button>
</header>



<div class="menu">
  <ul>
      <?php if (!empty($_SESSION['Auth'])) {
      if ($_SESSION['Auth']['role']==4) {
      echo '<li style="margin-right:auto;"><a href="ajout_vehicule.php">Ajouter un véhicule de location</a></li>';
          echo '<li style="margin-right:auto;"><a href="ajout_loc.php">Créer une location</a></li>';
      }
      echo "
              <li><a href='mes-reservations.php'>Mes réservations</a></li>
              <li><a href='account.php'>Mon compte</a></li>";
              if ($_SESSION['Auth']['role']==2) {

              $point_fidelite =	pointFidelite();
              echo   "<p> <span>$point_fidelite</span> points de fidélité</p>";
              }
              echo    "
      </li>
      <li><a href='contact.php'>Nous Contacter</a></li>
      <li><a href='logout.php'>Déconnexion</a></li>";
      }else{
      echo '<li><a href="connexion.php">Me connecter</a></li>
      <li><a href="contact.php">Nous Contacter</a></li>';
      }?>
    <a href="./recap.php"><li>Votre récapitulatif</li></a>
    <a href="./recherche.php"><li>Votre recherche</li></a>
    <a href="#"><li>Votre profil</li></a>
  </ul>
</div>



<script>
    $( document ).ready(function() {

$( ".cross" ).hide();
$( ".menu" ).hide();
$( ".hamburger" ).click(function() {
$( ".menu" ).slideToggle( "slow", function() {
$( ".hamburger" ).hide();
$( ".cross" ).show();
});
});

$( ".cross" ).click(function() {
$( ".menu" ).slideToggle( "slow", function() {
$( ".cross" ).hide();
$( ".hamburger" ).show();
});
});

  $( function() {
    $( "#datepicker" ).datepicker();
  } );




});
    

</script>
  