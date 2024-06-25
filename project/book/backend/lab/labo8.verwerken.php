
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="windth=device-width, initial-scale=1.0">

    <title>Lab 1.08</title>

</head>
<body>

<h1> Uw gegevens zijn</h1>

<?php

$achterName= $_REQUEST['fachtername'];

$voorName= $_REQUEST['fvoorname'];

$straat= $_REQUEST['fstraat'];

$postcode= $_REQUEST['fpostcode'];

$plaats= $_REQUEST['plaats'];

$email= $_REQUEST['femailadres'];

$opleiding= $_REQUEST['opleiding'];


echo "Achternaam: $achterName<br>";
echo "Voornaam: $voorName<br>";
echo "Straat: $straat<br>";
echo "Postcode: $postcode<br>";
echo "Plaats: $plaats<br>";
echo "E-mailadres: $email<br><br>";


if ($opleiding=='I'){
    echo "ICT opleidingen zijn vol. Kies een andere opleiding";
}elseif ($opleiding=='E'){
    echo "U wordt ingeschreven voor de volgende opleiding: Engels";
}elseif ($opleiding=='T'){
    echo "U wordt ingeschreven voor de volgende opleiding: Techniek";
}else{
echo "U wordt ingeschreven voor de volgende opleiding: Nederlands";

}











?>
