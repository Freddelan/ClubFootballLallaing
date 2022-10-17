<?php
/*Si la variable de session age est définie, on echo sa valeur
*puis on la détruit avec unset()*/
if(isset($_SESSION['nom']))
/*On détruit les données de session*/
session_destroy();

//On tente d'afficher les valeurs des variables age et prenom

?>