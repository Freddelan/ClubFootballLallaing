<?php
//On démarre une nouvelle session
session_start();

echo 'Bienvenue sur la premiere page';
//On définit des variables de session

$_SESSION['nom'] = 'admin';
$_SESSION['password'] = 'admin';
echo '<br /><a href="adminlallaing.php?"></a>';
?>

<?php 
include("headadmin.php")
?>

<body>
    <div class="connection">
        <h2 class="titindex">Bienvenue sur la page Administrateur</h2>
        <div class="formulaire">
            <h3 class="h3index">Merci de vous connecter</h3>
            <div class="centre">
                <form action="adminlallaing.php" method="post">
                    <input type="text" name="user" >
                    <input type="text" name="pass" > 
                    <input type="submit" value="Valider" id="valider" name="Valider">
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>