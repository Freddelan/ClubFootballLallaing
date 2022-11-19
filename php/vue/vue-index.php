<main class="container">
                      
        <aside class="article">
                            
                        <?php 
                        for ($i=0 ; $i < count($donneescat); $i++){
                        
                        ?>
                        <div class="block-article">      
                        <a class="title" href="php/controler/controlleur-article_entier.php?id_article=<?=$donneescat[$i][0]?>" title="">
                                         
                                        <h2 class="title"><?=$donneescat[$i][2]?></h2>
                                
                                        <p class="dateArticle" ><?=$donneescat[$i][4]?></p>
                                       
                                        <p class="texte"> <?=$donneescat[$i][1]?> </p>
                                        <p class="tailleIm"><img class="recent-img" src="php/vue/media/<?=$donneescat[$i][5]?>" alt=""></p>
                <!-- <img class="author-img" src="" alt=""> -->
                                        <p class="author-name">Hugo Langlois</p>
                              </a>
                        </div>  
                              <?php
                                }
                                ?>
                                
        </aside> 
  
        <aside class="anciens-articles">
                <?php
                for ($i=0 ; $i < count($donneesarc); $i++){
                        
                 ?>  
                <!-- <h1>Articles anciens</h1> -->
                <a class="titleAncien" href="controler/controlleur-article_entier.php?id_article=<?=$donneesarc[$i][0]?>" title=""> 
                        <div class="block-articleAncien" >
                                <p class="date" ><?=$donneesarc[$i][4]?></p>
                                <img class="recent-imgAncien" src="php/vue/media/<?=$donneesarc[$i][5]?>" alt="">
                                <div class="article-contentAncien">
                                        <h2><?=$donneesarc[$i][2]?></h2>
                                        <section class="authorAncien">
                                                <img class="author-imgAncien" src="" alt="">                      
                                        </section>  
                                </div>
                  
                        </div>
                    </a>      
                        <?php
                                
                        }
                               ?>
        </aside>

          
</main>
                        <hr class='ligne'>
              <section class="pub">          
                <div class="Nous_trouver"><p><strong>Nous trouver...</strong></p>
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2543.609397683382!2d3.1577409511039902!3d50.3924795993208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2cf53ce67a2b3%3A0x34325c97ab4b09e5!2s430%20Av.%20de%20la%20R%C3%A9sistance%2C%2059167%20Lallaing!5e0!3m2!1sfr!2sfr!4v1665598624809!5m2!1sfr!2sfr" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                         <p>SIÈGE SOCIAL
                                Adresse : STADE MUNICIPAL <br>
                                430 AVENUE DE LA RESISTANCE<br> - 59167 - LALLAING<br>

                                Email officiel : lallaingdynamic.c.500971@lfhf.fr<br>
                                Téléphone autre : 0664205966<br>
                                Téléphone domicile : 0782509493<br>
                                Email principal : dynalallaing.59167@gmail.com<br>
                        </p>
                </div>
                <p>Notre Partenaire</p>
                <div class="partenaire">
                        
                        <a href="https://www.lmf-energie.fr/" target="_blank">Notre partenaire <strong>içi</strong></strong></a>
                </div>
                
</section>