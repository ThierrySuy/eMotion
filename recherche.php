<?php 
include('/header.php'); 
if (isset($_SESSION['Auth']['role']) && ($_SESSION['Auth']['role'] == 2) || ($_SESSION['Auth']['role'] == 4)) {
    $role = $_SESSION['Auth']['role'];
    $id = $_SESSION['id'];
} else {
    header('Location:index.php');
}
?>

<!DOCTYPE html>
<html>    
    <head>

        <title>Recherche</title>
        <?php
        $base = mysqli_connect('localhost', 'root', '','emotion');
        if (isset($_POST["ville"]) && isset($_POST["type"])) {
            $ville =  securite_bdd($_POST["ville"]);
            $type =  securite_bdd($_POST["type"]);
           $date_prise = securite_bdd($_POST['date_debut']);
             $date_rendu = securite_bdd($_POST['date_fin']);
            
            $lesimages = "";



    

            $lesimages .= "SELECT * FROM vehicule WHERE numero_serie NOT IN (SELECT numero_serie from location where (date_debut between '".$date_prise."' AND '".$date_rendu."' OR date_fin between '".$date_prise."' AND '".$date_rendu."'))";
            
            if (isset($_POST["ville"])){
                $lesimages .= "AND ville =  '". $ville ."'  ";
            }
            if ($_POST["type"]) {
            $lesimages .= "AND id_type_vehicule = '" . $type."'";
        }
            
             if (isset($_POST['couleur'])){
                  $couleur = securite_bdd($_POST["couleur"]);
                 $lesimages .= "AND couleur = '".$couleur."'";
                 }
             if(isset ($_POST['model'])){
                 $lesimages .= "AND modele = '".$modele."'";
             }    
          
           
            $qimg = mysqli_query($base, $lesimages);
            var_dump($lesimages);
            echo mysqli_error($base);

    
          
         
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
                                <select class="form-control connard" name="ville" required>
                                    <option value="" disabled selected>Choisir une ville..</option>
                                    <option value="1">Paris</option>
                                    <option value="2">Lyon</option>
                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control connard" name="type" required>
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
                            <div class="form-group">
                                <label class="eltitulo">choisir la Date de début de location (YYYY/MM/DD): </label>
                                <input  name="date_debut" type="date" placeholder="YYYY/MM/DD" class="form-control input-md" required="">
                                <label class="eltitulo">choisir la Date de fin de location (YYYY/MM/DD) : </label>
                                <input  name="date_fin" type="date" placeholder="YYYY/MM/DD" class="form-control input-md" required="">
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
                        <?php if (isset ($_POST['date_debut']) && isset ($_POST['date_fin'])) { ?>
                        <input name ="date_debut" type="hidden" value="<?php echo $_POST['date_debut'] ;?>">
                        <input name ="date_fin" type="hidden" value="<?php echo $_POST['date_fin'] ;?>">
                        <input name="prix" type="hidden" value="<?php echo $img['prix'];?>"> 
                        <input name="modele" type="hidden" value="<?php echo $img['modele'];?>">
                        <input name="prix" type="hidden" value="<?php echo $img['prix'];?>">
                        <input name="marque" type="hidden" value="<?php echo $img['marque'];?>">
                        <?php } ?>
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