<?php 
include("headadmin.php");

?>
<?php
//On démarre une nouvelle session
session_start();


//On définit des variables de session

$_SESSION['nom'] = 'admin';
$_SESSION['password'] = 'admin';
echo '<br /><a href="adminlallaing.php?"></a>';
?>