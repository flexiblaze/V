<?php
	
	include 'config.php';

	if (isset($_POST['post_comment'])) {

		$name = $_POST['name'];
		$message = $_POST['message'];
		
		$sql = "INSERT INTO comments (name, message)
		VALUES ('$name', '$message')";

		if ($conn->query($sql) === TRUE) {
		  echo "";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Sonsie+One&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<title>Ömer</title>
</head>
<body>
    <div class="container">
        <div class="logo">
          <img src="logo.png" alt="" width="130"/>
          </div>
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
          <img src="Icon awesome-basketball-ball.png" alt="Snow" style="width:3%">
        </div>
        <div class="column">
          <img src="Icon awesome-laptop-code.png" alt="Forest" style="width:3%">
        </div>
        <div class="column">
          <img src="Icon metro-spoon-fork.png" alt="Mountains" style="width:3%">
        </div>
        <div class="column">
            <img src="Icon awesome-money-check-alt.png" alt="" style="width:3%">
          </div>
          <div class="column">
            <img src="Icon awesome-book-open.png" alt="" style="width:3%">
          </div>

      </div>

      
      <footer>

        <div class="socials">
          <p>Socials:</p>
          <a href="https://www.linkedin.com/in/%C3%B6mer-warmtea-08161321a/"><img src="Icon awesome-linkedin.png" alt=""></a>
          <a href="https://github.com/flexiblaze"><img src="Icon awesome-github.png" alt=""></a>
          <a href="https://youtube.com"><img src="Icon awesome-youtube.png" alt=""></a>
        </div>
      </footer>
      <br><br>

      <div class="wrapper">
		<form action="" method="post" class="form">
			<input type="text" class="name" name="name" placeholder="Name">
			<br>
			<textarea name="message" cols="30" rows="10" class="message" placeholder="Message"></textarea>
			<br>
			<button type="submit" class="btn" name="post_comment">Post Comment</button>
		</form>
	</div>

	<div class="content">
		<?php

			$sql = "SELECT * FROM comments";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
			   
		?>
		<h3><?php echo $row['name']; ?></h3>
		<p><?php echo $row['message']; ?></p>

		<?php } } ?>
	</div>

      
     

</body>
</html>