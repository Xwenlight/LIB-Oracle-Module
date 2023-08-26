<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clear Defaulters</title>

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
        table{
            width: 30%; 
            margin: auto;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            margin-bottom: 24px;
        }
        table, tr, th, td{
            border: 1px solid #d4d4d4;
            border-collapse: collapse;
            padding: 6px 0;
        }
        th, td{
            text-align: center;
            vertical-align: top;
        }
        tr:nth-child(even){
            background-color: #ebd2d2;
        }



        .interactionBox{
            border: 2px solid #000;
            width: 30%;
            margin-bottom: 2rem;
        }

        .submitButton{
            background-color: #920d0e;
            color: #fff;
            border: 0px;
            padding: 2px 6px;
        }
        .submitButton:hover{
            background-color: #920d0ed0;
        }
    </style>
</head>
<body>

<?php
 require_once("header.php");
?>

    <div>
        <ul class="breadcrumbs m-0">
            <a href="/EAKL/index.php" class="breadcrumbs-item">
                <li>Home</li>
            </a>

            <li class="breadcrumbs-item breadcrumbs-active">Clear Defaulters</li>
        </ul>
    </div>

<div class="interactionBox my-4 mx-auto px-3">

<form class="my-3" action="patrons.php" method="post">
  <label for="student_id">Enter Student ID:</label>
  <input type="text" name="student_id" id="student_id">
  <input class="submitButton" type="submit" value="Submit">
</form>        
<?php
  require_once("footer.php");
?>

</body>
</html>