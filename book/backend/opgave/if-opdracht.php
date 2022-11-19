<?php

echo "<br> Opdracht 24 <br> <br>";

$gewerkteuren =40;
$uurtarief=15.00;
$bonus=100.00;

$bruto = $gewerkteuren * $uurtarief;

if ($gewerkteuren<=40){
    echo "Uw basissalaris is: " . $bruto;
    echo "<br>Uw belasting is: " . 0.40 * $bruto;
}

echo "<br> <br> Opdracht 25 <br> <br>";

$belasting = 0.40 * $bruto;

if ($gewerkteuren<=40){
    echo "Uw basissalaris is: " . $bruto;
    echo "<br>Uw belasting is: " . $belasting;
    echo "<br>Uw nettobedrag is: ". ($bruto-$belasting);
}

echo "<br> <br> Opdracht 26 <br> <br>";

$gewerkteuren = 45;
$uurtarief=15.00;
$bonus=100.00;

$bruto = $gewerkteuren * $uurtarief;
$bonus_bruto= $bonus + $bruto;
$belasting = 0.45 *$bonus_bruto;

if ($gewerkteuren<=40){
    echo "Uw basissalaris is: " . $bruto;
    echo "<br>Uw belasting is: " . $belasting;
    echo "<br>Uw nettobedrag is: ". ($bruto-$belasting);
}elseif ($gewerkteuren > 40){
    echo "Uw basissalaris is: " . $bruto;
    echo "<br>Uw basissalaris plus bonus is: ".($bruto+$bonus);
    echo "<br>Uw belasting is: ". $belasting;
}

echo "<br> <br> Opdracht 27 <br> <br>";

if ($gewerkteuren<=40){
    echo "Uw basissalaris is: " . $bruto;
    echo "<br>Uw belasting is: " . $belasting;
    echo "<br>Uw nettobedrag is: ". ($bruto-$belasting);
}elseif ($gewerkteuren > 40){
    echo "Uw basissalaris is: " . $bruto;
    echo "<br>Uw basissalaris plus bonus is: ".($bruto+$bonus);
    echo "<br>Uw belasting is: ". $belasting;
    echo "<br>Uw nettobedrag is: ". ($bonus_bruto-$belasting);
}

echo "<br> <br> Opdracht 28 <br> <br>";

$controle = ($gewerkteuren < 40 ? "Belasting is 40%" : "Belasting is 45%");

echo $controle;





















    ?>