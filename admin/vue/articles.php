 <?php
 session_start();
 if(!isset($_SESSION['admin'])){ //code sécurité pour éviter l'intrusion sans taper le code admin
    header('Location: connexion.php');
}
 $bdd = new PDO('mysql:host=localhost;dbname=connexion_admin;', 'root', 'paradoxe0311', array (PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
 if(!$_SESSION['mdp']){
     header('Location: connexion.php');
}

require('connexionbdd2.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Afficher tous les articles</title>
    </head>
    <body>
        <?php
            $recupArticle = $conn->query('SELECT * FROM article');
            while ($article = $recupArticle->fetch()) {
                ?>
                <div class="article" >
                        <h1 style="texte-align:center; color: #191970;"><?= $article['titre_article']; ?></h1>
                        
                        <p><?= $article['contenue_art']; ?></p>
                        <a href="supprimer-article.php?id_article=<?= $article['id_article']; ?>"><button style="color:white; background-color: red; margin-bottom: 10px; padding-bottom: 5px; padding-top: 5px;">Supprimer article</button></a>
                        <hr class='ligne'> 
                </div>
                <br>
            <?php
          }
            ?>

    </body>
</html> 