<!-- Header and navbar -->
<?php 
    $selected = "structure"; 
    $header_text = "Division of Education and Mathematical Methods in Physics";
    require('includes/main/header.php'); 
?>
<!-- Main page -->
<section id="page" class="people">
    <div class="container">
        <!-- Links -->
        <?php include('includes/structure/people_by_divisions/division4/links.php'); ?>
        <div id="Title" class="row center-xs center-sm center-md center-lg  middle-xs middle-sm middle-md middle-lg">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h1>Division of <span class="primary-text"> Education and Mathematical Methods in Physics </span></h1>
            </div>
        </div>
        <!-- Head of division -->
        <div class="row center-xs center-sm center-md center-lg  middle-xs middle-sm middle-md middle-lg ">
            <?php include('includes/structure/people_by_divisions/division4/head.php'); ?>
        </div>
        <!-- Our team -->
        <?php include('includes/structure/people_by_divisions/division4/our_team.php'); ?>
        <!-- Phd students -->
        <?php include('includes/structure/people_by_divisions/division4/phd.php'); ?>
    </div>
</section>
<!-- Company -->
<?php require('includes/main/company.php'); ?>
<!-- Footer -->
<?php require('includes/main/footer.php'); ?>
<!-- To top button -->
<a href="#main-header" id="to-top-button" class="button-scroll"></a>
</body>
</html>