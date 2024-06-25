<?php

// to set the comments
    function setComments($conn){
        if(isset($_POST['post_comment'])){
           $name = $_POST['name'];
            $message = $_POST['message'];


            $sql = "INSERT INTO  comments(name, message) VALUES('$name', '$message')";
            $result =$conn->query($sql);
           
        }
    }

    // to write the comments 
    function getComments($conn){
        $sql = "SELECT * FROM comments";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
            echo"<div class='comment-box'><p>";
                echo $row['name']."<br>";
                echo $row['message']."<br>";   
            echo"</p></div>";
        }
    }

 
?>