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


    <body>

   

    <div class="row">
    
    <nav class="navbar navbar-inverse col-md-12">
    <div class="container-fluid">
        <div class="col-md-offset-5">
    <li class="eltitulo">Inscription sur la Plateforme</li>
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

<div class="container-fluid col-md-offset-5 col-md-6">
<img class="col-md-2" src="" alt="Hé Hé">
<img class="col-md-2" src="" alt="Hé Hé">
<img class="col-md-2" src="" alt="Hé Hé">
</div>


</body>
<br>
 <div class="col-md-12">  
<?php include('/footer.php'); ?>
</div>
</html>