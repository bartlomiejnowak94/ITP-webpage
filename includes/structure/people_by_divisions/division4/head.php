<?php
        $files = scandir("includes/structure/people_by_divisions/division4/head/");
        $match = ".php";
        natcasesort($files);
        foreach ($files as $file){
            if (stripos($file, $match) !== false){
                include('head/'.$file.'');
                include('Person.php');
            }
        }
?>