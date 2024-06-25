<?php  

 session_start();
 include 'connection.php'; 
 
 $query = "SELECT * from `comments`";  
 $run = mysqli_query($conn,$query);  
 

 ?>
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>Admin</title>  
      <link rel="stylesheet" type="text/css" href="style/admin.css">  
 </head>  
 <body>  
 <header></header>  
 <table border="1" cellspacing="0" cellpadding="0">  
      <tr class="heading">  
           <th>Row</th>  
           <th>ID</th>  
           <th>Name</th>  
           <th>Message</th>
           <th>Manage</th>
      </tr>  
      

<!-- Table Of Data -->
     <?php

      $i=1;  
           if ($num = mysqli_num_rows($run)>0) {  
                while ($result = mysqli_fetch_assoc($run)) {  
                     echo "  
                          <tr class='data'>  
                          <td>".$i++."</td>  
                               <td>".$result['Id']."</td>  
                               <td>".$result['name']."</td>  
                               <td>".$result['message']."</td>  
                               <td><a href='delete.php?Id=".$result['Id']."' Id='btn'>Delete</a></td>  
                          </tr>  
                     ";  
                }  
           }  
         
       
      ?>  


 </table>  
 </body>  
 </html>  