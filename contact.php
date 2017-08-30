<?php 
include('/header.php'); 
  if (isset($_SESSION['Auth']['role'])) {
      $role = $_SESSION['Auth']['role'];
  }
?>
<!DOCTYPE html>

<html>

<head>
  <link rel="stylesheet" type="text/css" href="./contact.css">
</head>

<head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"></head><br />

<div class="container-fluid col-md-12">

<div class="col-md-offset-1 col-md-3 panel panel-default">

<h3 class="display-2">Société Emotion</h3>

<ul class="list-group">
  <li class="list-group-item">Adresse: 24 Rue de Rennes, 75006 Paris</li>
  <li class="list-group-item">Tél: +33 01 00 00 00 00</li>
  <li class="list-group-item">Mail: <a href="mailto:contact@mp-paris.com">contact@mp-paris.com</a></li>
</ul>

</div>

<img src="./images/map.jpg" height="180px" width="450px">

</div>


<div class="inner contact">
               
                <div class="contact-form">
                    
                    <form id="contact-us" method="post" action="./envoyer.php">

                    <div class="container-fluid col-xs-11">

                        <div class="col-xs-3 col-md-offset-1">
                            
                            <input type="text" name="nom" id="nom" required="required" class="form" placeholder="Nom" />

                        </div>

                        <div class="col-xs-3 ">
                            
                            <input type="text" name="prenom" id="prenom" required="required" class="form" placeholder="Prenom" />

                        </div>

                    </div>

                        <div class="container-fluid col-xs-6 col-md-offset-1">
                            
                            <input type="mail" name="mail" id="mail" required="required" class="form" placeholder="Email" />

                        </div>

                    <div class="container-fluid col-xs-11 ">

                        <div class="col-xs-3 col-md-offset-1">
                            
                            <input type="text" name="sujet" id="sujet" required="required" class="form" placeholder="Sujet" />

                        </div>

                    </div>

                        
                        <div class="col-xs-6 col-md-offset-1">
                            
                            <textarea name="message" id="message" class="form textarea"  placeholder="Votre Message"></textarea>

                        </div>
                        

                        <div class="col-xs-6 col-md-offset-1">
                            
                            <button type="submit" id="submit" name="submit" class="form-btn semibold">Send Message</button> 

                        </div>
                        
                        <div class="clear"></div>

                    </form>

                </div>

</div>

</body>

<div class="col-md-12">
    
<?php 
include('/footer.php'); 
?>

</div>



</html>