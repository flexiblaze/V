<html>
<head>
    <meta charset="utf-8">
    <title> Data Types  </title>

</head>

<?php

//OPGAVE1
$naam="Ömer";
$straat="Rietzoom 90";
$woonplaats="Gouda";

//OPGAVE2
$naw = $naam . " ". $straat . " ". $woonplaats; // (.) makes together 
echo "Gegevens: $naw ";
// hier hebben we de variable $naw binnen een string als volgt geplaatst:

//OPGAVE3
echo <<< TEKST
<br>Salarisspecificatie van $naam: 2000 euro
<br>Maand:November
<br>Jaar:2020
<br>
TEKST;


// OPGAVE4
$dollars= 999.99;
$koers=1.2;
$euros=$dollars*$koers;

$newEuros= round($euros,2);

echo <<< TEKST
<br /> Bedrag in euro's is: $newEuros
TEKST;


?>
<body>
</body>
</html>

