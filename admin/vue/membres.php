<?php
 session_start();
 if(!isset($_SESSION['admin'])){ //code sécurité pour éviter l'intrusion sans taper le code admin
    header('Location: connexion.php');
}
 $bdd = new PDO('mysql:host=localhost;dbname=connexion_admin;', 'root', 'paradoxe0311', array (PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')); 
 if(!$_SESSION['mdp']){
    header('Location: connexion.php');
 }

?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/admin/style/membres.css">
        <title>Afficher les membres</title>
        <meta charset="utf-8">

    </head>
    <body>
    <img class="logoMembres" src="/php/vue/Media/logoDCL.png" alt="logoclub">
        <h1>Liste des membres autoriser à se connecter </h1>
        <div class="membres">
        <?php
             $recupUsers = $bdd->query('SELECT * FROM membre');
             while($user = $recupUsers->fetch()){
                 ?>
                 <p><?= $user['pseudo']; ?> <a href="bannir.php?id=<?= $user['id_membre']; ?>"style="color:red">Bannir le membre</a></p>
                 <?php
             }
            ?>
        </div>
    </body>
</html> 