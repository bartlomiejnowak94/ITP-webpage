<!-- Header and navbar -->
<?php 
    $selected = "projects"; 
    $header_text = "Research projects";
    require('includes/main/header.php'); 
?>
<!-- Main page -->
<section id="page" class="projects">
    <div class="container">
        <!-- Galleries -->
        <?php include('includes/projects/research_projects.php'); ?>
    </div>
</section>
<!-- Company -->
<?php require('includes/main/company.php'); ?>
<!-- Footer -->
<?php require('includes/main/footer.php'); ?>
</body>
</html>