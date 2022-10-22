<?php
session_start();
if(isset($_POST['valider'])){
   if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
    $pseudo_par_defaut ="admin";
    $mdp_par_defaut ="admin";

    $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
    $mdp_saisi = htmlspecialchars($_POST['mdp']);

    if($pseudo_saisi == $pseudo_par_defaut AND $mdp_saisi == $mdp_par_defaut){
        $_SESSION['mdp'] = $mdp_saisi;
        header('Location: index.php');
    }else{
        echo "Mot de passe ou pseudo incorrect";
    }

   }else{
    echo "Veuillez compléter tous les champs";
}
}
?>

<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/connexion.css">
    <title>Login Page</title>
</head>
 
<body>
    <h1 class=titre>DYNAMIC C. LALLAING</h1>

<div class="login-box"> 
            <h2>Login</h2>
   <form action="" method="POST">

        <div class="textbox">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" name="pseudo" autocomplete="off">
        </div>
            <br>
        <div class="textbox">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" name="mdp">
        </div>
            <br><br>
            <input type="submit" name="valider">
        
       
    </form>
</div>
</body> 
 
</html>