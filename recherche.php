<!DOCTYPE html>

<!DOCTYPE html>
<html>
    <head>

        <title>Recherche</title>

        <?php include('/header.php'); ?>
        <?php
        $base = mysqli_connect('localhost', 'root', 'root', 'emotion');
        if (isset($_POST["ville"]) && isset($_POST["type"])) {
            $ville = $_POST["ville"];
            $type = $_POST["type"];
           
            $lesimages = "";



            $sql = "SELECT * FROM vehicule ";

            $lesimages .= "SELECT * FROM vehicule v,location l WHERE v.ville =  '". $ville ."'  AND v.type_vehicule = '" . $type."'";
            
             if (isset($_POST['couleur'])){
                  $couleur = $_POST["couleur"];
                 $lesimages .= "AND v.couleur = '".$couleur."'";
                 }
             elseif(isset ($_POST['model'])){
                 $lesimages .= "AND v.model = '".$modele."'";
             }    
            // $lesimages .= ' AND l.date_debut =< '.$date_prise.' AND l.date_fin =>'.$date_rendu.' OR l.date_debut =< '.$date_rendu.' AND l.date_fin > l.date_debut';
             
                     
            $qimg = mysqli_query($base, $lesimages);
            $img = mysqli_fetch_assoc($qimg);
        
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
                                    <option value="paris">Paris</option>
                                    <option value="lyon">Lyon</option>
                                    <option value="lille">Lille</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control connard" name="type">
                                    <option value="" disabled selected>Choisir un type..</option>
                                    <option value="voiture">voiture</option>
                                    <option value="scooter">scooter</option>
                                    <option value="moto">moto</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control connard" name="couleur">
                                    <option value="" disabled selected>Choisir une couleur..</option>
                                    <option value="noir">Noir</option>
                                    <option value="gris">Gris</option>
                                    <option value="bleu">Bleu</option>
                                    <option value="blanc">Blanc</option>
                                </select>
                            </div>
                            <li>
                            </li>
                            <div class="form-group">
                                <select class="form-control connard" name="model">
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
                <div class="container-fluid col-md-offset-5 col-md-6">
                  
                    <?php if(isset($img)){
                    while ( $img  ){ echo $img['id_vehicule']; echo "</br>" ; ?>
                    <img class="col-md-2" src="<?php echo $img["img"];?>" alt="Hé Hé">
                    <input href="/recap.php?id=<?php echo $img["id_vehicule"] ;?>" type="button"  value="$imgs"/> 
                    <input href="/recap.php" type="submit" name="rec" id="rec" value="selectionner"/> 
                    
                    <?php $img = mysqli_fetch_assoc($qimg) ; } }?>
                   

                </div>


           
            <script type="text/javascript">
                $.post('recherche.php', $('#choix').serialize())
              
           </script>
    </body>

</html>