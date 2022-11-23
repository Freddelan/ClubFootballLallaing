<?php
 
  $conn = "";
  
 try {
     $servername = "localhost";
     $dbname = "clubfootlallaing";
     $username = "root";
      $password = "paradoxe0311";
  
      $conn = new PDO("mysql:host=$servername; dbname=clubfootlallaing",$username, $password, array (PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')); 
     
     $conn->setAttribute(PDO::ATTR_ERRMODE,
                     PDO::ERRMODE_EXCEPTION);
 }  catch(PDOException $e) {
     echo "Connection failed: " . $e->getMessage();
  }
 
?> 