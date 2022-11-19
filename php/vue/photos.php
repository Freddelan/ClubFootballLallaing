<?php
require("../vue/head.php");

// require("../vue/upload.php");
require("../vue/footer.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/photos.css">
    <title>Document</title>
</head>
<body>
<?php

$dos = "Media/min";
$dir = opendir($dos);
while($file = readdir($dir)) {
    $allow_ext = array("jpg","png","gif");
    $ext = strtolower(substr($file,-3));
    if(in_array($ext,$allow_ext)){
        ?>
        <div class="min">
            <a class="zoombox zgallery1" href="Media/<?php echo $file; ?>" rel="zoombox[galerie]">
        <img src="Media/min/<?php echo $file; ?>"/>
        <!-- <h3><?php echo $file; ?></h3> -->
        </div>
        <?php
    }
}
?>
</body>
</html>