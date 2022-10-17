<?php

if ($_GET['prodId'] == 'ajoutart') {
    
    $nouvauxart=$_GET;
    $cnx->exec("alter table article auto_increment = 0");
    $cnx->exec("INSERT INTO article (lesume, titre_article, date_ , ref_image , contenue_art) 
    values ('$nouvauxart[resume]','$nouvauxart[titreart]','$nouvauxart[Date_de_publication]','$nouvauxart[Image]','$nouvauxart[article]')");  

      $searchpseudo = $cnx->query('select * from utilisateur where ABONNE_NEWS = 1');
      $donneespseudo = $searchpseudo->fetchall(PDO::FETCH_OBJ);
      foreach($donneespseudo as $resultat){
      $to = "$resultat->EMAIL_UTILISATEUR";
      $subject = "Nouvel article";
      $message = "Un nouvel article à été publié.";
  
      $headers = "Content-Type: text/plain; charset=utf-8\r\n";
      $headers .= 'From: happyrush@hotmail.com\r\n';
  
      if(mail($to, $subject, $message, $headers)) {
          
  
      } else {
  
          echo 'Erreur envoi !';
  
      }}
  ?>
      <h1 class="h1ajart">Votre article a bien été rajouté</h1>
      <?php
}

if (!empty($_GET['demo5'])) {
    if ($_GET['prodId'] == 'rsupart' && $_GET['demo5'] == 'on') {
    $cnx->exec("UPDATE article SET ARCHIVE = '1' WHERE ARTICLE ='$_GET[article]'");
?>
    <h1 class="h1ajart">Votre article a bien été désarchivé</h1>
<?php
}
}


?>

<?php

if (!empty($_GET['demo5'])) {
    if ($_GET['prodId'] == 'supart' && $_GET['demo5'] == 'on') {
    $cnx->exec("UPDATE article SET ARCHIVE = '0' WHERE ARTICLE ='$_GET[article]'");
?>
    <h1 class="h1ajart">Votre article a bien été archivé</h1>
<?php
}
}


if ($_GET['prodId'] == 'supcom') {
    $id = explode(" ", $_GET['id']);
    $cnx->exec("DELETE FROM article WHERE id_article ='$id[0]'");

?>
    <h1 class="h1ajart">Votre article a bien été supprimé</h1>
<?php
 }


 if ($_GET['prodId'] == 'supu') {
    
    $cnx->exec("UPDATE utilisateur SET BLACKLIST = '1' WHERE ID_UTILISATEUR ='$_GET[id]'");
    

?>
    <h1 class="h1ajart">L'utilisateur a bien etait mis sur liste noir</h1>
<?php
 }  
 
 
 if ($_GET['prodId'] == 'dsupu') {
    
    $cnx->exec("UPDATE utilisateur SET BLACKLIST = '0' WHERE ID_UTILISATEUR ='$_GET[id]'");
    

?>
    <h1 class="h1ajart">L'utilisateur a bien etait retiré de liste noir</h1>
<?php
 } 
?>
<script src="script2.js"></script>