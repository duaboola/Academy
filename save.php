<?php
// Start the session
session_start();

 echo ("<script>console.log('PHP: " . $_SESSION["coursename"] . "');</script>");
// Initialize session variables
if (!isset($_SESSION["courseName"])) {
  $_SESSION["courseName"] = "";
  $_SESSION["firstName"] = "";
  $_SESSION["lastName"] = "";
  $_SESSION["dob"] = "";
  $_SESSION["gender"] = ""; 
  $_SESSION["email"] = "";
  $_SESSION["countryCode"] = "";
  $_SESSION["phoneNumber"] = "";
  $_SESSION["role"] = "";
  $_SESSION["org"] = "";
  $_SESSION["address1"] = "";
  $_SESSION["address2"] = "";
  $_SESSION["city"] = "";
  $_SESSION["region"] = "";
  $_SESSION["zip"] = "";
  $_SESSION["country"] = "";
  $_SESSION["voucher"] = "";
  // Add more session variables for other form fields
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Capture the form data
  $courseName = $_POST["Dropdown1"];
  $firstName = $_POST["Name_First"];
  $lastName = $_POST["Name_Last"];
  $dob = $_POST["Date"];
  $gender = $_POST["Radio"]; 
  $email = $_POST["Email"];
  $countryCode = $_POST["PhoneNumber_countrycodeval"];
  $phone = $_POST["PhoneNumber_countrycode"];
  $role = $_POST["Dropdown"];
  $org = $_POST["SingleLine1"];
  $ad1 = $_POST["Address_AddressLine1"];
  $ad2= $_POST["Address_AddressLine2"];
  $city = $_POST["Address_City"];
  $region = $_POST["Address_Region"];
  $zip = $_POST["Address_ZipCode"];
  $country = $_POST["Address_Country"];
  $voucher = $_POST["SingleLine2"];
  // Capture other form fields in the same way

    // Handle file upload
   // Handle file upload
  if (isset($_FILES["FileUpload"])) {
    $uploadDirectory = "uploads/"; // Change to your desired upload directory
    $uploadedFileName = $_FILES["FileUpload"]["name"];
    $fileUploadPath = $uploadDirectory . $uploadedFileName;
    
    if (move_uploaded_file($_FILES["FileUpload"]["tmp_name"], $fileUploadPath)) {
      // Store the file path in a session variable
      $_SESSION["uploadedFilePath"] = $fileUploadPath;
    }
  }

    // Handle file upload
    $uploadedFileName1 = $_FILES["FileUpload1"]["name"];
    $fileUploadPath1 = $uploadDirectory . $uploadedFileName1;
    move_uploaded_file($_FILES["FileUpload1"]["tmp_name"], $fileUploadPath1);
    
    // Store the file path in a session variable
    $_SESSION["uploadedFilePath1"] = $fileUploadPath1;
  
  // Store the form data in session variables
  $_SESSION["courseName"] = $courseName;
  $_SESSION["firstName"] = $firstName;
  $_SESSION["lastName"] = $lastName;
  $_SESSION["dob"] = $dob;
  $_SESSION["gender"] = $gender; 
  $_SESSION["email"] = $email;
  $_SESSION["countryCode"] = $countryCode;
  $_SESSION["phoneNumber"] = $phone;
  $_SESSION["role"] = $role;
  $_SESSION["org"] = $org;
  $_SESSION["address1"] = $ad1;
  $_SESSION["address2"] = $ad2;
  $_SESSION["city"] = $city;
  $_SESSION["region"] = $region;
  $_SESSION["zip"] = $zip;
  $_SESSION["country"] = $country;
  $_SESSION["voucher"] = $voucher;
  // Store other form data in session variables

  echo ("<script>console.log('PHP: " . $_SESSION["courseName"] . "');</script>");
  echo ("<script>console.log('PHP: " . $uploadedFileName . "');</script>");
  echo ("<script>console.log('File: " . $_SESSION["uploadedFilePath"] . "');</script>");
  
  // Redirect to your PHP page (optional)
//   header("Location: verification.php"); // Replace with your actual PHP file URL
//   exit;
}

// Submit the form data to the Zoho form URL
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION["courseName"]) && isset($_SESSION["firstName"]) && isset($_SESSION["lastName"])) {
  $postData = [
    "Dropdown1" => $_SESSION["courseName"],
    "Name_First" => $_SESSION["firstName"],
    "Name_Last" => $_SESSION["lastName"],
    "Date" => $_SESSION["dob"],
    "Radio" => $_SESSION["gender"],
    "Email" => $_SESSION["email"],
    "PhoneNumber_countrycodeval" => $_SESSION["countryCode"],
    "PhoneNumber_countrycode" => $_SESSION["phoneNumber"],
    "Dropdown" => $_SESSION["role"],
    "SingleLine1" => $_SESSION["org"],
    "Address_AddressLine1" => $_SESSION["address1"],
    "Address_AddressLine2" => $_SESSION["address2"],
    "Address_City" => $_SESSION["city"],
    "Address_Region" => $_SESSION["region"],
    "Address_ZipCode" => $_SESSION["zip"],
    "Address_Country" => $_SESSION["country"],
    "SingleLine2" => $_SESSION["voucher"],
    "FileUpload" => "@" . $_SESSION["uploadedFilePath"],
    "FileUpload1" => "@" . $_SESSION["uploadedFilePath1"],
    // Add more form fields as needed
  ];

  echo ("<script>console.log('PHP: " . $_SESSION["coursename"] . "');</script>");

//   echo ("<script>console.log('Data: " . $postData . "');</script>");

  $ch = curl_init("https://forms.zohopublic.com/it177/form/RegistrationForm/formperma/28P6aSqNTn733eqfofgpUCc5vWS_VU1C-qsJXG0T1qM/htmlRecords/submit");
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  $response = curl_exec($ch);

  if (curl_errno($ch)) {
    // Handle cURL errors here
    echo "cURL Error: " . curl_error($ch);
  }

  curl_close($ch);

  // Log the response from Zoho CRM
  file_put_contents("zoho_response.log", $response); // Save response to a log file
 }
?>
