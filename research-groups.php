<!-- Header and navbar -->
<?php 
    $selected = "research-groups"; 
    $header_text = "Groups";
    require('includes/main/header.php'); 
?>
<!-- Main page -->
<section id="page" class="groups">
    <div class="container">
        <!-- GROUPS -->
        <?php include('includes/research-groups/groups.php'); ?>
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