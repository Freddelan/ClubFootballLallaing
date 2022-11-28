<?php

$dos = "../vue/Media/min";
$dir = opendir($dos);
while($file = readdir($dir)) {
    $allow_ext = array("jpg","png","gif");
    $ext = strtolower(substr($file,-3));
    if(in_array($ext,$allow_ext)){
      }
      }
        ?>