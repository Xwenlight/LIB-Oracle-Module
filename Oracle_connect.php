<?php

// Create connection to Oracle
$conn = oci_connect("testlib", "testlib", "192.168.14.198:1521/dev");

if (!$conn) {
  
$m = oci_error();
  
echo $m['message'], "\n";
 
exit;

}

// Close the Oracle connection

// oci_close($conn);
?>
