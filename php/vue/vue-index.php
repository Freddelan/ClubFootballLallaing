        
       
                <!-- <div class="autreMenu">
                          <ul>
                                <li><i class="fa-solid fa-futbol"></i><a href="#">Les entraineurs</a></li>
                                <li><i class="fa-solid fa-futbol"></i><a href="#">Nos reseaux sociaux</a></li>
                                <li><i class="fa-solid fa-futbol"></i><a href="#">Vous voulez être partenaire ?</a></li>
    
                          </ul>
                        
                </div> -->
                
                <main class="blog-container">
                        <?php
                        for ($i=0 ; $i < count($donneescat); $i++){
                        
                        ?>
                        <section class="main-title">
                                
                        <a class="title" href="controler/controlleur-article_entier.php?id_article=<?=$donneescat[$i][0]?>" title="">
                                <h2 class="title"><?=$donneescat[$i][2]?></h2>
                        </a></section>
                                
                        <!-- <h2 class="title"><?=$donneescat[$i][4]?></h2> -->
                        <section class="blog-article">
                        <p class="texte"> <?=$donneescat[$i][1]?> </p>
                        <p class="tailleIm"><img class="imgArt2" src="media/<?=$donneescat[$i][5]?>" alt=""></p>
                        
                                <?php
                                
                                 }
                                ?>
                                 <section class="author">
                                <img class="author-img" src="https://i.imgur.com/iXanLwS.png" alt="Kathryn Shelton">
                                 <p class="author-name">Hugo Langloi</p>
                                </section>
                                <hr class='ligne'>
                
                        <section class="recent">
                                <h1>Articles anciens</h1>
                                <section class="recent-article">
                                        <img class="recent-img" src="https://i.imgur.com/giuxWkS.png" alt="">
                                        <div class="article-content">
                                                <h2>encore un match de gagné</h2>
                                                <section class="author">
                                                        <img class="author-img" src="https://i.imgur.com/Bv95d2q.png" alt="Susie Russell">
                                                        <p class="author-name">Hugo Langloi</p>
                                                </section>  
                                        </div>      
                                </section>
                        

                                <section class="recent-article">
                                        <img class="recent-img" src="https://i.imgur.com/sD5LPzc.png" alt="">
                                        <div class="article-content">
                                                <h2>Lallaing premier d'automne</h2>
                                                <section class="author">
                                                         <img class="author-img" src="https://i.imgur.com/l9ursB3.png" alt="Connor Parsons">
                                                        <p class="author-name">Hugo Langloi</p>
                                                </section>
                                        </div>
                                </section>

                                <section class="recent-article">
                                        <img class="recent-img" src="https://i.imgur.com/6kwitTR.png" alt="">
                                        <div class="article-content">
                                                <h2>Dernier match avant la trève</h2>
                                                <section class="author">
                                                        <img class="author-img" src="https://i.imgur.com/eADyPVB.png" alt="Jonathan Yates">
                                                        <p class="author-name">Hugo Langloi</p>
                                                </section>
                                        </div>
                                </section>
                        </section>
                </main>
                        <hr class='ligne'>
                <div class="Nous_trouver">Nous trouver
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2543.609397683382!2d3.1577409511039902!3d50.3924795993208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2cf53ce67a2b3%3A0x34325c97ab4b09e5!2s430%20Av.%20de%20la%20R%C3%A9sistance%2C%2059167%20Lallaing!5e0!3m2!1sfr!2sfr!4v1665598624809!5m2!1sfr!2sfr" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
        </div>

<hr class='ligne'>