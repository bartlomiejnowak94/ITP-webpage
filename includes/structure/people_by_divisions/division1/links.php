<a id="button-to-top"></a>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 links">
    <a href="#OUR-team" class="button-scroll"> <nobr><i class="fas fa-arrow-alt-circle-down"></i> <b>Our Team</nobr></b></a>
    <?php
        $files = scandir("includes/structure/people_by_divisions/division1/phd_students/");
        $match = ".php";
        $check = false;
        foreach ($files as $file){
            if (stripos($file, $match) == true){
                $check = true;
                break;
            }
        }
        if ($check == true){
            echo '<a href="#PHD-students" class="button-scroll"> <nobr><i class="fas fa-arrow-alt-circle-down"></i> <b>PhD Students</nobr></b></a>';
        }
    ?>
</div>
<hr>





