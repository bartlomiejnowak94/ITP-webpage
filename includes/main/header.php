<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
        <title>DTP | <?php echo $header_text ?></title>
        <!-- CSS -->
        <link rel="stylesheet" href="css/flexboxgrid.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/academicons.min.css"/>
        <link rel="stylesheet" href="css/lightbox.min.css"/>
        <!-- JS SCRIPTS -->
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
                <div class="col-xs-8 col-sm-8 col-md-4 col-lg-4">
                    <img class="img-head" src='images/main/KFT_logo.svg' alt="">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-8 col-lg-8">
                    <div class="dropdown">
                        <input id="check01" type="checkbox" name="menu" />
                        <label for="check01"><span class="fa fa-bars"></span></label>
                        <ul class="submenu">
                            <li><a class="<?php if ($selected == "index") echo ' current'; ?>" href="index.php">Home</a></li>
                            <li><a class="<?php if ($selected == "structure") echo ' current'; ?>" href="structure.php">Structure</a></li>
                            <!-- <li><a class="<?php if ($selected == "people") echo ' current'; ?>" href="people.php">People</a></li> -->
                            <!-- <li><a class="<?php if ($selected == "research-groups") echo ' current'; ?>" href="research-groups.php">Research Groups</a></li> -->
                            <li><a class="<?php if ($selected == "projects") echo ' current'; ?>" href="projects.php">Projects</a></li>
                            <li><a class="<?php if ($selected == "seminar") echo ' current'; ?>" href="seminar.php">Seminar</a></li>
                            <li><a class="<?php if ($selected == "students") echo ' current'; ?>" href="students.php">Students</a></li>
                            <li><a class="<?php if ($selected == "gallery") echo ' current'; ?>" href="gallery.php">Gallery</a></li>
                        </ul>
                    </div>
                    <nav id="navbar">
                        <ul>
                            <li class="<?php if ($selected == "index") echo ' current'; ?>"><a href="index.php">Home</a></li>
                            <li class="<?php if ($selected == "structure") echo ' current'; ?>"><a href="structure.php">Structure</a></li>
                            <!-- <li class="<?php if ($selected == "people") echo ' current'; ?>"><a href="people.php">People</a></li> -->
                            <!-- <li class="<?php if ($selected == "research-groups") echo ' current'; ?>"><a href="research-groups.php">Research Groups</a></li> -->
                            <li class="<?php if ($selected == "projects") echo ' current'; ?>"><a href="projects.php">Projects</a></li>
                            <li class="<?php if ($selected == "seminar") echo ' current'; ?>"><a href="seminar.php">Seminar</a></li>
                            <li class="<?php if ($selected == "students") echo ' current'; ?>"><a href="students.php">Students</a></li>
                            <li class="<?php if ($selected == "gallery") echo ' current'; ?>"><a href="gallery.php">Gallery</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>