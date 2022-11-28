<?php

$dos = "../vue/Media/min";
$dir = opendir($dos);
while($file = readdir($dir)) {
    $allow_ext = array("jpg","png","gif");
    $ext = strtolower(substr($file,-3));
    if(in_array($ext,$allow_ext)){
        ?>
        <div class="min">
            <a class="zoombox zgallery1" href="../vue/Media/<?php echo $file; ?>" rel="zoombox[galerie]">
        <img class="galerie" src="../vue/Media/min/<?php echo $file; ?>"/>
        <!-- <h3><?php echo $file; ?></h3> -->
        </div>
        <?php
    }
}
?>
</body>
</html>