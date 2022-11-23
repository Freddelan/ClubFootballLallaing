<?php
 session_start();
include_once('connexionbdd.php');
  
function test_input($data) {
     
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
  
if ($_SERVER["REQUEST_METHOD"] == "POST")

 {  
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
    $stmt = $conn->prepare("SELECT * FROM adminlogin");
    $stmt->execute();
    $users = $stmt->fetchAll();
     
     foreach($users as $user) {
         
        if(($users['username'] == $username) &&
            ($users['password'] == $password)) {
                header("Location: ../vue/membres.php");
        }
        else {
            echo "<script language='javascript'>";
            echo "alert('Username et password OBLIGATOIRE !')";
            echo "</script>";
            die();
        }
     }
}
 
?>