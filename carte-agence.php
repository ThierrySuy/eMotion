<?php 
include('/header.php'); 
  if (isset($_SESSION['Auth']['role'])) {
      $role = $_SESSION['Auth']['role'];
  }
?>

<!Doctype html>
<html>
    <title>Carte des Agences</title>

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

 <body>

<h1><center>Carte des Agences</center></h1>

</br></br>

<div class="container-fluid col-md-12">

<div class="col-md-offset-3  col-md-3 panel panel-default">

<h1 class="display-1">Paris</h1>


<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.2231364762415!2d2.3312288160645864!3d48.853955279286986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671d82c273a99%3A0x1c1fe83299272483!2s24+Rue+de+Rennes%2C+75006+Paris!5e0!3m2!1sfr!2sfr!4v1503992471103" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

</br>

<h3 class="display-2">Agence Montparnasse</h3>

<ul class="list-group">
  <li class="list-group-item">Adresse: 24 Rue de Rennes, 75006 Paris</li>
  <li class="list-group-item">Tél: +33 01 00 00 00 00</li>
  <li class="list-group-item">Mail: <a href="mailto:contact@mp-paris.com">contact@mp-paris.com</a></li>
</ul>

</div>



<div class="col-md-3 panel panel-default">


<h1 class="display-1">Lyon</h1>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.138370015437!2d4.851673815981022!3d45.74837187910535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea6c07aa534f%3A0xc1e317166404fa58!2s65+Rue+Domer%2C+69007+Lyon!5e0!3m2!1sfr!2sfr!4v1503993371048" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

</br>

<h3 class="display-2">Agence Blandan</h3>

<ul class="list-group">
  <li class="list-group-item">Adresse: 65 Rue Domer, 69007 Lyon</li>
  <li class="list-group-item">Tél: +33 04 00 00 00 00</li>
  <li class="list-group-item">Mail: <a href="mailto:contact@bd-lyon.com">contact@bd-lyon.com</a></li>
</ul>

</div>



 </body>

<div class="col-md-12">

  <?php 
include('/footer.php'); 
?>
</div>


 </html>

