<!-- Header and navbar -->
<?php 
    $selected = "gallery"; 
    $header_text = "Gallery";
    require('includes/main/header.php'); 
?>
<!-- Main page -->
<section id="page" class="galleries">
    <div class="container">
        <!-- Galleries -->
        <?php include('includes/gallery/galleries.php'); ?>
    </div>
</section>
<!-- Company -->
<?php require('includes/main/company.php'); ?>
<!-- Footer -->
<?php require('includes/main/footer.php'); ?>
</body>
</html>