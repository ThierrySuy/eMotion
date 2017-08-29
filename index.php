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
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li >
        <div class="form-group">
  <form method="post" id="choix">

  <select class="form-control connard" id="ville" name="ville">
    <option>Ville</option>
    <option value="paris">Paris</option>
    <option value="lyon">Lyon</option>
    <option value="lille">Lille</option>
  </select>
</div>
        <li>
        <div class="form-group col-md-4">

 <input class="connard" type="text" id="datepicker" />
  
</div>
        <li><div class="form-group">
  
  <select class="form-control connard" id="type" name="type">
    <option>Type Véhicule</option>
    <option value="voiture">voiture</option>
    <option value="scooter">scooter</option>
    <option value="moto">moto</option>
  </select>

</div>
        </ul>

      </li>
      <li><button type="submit" class="btn btn-default connard">Submit</button></li>
  </form>
              <script>
                var form = new FormData($('#choix')[0];
                        form.append('view_type','addtemplate');
                                $.ajax({
                                    type: "POST",
                                    url: "recherche.php",
                                    data: form,
                                    cache: false,
                                    contentType: false,
                                    processData: false,
                                    success:  function(data){
                                    //alert("---"+data);
        alert("Settings has been updated successfully.");
        window.location.reload(true);
    }
                                }));
                </script>           
    </ul>
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