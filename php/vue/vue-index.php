<main class="container">
                      
        <aside class="article">
                            
                        <?php 
                        // var_dump($donneescat);
                        for ($i=0 ; $i < count($donneescat); $i++){
                        
                        ?>
                        <div class="block-article">     
                                        <p class="dateArticle" ><?=$donneescat[$i][3]?></p>
                                        <h1 class="title" ><?=$donneescat[$i][1]?></h1>
                                        <p class="tailleIm"><img class="recent-img" src="php/vue/media/<?=$donneescat[$i][4]?>" alt=""></p>
                                                <!-- <img class="author-img" src="" alt="">  -->
                                        <p class="article"><?=$donneescat[$i][2]?></p>
                                        <p class="author-name">Hugo Langlois</p>
                              </a><hr class='ligne'>
                        </div>  
                              <?php
                                }
                                ?>
                                
        </aside> 
        
        <aside class="anciens-articles">
                <h1 class="Ancientitle">Articles anciens</h1>
                <?php
                for ($i=0 ; $i < count($donneesarc); $i++){
                        
                 ?>  
                
                <a class="titleAncien" href="php/controler/controlleur-article_entier.php?id_article=<?=$donneesarc[$i][0]?>" title=""> 
                        <div class="block-articleAncien" >
                                <p class="date" ><?=$donneesarc[$i][3]?></p>
                                <h1 class="titleArtAn" ><?=$donneescat[$i][1]?></h1>
                                <img class="recent-imgAncien" src="php/vue/media/<?=$donneesarc[$i][4]?>" alt="">
                                <div class="article-contentAncien">
                                        <!-- <h2><?=$donneesarc[$i][1]?></h2> -->
                                        <section class="authorAncien">
                                                <img class="author-imgAncien" src="" alt="">
                                                            
                                        </section> 
                                </div>
                    </hr> 
                        </div>
                    </a>      
                        <?php
                                
                        }
                               ?>
                               
        </aside>

          
</main>
                        <hr class='ligne'>
        <div class="imageStade">
                <img src=(../vue/Media/stadelallaing.png)>
        </div>
              <section class="pub">          
                <div class="Nous_trouver"><p><strong> <svg class="localisation" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><style>@keyframes slide-right{0%{transform:translateY(0)}to{transform:translateY(-2px)}}</style><g style="animation:slide-right 1s cubic-bezier(.75,.02,.2,1.06) infinite alternate both" stroke-width="1.5"><path stroke="#0A0A30" d="M17 10.193c0 2.867-4.5 8.307-5 8.307s-5-5.44-5-8.307C7 7.325 9.239 5 12 5s5 2.325 5 5.193z"/><circle cx="12" cy="10" r="2" stroke="#265BFF"/></g></svg></strong></p>
                
                         <iframe class="carte" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2543.609397683382!2d3.1577409511039902!3d50.3924795993208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2cf53ce67a2b3%3A0x34325c97ab4b09e5!2s430%20Av.%20de%20la%20R%C3%A9sistance%2C%2059167%20Lallaing!5e0!3m2!1sfr!2sfr!4v1665598624809!5m2!1sfr!2sfr" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                         <p>
                               STADE MUNICIPAL  <br>
                                430 AVENUE DE LA RESISTANCE<br> 59167 LALLAING<br>
                                Téléphone autre : 0664205966<br>
                                Téléphone domicile : 0782509493<br>  
                        </p>
                </div>
                
               
               
                     <div class="partenaire">    <p><a href="https://www.lmf-energie.fr/" target="_blank">Notre partenaire <strong>içi</strong></a></p>
                         <p class="adpart">LMF-ENERGIE <br>
                                1 rue Allard <br>
                                59167 LALLAING <br>
                        </p>
                </div>
                 <svg class="part" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none">
                        <style>@keyframes chrome{0%{transform:rotate(0)}to{transform:rotate(360deg)}}</style>
                        <g style="animation:chrome 1s cubic-bezier(.215,.61,.355,1) infinite both;transform-origin:54% center">
                                <path stroke="#0A0A30" stroke-width="1.5" d="M14.524 14.15l-4.047 4.736m.107-5.828l-2.94-6.03m5.096 2.355h6.962"/>
                                <path fill="#0A0A30" d="M7.588 15.124a6.249 6.249 0 012.288-8.536l-.75-1.299a7.749 7.749 0 00-2.837 10.585l1.3-.75zm2.288-8.536a6.249 6.249 0 018.536 2.288l1.299-.75A7.749 7.749 0 009.126 5.289l.75 1.3zm8.536 2.288a6.249 6.249 0 01-2.288 8.536l.75 1.299a7.749 7.749 0 002.837-10.585l-1.3.75zm-2.288 8.536a6.249 6.249 0 01-8.536-2.288l-1.299.75a7.749 7.749 0 0010.585 2.837l-.75-1.3z"/>
                <circle cx="13" cy="12" r="2.625" stroke="#265BFF" stroke-width="1.5" transform="rotate(150 13 12)"/></g></svg>
</section>
<button class="remonte" type="button" data-oui-back-to-top-js="data-oui-back-to-top" data-tc-clic="hosting::hosting-home::backToTop" class="oui-back-to-top d-flex justify-content-center align-items-center position-fixed show">
  <span class="oui-back-to-top__icon icon--back-to-top" aria-hidden="true"></span><a href="index.php">
  <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><style>@keyframes slide-8{to{transform:translateY(2px)}}</style><path fill="#0A0A30" fill-rule="evenodd" d="M17.358 11.368a.714.714 0 00-.092-1.006L12.99 6.798a.71.71 0 00-.778-.102.708.708 0 00-.155.102L7.78 10.362a.714.714 0 10.915 1.097l3.078-2.565v7.731a.75.75 0 001.5 0v-7.73l3.079 2.564a.714.714 0 001.006-.091z" clip-rule="evenodd" style="animation:slide-8 1s infinite alternate both cubic-bezier(1,-.01,0,.98)"/></svg>
</span>
  <span class="sr-only">Back to top</span>
</button>
