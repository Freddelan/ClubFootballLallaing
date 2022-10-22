<?php
 session_start();
 $bdd = new PDO('mysql:host=localhost;dbname=connexion_admin;', 'root', 'paradoxe0311');
 if(!$_SESSION['mdp']){
    header('Location: connexion.php');
 }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Afficher les membres</title>
        <meta charset="utf-8">

    </head>
    <body>
        <?php
             $recupUsers = $bdd->query('SELECT * FROM membre');
             while($user = $recupUsers->fetch()){
                 ?>
                 <p><?= $user['pseudo']; ?> <a href="bannir.php?id=<?= $user['id_membre']; ?>"style="color:red">Bannir le membre</a></p>
                 <?php
             }
            ?>
    </body>
</html> 