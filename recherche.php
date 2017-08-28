<?php 
include('/header.php'); 
  if (isset($_SESSION['Auth']['role'])) {
      $role = $_SESSION['Auth']['role'];
  }
?>

<!DOCTYPE html>
<html>    
    <head>

        <title>Recherche</title>

     
        <?php
        $base = mysqli_connect('localhost', 'root', '','emotion');
        if (isset($_POST["ville"]) && isset($_POST["type"])) {
            $ville = mysqli_real_escape_string($_POST["ville"]);
            $type = mysqli_real_escape_string($_POST["type"]);
           
            $lesimages = "";



            $sql = "SELECT * FROM vehicule ";

            $lesimages .= "SELECT * FROM vehicule v,type_vehicule t WHERE v.id_type_vehicule = t.id_type_vehicule AND v.ville =  '". $ville ."'  AND v.id_type_vehicule = '" . $type."'";
            
             if (isset($_POST['couleur'])){
                  $couleur = mysqli_real_escape_string($_POST["couleur"]);
                 $lesimages .= "AND v.couleur = '".$couleur."'";
                 }
             elseif(isset ($_POST['model'])){
                 $lesimages .= "AND v.model = '".$modele."'";
             }    
            // $lesimages .= ' AND l.date_debut =< '.$date_prise.' AND l.date_fin =>'.$date_rendu.' OR l.date_debut =< '.$date_rendu.' AND l.date_fin > l.date_debut';
          
                     
            $qimg = mysqli_query($base, $lesimages);
            
           
         
         
            mysqli_close($base);

          
        }
        ?>

    </head>

    <body>

        <form method="post" id="choix" name="choix">
            <div class="row">
                <nav class="navbar navbar-inverse col-md-12">
                    <div class="container-fluid">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.php">Home</a></li>
                            <div class="form-group">
                                <select class="form-control connard" name="ville">
                                    <option value="" disabled selected>Choisir une ville..</option>
                                    <option value="1">Paris</option>
                                    <option value="2">Lyon</option>
                                    <option value="3">Marseille</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control connard" name="type">
                                    <option value="" disabled selected>Choisir un type..</option>
                                    <option value="1">scooter</option>
                                    <option value="2">voiture</option>
                                    <option value="3">moto</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control connard" name="couleur">
                                    <option value="" disabled selected>Choisir une couleur..</option>
                                    <option value="noir">Noir</option>
                                    <option value="Gris">Gris</option>
                                    <option value="Bleu">Bleu</option>
                                    <option value="Blanc">Blanc</option>
                                    <option value="Rouge">Rouge</option>
                                </select>
                            </div>
                            <li>
                            </li>
                            <div class="form-group">
                                <select class="form-control connard" name="modele">
                                    <option value="" disabled selected>model</option>
                                    <option value="coupe">coupé</option>
                                    <option value="break">break</option>
                                </select>
                            </div>
                        </ul>
                        <li><input type="submit" class="btn btn-default connard" value="submit"/></li>
                        
                       

                    </div>

                </nav>
 </div> 
            </form>
                <div class="container-fluid col-md-12">
                  
                    <?php if(isset($qimg)){
                    while (($img = mysqli_fetch_assoc($qimg))!= NULL ){ 
                        ?>
                    <form action="recap.php" method="POST">
                    <div class="col-md-offset-1 col-md-3 panel panel-default">
                        <input name ="id" type="hidden" value="<?php echo $img["numero_serie"] ;?>">
                        <div class="panel-heading"><h4><span class="label label-primary"><?php echo $img["marque"]."-".$img["modele"]; ?></span></h4></div> 
                        <div class="panel-body"> <img src="voiture.png" class="col-md-12" alt="Hé Hé"> </div>
                    <div class="panel-footer">
                        <h4><span class="label label-success"><?php echo $img["prix"]."€ /J"; ?></span></h4>
                        <input class="btn btn-info"  type="submit"  value="Submit"/> 
                    </div>
                  
                    </div>
                    </form>
                    <?php } }?>
                   

                </div>


           
            <script type="text/javascript">
                $.post('recherche.php', $('#choix').serialize())
              
           </script>
    </body>

</html>