<!-- code pour afficher l'article -->
<?php 
        include("connect.php");
        include("head.php");
        $reponsecat = $cnx->query('SELECT * FROM `article` ');
        $donneescat = $reponsecat->fetchall();
        for($i=0 ; $i < count($donneescat); $i++){
        if ($donneescat[$i][4] == 0) {
        ?>
        <a href=""><?=$donneescat[$i][0]?></a>
        <p> <?=$donneescat[$i][1]?> </p>
        <img src="media/<?=$donneescat[$i][3]?>" alt="">
        <?php
        }
        }
        ?>