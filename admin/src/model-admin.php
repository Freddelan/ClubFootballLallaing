<body>
        <?php
        if ($_GET['var']=='nouvel') { 
                    
        ?>
        <div class="formulaire">
                <form action="" method="get" id="ajoute">
                        
                        
                    <h3 class="h3admin">Saisissez votre article</h3>
                    <input type="text" name="titreart"  required="required" placeholder="Titre">
                    <input id="prodId" name="prodId" type="hidden" value="ajoutart" required="required">
                    <div class="BOX1">
                </div>
                    
                    <input type="date" name="Date de publication" placeholder="Date" required="required">
                    <input type="file" name="Image" >
                    <textarea name="resume" id="resume" cols="10" rows="5" required="required" placeholder="Resume....." ></textarea>
                    <textarea name="article" id="article" cols="30" rows="20" required="required" placeholder="Article....." ></textarea>
                    <input type="submit" value="Ajouter" id="valider" name="Valide">
                </form>
        </div>
        <?php
        }
        if ($_GET['var']=='sup_a') {
                $reponsecat = $cnx->query('select * from article WHERE ARCHIVE = 1 ORDER_BY DATE DESC');
                $donneescat = $reponsecat->fetchall(PDO::FETCH_OBJ);
        ?>
        <div class="formulaire">
                <form id="check" action="ajoutart.php?var=sup_a" method="get">
                        <h3>Archiver un article</h3>
                        <select name="article" id="Categorie" required>
                                                <option value="">Choisissez un article</option>
                                        <?php
                                        foreach($donneescat as $resultat)
                                        {
                                        ?>
                                                <option value="<?=$resultat->ARTICLE?>"><?=$resultat->TITRE_ARTICLE?></option>
                                        <?php
                                        }
                                        ?>
                        </select> 
                        <input id="prodId" name="prodId" type="hidden" value="supart">
                        <h2>Merci de confirmer la mise en archive</h2>
                        <div class="validation">
                        <input type="checkbox" name="demo5" class="demo5" id="demo5" onclick="exemple()">
                        <label for="demo5"></label>   
                        </div>
                        
                        <input type="submit" value="Archiver" id="sub" disabled>  
                </form>
        </div>
                        
        <?php
        }
        
        ?>
        <?php
        if ($_GET['var']=='dsup_a') {
                $reponsecat = $cnx->query('select * from article WHERE ARCHIVE = 0');
                $donneescat = $reponsecat->fetchall(PDO::FETCH_OBJ);
        ?>
        <div class="formulaire">
                <form id="check" action=ajoutart.php?var=sup_a" method="get">
                        <h3>désarchiver un article</h3>
                        <select name="article" id="Categorie" required>
                                                <option value="">Choisissez un article</option>
                                        <?php
                                        foreach($donneescat as $resultat)
                                        {
                                        ?>
                                                <option value="<?=$resultat->ARTICLE?>"><?=$resultat->TITRE_ARTICLE?></option>
                                        <?php
                                        }
                                        ?>
                        </select> 
                        <input id="prodId" name="prodId" type="hidden" value="rsupart">
                        <h2>Merci de confirmer le désarchivage</h2>
                        <div class="validation">
                        <input type="checkbox" name="demo5" class="demo5" id="demo5"onclick="exemple()" >
                        <label for="demo5"></label>   
                        </div>
                        
                        <input type="submit" value="Désarchiver" id="sub" disabled>  
                </form>
        </div>
                        
        <?php
        }
        
        ?>
        <?php
        if ($_GET['var']== 'sup_c') {
                $reponsecat1 = $cnx->query('SELECT * FROM article');
                $donneescat1 = $reponsecat1->fetchall();
        ?>
         <div class="formulaire">
                <form id="check" action="ajoutart.php?var=sup_c" method="get">
                <h3>Supprimer un article</h3>
                        <select name="id" id="Categorie2" required>
                                                <option value="">Choisissez l'article à supprimer</option>
                                        <?php
                                        for($i=0;$i<count($donneescat1);$i++){
                                        
                                        ?>
                                                <option value="<?=$donneescat1[$i][0]?>"> 
                                                        <?=$donneescat1[$i][2]?>
                                                </option>
                                        <?php
                                        
                                        }
                                        
                                        ?>
                        </select>
                        <input id="prodId" name="prodId" type="hidden" value="supcom">
                        <h2>Merci de confirmer la suppression</h2>
                        <div class="validation">
                        <input type="checkbox" name="demo5" class="demo5" id="demo5" onclick="exemple()">
                        <label for="demo5"></label>   
                        </div>
                        <input type="submit" value="Supprimer" id="sub" disabled >  
                </form>
        </div>
        <?php
                    
        }
        
        
        if ($_GET['var']== 'sup_u') {
                $reponsecat1 = $cnx->query('SELECT * FROM `utilisateur` WHERE BLACKLIST = 0 ORDER BY `utilisateur`.`ID_UTILISATEUR` ASC');
                $donneescat1 = $reponsecat1->fetchall(PDO::FETCH_OBJ);
        ?>
         <div class="formulaire">
                <form id="check" action="ajoutart.php?var=sup_c" method="get">
                <h3>Liste noire</h3>
                        <select name="id" id="Categorie2" required>
                                                <option value="">Choisissez l'utilisateur à placer sur liste noire...</option>
                                        <?php
                                        foreach($donneescat1 as $resultat1)
                                        {
                                        ?>
                                                <option value="<?=$resultat1->ID_UTILISATEUR?>"> <?=$resultat1->PSEUDO_UTILISATEUR?></option>
                                        <?php
                                        }
                                        
                                        ?>
                        </select>
                        <input id="prodId" name="prodId" type="hidden" value="supu">
                        <h2>Merci de confirmer la suppression</h2>
                        <div class="validation">
                        <input type="checkbox" name="demo5" class="demo5" id="demo5" onclick="exemple()" >
                        <label for="demo5"></label>   
                        </div>
                        <input type="submit" value="Lister" id="sub" >  
                </form>
        </div>
        <?php          
        }

        if ($_GET['var']== 'dsup_u') {
                $reponsecat1 = $cnx->query('SELECT * FROM `utilisateur` WHERE BLACKLIST = 1 ORDER BY `utilisateur`.`ID_UTILISATEUR` ASC');
                $donneescat1 = $reponsecat1->fetchall(PDO::FETCH_OBJ);
        ?>
         <div class="formulaire">
                <form id="check" action="ajoutart.php?var=sup_c" method="get">
                <h3>Liste noire</h3>
                        <select name="id" id="Categorie2" required>
                                                <option value="">Choisissez l'utilisateur à délister</option>
                                        <?php
                                        foreach($donneescat1 as $resultat1)
                                        {
                                        ?>
                                                <option value="<?=$resultat1->ID_UTILISATEUR?>"> <?=$resultat1->PSEUDO_UTILISATEUR?></option>
                                        <?php
                                        }
                                        
                                        ?>
                        </select>
                        <input id="prodId" name="prodId" type="hidden" value="dsupu">
                        <h2>Merci de confirmer la suppression</h2>
                        <div class="validation">
                        <input type="checkbox" name="demo5" class="demo5" id="demo5" onclick="exemple()" >
                        <label for="demo5"></label>   
                        </div>
                        <input type="submit" value="Délister" id="sub" >  
                </form>
        </div>
        <?php          
        }
        ?>
        <script type="text/javascript" src="disable.js"></script>
</body>
</html>