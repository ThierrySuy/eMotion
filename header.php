<!Doctype html>
<html>
    <?php
    session_start();
    
     function securite_bdd($string)

    {

        // On regarde si le type de string est un nombre entier (int)

        if(ctype_digit($string))

        {

            $string = intval($string);

        }

        // Pour tous les autres types

        else

        {
            $base = mysqli_connect('localhost', 'root', '','emotion');

            $string = mysqli_real_escape_string($base,$string);

            $string = addcslashes($string, '%_');

        }

        

        return $string;

    }
    ?>
    <head>

        <link rel="stylesheet" href="emoji.css"> 
        <link rel="stylesheet" href="jquery-ui.min.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="external/jquery/jquery.js"></script>
        <script src="jquery-ui.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </head>

    <header>
        <span> <a href="index.php"><img src="images/logo-color.png" alt="Emotion" style="width:75px; height:50px;"></img></a></span>
        <button class="hamburger">&#9776;</button>
        <button class="cross">&#735;</button>
    </header>



    <div class="menu">
        <ul>
            <?php
            if (!empty($_SESSION['Auth'])) {
                $id = $_SESSION['id'];
                if ($_SESSION['Auth']['role'] == 4) {
                    echo '<li style="margin-right:auto;"><a href="control_vehicule.php">Gérer les véhicules de location</a></li>';
                    echo '<li style="margin-right:auto;"><a href="control_loc.php">Gérer les locations</a></li>';
                    echo '<li style="margin-right:auto;"><a href="vehicule_en_location.php">Véhicules en cours de location</a></li>';
                }
                echo "    
          <li><a href='profil.php?id=$id'>Mon compte</a></li>
          <li><a href='notre-philosophie.php'>Notre philosophie</a></li>
          <li><a href='recherche.php'>Louer un véhicule</a></li>
          <li><a href='carte-agence.php'>Carte des agences</a></li>
          <li><a href='contact.php'>Nous Contacter</a></li>
          <li><a href='historique.php'>Historique des réservations</a></li>
          <li><a href='logout.php'>Déconnexion</a></li>";
            } else {
                echo "
          <li><a href='notre-philosophie.php'>Notre philosophie</a></li>
          <li><a href='carte-agence.php'>Carte des agences</a></li>
          <li><a href='connexion.php'>Me connecter</a></li>
          <li><a href='contact.php'>Nous Contacter</a></li>";
            }
            ?>
        </ul>
    </div>



    <script>
        $(document).ready(function () {

            $(".cross").hide();
            $(".menu").hide();
            $(".hamburger").click(function () {
                $(".menu").slideToggle("slow", function () {
                    $(".hamburger").hide();
                    $(".cross").show();
                });
            });

            $(".cross").click(function () {
                $(".menu").slideToggle("slow", function () {
                    $(".cross").hide();
                    $(".hamburger").show();
                });
            });

            $(function () {
                $("#datepicker").datepicker();
            });




        });


    </script>