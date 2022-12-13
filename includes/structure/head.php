<?php
        $files = scandir("includes/structure/head/");
        $match = ".php";
        natcasesort($files);
        foreach ($files as $file){
            if (stripos($file, $match) !== false){
                include('head/'.$file.'');
                include('Person.php');
            }
        }
?>