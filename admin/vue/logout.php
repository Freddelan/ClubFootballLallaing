<?php
 session_start();
 if(!isset($_SESSION['admin'])){ //code sécurité pour éviter l'intrusion sans taper le code admin
    header('Location: connexion.php');
}
 $_SESSION = array();
 session_destroy();
 header('Location: connexion.php');
?>