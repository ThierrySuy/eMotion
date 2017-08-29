<?php 
include('/header.php'); 
  if (isset($_SESSION['Auth']['role'])) {
      $role = $_SESSION['Auth']['role'];
  }
?>

<!Doctype html>
<html>
    <title>Notre Philosophie</title>

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

 <body>

 <center>

<h3 class="display-2">Notre Philosophie</h3>

<img src="./images/slogan.png">

<div class="container-fluid col-md-12">

<blockquote class="col-md-6 col-sm-offset-3" class="blockquote"></br></br>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque volutpat venenatis diam quis blandit. Donec ornare felis sed lacinia maximus. Morbi fermentum mollis purus ac cursus. Vestibulum hendrerit non lectus finibus pharetra. Etiam eu velit felis. Nullam tincidunt tempus arcu, et porttitor velit blandit sed. Suspendisse tincidunt nibh leo, in volutpat diam fringilla in. Duis at lectus id magna malesuada bibendum et vel libero.

Suspendisse auctor, tortor vitae ornare efficitur, velit turpis sagittis neque, vel aliquet turpis odio a ipsum. Phasellus ac bibendum velit. Nunc tincidunt euismod ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris at sagittis libero, id sodales mauris. Duis faucibus, ligula eget interdum eleifend, lacus dolor tristique felis, eget malesuada neque felis vitae arcu. Vivamus orci quam, viverra quis arcu ac, egestas faucibus leo. Cras tortor magna, porttitor a magna non, aliquet rutrum justo. Aliquam malesuada leo felis. Curabitur id lacinia sem, eu sollicitudin quam. Duis sit amet tortor eget risus sagittis mattis. Praesent lectus eros, placerat in arcu quis, imperdiet bibendum neque.

Nam in aliquet leo. Fusce sollicitudin ante eget ipsum luctus finibus. Mauris bibendum tempor ornare. Integer non sapien at nunc suscipit venenatis ac nec nulla. Vestibulum cursus lorem in odio placerat, non varius dolor efficitur. Curabitur laoreet mi finibus, porta eros eget, suscipit velit. Integer a convallis diam. Donec suscipit, sem aliquam porta aliquet, est orci aliquam nibh, at placerat lectus justo ornare enim. Nam vitae odio eu dui vestibulum dictum. Sed porttitor laoreet leo id lobortis. Vestibulum at dui ante. Vestibulum pharetra accumsan hendrerit.</p>

<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>

</blockquote>

</div>

<h3 class="display-2">Une équipe à votre écoute</h3>

<blockquote class="col-md-6 col-sm-offset-3" class="blockquote"></br></br>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque volutpat venenatis diam quis blandit. Donec ornare felis sed lacinia maximus. Morbi fermentum mollis purus ac cursus. Vestibulum hendrerit non lectus finibus pharetra. Etiam eu velit felis. Nullam tincidunt tempus arcu, et porttitor velit blandit sed. Suspendisse tincidunt nibh leo, in volutpat diam fringilla in. Duis at lectus id magna malesuada bibendum et vel libero.

Suspendisse auctor, tortor vitae ornare efficitur, velit turpis sagittis neque, vel aliquet turpis odio a ipsum. Phasellus ac bibendum velit. Nunc tincidunt euismod ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris at sagittis libero, id sodales mauris. Duis faucibus, ligula eget interdum eleifend, lacus dolor tristique felis, eget malesuada neque felis vitae arcu. Vivamus orci quam, viverra quis arcu ac, egestas faucibus leo. Cras tortor magna, porttitor a magna non, aliquet rutrum justo. Aliquam malesuada leo felis. Curabitur id lacinia sem, eu sollicitudin quam. Duis sit amet tortor eget risus sagittis mattis. Praesent lectus eros, placerat in arcu quis, imperdiet bibendum neque.

Nam in aliquet leo. Fusce sollicitudin ante eget ipsum luctus finibus. Mauris bibendum tempor ornare. Integer non sapien at nunc suscipit venenatis ac nec nulla. Vestibulum cursus lorem in odio placerat, non varius dolor efficitur. Curabitur laoreet mi finibus, porta eros eget, suscipit velit. Integer a convallis diam. Donec suscipit, sem aliquam porta aliquet, est orci aliquam nibh, at placerat lectus justo ornare enim. Nam vitae odio eu dui vestibulum dictum. Sed porttitor laoreet leo id lobortis. Vestibulum at dui ante. Vestibulum pharetra accumsan hendrerit.</p>

<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>

</blockquote></center>

</body>

<div class="col-md-12">

  <?php 
include('/footer.php'); 
?>
</div>


</html>