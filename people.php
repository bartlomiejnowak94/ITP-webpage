<!-- Header and navbar -->
<?php 
    $selected = "people"; 
    $header_text = "People";
    require('includes/main/header.php'); 
?>
<!-- Main page -->
<section id="page" class="people">
    <div class="container">
        <!-- Links -->
        <?php include('includes/structure/links.php'); ?>
        <!-- Head of division -->
        <div class="row center-xs center-sm center-md center-lg  middle-xs middle-sm middle-md middle-lg ">
            <?php include('includes/structure/head.php'); ?>
            <?php include('includes/structure/vice_head.php'); ?>
        </div>
        <!-- Our team -->
        <?php include('includes/structure/our_team.php'); ?>
        <!-- Phd students -->
        <?php include('includes/structure/phd.php'); ?>
        <!-- Open Positions -->
        <?php include('includes/structure/open_positions.php'); ?>
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