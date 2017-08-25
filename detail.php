<!Doctype html>
<html>
  <head>
        
        <link rel="stylesheet" href="emoji.css"> 
        <link rel="stylesheet" href="jquery-ui.min.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="jquery-3.2.1"></script>
        <script src="external/jquery/jquery.js"></script>
        <script src="jquery-ui.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    </head>

<header>
	<span> <img src="http://glennsmith.me" alt="Emotion" style="width:75px; height:50px;"></img></span>
  	<button class="hamburger">&#9776;</button>
 	<button class="cross">&#735;</button>
</header>

<body>
	
<div class="container-fluid col-md-offset-5 col-md-6">

<img class="col-md-2" src="" alt="Hé Hé">

</div>

<?php
$base = mysqli_connect('localhost', 'root', 'root', 'emotion');
if (isset($_POST["vehicule"])){
$var = "SELECT * FROM vehicule WHERE id_vehicule =".$_POST["vehicule"];

$resultat=mysqli_query($base,$var);

$varve=mysqli_fetch_assoc($resultat);
?>

<p>
	
<?php
echo $varve['description'];
?>
    <br>
<?php    
echo $varve['prix_achat'];
}
?>

<li><button type="submit" class="btn btn-default connard">Submit</button></li>

</p>


</body>