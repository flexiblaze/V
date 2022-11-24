<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Opdracht</title>
</head>
<body>
    <form name="order" action="" method="post">
        <p>Selecteer een bestemming:</p>
   <select name="land" value="true">
<option value=" "></option>
<option value="nl">Nederland</option>
<option value="be">Belgie</option>
<option value="de">Duitsland</option>
<option value="es">Spanje</option>
</select>
<input type="submit" name="submit" value="Vesturen">
<p>--------------------------------------------------------</p>

</form>
<?php

$land = 'Spanje';

$retourtje = match ($land){

    'Nederland'=> 'Retourtje Nederland is 100',
   'Belgie' => 'Retourtje Belgie is 100',
   'Duitsland' => 'Retourtje Duitsland is 100',
   'Spanje' => 'Retourtje Spanje is 100',
};

var_dump($retourtje);





?>