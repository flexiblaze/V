<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edhe">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Boogle</title>

</head>

<body>
    <header>
   <h1>
<a href="index.html"><button class="header-button">Web</button></a>
<a href="index.html"><button class="header-button">Images</button></a>
<a href="index.html"><button class="header-button">Maps</button></a>
   </h1>     
 </header>

 <?php

 if(isset($_POST["Search"])){
    if(empty($_POST["search-text"])){
        echo "error no user input";
    }else{
        echo "Boogle searched for : ";
        echo $_POST['search-text'];
        echo "<br><br>";
        echo(rand(1000000,2000000));
        echo " results in";
        echo (rand(40,50));
        echo " milliseconds";
       
    }
 }
 ?>
</body>
 <footer>
    
    <a href="index.html"><button class="return-button">RETURN</button></a>
    <p>(C) 2022 Boogle Search</p>

 </footer>
</html>

