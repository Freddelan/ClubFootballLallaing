<?php
include("head.php");
include("connect.php");
?>

<div class="container">
  <div class="article_entier">
  <?php
  $info=$_GET;
  $id=intval($info['id_article']);
                         
                         $reponsecat = $cnx->query('SELECT * FROM `article` where `id_article`="'.$id.'" ');
                         $donneescat = $reponsecat->fetchall();
                         ?>
                         
                         <h2><?=$donneescat[0][2]?></h2>
                         <p> <?=$donneescat[0][3]?> </p>
                         <div class="tailleIm"><img class="imgArt2" src="media/<?=$donneescat[0][5]?>" alt=""></div>
                              
  </div>
</div>
<?php

include("footer.php");
?>