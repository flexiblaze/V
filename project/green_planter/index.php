<?php

// define variables and set to empty values
$nameErr = $emailErr =$commentErr= "";
$name = $email = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }


    if (empty($_POST["comment"])) {
        $commentErr = "Comment is required";
    } else {
        $comment = test_input($_POST["comment"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $comment)) {
            $comment = "Only text messages are accepted";
        }
    }


}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="windth=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Green Planter</title>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<header>

    <img src="giphy.webp" alt="logo">
    <h1>Green Planter</h1>

    <div class="navbar">

    <a class="active" href="#"><i class="fa fa-fw fa-home"></i> Home</a>
    <a href="#"><i class="fa fa-fw fa-shop"></i> Shop</a>
    <a href="#"><i class="fa fa-fw fa-nieuws"></i> Nieuws</a>
    <a href="#"><i class="fa fa-fw fa-Blog"></i> Blog</a>

    </div>
    </header>

<body>

  <img src="1.jpg" alt="foto" width="460" height="345"> 
   <br>
   <h2>Welcome to Green Planter</h2>

   <p><strong> Planter is great place to buy some tree, plants and other things to improve your green enviroment</strong></p>
   <p><b>If u have any questions feel free to contact with us we are caring our customer.</b></p>
   <p><i>We are currently free shipping to all countries in Europa. If you live in USA and
    Canada go to ca.com shoppen</i></p>
  <p id="time"><strong><?php echo "The time is " . date("h:i:sa");?> </strong> </p>

</body>
<footer>

    <h2>Contact Opnemen</h2>
    <p><span class="error">* required field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name" value="<?php echo $name;?>">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        E-mail: <input type="text" name="email" value="<?php echo $email;?>">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        Comment: <input type="text" name="comment" value="<?php echo $comment;?>">
        <span class="error">* <?php echo $commentErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
        <br>
    </form>

    <?php
    echo "<h2 class='input'>Your information:</h2>";
    echo "<p class='name'>$name</p></html>";
    echo "<br>";
    echo "<html><p class='email'>$email</p></html>";
    echo "<br>";
    echo "<html><p class='bericht'>$comment</p></html>";
    ?>

    <hr>
    @Copyright Green Planter 2022- All Right Reserved.



</footer>
</html>