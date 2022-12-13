<?php
    $dir = "includes/structure/people_by_divisions/division3/phd_students/";
    if (count(scandir($dir)) != 2){
        echo '<div id="PHD-students" class="row center-xs center-sm center-md center-lg  middle-xs middle-sm middle-md middle-lg">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h1>Our <span class="primary-text">PhD </span>students</h1>
        </div>
    </div>';
    }
    echo '<div class="row center-xs center-sm center-md center-lg  middle-xs middle-sm middle-md middle-lg ">';
    $division = "complex_matter.php";
    $files = scandir($dir);
    $match = ".php";
    natcasesort($files);
    if ($files){
        foreach ($files as $file){
            if (stripos($file, $match) !== false){
                include('phd_students/'.$file.'');
                include('Person.php');
            }
        }
    }
    echo '</div>';
?>