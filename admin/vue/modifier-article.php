<?php
 session_start();
 if(!$_SESSION['mdp']){
     header('Location: connexion.php');
}
require('connexionbdd2.php');

