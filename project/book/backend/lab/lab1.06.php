<?php
$playlist = array(
    array("genre" => "Hiphop", "auteur" => "John Williams", "titel" => "My Girl"),
    array("genre" => "Jaaz", "auteur" => "John Coltrane", "titel" => "New York"),
    array("genre" => "Hiphop", "auteur" => "Shakira", "titel" => "Obsession"),
);

array_push($playlist,['genre' => 'Latin', 'auteur' => 'Caetano Veloso', 'titel' => 'Cafe Atlantico']);

// stap4 zie de printarray functie deze vergt een kleine aanpassing
function printArray2($item,$key){
    echo "<br> Track ". $key." : "."<i>".$item['genre']." | ".$item['auteur']." | ".$item['titel']."</i>";
}



// ook gebruik je nu niet array_walk_resursive, maar array_walk:
array_walk($playlist,'printArray2');
?>