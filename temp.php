<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EAKL</title>

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

    <style>
        footer{
        position: fixed;
        bottom: 0;
        width: 100%;
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



</head>

<body>

    <?php require_once("header.php"); ?>

    <!-- Breadcrumbs Section -->
    <div>
        <ul class="breadcrumbs m-0">
            <a href="" class="breadcrumbs-item breadcrumbs-active">
                <li>Home</li>
            </a>
            <!-- <a href="#" class="breadcrumbs-item">
                <li>Reports</li>
            </a>

            <a href="#" class="breadcrumbs-item">
                <li>Admin</li>
            </a> -->

            <!-- <li class="breadcrumbs-item breadcrumbs-active">Circulation</li> -->
        </ul>
    </div>

    <!-- Main Page -->
    <main class="row main p-0">
        <!-- News & Links Section -->
        <!-- <section class="col-xl-4 col-md-4 p-0">
            <div class=" NewsLinksSection m-4">
                <div class="NewsDialogBox">
                    <div>
                        <div class="NL_Heading">
                            <h2>News & Links</h2>
                        </div>
                        <div class="News">
                            <div class="NewsSubHeading">
                                Reports
                            </div>
                            <div class="NewsSubject">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, molestiae quia. Dolore
                                blanditiis et dolorem autem eaque, ex adipisci. Neque.
                            </div>
                            <div class="NewsPostedData">
                                Posted on 28/04/2023
                                <span>
                                    <a href="#">Edit</a> |
                                    <a href="#">Delete</a> |
                                    <a href="#">New</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- Main Form Links Section -->
        <section class="col-xl-8 col-md-8 p-0 mx-auto">
            <div class=" d-flex flex-lg-row flex-column m-4">
                <div class="subSections mx-xl-auto me-auto accordion"  id="accordionExample">
                    

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Accordion Item #2
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>


                    <a href="#">
                        <div class="link">
                            <i class="fa-solid fa-repeat"></i>
                            Circulation
                        </div>
                    </a>
                    <a href="../EAKL/clearDefaulters.php" target="_self">
                        <div class="link">
                            <i class="fa-solid fa-chart-pie"></i>
                            Clear Defualters
                        </div>
                    </a>
                    <a href="../EAKL/addDefaulters.php" target="_self">
                        <div class="link">
                            <i class="fa-brands fa-searchengin"></i>
                            Add Defaulters
                        </div>
                    </a>
                    <a href="#">
                        <div class="link">
                            <i class="fa-solid fa-gears"></i>
                            Data Display
                        </div>
                    </a>
                </div>
                <div class="subSections mx-xl-auto me-auto">
                    <a href="#">
                        <div class="link">
                            <i class="fa-solid fa-repeat"></i>
                            Circulation
                        </div>
                    </a>
                    <a href="#">
                        <div class="link">
                            <i class="fa-brands fa-searchengin"></i>
                            Advance Search
                        </div>
                    </a>
                    <a href="#">
                        <div class="link">
                            <i class="fa-solid fa-table-list"></i>
                            Lists
                        </div>
                    </a>
                    <a href="#">
                        <div class="link">
                            <i class="fa-solid fa-gears"></i>
                            Administration
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <?php require_once("footer.php"); ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>