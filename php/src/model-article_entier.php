<?php
$info=$_GET;
  $id=intval($info['id_article']);
                         
   $reponsecat = $cnx->query('SELECT * FROM `article` where `id_article`="'.$id.'" ');
   $donneescat = $reponsecat->fetchall(); 

   
  