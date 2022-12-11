<?php
include("headadmin.php");
 
 if(!$_SESSION['mdp']){
     header('Location: connexion.php');
}
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
        <div class="choix"></div>
        <ul>
            <li> <a href="membres.php">Afficher tous les membres</a></li>
            <li><a href="publier-article.php">Publier un nouvel article</a></li>
            <li> <a href="articles.php">Afficher tous les articles</a></li>
            <li> <a href="/php/vue/upload.php">Ajouter des photos</a></li>
        </ul>
        </div>

    </body>
</html>