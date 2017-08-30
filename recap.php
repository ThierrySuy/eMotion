<!Doctype html>
<html>
    <title>Récapitulatif</title>

    <?php include('/header.php'); ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-10 col-md-offset-1">
               <?php if(isset($_POST['modele'])) { ?>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th class="text-center">Price</th>

                            <th> </th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="col-sm-8 col-md-6">
                                <div class="media">
                                    
                                     <img class="media-object" src="https://m.bmw.fr/content/dam/bmw/common/all-models/4-series/gran-coupe/2017/navigation/BMW-4-Series-Gran-Coupe-ModelCard.png" style="width: 72px; height: 72px;"> 
                                    <div class="media-body">
                                        <h4 class="media-heading"><?php echo $_POST['modele'];?></h4>
                                        <h5 class="media-heading"><?php echo $_POST['marque'];?></h5>
                                        <span>Status: </span><span class="text-success"><strong>En Stock</strong></span>
                                    </div>
                                </div></td>
                            <td class="col-sm-1 col-md-1" style="text-align: center">
                                <input type="email" class="form-control" id="exampleInputEmail1" value="1">
                            </td>
                            <td class="col-sm-1 col-md-1 text-center"><strong><?php echo $_POST['prix'];?>€ /J</strong></td>

                            <td class="col-sm-1 col-md-1">
                                <a href="recherche.php" class="btn btn-large btn-danger">  Retour
                                </a></td>
                        </tr>

                        <tr>
                            
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>
                                    <?php } 
                                    
                                    if(!isset($_POST['modele'])){ ?>
                                        
                                <h1 class='col-md-offset-2'> VOTRE COMMANDE A BIEN ETE RECU !! </h1>
                                <a href="index.php" class="btn btn-large btn-danger col-md-4 col-md-offset-4">  Retour A l'accueil
                                </a>
                                    <?php }  ?> 
                                <?php if (isset($_POST['id'])) { ?>
                                
                                    <form action="" method="post">
                                        <input type="hidden" name="insert_loc">
                                        <input type="hidden" name="id2" value="<?php echo $_POST['id']; ?>">
                                        <input type="hidden" name="id3" value="<?php echo $_POST['date_debut']; ?>">
                                        <input type="hidden" name="id4" value="<?php echo $_POST['date_fin']; ?>">  
                                        <input type="submit" name="envoiForm">
                                    </form>
                                <?php } ?> 
                            </td>

                            <td>

                        <!--<input type="button" value="Confirmer" onClick="maFonction()" class="btn btn-success" /><span class="glyphicon glyphicon-play"></span>

                         <a href="./cb.php"><button type="button" class="btn btn-success">Confirmer <span class="glyphicon glyphicon-play"></span></a> -->

                                <?php
                                if (isset($_POST['envoiForm'])) {


                                    $base = mysqli_connect('localhost', 'root', '', 'emotion');

                                    $vehicule = $_POST["id2"];

                                    $car = mysqli_query($base, "SELECT * FROM vehicule v, Location l WHERE v.numero_serie = '" . $vehicule . "'");

                                    $car2 = mysqli_fetch_assoc($car);

                                    $id_user = $_SESSION["id"];

                                    $numero_serie = $car2["numero_serie"];

                                    $date_debut = $_POST["id3"];

                                    $date_fin = $_POST["id4"];

                                    $etat_location = $car2["etat_location"];

                                    $duree_jour = $car2["duree_jour"];



                                    /* $select = SELECT * FROM vehicule WHERE vehicule = $_POST["$vehicule"]; */

                                    function insert_loc($id_user, $numero_serie, $date_debut, $date_fin, $duree_jour) {
                                        $base = mysqli_connect('localhost', 'root', '', 'emotion');
                                        
                                        $laquery = "INSERT INTO `location` (`id_user`, `numero_serie`, `date_debut`, `date_fin`, `etat_location`, `duree_jour`) VALUES (" . $id_user . ", '" . $numero_serie . "', '" . $date_debut . "', '" . $date_fin . "',0, '" . $duree_jour . "');";
                                        $result = mysqli_query($base, $laquery );
                                        
                                        
                                        return $result ; 
                                        
                                    }

                                    if (isset($_POST['insert_loc'])) {


                                        


                                       
                                        
                                    }
                                }
                                ?>

                            </td> 




                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>


<?php include('/footer.php'); ?>

</html>