<?php
        $files = scandir("includes/structure/vice_head/");
        $match = ".php";
        natcasesort($files);
        foreach ($files as $file){
            if (stripos($file, $match) !== false){
                include('vice_head/'.$file.'');
                include('Person.php');
            }
        }
?>