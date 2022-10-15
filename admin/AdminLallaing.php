<?php
//On démarre une nouvelle session
session_start();


//On définit des variables de session

$_SESSION['nom'] = 'admin';
$_SESSION['password'] = 'admin';
echo '<br /><a href="adminlallaing.php?"></a>';
?>
<?php 
include ("connect.php");
include ("headadmin.php");
?>

<body>
<?php
    if (!empty($_GET)) {
        $connexion = $_GET;
    }
    if(empty($_GET)){
        $connexion = $_POST;
    }
        if ($connexion['user']!='admin' || $connexion['pass']!='admin') {
        ?>
        <h2 class="h2admin">Erreur sur le nom d'utilisateur ou le mots de passe</h2>
        <?php   
        }elseif($connexion['user'] =='admin' && $connexion['pass']=='admin'){
        $_SESSION['nom'] = 'admin';
        $_SESSION['password'] = 'admin';
        
        ?>
        <div class="border">
        <h2 class="h2admin">Bienvenue sur la page administrateur</h2>
        <h3 class="h3admin">Que voulez-vous faire ?</h3></div>
        <?php
        }
    
        
        ?>

</body>