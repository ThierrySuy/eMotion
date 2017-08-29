<!Doctype html>
<html>
    <title>Récapitulatif</title>

  <?php include('/header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th class="text-center">Price</th>
                        
                        <th> </th>
                    </tr>
                </thead>

               <?php

               /*
                
                $base = mysqli_connect('localhost', 'root', '','emotion');

                $vehiculep = SELECT * FROM vehicule WHERE id_vehicule = ".$id_vehiculep."
                // au cas ou $result = mysqli_query($vehiculep) ;
                mysqli_fetch_assoc($vehiculep);

                */
                ?> 

                <tbody>
                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="https://m.bmw.fr/content/dam/bmw/common/all-models/4-series/gran-coupe/2017/navigation/BMW-4-Series-Gran-Coupe-ModelCard.png" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">BMW Serie 5</a></h4>
                                <h5 class="media-heading"> by <a href="#">BMW</a></h5>
                                <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input type="email" class="form-control" id="exampleInputEmail1" value="1">
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>$50.000</strong></td>
                        
                        <td class="col-sm-1 col-md-1">
                        <button type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span> Remove
                        </button></td>
                    </tr>
                    
                    <tr>
                        <td>   </td>
                        <td><h2>Total</h2></td>
                        <td class="text-right"><h3><strong><?php //echo $recap['prix_achat']; ?></strong></h3></td>
                    </tr>
                     <tr>
                        <td>   </td>
                        <td>
                        <button type="button" class="btn btn-default">
                            <a href="./recherche.php"><span class="glyphicon glyphicon-shopping-cart"></span> << Retour à la page de Recherche</a>
                        </button></td>

                        <td>

                        <!--<input type="button" value="Confirmer" onClick="maFonction()" class="btn btn-success" /><span class="glyphicon glyphicon-play"></span>

                         <a href="./cb.php"><button type="button" class="btn btn-success">Confirmer <span class="glyphicon glyphicon-play"></span></a> -->

                            <?php 

                        $base = mysqli_connect('localhost', 'root', '','emotion');
                      
                        if(empty($_POST)) {

                            ?>

                        <form name="validate" action="./recap.php" method="post">
                         <input type="submit" name="Submit" id="<?php echo $vehicule ;?>" value="Valider"> 
                        </form>
                        
                        <?php
                                }

                        else {
                        $vehicule = $_POST["id"];

                        $car = mysqli_query($base, "SELECT * FROM vehicule v, Location l WHERE v.numero_serie = '".$vehicule."'");

                        $car2 = mysqli_fetch_assoc($car);

                        $id_user = $_SESSION["id"];

                        $numero_serie = $car2["numero_serie"];

                        $date_debut = $_POST["date_debut"];

                        $date_fin = $_POST["date_fin"];
                        
                        $etat_location = $car2["etat_location"];
                        
                        $duree_jour = $car2["duree_jour"];



                       /* $select = SELECT * FROM vehicule WHERE vehicule = $_POST["$vehicule"]; */



                        $result = mysqli_query($base,"INSERT INTO `location` (`id_location`, `id_user`, `numero_serie`, `date_debut`, `date_fin`, `etat_location`, `duree_jour`) VALUES (NULL, ".$id_user.", ".$numero_serie.", ".$date_debut.", ".$date_fin.", ".$etat_location.", ".$duree_jour."');");

            




                        echo 'Values inserted'; 
                        
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