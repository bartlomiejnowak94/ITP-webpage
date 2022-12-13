<!-- Header and navbar -->
<?php 
    $selected = "index"; 
    $header_text = "Instytut Fizyki Teoretycznej";
    require('includes/main/header.php'); 
?>
<!-- Main page -->
<section id="page" class="index">
    <div class="container">
        <div class="row center-xs center-sm center-md center-lg middle-xs middle-sm middle-md middle-lg">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                <div class="bucket-index">
                    <p><a href="https://wppt.pwr.edu.pl/o-wydziale/struktura-organizacyjna/katedry-wydzialu"><img class="logo-index2" src="images/main/WPPT_logo_czarne.svg" alt=""></a></p>
                    <p><a href="https://pwr.edu.pl/"><img class="logo-index2" src="images/main/PWR_logo4.svg" alt=""></a></p>
                </div>
            </div>
            <div class="col-xs-11 col-sm-7 col-md-7 col-lg-7">
                <div class="row center-xs center-sm center-md center-lg middle-xs middle-sm middle-md middle-lg">
                    <?php include('includes/main/slideshow.php'); ?>
                </div>
            </div> 
        </div>
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
