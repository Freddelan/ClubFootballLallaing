<?php
        include("Connect1.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="headadmin.css">
    <link rel="stylesheet" href="indexadmin.css">
    <link rel="stylesheet" href="adminlallaing.css">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="ajoutart.css">
    <title>Document</title>
</head>

</html>
<body>
    <div class="gradient-text"><h1>Dynamic C. Lallaing</h1>
<img src="C:\wamp64\www\ClubFootLallaing\php\logoDCL.png" alt="logoDCL">
</div>
   <div class="deconnexion">
        <form action="index.php" method="post">
            <p><input class="inputdeco" type="submit" value="Déconnexion" /></p>  
        </form>
    </div>
    
    <div id="mySidenav" class="sidenav">
    
            <ul>
                <li><a href="admin.php?var=nouvel">Ajouter un article</a></li>
                <li><a href="admin.php?var=sup_a">Archiver article</a></li>
                <li><a href="admin.php?var=dsup_a">Désarchiver article</a></li>
                <li><a href="admin.php?var=sup_c">Supprimer un commentaire</a></li>
                <li><a href="admin.php?var=sup_u">Lister un utilisateur</a></li>
                <li><a href="admin.php?var=dsup_u">Délister un utilisateur </a></li>
            </ul>
    </div>
    <?php
/*Si la variable de session age est définie, on echo sa valeur
*puis on la détruit avec unset()*/
if(isset($_SESSION['nom']))
/*On détruit les données de session*/
session_destroy();

//On tente d'afficher les valeurs des variables age et prenom

?>
    <div class="box">
        <a href="#" id="openBtn">
        <span class="burger-icon">
            <span></span>
            <span></span>
            <span></span>
        </span>
        </a> 
    </div>
   


    <script type="text/javascript" src="scripthead.js"></script>
</body>
</html>