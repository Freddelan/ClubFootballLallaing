<?php
require('connexionbdd2.php');
 $bdd = new PDO('mysql:host=localhost;dbname=connexion_admin;', 'root', 'paradoxe0311');
if(isset($_GET['id_article']) && !empty($_GET['id_article'])){
    $getid = $_GET['id_article'];
    $recupArticle = $conn->prepare('SELECT * FROM article WHERE id_article = ?');
    $recupArticle->execute(array($getid));
    if($recupArticle->rowCount()> 0){
        $deleteArticle = $conn->prepare('DELETE FROM article WHERE id_article = ?');
        $deleteArticle->execute(array($getid));
        header('Location: articles.php');

    }else{
        echo "Aucun article trouvé";
    }
}else{
    echo "Aucun identifiant trouvé ";
}
 
 ?>
