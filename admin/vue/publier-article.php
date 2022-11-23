<?php
 session_start();
 if(!$_SESSION['mdp']){
     header('Location: connexion.php');
}

require('connexionbdd2.php');

if(isset($_POST['envoi'])){
    if(isset($_POST['archive'])){
        $archive= 1;
    }else{
        $archive= 0;
    }
    if(!empty($_POST['titre']) &&  !empty($_POST['contenu']) && !empty($_POST['date_de_publication']) && !empty($_POST['Image'])){
        $titre= htmlspecialchars($_POST['titre']);
        // $resume= nl2br(htmlspecialchars($_POST['resume']));
        $contenu= nl2br(htmlspecialchars($_POST['contenu']));
        $datepub= date(htmlspecialchars($_POST['date_de_publication']));
        $image= ($_POST['Image']);
        

        $insererArticle = $conn->prepare('INSERT INTO article(titre_article, contenue_art, date_, ref_image, archive)VALUES(?, ?, ?, ?, ?)');

        $insererArticle->execute(array($titre, $contenu, $datepub, $image, $archive));

        echo "Votre article figure sur votre site !!";

    }else{
        echo "Veuillez compléter tous les champs...";

    }
    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Publier un nouvel article</title>
        <meta charset="uft-8">
    </head>
    <body>
        <form method="Post" action="">
            <input type="text" name="titre" placeholder="Titre" required="required">
            <br>
            <textarea name="contenu" placeholder="Article..." id="contenu" cols="30" rows="10" required="required"></textarea>
            <br>
            <input type="date" name="date_de_publication" placeholder="Date" required="required">
            <br>
            <input type="file" name="Image" required="required">
            <br>
            <input type="checkbox" name="archive" >
            <br>
            <input type="submit" name="envoi" value="Ajouter" id="valider">
        </form>
        <a href="/index.php">Voir l'article</a>
    </body>
</html>