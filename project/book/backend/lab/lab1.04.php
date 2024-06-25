<html>
    <head>
        <title>Php Page</title>
</head>
<body>


<h3>php lab 1.4</h3>
<?php
$naam = "Karim";
$nederlands = "8.5";
$engels = "7.7";
$rekenen = "6.7";
$programmeren = "8.5";
$databases = "9.4";
echo "<table border='1'>";

$gemiddeld1= $nederlands+ $engels+ $rekenen + $programmeren +$databases;
$echtGemiddeld= $gemiddeld1/5; 

$naam2 = "Sophie";
$nederlands2 = "8.9";
$engels2 = "8.7";
$rekenen2 = "9.7";
$programmeren2 = "9.5";
$databases2 = "9.2";

$gemiddeld2= $nederlands2+ $engels2+ $rekenen2 + $programmeren2 +$databases2;
$echtGemiddeld2= $gemiddeld2 /5; 

$gemiddeld3= $gemiddeld1 + $gemiddeld2;

$gemiddeld4 =$gemiddeld3 /10;

echo "<table border='2'>

 


<caption>
<strong>Rapport</strong>
</caption>
<thead>

<tr>
<th>Naam</th><th>Nederlands</th><th>Engels</th>
<th>Rekenen</th><th>Programmeren</th>
<th>Databases</th>
<th>Gemiddeld</th>
</tr>

</thead>
<tbody>
<tr>
<td>$naam</td><td>$nederlands</td><td>$engels</td>
<td>$rekenen</td><td>$programmeren</td>
<td>$databases</td><td>$echtGemiddeld</td>
</tr>

<tr>
<td>$naam2</td><td>$nederlands2</td><td>$engels2</td>
<td>$rekenen2</td><td>$programmeren2</td>
<td>$databases2</td><td>$echtGemiddeld2</td>
</tr>


</tbody>
<tfoot>
<tr>
<td colspan='6'>Groep gemiddeld</td><td>$gemiddeld4</td>
</tr>
</tfoot>
</table>";


?>



</body>
</html>

    