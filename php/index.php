<!-- code pour afficher l'article -->
<?php 
        include("connect.php");
        include("head.php");
        ?>
        <div class="d1"></div>
        <?php
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
        }?>
       <div class="grid-container">
        <div class="grid-item">Lallaing sauve l'honneur !
                <img class="imgArt" src="media/foot6.jpg" alt="spectateurs">  
                <p class="card-text">Lallaing a fait le minimum demandé dimanche face à Lillers, en s'imposant 1 à 0...</p>
        </div>
        <div class="grid-item">Lallaing roi du week-end !
                <img class="imgArt" src="media/foot9.jpg" alt="spectateurs">  
                <p class="card-text">Victoire écrasant pour Lallaing qui est allé s'imposer à Dunckerque 4 à 0.</p>
        </div>
             
</div>
              
                    
                      
<?php
        include("footer.php"); 
        ?>


