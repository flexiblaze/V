
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="windth=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="contact.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Green Planter</title>

  </head>

  <header>

      <img src="giphy.webp" alt="logo">
      <h1>Green Planter</h1>

  </header>

<body>

<?php

$name= $_REQUEST['name'];

$email= $_REQUEST['email'];

$bericht= $_REQUEST['bericht'];


echo "<h2 class='input'>Your information:</h2>";
echo "<html><p class='name'>$name</p></html>";
echo "<br>";
echo "<html><p class='email'>$email</p></html>";
echo "<br>";
echo "<html><p class='bericht'>$bericht</p></html>";

?>


</body>
</html>


