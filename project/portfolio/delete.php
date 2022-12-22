<?php  
 
 include 'connection.php';  

 if (isset($_GET['Id'])) {  
      $Id = $_GET['Id'];  
      $query = "DELETE FROM `comments` WHERE Id = '$Id'";  
      $run = mysqli_query($conn,$query);  
      if ($run) {  
           header('location:index.php');  
      }else{  
           echo "Error: ".mysqli_error($conn);  
      }  
 }  
 ?>  