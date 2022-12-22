<?php
                         
    $reponsecat = $cnx->query('SELECT * FROM `article` ORDER by date_ DESC limit 8');
    $donneescat = $reponsecat->fetchall();

    $reponsearc = $cnx->query('SELECT * FROM `article` ORDER by date_ ASC limit 6');
    $donneesarc = $reponsearc->fetchall();