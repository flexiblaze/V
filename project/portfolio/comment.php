<?php
include("connectiondatabase.php");

       // function code($name,$email,$comment){
        if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $message = $_POST["message"];
        

        $query = "INSERT INTO comments (name, message) VALUES (:name, :message )";
        $query_run = $conn->prepare($query);

        $data = [
            ':name' => $name,
            ':message' => $message,
        ];
        $query_execute = $query_run->execute($data);
        
    }
   
?>