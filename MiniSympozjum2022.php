<!-- Header and navbar -->
<?php 
    $selected = "gallery"; 
    $header_text = "MiniSymposium2022";
    require('includes/main/header.php'); 
?>
<!-- Main page -->
<section id="page" class="gallery">
    <div class = "container" >
        <div class="row center-xs center-sm center-md center-lg  middle-xs middle-sm middle-md middle-lg ">
            <div class="Gal">
                <?php
                    $folder = "images/gallery/MiniSympozjum2022/";
                    include('includes/gallery/gal_pictures.php')
                ?>
            </div>
        </div>
    </div>
</section>
<!-- Company -->
<?php require('includes/main/company.php'); ?>
<!-- Footer -->
<?php require('includes/main/footer.php'); ?>
</body>
</html>