<?php

include 'comment.php';
include 'connection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Sonsie+One&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="style/style.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<title>Ömer</title>
</head>
<body>

    <div class="container">
        <div class="logo">
          <img src="images/logo.png" alt="" width="130"/>
          </div>
<!-- -->
        <nav>
          <ul>
            <li><a href="#work">Work</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Cv</a></li>
            <li><a href="">Contact</a></li>
          </ul>
          </nav>
        </div>
       <div class="welcome">
        <h1>I'm Ömer.</h1>
        <p>software developer (for now).</p>
       </div>

       <div class="row">
        <div class="column">
          <img src="images/Icon awesome-basketball-ball.png" alt="Snow" style="width:3%">
        </div>
        <div class="column">
          <img src="images/Icon awesome-laptop-code.png" alt="Forest" style="width:3%">
        </div>
        <div class="column">
          <img src="images/Icon metro-spoon-fork.png" alt="Mountains" style="width:3%">
        </div>
        <div class="column">
            <img src="images/Icon awesome-money-check-alt.png" alt="" style="width:3%">
          </div>
          <div class="column">
            <img src="images/Icon awesome-book-open.png" alt="" style="width:3%">
          </div>

      </div>

      </body>  
      <footer>

        <div class="socials">
          <p>Socials:</p>
          <a href="https://www.linkedin.com/in/%C3%B6mer-warmtea-08161321a/"><img src="images/Icon awesome-linkedin.png" alt=""></a>
          <a href="https://github.com/flexiblaze"><img src="images/Icon awesome-github.png" alt=""></a>
          <a href="https://youtube.com"><img src="images/Icon awesome-youtube.png" alt=""></a>
        </div>
      </footer>
      <br><br>

      

  <?php
    echo "<div class='wrapper'>
        <form method='POST' class'form' action='".setComments($conn)."'>
			  <input type='text' class='name' name='name' placeholder='Name'>
			  <br>
			  <textarea name='message' cols='30' rows='10' class='message' placeholder='Message'></textarea>
			  <br>
			  <button type='submit' class='btn' name='post_comment'>Post Comment</button>
		    </form>
        </div>";

        getComments($conn);
?>

</html>