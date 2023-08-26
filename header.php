<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="EAKL_interface/media/EAKL_logo.png">


    <!-- Custom CSS -->
    <link rel="stylesheet" href="EAKL_interface/CSS_Files/style.css">
    <link rel="stylesheet" href="EAKL_interface/CSS_Files/header.css">

    <!-- Bootstrap 5 CSS file -->
    <link rel="stylesheet" href="EAKL_interface/supporting-files/bootstrap.min.css">

    <!-- Bootstrap 5 JS file -->
    <script defer src="EAKL_interface/supporting-files/bootstrap.bundle.min.js"></script>

    <!-- Font Awesome all.css (For Icons) -->
    <link rel="stylesheet" type="text/css" href="EAKL_interface/supporting-files/all.min.css">
    <!-- It only works when their is a folder 'webfonts' in the same directory -->

</head>

<body>
    <!-- Header -->
    <header>
        <nav>
            <div class="mainNavbar">
                <div class="container px-lg-0">
                    <div class="d-flex justify-content-between widthhundred">
                        <div class="mainlogo">
                            <a href="#">
                                <img class="img-fluid" src="EAKL_interface/media/EAKL_logo.PNG" alt="Mainlogo">
                                Engr. Abul Kalam Library
                            </a>
                        </div>
                        <div id="menu" class="d-block d-xl-none d-lg-none my-auto" onclick="onClickMenu()">
                            <div class="bar" id="bar1"></div>
                            <div class="bar" id="bar2"></div>
                            <div class="bar" id="bar3"></div>
                        </div>
                        <!-- d-lg-block -->
                        <div class="my-auto d-none d-lg-block">
                            <div class="d-flex">
                                <div class="navLinksName1 homePage ">
                                    <a href="/EAKL/index.php">Home</a>
                                </div>
                                <div class="navLinksName1">
                                    <a href="#">Circulation</a>
                                </div>
                                <div class="navLinksName1">
                                    <a href="#">Patrons</a>
                                </div>
                                <div class="navLinksName1">
                                    <a href="#">Reports</a>
                                </div>
                                <div class="navLinksName1">
                                    <a href="#">Authorities</a>
                                </div>
                                <div class="navLinksName1">
                                    <a href="#">Tools</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </nav>
    </header>





</body>

</html>