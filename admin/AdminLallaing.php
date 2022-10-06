
<?php 
include ("connect1.php");
include ("headadmin.php");

?>
<link rel="stylesheet" type="text/css" href="adminlallaing.css">
<body>
<?php 
if (!empty($_GET)) {
    $connexion = $_GET;
}
if(empty($_GET)) {
    $connexion = $_POST;
} 
if($connexion['user']!='admin' || $connexion['pass']!='admin')
{
?>
<h1>Erreur de Nom d'utilisateur ou de mot de passe</h1>
<?php

}elseif($connexion['user'] =='admin' && $connexion['pass']=='admin'){
    $_SESSION['nom'] = 'admin';
    $_SESSION['password'] = 'admin';
    include("headadmin.php");
    ?>
    <h1>Bienvenue sur la page ADMINISTRATEUR</h1>
    <?php
}
?>

</body>