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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Bootstrap 5 JS file -->
    <script defer src="EAKL_interface/supporting-files/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"  integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

    <!-- Font Awesome all.css (For Icons) -->
    <link rel="stylesheet" type="text/css" href="EAKL_interface/supporting-files/all.min.css">
    <!-- It only works when their is a folder 'webfonts' in the same directory -->
</head>

<body>

    <?php require_once("header.php"); ?>

    <!-- Breadcrumbs Section -->
    <!-- <div>
        <ul class="breadcrumbs mb-5">
            <a href="" class="breadcrumbs-item breadcrumbs-active">
                <li>Home</li>
            </a>
            <a href="#" class="breadcrumbs-item">
                <li>Reports</li>
            </a>

            <a href="#" class="breadcrumbs-item">
                <li>Admin</li>
            </a>

            <li class="breadcrumbs-item breadcrumbs-active">Circulation</li>
        </ul>
    </div> -->

    <!-- Main Page -->
    <main class="main p-0">
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
        <div class="col-xl-8 mx-auto">
            <?php require_once("accordions.php"); ?>
        </div>
        <!-- <section class="col-xl-8 col-md-8 mx-auto mt-24">
            <!-- <div class=" linksPrevious d-flex flex-lg-row flex-column m-4 justify-content-center">
                <div class="subSections mx-xl-auto me-auto">
                    <a href="#">
                        <div class="link">
                            <i class="fa-solid fa-repeat"></i>
                            Circulation
                        </div>
                    </a>
                    <a href="../EAKL/addDefaulters.php" target="_main">
                        <div class="link">
                            <i class="fa-brands fa-searchengin"></i>
                            Add Defaulters
                        </div>
                    </a>
                    <a href="#">
                        <div class="link">
                            <i class="fa-solid fa-gears"></i>
                            Patrons
                        </div>
                    </a>
                    <a href="#">
                        <div class="link">
                            <i class="fa-solid fa-table-list"></i>
                            Reports
                        </div>
                    </a>
                </div>
                <div class="subSections mx-xl-auto me-auto">
                    <a href="../EAKL/clearDefaulters.php" target="_self">
                        <div class="link">
                            <i class="fa-solid fa-chart-pie"></i>
                            Clear Defualters
                        </div>
                    </a>
                    <a href="#">
                        <div class="link">
                            <i class="fa-solid fa-repeat"></i>
                            Cataloging
                        </div>
                    </a>
                    <a href="#">
                        <div class="link">
                            <i class="fa-brands fa-searchengin"></i>
                            Acquisition
                        </div>
                    </a>

                </div> -->
            <!-- </div> -->
            <!-- Accordions-->
            <!-- <div class="acc">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                <i class="fa-brands fa-plus"></i>
                                &nbsp;
                                Add Defaulters
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion
                                body.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                <i class="fa-solid fa-gears"></i>&nbsp;
                                Patrons
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion
                                body. Let's imagine this being filled with some actual content.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                <i class="fa-solid fa-table-list"></i>&nbsp;
                                Reports
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion
                                body. Nothing more exciting happening here in terms of content, but just filling up the
                                space to make it look, at least at first glance, a bit more representative of how this
                                would
                                look in a real-world application.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                <i class="fa-solid fa-chart-pie"></i>&nbsp;
                                Clear Defaulters
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion
                                body. Nothing more exciting happening here in terms of content, but just filling up the
                                space to make it look, at least at first glance, a bit more representative of how this
                                would
                                look in a real-world application.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                <i class="fa-solid fa-repeat"></i>&nbsp;
                                Cataloging
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion
                                body. Nothing more exciting happening here in terms of content, but just filling up the
                                space to make it look, at least at first glance, a bit more representative of how this
                                would
                                look in a real-world application.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                <i class="fa-brands fa-searchengin"></i>&nbsp;
                                Acquisition
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion
                                body. Nothing more exciting happening here in terms of content, but just filling up the
                                space to make it look, at least at first glance, a bit more representative of how this
                                would
                                look in a real-world application.</div>
                        </div>
                    </div>
                </div>
            </div> -->
        <!-- </section> --> 
    </main>
    <?php require_once("footer.php"); ?>
</body>

</html>