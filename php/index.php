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
       <div class="container">
                <div class="Menu">Autre Menu
                          <ul>
                                <li><a href="#">Les entraineurs</a></li>
                                <li><a href="#">Nos reseaux sociaux</a></li>
                                <li><a href="#">Vous voulez être partenaire ?</a></li>
    
                          </ul>
                        
                </div>
                <div class="actualite">Lallaing roi du week-end !
                        <img class="imgArt" src="media/foot9.jpg" alt="spectateurs">  
                        <p class="card-text">Victoire écrasant pour Lallaing qui est allé s'imposer à Dunckerque 4 à 0.</p>
                </div>
                <div class="DM">Lallaing roi du week-end !
                        <img class="imgArt" src="media/foot9.jpg" alt="spectateurs">  
                        <p class="card-text">Victoire écrasant pour Lallaing qui est allé s'imposer à Dunkerque 4 à 0.</p>
                </div>
                <div class="Anciens_articles"></div>
                <div class="Nous_trouver">
                        
                </div>

        </div>
        
              
                    
                      
<?php
        include("footer.php"); 
        ?>


