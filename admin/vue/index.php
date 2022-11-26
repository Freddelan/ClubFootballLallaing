<?php
 session_start();
 if(!$_SESSION['mdp']){
     header('Location: connexion.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/admin/style/index.css">
        <title>Accueil</title>
    </head>
    <body>
        <div class="choix"></div>
            <a href="membres.php">Afficher tous les membres</a>
            <a href="publier-article.php">Publier un nouvel article</a>
            <a href="articles.php">Afficher tous les articles</a>
            <a href="/php/vue/upload.php">Ajouter des photos</a>
        </div>

    </body>
</html>