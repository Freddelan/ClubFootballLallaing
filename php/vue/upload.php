<?php

if(!empty($_FILES)){
    require('imgClass.php');
        $img = $_FILES['img'];
     $ext = strtolower(substr($img['name'],-3));
     $allow_ext = array("jpg", "png", "gif");
     if(in_array($ext,$allow_ext)){

 move_uploaded_file($img['tmp_name'], "Media/".$img['name']);
 img::creerMin("Media/".$img['name'],"Media/min",$img['name'],215,112);
 img::convertirJPG("Media/".$img['name']);
}
else{
    $erreur = "Votre fichier n'est pas une image!";
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="upload.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="zoombox/zoombox.js"></script>
    <link href="zoombox/zoombox.css" rel="stylesheet" type="text/css" media="screen" />
    <title>Upload</title>
</head>
<body>
    <?php
if(isset($erreur)){
    echo $erreur;
}

    ?>

    <form method="post" action="upload.php" enctype="multipart/form-data">
        <input type="file" name="img"/>
        <input type="submit" name="Envoyer"/>
        
    </form>
    <a href="photos.php">Voir le résultat</a>
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
            <h3><?php echo $file; ?></h3>
            </div>
            <?php
        }
    }
    ?>

    <script type="text/javascript">
        jQuery(function($){
            $('a.zoombox').zoombox();
            });
    </script>
</body>
</html>