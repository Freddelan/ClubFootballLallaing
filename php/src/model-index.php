<?php
                         
    $reponsecat = $cnx->query('SELECT * FROM `article` ORDER by date_ DESC');
    $donneescat = $reponsecat->fetchall();

    $reponsearc = $cnx->query('SELECT * FROM `article` ORDER by date_ ASC limit 4');
    $donneesarc = $reponsearc->fetchall();