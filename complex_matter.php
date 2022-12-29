<!-- Header and navbar -->
<?php 
    $selected = "structure"; 
    $header_text = "Division of Complex Matter and Fields";
    require('includes/main/header.php'); 
?>
<!-- Main page -->
<section id="page" class="people">
    <div class="container">
        <!-- Links -->
        <?php include('includes/structure/people_by_divisions/division3/links.php'); ?>
        <div id="Title" class="row center-xs center-sm center-md center-lg  middle-xs middle-sm middle-md middle-lg">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h1>Division of <span class="primary-text">Complex Matter and Fields</span></h1>
            </div>
        </div>
        <!-- Head of division -->
        <div class="row center-xs center-sm center-md center-lg  middle-xs middle-sm middle-md middle-lg ">
            <?php include('includes/structure/people_by_divisions/division3/head.php'); ?>
        </div>
        <!-- Our team -->
        <?php include('includes/structure/people_by_divisions/division3/our_team.php'); ?>
        <!-- Phd students -->
        <?php include('includes/structure/people_by_divisions/division3/phd.php'); ?>
    </div>
</section>
<!-- Company -->
<?php require('includes/main/company.php'); ?>
<!-- Footer -->
<?php require('includes/main/footer.php'); ?>
</body>
</html>