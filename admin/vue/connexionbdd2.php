<?php
 
  $conn = "";
  
 try {
     $servername = "localhost";
     $dbname = "clubfootlallaing";
     $username = "root";
      $password = "paradoxe0311";
  
      $conn = new PDO(
          "mysql:host=$servername; dbname=clubfootlallaing",
          $username, $password
      );
     
     $conn->setAttribute(PDO::ATTR_ERRMODE,
                     PDO::ERRMODE_EXCEPTION);
 }  catch(PDOException $e) {
     echo "Connection failed: " . $e->getMessage();
  }
 
?> 