<div id="OUR-team" class="row center-xs center-sm center-md center-lg  middle-xs middle-sm middle-md middle-lg">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h1>Our <span class="primary-text">Team</span></h1>
    </div>
</div>
<div class="row center-xs center-sm center-md center-lg  middle-xs middle-sm middle-md middle-lg ">
    <?php
        $files = scandir("includes/structure/people_by_divisions/division1/our_team/");
        $match = ".php";
        natcasesort($files);
        foreach ($files as $file){
            if (stripos($file, $match) !== false){
                include('our_team/'.$file.'');
                include('Person.php');
            }
        }
    ?>
</div>