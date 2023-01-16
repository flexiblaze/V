<?php

// For Php File

include 'comment.php';
include 'connection.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Ömer</title>

</head>
<body>

<!-- HEADER -->
<div id="img">
    <div class="navigation">
      <nav>
          <img id="logo" src="images/logo.png" alt=""/>
            <ul>
                <li><a href="#container">About</a></li>
                <li><a href="#work-section">Work</a></li>
                <li><a href="#cv-part">Cv</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
          </nav>
        </div>

<!-- INTRO -->
       <div class="welcome">
        <h1 id="intro">I'm Ömer.</h1>
       <p id="dynamic">software developer (for now)</p>
       </div>
     
<!-- iNTRO ICONS -->
       <div class="row">
        <div class="column">
          <img src="images/ball.png" alt="Snow" style="width:3%">
        </div>
        <div class="column">
          <img src="images/laptop.png" alt="Forest" style="width:3%">
        </div>
        <div class="column">
          <img src="images/fork.png" alt="Mountains" style="width:3%">
        </div>
        <div class="column">
            <img src="images/money.png" alt="" style="width:3%">
          </div>
          <div class="column">
            <img src="images/book.png" alt="" style="width:3%">
          </div>
      </div>
</div>
      <hr>


<!-- ABOUT -->
      <section>
          <div id="container">
            <h1 id="about"> About</h1>
            <p>My name is Ömer. I live in the Nederlands for 3 years
              I am a software developer. I have experince with HTML, CSS, JavaScript, ReactJS.
              You can check my projects in "Work" section. 
            </p>
            <p>In my free time I love to go gym, spend time with my family and read some books 
            </p>
            <p>
              Thanks for checking my portfolio. You can always reach me out in "Socials" section. And do not forget to leave a comment.
            </p>  
          </div>
      </section>

<!-- WORK -->
      <section id="work-section">
         <h1 class="title-text">Work</h1>
            <div class="big-box">
              <div class="childeren">
               <a href="https://github.com/flexiblaze/business_card" target="_blank">  <img src="images/1.png" id="avatar"> </a>
                  <h4 class="titel-childeren">Business Card</h4>
                  <p class="p">I made a business card of myself. Check in github</p>
              </div>
              <div class="childeren">
                 <a href="https://github.com/flexiblaze/converter" target="_blank"> <img src="images/2.png" id="avatar"> </a>
                  <h4 class="titel-childeren">Conventer</h4>
                  <p class="p">I made conventer using JavaScript. Check in Github</p>
                  
              </div>
              <div class="childeren">
               <a href="https://www.instagram.com/studystarted/" target="_blank"> <img src="images/3.png" id="avatar"> </a> 
                  <h4 class="titel-childeren">Minimalist Designs</h4>
                  <p class="p">I made minimalists designs in Adobe and post it in Instagram</p>
              </div>

        </div>

<!-- CV -->

      </section>
      <section id="cv-part">
              <h1 class="title-text">CV</h1>
                <p>Click here to dowloand <a id="dowloand" href="images/cv.png" download>my CV</p></a>

      </section>

<!-- CONTACT -->

      <section id="contact">
          <h1 class="title-text">Contact</h1>
          <p>You can message me in Linkedin or send a email to ilikcay24@gmail.com</p>
      </section>

      </body> 

<!-- FOOTER- SOCIALS -->

      <footer>

          <div class="socials">
              <p>Socials:</p>
              <a href="https://www.linkedin.com/in/%C3%B6mer-warmtea-08161321a/"><img src="images/linkedin.png" alt=""></a>
              <a href="https://github.com/flexiblaze"><img src="images/github.png" alt=""></a>
              <a href="https://youtube.com"><img src="images/youtube.png" alt=""></a>
          </div>
      </footer>
      <br><br>

      
<!-- COMMENT SECTION -->
      <h1 class="title-text">Leave A Comment</h1>
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