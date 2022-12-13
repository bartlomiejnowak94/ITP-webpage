<?php
$files = scandir($folder);
$match = ".jpg";
foreach ($files as $file){
    if (stripos($file, $match) !== false){
        echo '<a href="'.$folder.''.$file.'" data-lightbox="image-lightbox"><img src="'.$folder.''.$file.'" alt="placeholder" onContextMenu="return false;"></a>';
    }
}
?>