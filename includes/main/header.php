<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
        <title>ITP | <?php echo $header_text ?></title>
        <!-- CSS -->
        <link rel="stylesheet" href="css/flexboxgrid.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/academicons.min.css"/>
        <link rel="stylesheet" href="css/lightbox.min.css"/>
        <!-- JS SCRIPTS -->
        <script src="js/DropDown.js"></script>
        <script src="js/ShowContent.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://kit.fontawesome.com/5a842aaa5f.js" crossorigin="anonymous"></script>
        <script src="js/slideshow.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="js/to-top.js"></script>
        <script src="js/lightbox-plus-jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="icon" type="image/x-icon" href="images/main/WPPT_logo.svg">
        <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Aleo&display=swap" rel="stylesheet">
    </head>
    <body>
    <header id="main-header">
        <div class="container">
            <div class="row row-menu end-sm end-md end-lg center-xs middle-xs middle-sm middle-md middle-lg">
                <div class="col-xs-7 col-sm-7 col-md-7 col-lg-5">
                    <img class="img-head" src='images/main/KFT_logo.svg' alt="">
                </div>
                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-7">
                    <nav class = "navbar" id="NavBar">
                            <a class="<?php if ($selected == "index") echo ' current'; ?>" href="index.php">Home</a>
                            <div id="Dropdownmain" class="<?php if ($selected == "structure"){ echo 'active-drop dropdown';} else {echo 'dropdown';} ?>"> 
                                <button onclick="ShowContent()" class="dropbtn">
                                    Structure &#9660;
                                </button>
                                <div id="myDropdown" class="dropdown-content">
                                    <a href="structure.php">Main structure</a>
                                    <a href="nanophys_and_quant_optics.php">Division of Nanophysics and Quantum Optics</a>
                                    <a href="strongly_corr_sys.php">Division of Strongly Correlated Systems</a>
                                    <a href="complex_matter.php">Division of Complex Matter and Fields</a>
                                    <a href="edu_and_math_phys.php">Division of Education and Mathematical Methods in Physics</a>
                                </div>
                            </div>
                            <a class="<?php if ($selected == "projects") echo ' current'; ?>" href="projects.php">Projects</a>
                            <a class="<?php if ($selected == "seminar") echo ' current'; ?>" href="seminar.php">Seminar</a>
                            <a class="<?php if ($selected == "students") echo ' current'; ?>" href="students.php">Students</a>
                            <a class="<?php if ($selected == "gallery") echo ' current'; ?>" href="gallery.php">Gallery</a>
                            <a href="javascript:void(0);" class="icon" onclick="DropDown()"><i class = "fa fa-bars fa-lg"></i></a>
                    </nav>
                </div>
            </div>
        </div>
    </header>