<?php
                         
    $reponsecat = $cnx->query('SELECT * FROM `article` ORDER by date_ DESC');
    $donneescat = $reponsecat->fetchall();

    