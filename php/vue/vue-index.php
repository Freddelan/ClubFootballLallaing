        
       <div class="container">
                <div class="autreMenu">
                          <ul>
                                <li><i class="fa-solid fa-futbol"></i><a href="#">Les entraineurs</a></li>
                                <li><i class="fa-solid fa-futbol"></i><a href="#">Nos reseaux sociaux</a></li>
                                <li><i class="fa-solid fa-futbol"></i><a href="#">Vous voulez être partenaire ?</a></li>
    
                          </ul>
                        
                </div>
                
                <div class="actualite">
<?php
for ($i=0 ; $i < count($donneescat); $i++){
                        
                        ?>
                        <a class="artGr" href="controler/controlleur-article_entier.php?id_article=<?=$donneescat[$i][0]?>" title="">
                                <h2><?=$donneescat[$i][2]?></h2>
                        </a>
                                
                        <h2 class="date"><?=$donneescat[$i][4]?></h2>
                        <p class="texte"> <?=$donneescat[$i][1]?> </p>
                        <p class="tailleIm"><img class="imgArt2" src="media/<?=$donneescat[$i][5]?>" alt=""></p>
                        
                                <?php
                                
                                 }
                                ?>
<hr class='ligne'>
                </div>
        
                
                <<div class="Nous_trouver">Nous trouver
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2543.609397683382!2d3.1577409511039902!3d50.3924795993208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2cf53ce67a2b3%3A0x34325c97ab4b09e5!2s430%20Av.%20de%20la%20R%C3%A9sistance%2C%2059167%20Lallaing!5e0!3m2!1sfr!2sfr!4v1665598624809!5m2!1sfr!2sfr" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
        </div>

<hr class='ligne'>