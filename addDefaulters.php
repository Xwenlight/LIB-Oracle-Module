<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Defaulters</title>

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
            width: 60%;
            margin: auto;
            font-family: Arial, Helvetica, sans-serif;
        }
        table, tr, th, td{
            border: 1px solid #d4d4d4;
            border-collapse: collapse;
            padding: 6px;
        }
        th, td{
            text-align: left;
            vertical-align: top;
        }
        tr:nth-child(even){
            background-color: #ebd2d2;
        }



        .hello{
            border: 2px solid #000;
            height: 30vh;
            margin-bottom: 2rem;
        }

        @import url('https://fonts.googleapis.com/css2?family=EB+Garamond:wght@600&display=swap');

        .defaultersHeading{
            font-size: 4rem;
            color: #920d0e;
            font-family: 'EB Garamond', serif;
            text-align: center;
            text-decoration: underline;
            letter-spacing: 1px;
        }


        .width70{
            width: 70%;
        }

        .exportDataButton{
            display: flex;
            justify-content: end;

        }

        .exportDataButton button{
            background-color: #920d0e;
            color: #fff;
            border: 0px;
            padding: 6px 12px;
        }
        .exportDataButton button:hover{
            background-color: #920d0ed0;
        }

        .errorWindow{
            border: 2px solid #000;
        }
    </style>
</head>
<body>

    <?php
    require_once("header.php");
    ?>


    <!-- Breadcrumbs Section -->
    <div>
        <ul class="breadcrumbs m-0">
            <a href="/EAKL/index.php" class="breadcrumbs-item">
                <li>Home</li>
            </a>
            <!-- <a href="#" class="breadcrumbs-item">
                <li>Reports</li>
            </a>

            <a href="#" class="breadcrumbs-item">
                <li>Admin</li>
            </a> -->

            <li class="breadcrumbs-item breadcrumbs-active">Add Defaulters</li>
        </ul>
    </div>



<?php
    echo "<div>";
    echo "<h1 class='defaultersHeading my-5'>List of All defaulters</h1>";
    echo "</div>";


    // Connect to the Koha database (MySQL)
    require_once('Mysql_connect.php');

    // Run the query and store the results in a PHP array
    //$sql = "SELECT distinct b.userid, firstname, attribute, categorycode FROM issues i, borrowers b, borrower_attributes ba WHERE i.borrowernumber=b.borrowernumber AND b.categorycode in ('UG1','UG2','UG3','UG4','UG5') and b.borrowernumber=ba.borrowernumber and ba.code='PAT_NO' order by substr(attribute,1,2),  categorycode;";
    $sql = "SELECT distinct b.cardnumber, firstname, attribute, categorycode FROM issues i, borrowers b, borrower_attributes ba WHERE i.borrowernumber=b.borrowernumber AND b.categorycode in ('UG1','UG2','UG3','UG4','UG5') and b.borrowernumber=ba.borrowernumber and ba.code='PAT_NO' order by substr(cardnumber,1,2) desc, substr(attribute,1,2);";
    $result = $connMySql->query($sql);
    $data = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    // Display the results in an HTML table
    if (!empty($data)) {
        $sno = 1;

        echo "<table>";
        echo "<tr><th>S no.</th><th>Card No.</th><th>First Name</th><th>Borrower No.</th><th>Category</th></tr>";
        foreach ($data as $row) {
            echo "<tr>";
            echo "<td>".$sno."</td>";
            echo "<td>".$row['cardnumber']."</td>";
            echo "<td>".$row['firstname']."</td>";
            echo "<td>".$row['attribute']."</td>";
            // echo "<td>".$row['categorycode']."</td>";
            if ($row['categorycode'] == 'UG1') {
                echo "<td>First Year</td>";
            } else if ($row['categorycode'] == 'UG2') {
                echo "<td>Second Year</td>";
            } else if ($row['categorycode'] == 'UG3') {
                echo "<td>Third Year</td>";
            } else if ($row['categorycode'] == 'UG4') {
                echo "<td>Fourth Year</td>";
                 
            } else {
                echo "<td>Fifth Year</td>";
            }
            

            echo "</tr>";

            $sno = $sno+1;
        }
        echo "</table>";
        echo '<form method="post">';
        echo '<div  class="width70 exportDataButton my-3 mx-auto">';
        echo '<button class="" type="submit" name="exportBtn">Stop Semester Registration</button>';
        echo '</div>';
        echo '</form>';
    } else {
        echo "No results found.";
    }

    // Create connection to Oracle
    $connOracle = oci_connect("testlib", "testlib", "192.168.14.198:1521/dev");
    if (!$connOracle) {
        $m = oci_error();
        echo $m['message'], "\n";
        exit;
    }

    if(isset($_POST['exportBtn'])) {
        // Insert data into Oracle
        foreach ($data as $row) {
            $studentID = $row['userid'];
            $libDef = 'Y';
            // $query = "INSERT INTO LIB_DEF_SIS (STUDENT_ID, LIB_DEF, LAST_UPD_DT) VALUES ('".$studentID."', '".$libDef."', SYSDATE)";
            $query = "INSERT INTO LIB_DEF_SIS (STUDENT_ID, LIB_DEF, LAST_UPD_DT) SELECT '".$studentID."', '".$libDef."', SYSDATE FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM LIB_DEF_SIS WHERE STUDENT_ID = '".$studentID."')";
            if (!is_numeric($studentID)) {
                $borrowsNo = $row['attribute'];
                echo '<div class="width70 mx-auto errorWindow p-2 my-3">';
                echo "Error: Student with card number '".$studentID."' and borrowrs number '".$borrowsNo."' cannot be added to Oracle because their ID is not valid.<br></div>";
                continue;
            }
            $sql = oci_parse($connOracle, $query);
            oci_execute($sql);
        }
    }

    // Close database connections
    mysqli_close($connMySql);
    oci_close($connOracle);

    require_once("footer.php");
?>




</body>
</html>