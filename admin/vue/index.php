<?php
session_start();
if(!isset($_SESSION['admin'])){ //code sécurité pour éviter l'intrusion sans taper le code admin
         header('Location: connexion.php');
    }
//  if(!$_SESSION['mdp']){
//      header('Location: connexion.php');
// }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../style/index.css">
        <link rel="stylesheet" href="/admin/style/publier-article.css">
        <title>Accueil</title>
    </head>
    <body>
        
        <img class="logoAdm" src="/php/vue/Media/logoDCL.png" alt="logoclub">
        <h1 class="titreAdmin">ADMINISTRATION</h1>
        <div class="choix"></div>
        <ul class="menu">
            <li> <a href="membres.php">Afficher tous les membres</a></li>
            <li><a href="publier-article.php">Publier un nouvel article</a></li>
            <li> <a href="articles.php">Afficher tous les articles</a></li>
            <li> <a href="/php/vue/upload.php">Ajouter des photos</a></li>
        </ul>
        </div>
        <a id="deco" href="logout.php"><input id="logout" type="button" value="Déconnexion"></a>
    </body>
</html>