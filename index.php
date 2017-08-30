<!Doctype html>
<html>
    <title>Index</title>

  <?php
  include('/header.php');
  //var_dump($_SESSION);

  if (isset($_SESSION['Auth']['role'])) {
      $role = $_SESSION['Auth']['role'];
  }
  ?>

  <head>
  <link rel="stylesheet" type="text/css" href="./index.css">
  </head>


    <body>



    <div class="row">
    
    <nav class="navbar navbar-inverse col-md-12">
    <div class="container-fluid">
        <div class="col-md-offset-5">
        <?php if (isset($_SESSION['Auth']['role'])) { ?>
    <a class="btn btn-success eltitulo" href="recherche.php">Louer un véhicule</a>
    <?php }
    else{ 
      } ?>
    </div>
    </div>
</nav>
</div> 


</br>
</br>
<div>
<?php include('inscription.php') ?> 
</div>
<br>
<br>

<!--<div class="container-fluid col-md-offset-4 col-md-8">
<img class="col-md-2" src="./images/car-06.png" alt="Hé Hé">
<img class="col-md-2" src="./images/scooter-01.png" alt="Hé Hé">
<img class="col-md-2" src="./images/car-05.png" alt="Hé Hé">
</div>-->


<div>
  
  <center><h1 class="display-2">Nos meilleures offres</h1></center>

</div>
<center>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img id="car" src="./images/scooter-01.png" alt="car" height="500px" width="500px"> <img id="promo" src="./images/promo-km-offert.png" alt="Los Angeles" height="150" width="150px">
    </div>

    <div class="item">
      <img id="car" src="./images/car-06.png" alt="scooter" height="500px" width="500px"> <img id="promo" src="./images/promo-payez-moins.png" alt="Los Angeles" height="150" width="150px">
    </div>

    <div class="item">
      <img id="car" src="./images/scooter-04.png" alt="car" height="500px" width="500px"> <img id="promo" src="./images/promos-bons-achat.png" alt="Los Angeles" height="150" width="150px">
    </div>

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</center>


</body>
<br>
 <div class="col-md-12">  
<?php include('/footer.php'); ?>
</div>
</html>