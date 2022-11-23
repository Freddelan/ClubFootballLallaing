 <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ClubFootLallaing/admin/style/headadmin.css">
    <link rel="stylesheet" href="/ClubFootLallaing/admin/style/indexadmin.css">
    <link rel="stylesheet" href="/ClubFootLallaing/admin/style/adminlallaing.css">
    <link rel="stylesheet" href="/ClubFootLallaing/admin/style/admin.css">
    <link rel="stylesheet" href="/ClubFootLallaing/admin/style/ajoutart.css">
    <title>Document</title>
</head> 


<body>
    <div class="titreAd"><h1>Dynamic C. Lallaing</h1>
        <img class="lelogo" src="../php/logoDCL.png" alt="logoDCL">
</div>
   <div class="deconnexion">
        <form action="../php/index.php" method="post" >
            <p><input class="inputdeco" type="submit" value="Déconnexion" /></p>  
        </form>
    </div>
    
    <div id="mySidenav" class="sidenav">
    
            <ul>
                <li><a href="controler-admin.php?var=nouvel">Ajouter un article</a></li>
                <li><a href="controler-admin.php?var=sup_a">Archiver article</a></li>
                <li><a href="controler-admin.php?var=dsup_a">Désarchiver article</a></li>
                <li><a href="controler-admin.php?var=sup_c">Supprimer un article</a></li>
                <li><a href="controler-admin.php?var=sup_u">Lister un utilisateur</a></li>
                <li><a href="controler-admin.php?var=dsup_u">Délister un utilisateur </a></li>
                <li><a href="controler-admin.php?var=ajou_ph">Ajouter photo </a></li>
                <li><a href="controler-admin.php?var=membres">Afficher tous les membres</a></li>s
            </ul>
    </div>
    <div class="box">
        <a href="#" id="openBtn">
        <span class="burger-icon">
            <span></span>
            <span></span>
            <span></span>
        </span>
        </a> 
    </div>
   
</body>
</html>