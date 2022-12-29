<!-- Header and navbar -->
<?php 
    $selected = "students"; 
    $header_text = "Students";
    require('includes/main/header.php'); 
?>
<!-- Main page -->
<section id="page" class="students">
    <div class="container">
        <!-- Galleries -->
        <?php include('includes/students/students.php'); ?>
    </div>
</section>
<!-- Company -->
<?php require('includes/main/company.php'); ?>
<!-- Footer -->
<?php require('includes/main/footer.php'); ?>
</body>
</html>
