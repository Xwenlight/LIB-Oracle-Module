<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $id = $_POST["student_id"];
    
    // Display the submitted data
    echo "<h2>Form Data Received:</h2>";
    echo "id: " . $id . "<br>";
} else {
    // If the page is accessed directly without form submission
    echo "Please submit the form.";
}


$api_key = "9aeabb0e-69f4-4145-9473-7cac3138fff";

// Create cURL resource
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, "https://seakl.neduet.edu.pk:8001/api/v1/patrons");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, "4530181:4530181");

// Execute cURL session
$response = curl_exec($ch);

// Check for cURL errors
if(curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
    exit;
}

// Close cURL session
curl_close($ch);

// Parse JSON response
$patrons = json_decode($response, true);

$data = null;

// Find the patron with the specified ID
foreach ($patrons as $patron) {
    if ($patron["userid"] == $id) {
        $data = $patron;
        break;
    }
}

if ($data !== null) {
    echo $data["patron_id"];
} else {
    echo "Patron not found";
}

$target_url = "https://seakl.neduet.edu.pk:8001/cgi-bin/koha/members/moremember.pl?borrowernumber=$id";


echo $target_url;
// Perform the redirect
header("Location: $target_url");

?>
