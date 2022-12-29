<!-- Header and navbar -->
<?php 
    $selected = "seminar"; 
    $header_text = "CCC";
    require('includes/main/header.php'); 
?>
<!-- Main page -->
<section id="page" class="projects">
    <div class="container">
        <!-- Galleries -->
        <?php include('includes/seminar/seminars2022.php'); ?>
    </div>
</section>
<!-- Company -->
<?php require('includes/main/company.php'); ?>
<!-- Footer -->
<?php require('includes/main/footer.php'); ?>
</body>
</html>