<!Doctype html>

<html>
    <header>
        <span> <img src="images/logo-color.png" alt="Emotion" style="width:75px; height:50px;"></img></span>
        <button class="hamburger">&#9776;</button>
        <button class="cross">&#735;</button>
    </header>



    <div class="menu">
        <ul>
            <?php
            if (!empty($_SESSION['Auth'])) {
                if ($_SESSION['Auth']['role'] == 4) {
                    $id = $_SESSION['id'];
                    echo '<li style="margin-right:auto;"><a href="control_vehicule.php">Gérer les véhicules de location</a></li>';
                    echo '<li style="margin-right:auto;"><a href="control_loc.php">Gérer les locations</a></li>';
                }
                echo "    
          <li><a href='profil.php?id=$id'>Mon compte</a></li>
          <li><a href='notre-philosophie.php'>Notre philosophie</a></li>
          <li><a href='recherche.php'>Louer un véhicule</a></li>
          <li><a href='carte-agence.php'>Carte des agences</a></li>
          <li><a href='contact.php'>Nous Contacter</a></li>
          <li><a href='logout.php'>Déconnexion</a></li>";
            } else {
                echo "
          <li><a href='notre-philosophie.php'>Notre philosophie</a></li>
          <li><a href='recherche.php'>Louer un véhicule</a></li>
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

</html>
