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

            <li class="breadcrumbs-item breadcrumbs-active">Clear Defaulters</li>
        </ul>
    </div>

<div class="interactionBox my-4 mx-auto px-3">
<form class="my-3" action="" method="post">
  <label for="student_id">Enter Student ID:</label>
  <input type="text" name="student_id" id="student_id">
  <input class="submitButton" type="submit" value="Submit">
</form>        


<?php

global $StID, $count, $libDef;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Form was submitted, get the student ID from the form data
    $StID = $_POST['student_id'];
  
    // Do something with the student ID...
}

// Connect to the Koha database (MySQL)
require_once('Mysql_connect.php');

// $StID = '3808593';

// Query the database to select data from a table
$sql = "SELECT COUNT(*) FROM issues, borrowers WHERE issues.borrowernumber=borrowers.borrowernumber AND borrowers.userid='$StID'";

$result = $connMySql->query($sql);

// Check if any rows were returned
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $count = (int) $row["COUNT(*)"];
  // echo "Total count: " . $count;
} else {
    // No rows were returned
    // echo "0 results";
}

// Connect to the Oracle database
require_once('Oracle_connect.php');

// Prepare the SQL query
$query = "SELECT LIB_DEF FROM LIB_DEF_SIS WHERE STUDENT_ID='$StID'";

$sql = oci_parse($conn, $query);
oci_execute($sql);


while($row = oci_fetch_assoc($sql)) {
  // access the column value using column name or alias
  $libDef = $row['LIB_DEF'];

  // Just for printing the result stored in $libDef variable
  // echo "<br>";
  // echo $libDef;
}

if ($count===0 && $libDef==='Y'){
  $query = "UPDATE LIB_DEF_SIS SET LIB_DEF = 'N' , LAST_UPD_DT = SYSDATE WHERE STUDENT_ID='$StID'";

  $sql = oci_parse($conn, $query);
  oci_execute($sql);

  oci_commit($conn);
  
  echo "<b>Update record successfully</b>";
}

else if ($count===0 && $libDef==='N'){
    echo "<b>Error: Member not decleared a defaulter</b>";
  }
  
  else if ($count>0 && $libDef==='Y'){
    echo "<b>Student: ",$StID, "still a defaulter with No of books:", $count,"</b>";
  }
  
  else if ($count>0 && $libDef==='N'){
    echo "<b>Error: Member has already been cleared for registration.</b>";
  }

// Finally, free up the statement resource
oci_free_statement($sql);

// Close the Oracle connection
// oci_close($conn);

// Close the connection of Mysql db (i.e Koha)
$connMySql->close();


    echo "</div>";
    // print "Connected to Oracle DB!";

    // Prepare the SQL query
    $query = "SELECT * FROM LIB_DEF_SIS where lib_def = 'Y'";
    $sql = oci_parse($conn, $query);
    oci_execute($sql);
    // Fetch the data from the database
    $students = array();
    while ($row = oci_fetch_array($sql, OCI_ASSOC+OCI_RETURN_NULLS)) {
    $students[] = $row;
    }

    // Define the desired column names
    $columnNames = array(
        'STUDENT_ID' => 'Student ID',
        'LIB_DEF' => 'Is Defaulter',
        'LAST_UPD_DT' => 'Date'
    );

    // Generate the grid
    echo '<table>';
    echo '<tr>';
    foreach ($columnNames as $displayName) {
        echo '<th>' . $displayName . '</th>';
    }
    echo '</tr>';
    foreach ($students as $student) {
        echo '<tr>';
        foreach ($student as $value) {
            echo '<td>' . $value . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';

// Close the Oracle connection

oci_close($conn);


  // footer
  require_once("footer.php");
?>

</body>
</html>