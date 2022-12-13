<div id="PHD-students" class="row center-xs center-sm center-md center-lg  middle-xs middle-sm middle-md middle-lg">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h1>Our <span class="primary-text">PhD </span>students</h1>
    </div>
</div>
<div class="row center-xs center-sm center-md center-lg  middle-xs middle-sm middle-md middle-lg ">
    <?php
        $files = scandir("includes/structure/people_by_divisions/division4/phd_students/");
        $match = ".php";
        natcasesort($files);
        foreach ($files as $file){
            if (stripos($file, $match) !== false){
                include('phd_students/'.$file.'');
                include('Person.php');
            }
        }
    ?>
</div>