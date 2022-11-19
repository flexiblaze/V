<html>
<body>

<?php


$arrayNaam= ["een","twee",3,"vier"];

array_push($arrayNaam,5);
echo "<br>";
print_r($arrayNaam);

$type=gettype($arrayNaam[4]);

echo $type;

$deleted=array_pop($arrayNaam);
echo "<br>";
print_r($arrayNaam);

echo "<br>";
array_unshift($arrayNaam,"nul");
print_r($arrayNaam);

echo "<br>";
unset($arrayNaam[0]);

$dataType=gettype($arrayNaam[0]);
print_r($dataType);
echo"<br>";
print_r($arrayNaam);

echo"<br>";
unset($arrayNaam[2]);
print_r($arrayNaam);

echo"<br>";

unset($arrayNaam[4]);
print_r($arrayNaam);







?>

</body>
</html>