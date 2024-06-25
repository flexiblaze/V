<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab1.12</title>
</head>
<body>
    <div class="reiskost"><h2>Reiskosten bereken</h2>
    <form name="trip" action="" method="post">
    vertrek: <select name="vertrek">
        <option value="1">Amsterdam</option>
        <option value="2">Utrecht</option>
        <option value="3">Den haag</option>
        <option value="4">Roterdam</option>
    </select>
    Bestemming:
    <select name="bestemming">
        <option value=""> </option>
        <option value="1">Amsterdam</option>
        <option value="2">Utrecht</option>
        <option value="3">Den haag</option>
        <option value="4">Rotterdam</option>
    </select>
    <br>
    <br>
    <input type="submit" name="submit" value="berekenen">
    </form>
    <hr>
    </div>
<?php
if(isset($_POST["submit"])){
    if(empty($_POST["vertrek"])&& empty($_POST["bestemming"])){
        echo " geen keuze gemakt";
    }
    else{
    $kosten= reiskosten($_POST["vertrek"],$_POST["bestemming"]);
    echo "<h2>de berekende kosten zijn: ".$kosten."euro</h2>";
}
}
function reiskosten($vertrek, $bestemming){
    $reiskosten = array();
    $reiskosten[1] = array();
    $reiskosten[2] = array();
    $reiskosten[3] = array();
    $reiskosten[4] = array();

    $reiskosten[1][1] = 0;
    $reiskosten[1][2] = 30;
    $reiskosten[1][3] = 60;
    $reiskosten[1][4] = 90;
    
    $reiskosten[2][1] = 30;
    $reiskosten[2][2] = 0;
    $reiskosten[2][3] = 40;
    $reiskosten[2][4] = 20;
    
    $reiskosten[3][1] = 60;
    $reiskosten[3][2] = 40;
    $reiskosten[3][3] = 0;
    $reiskosten[3][4] = 10;
    
    $reiskosten[4][1] = 90;
    $reiskosten[4][2] = 20;
    $reiskosten[4][3] = 10;
    $reiskosten[4][4] = 0;
    
    return ($reiskosten[$vertrek][$bestemming]);
}
?>
</body>
</html>