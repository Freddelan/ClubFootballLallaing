 <?php
 
  $conn = "";
  
 try {
     $servername = "localhost";
     $dbname = "connexion_admin";
     $username = "root";
      $password = "paradoxe0311";
  
      $conn = new PDO(
          "mysql:host=$servername; dbname=connexion_admin",
          $username, $password
      );
     
     $conn->setAttribute(PDO::ATTR_ERRMODE,
                     PDO::ERRMODE_EXCEPTION);
 }  catch(PDOException $e) {
     echo "Connection failed: " . $e->getMessage();
  }
 
?> 