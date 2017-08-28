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
                         <input type="submit" name="Submit" id="'$username'" value="Login"> 
                        </form>
                        
                        <?php
                                }

                        else {

                        $username = $_POST["username"];

                        $username = mysqli_real_escape_string($base, $username);

                        $result = mysqli_query("INSERT INTO `location` (`id_location`, `nom_loc`, `id_client`, `nom_client`, `id_vehicule`, `numeroserie`, `plaque`, `adresse_client`, `date_debut`, `date_fin`) VALUES (NULL, '$nom_loc', '$id_client', '$nom_client', '$id_vehicule', '$numeroserie', '$plaque', '$adresse_client', '$date_debut', '$date_fin')") or die(mysqli_error());

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