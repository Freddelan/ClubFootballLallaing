<?php
 session_start();
 $bdd = new PDO('mysql:host=localhost;dbname=connexion_admin;', 'root', 'paradoxe0311', array (PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
 if(isset($_GET["id_membre"]) && !empty($_GET['id_membre'])){
    $getid = $_GET['id_membre'];
    $recupUser = $bdd->prepare("SELECT * FROM membre WHERE id_membre = ?");
    $recupUser->execute(array($getid));
    if($recupUser->rowCount() > 0){  

        $bannirUser = $bdd->prepare('DELETE FROM membre WHERE id_membre= ?');
        $bannirUser->execute(array($getid));

        header('Location: membres.php');
        
    }else{
        echo "Aucun membre n'a été trouvé";
    }
 }else{
    echo "L'identifiant n'a pas été récupéré";
 }

 ?>