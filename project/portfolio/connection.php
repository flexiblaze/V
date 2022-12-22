<?php

//Connection with database

$conn = mysqli_connect('localhost', 'root', '', 'portfolio');

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

?>


