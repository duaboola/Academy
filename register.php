<?php
session_start();

echo ("<script>console.log('PHP: " . $_SESSION["coursename"] . "');</script>");

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
 header("Location: verification.php"); // Replace with your actual PHP file URL
exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>McIndeez Academy</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!--  Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <link href="assets/css/form.css" rel="stylesheet" type="text/css">
    <script src="assets/js/validation.js"></script>

    
</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html">McIndeez Consultancy</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.html">Home</a></li>
          <li class="dropdown"><a href="courses.html"><span>Courses</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Cybersquare</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>IITM</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <!-- <li><a href="#">Drop Down 2</a></li> -->
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="index.html#features">Associates</a></li>
          <li><a class="nav-link scrollto" href="index.html#gallery">Testimonials</a></li>
          <li><a class="nav-link scrollto" href="index.html#pricing"><span id="country">...</span></a></li>
          <li><a class="getstarted scrollto" href="index.html#features">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2></h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Courses</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

<main id="register">
<div class="zf-templateWidth"><form action='https://forms.zohopublic.com/it177/form/RegistrationForm/formperma/28P6aSqNTn733eqfofgpUCc5vWS_VU1C-qsJXG0T1qM/htmlRecords/submit' name='form' method='POST' onSubmit='javascript:document.charset="UTF-8";return zf_ValidateAndSubmit();' accept-charset='UTF-8' enctype='multipart/form-data' id='form'><input type="hidden" name="zf_referrer_name" value=""><!-- To Track referrals , place the referrer name within the " " in the above hidden input field -->
<input type="hidden" name="zf_redirect_url" value=""><!-- To redirect to a specific page after record submission , place the respective url within the " " in the above hidden input field -->
<input type="hidden" name="zc_gad" value=""><!-- If GCLID is enabled in Zoho CRM Integration, click details of AdWords Ads will be pushed to Zoho CRM -->
<div class="zf-templateWrapper"><!---------template Header Starts Here---------->
<ul class="zf-tempHeadBdr"><li class="zf-tempHeadContBdr"><h2 class="zf-frmTitle"><em>Registration Form</em></h2>
<p class="zf-frmDesc"></p>
<div class="zf-clearBoth"></div></li></ul><!---------template Header Ends Here---------->
<!---------template Container Starts Here---------->
<div class="zf-subContWrap zf-topAlign"><ul>
<!---------Dropdown Starts Here---------->
<li class="zf-tempFrmWrapper zf-large"><label class="zf-labelName">
Course Name
<em class="zf-important">*</em>
</label>
<div class="zf-tempContDiv">
<select class="zf-form-sBox" name="Dropdown1" checktype="c1">
<option value="-Select-" <?php echo (isset($_SESSION['coursename']) && $_SESSION['coursename'] === '-Select-') ? 'selected' : ''; ?>>-Select-</option>
            <option value="Design Your Website Beginner" <?php echo (isset($_SESSION['coursename']) && $_SESSION['coursename'] === 'Design Your Website Beginner') ? 'selected' : ''; ?>>Design Your Website Beginner</option>
            <option value="Little&#x20;Coder&#x20;Beginner">Little Coder Beginner</option>
<option value="Junior&#x20;Python&#x20;Developer&#x20;Beginner">Junior Python Developer Beginner</option>
<option value="Artificial&#x20;Intelligence">Artificial Intelligence</option>
<option value="Javascript&#x20;Game&#x20;Developer&#x20;Beginner">Javascript Game Developer Beginner</option>
<option value="Little&#x20;Coder&#x20;Advanced">Little Coder Advanced</option>
<option value="Javascript&#x20;Game&#x20;Developer&#x20;Advanced">Javascript Game Developer Advanced</option>
<option value="Design&#x20;Your&#x20;Website&#x20;Advanced">Design Your Website Advanced</option>
<option value="Junior&#x20;Python&#x20;Developer&#x20;Advanced">Junior Python Developer Advanced</option>
<option value="Port&#x20;Management&#x20;and&#x20;Terminal&#x20;Management">Port Management and Terminal Management</option>
<option value="International&#x20;Liners&#x20;Trade">International Liners Trade</option>
<option value="Freight&#x20;Forwarding&#x20;Services">Freight Forwarding Services</option>
<option value="Chartering&#x20;Practice">Chartering Practice</option>
<option value="Custom&#x20;Broking">Custom Broking</option>
<option value="Introduction&#x20;to&#x20;Financial&#x20;Markets&#x20;and&#x20;Banking">Introduction to Financial Markets and Banking</option>
<option value="Programme&#x20;in&#x20;Premium&#x20;Banker">Programme in Premium Banker</option>
<option value="Programme&#x20;in&#x20;Investment&#x20;Advisory&#x20;Services">Programme in Investment Advisory Services</option>
<option value="Business&#x20;Accounting&#x20;Process&#x20;-&#x20;Accounts&#x20;Payable&#x20;&amp;&#x20;Receivable">Business Accounting Process - Accounts Payable &amp; Receivable</option>
<option value="Business&#x20;Accounting&#x20;Process&#x20;-&#x20;Payroll">Business Accounting Process - Payroll</option>
<option value="Business&#x20;Accounting&#x20;Process&#x20;-&#x20;Statuatory&#x20;Compliance">Business Accounting Process - Statuatory Compliance</option>
<option value="Business&#x20;Accounting&#x20;Process&#x20;-&#x20;Accounts&#x20;Executive&#x20;&#x28;Recording&#x20;&amp;&#x20;Reporting&#x29;">Business Accounting Process - Accounts Executive &#x28;Recording &amp; Reporting&#x29;</option>
<option value="Programme&#x20;on&#x20;Equity&#x20;Derivatives">Programme on Equity Derivatives</option>
<option value="Programme&#x20;in&#x20;Digital&#x20;Banking">Programme in Digital Banking</option>
<option value="Programme&#x20;in&#x20;Banking&#x20;and&#x20;Finance">Programme in Banking and Finance</option>
<option value="Programme&#x20;in&#x20;Securities&#x20;Operations&#x20;and&#x20;Risk&#x20;Management">Programme in Securities Operations and Risk Management</option>
<option value="Programme&#x20;in&#x20;Mutual&#x20;Fund">Programme in Mutual Fund</option>
<option value="Business&#x20;Accounting&#x20;Process&#x20;-&#x20;Executive&#x20;&#x28;Certified&#x20;Professional&#x20;in&#x20;Transactional&#x20;F&amp;A&#x29;">Business Accounting Process - Executive &#x28;Certified Professional in Transactional F&amp;A&#x29;</option>
<option value="Artificial&#x20;Intelligence">Artificial Intelligence</option>
<option value="Blockchain&#x20;&amp;&#x20;Cryptocurrency">Blockchain &amp; Cryptocurrency</option>
<option value="Certified&#x20;Cyber&#x20;Engineer&#x20;-&#x20;Computer&#x20;&amp;&#x20;Network&#x20;Security">Certified Cyber Engineer - Computer &amp; Network Security</option>
<option value="Certified&#x20;Professional&#x20;in&#x20;Advanced&#x20;Programming">Certified Professional in Advanced Programming</option>
<option value="Certified&#x20;Professional&#x20;in&#x20;Programming">Certified Professional in Programming</option>
<option value="Python&#x20;Course&#x20;in&#x20;Multiple&#x20;Languages">Python Course in Multiple Languages</option>
<option value="Career&#x20;Back&#x20;to&#x20;Women&#x20;&#x3a;&#x20;Certified&#x20;Professional&#x20;in&#x20;Basics&#x20;of&#x20;Artificial&#x20;Intelligence&#x20;&#x2f;&#x20;Machine&#x20;Learning">Career Back to Women &#x3a; Certified Professional in Basics of Artificial Intelligence &#x2f; Machine Learning</option>
<option value="Certified&#x20;Cyber&#x20;Warrior&#x20;V3.1">Certified Cyber Warrior V3.1</option>
<option value="Career&#x20;Back&#x20;to&#x20;Women&#x20;&#x3a;&#x20;Certified&#x20;Professional&#x20;in&#x20;Advanced&#x20;Course&#x20;in&#x20;Data&#x20;Science&#x20;and&#x20;Big&#x20;Data&#x20;Analytics">Career Back to Women &#x3a; Certified Professional in Advanced Course in Data Science and Big Data Analytics</option>
<option value="Career&#x20;Back&#x20;to&#x20;Women&#x20;&#x3a;&#x20;Certified&#x20;Professional&#x20;in&#x20;Basics&#x20;of&#x20;Data&#x20;Science&#x20;and&#x20;Big&#x20;Data&#x20;Analytics">Career Back to Women &#x3a; Certified Professional in Basics of Data Science and Big Data Analytics</option>
<option value="Career&#x20;Back&#x20;to&#x20;Women&#x20;&#x3a;&#x20;Certified&#x20;Professional&#x20;in&#x20;Advanced&#x20;Course&#x20;in&#x20;Software&#x20;Engineering&#x20;and&#x20;Programming&#x20;Tools">Career Back to Women &#x3a; Certified Professional in Advanced Course in Software Engineering and Programming Tools</option>
<option value="Career&#x20;Back&#x20;to&#x20;Women&#x20;&#x3a;&#x20;Certified&#x20;Professional&#x20;in&#x20;Basics&#x20;of&#x20;Software&#x20;Engineering&#x20;and&#x20;Programming&#x20;Tools">Career Back to Women &#x3a; Certified Professional in Basics of Software Engineering and Programming Tools</option>
<option value="Career&#x20;Back&#x20;to&#x20;Women&#x20;&#x3a;&#x20;Certified&#x20;Professional&#x20;in&#x20;Advanced&#x20;Course&#x20;in&#x20;Cyber&#x20;Security&#x20;and&#x20;Digital&#x20;Forensics">Career Back to Women &#x3a; Certified Professional in Advanced Course in Cyber Security and Digital Forensics</option>
<option value="Career&#x20;Back&#x20;to&#x20;Women&#x20;&#x3a;&#x20;Certified&#x20;Professional&#x20;in&#x20;Basics&#x20;of&#x20;Cyber&#x20;Security">Career Back to Women &#x3a; Certified Professional in Basics of Cyber Security</option>
<option value="Career&#x20;Back&#x20;to&#x20;Women&#x20;&#x3a;&#x20;Certified&#x20;Professional&#x20;in&#x20;Advanced&#x20;Course&#x20;in&#x20;Artificial&#x20;Intelligence&#x20;&#x2f;&#x20;Machine&#x20;Learning">Career Back to Women &#x3a; Certified Professional in Advanced Course in Artificial Intelligence &#x2f; Machine Learning</option>
<option value="Career&#x20;Back&#x20;to&#x20;Women&#x20;&#x3a;&#x20;Certified&#x20;Professional&#x20;Back&#x20;to&#x20;Technical&#x20;Trach&#x20;&#x28;BTCUBE&#x29;">Career Back to Women &#x3a; Certified Professional Back to Technical Trach &#x28;BTCUBE&#x29;</option>
</select><p id="Dropdown1_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
</div><div class="zf-clearBoth"></div></li><!---------Dropdown Ends Here---------->
<!---------Name Starts Here----------> 
<li class="zf-tempFrmWrapper zf-name zf-namelarge"><label class="zf-labelName"> 
Name 
<em class="zf-important">*</em>
</label>
<div 
class="zf-tempContDiv zf-twoType"  
>
<div
class="zf-nameWrapper"  
>
<span> <input type="text" maxlength="255" name="Name_First" fieldType=7 placeholder=""/> <label>First Name</label>
 </span> 
 </span> </span>
<span> <input type="text" maxlength="255" name="Name_Last" fieldType=7 placeholder=""/> <label>Last Name</label>
 </span> 
 </span> </span>
<div class="zf-clearBoth"></div></div><p id="Name_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
</div><div class="zf-clearBoth"></div></li><!---------Name Ends Here----------> 
<!---------Date Starts Here----------> 
<li class="zf-tempFrmWrapper zf-date"><label class="zf-labelName"> 
Date of Birth 
<em class="zf-important">*</em>
</label>
<div class="zf-tempContDiv">
<span> <input type="text" name="Date" checktype="c4" value="" maxlength="25" placeholder=""/><label>dd-MMM-yyyy</label> </span><div class="zf-clearBoth"></div><p id="Date_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
</div><div class="zf-clearBoth"></div></li><!---------Date Ends Here----------> 
<!---------Radio Starts Here---------->    
<li class="zf-radio zf-tempFrmWrapper zf-oneColumns"><label class="zf-labelName">Gender
<em class="zf-important">*</em>
</label>
<div class="zf-tempContDiv">
<div class="zf-overflow">
<span class="zf-multiAttType"> 
<input class="zf-radioBtnType" type="radio" id="Radio_1" name="Radio" checktype="c1" value="Male">
<label for="Radio_1" class="zf-radioChoice">Male</label> </span>
<span class="zf-multiAttType"> 
<input class="zf-radioBtnType" type="radio" id="Radio_2" name="Radio" checktype="c1" value="Female">
<label for="Radio_2" class="zf-radioChoice">Female</label> </span>
<div class="zf-clearBoth"></div></div><p id="Radio_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
</div><div class="zf-clearBoth"></div></li><!---------Radio Ends Here---------->    
<!---------Email Starts Here---------->  
<li class="zf-tempFrmWrapper zf-large"><label class="zf-labelName"> 
Email 
<em class="zf-important">*</em>
</label>
<div class="zf-tempContDiv">
<span> <input fieldType=9  type="text" maxlength="255" name="Email" checktype="c5" value="" placeholder=""/></span> <p id="Email_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
</div><div class="zf-clearBoth"></div></li><!---------Email Ends Here---------->  
<!---------Phone Starts Here----------> 
<li  class="zf-tempFrmWrapper zf-large"><label class="zf-labelName"> 
Phone 
<em class="zf-important">*</em>
</label>
<div class="zf-tempContDiv zf-phonefld">
<div
class="zf-phwrapper"   
>
<span> <input type="text" compname="PhoneNumber_countrycodeval" name="PhoneNumber_countrycodeval" checktype="c7" maxlength="10" phoneFormat="1" isCountryCodeEnabled=true  id="international_PhoneNumber_countrycodeval" valType="code" placeholder=""/>
<label>Code</label> </span>
<span> <input type="text" compname="PhoneNumber" name="PhoneNumber_countrycode" maxlength="20" checktype="c7" value="" phoneFormat="1" isCountryCodeEnabled=true fieldType="11" id="international_PhoneNumber_countrycode" valType="number" phoneFormatType="1" placeholder="" />
<label>Number</label> </span>
<div class="zf-clearBoth"></div></div><p id="PhoneNumber_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
</div><div class="zf-clearBoth"></div></li><!---------Phone Ends Here----------> 
<!---------Dropdown Starts Here---------->
<li class="zf-tempFrmWrapper zf-large"><label class="zf-labelName">
Role
<em class="zf-important">*</em>
</label>
<div class="zf-tempContDiv">
<select class="zf-form-sBox" name="Dropdown" checktype="c1">
<option selected="true" value="-Select-">-Select-</option>
<option value="Student">Student</option>
<option value="Graduate">Graduate</option>
<option value="Employee">Employee</option>
</select><p id="Dropdown_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
</div><div class="zf-clearBoth"></div></li><!---------Dropdown Ends Here---------->
<!---------Single Line Starts Here---------->
<li class="zf-tempFrmWrapper zf-large"><label class="zf-labelName"> 
Institution / Organization 
<em class="zf-important">*</em>
</label>
<div class="zf-tempContDiv">
<span> <input type="text" name="SingleLine1" checktype="c1" value="" maxlength="255" fieldType=1 placeholder=""/></span> <p id="SingleLine1_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
</div><div class="zf-clearBoth"></div></li><!---------Single Line Ends Here---------->
<!--address-->
<!---------Address Starts Here---------->  
<li class="zf-tempFrmWrapper zf-address zf-addrlarge " ><label class="zf-labelName"> 
Address 
<em class="zf-important">*</em>
</label>
<div class="zf-tempContDiv zf-address">
<div class="zf-addrCont">
<span class="zf-addOne"> <input type="text" maxlength="255" name="Address_AddressLine1" checktype="c1" placeholder=""/>
<label>Street Address</label>
 </span>
<span class="zf-addOne"> <input type="text" maxlength="255" name="Address_AddressLine2" checktype="c1" placeholder=""/>
<label>Address Line 2</label>
 </span>
<span class="zf-flLeft zf-addtwo"> <input type="text" maxlength="255" name="Address_City" checktype="c1" placeholder=""/>
<label>City</label>
 </span>
<span class="zf-flLeft zf-addtwo"> <input type="text" maxlength="255" name="Address_Region" checktype="c1" placeholder=""/>
<label>State/Region/Province</label>
 </span>
<span class="zf-flLeft zf-addtwo"> <input type="text" maxlength="255" name="Address_ZipCode" checktype="c1" placeholder=""/>
<label>Postal / Zip Code</label>
 </span>
<span class="zf-flLeft zf-addtwo"> <select class="zf-form-sBox" name="Address_Country" checktype="c1">
<option value="-Select-">-Select-</option> 
			<option>&Aring;land Islands</option>
			<option>Afghanistan</option>
			<option>Akrotiri</option>
			<option>Albania</option>
			<option>Algeria</option>
			<option>American Samoa</option>
			<option>Andorra</option>
			<option>Angola</option>
			<option>Anguilla</option>
			<option>Antarctica</option>
			<option>Antigua and Barbuda</option>
			<option>Argentina</option>
			<option>Armenia</option>
			<option>Aruba</option>
			<option>Ashmore and Cartier Islands</option>
			<option>Australia</option>
			<option>Austria</option>
			<option>Azerbaijan</option>
			<option>Bahrain</option>
			<option>Bangladesh</option>
			<option>Barbados</option>
			<option>Bassas Da India</option>
			<option>Belarus</option>
			<option>Belgium</option>
			<option>Belize</option>
			<option>Benin</option>
			<option>Bermuda</option>
			<option>Bhutan</option>
			<option>Bolivia</option>
			<option>Bosnia and Herzegovina</option>
			<option>Botswana</option>
			<option>Bouvet Island</option>
			<option>Brazil</option>
			<option>British Indian Ocean Territory</option>
			<option>British Virgin Islands</option>
			<option>Brunei</option>
			<option>Bulgaria</option>
			<option>Burkina Faso</option>
			<option>Burma</option>
			<option>Burundi</option>
			<option>Cambodia</option>
			<option>Cameroon</option>
			<option>Canada</option>
			<option>Cape Verde</option>
			<option>Caribbean Netherlands</option>
			<option>Cayman Islands</option>
			<option>Central African Republic</option>
			<option>Chad</option>
			<option>Chile</option>
			<option>China</option>
			<option>Christmas Island</option>
			<option>Clipperton Island</option>
			<option>Cocos &#x28;Keeling&#x29; Islands</option>
			<option>Colombia</option>
			<option>Comoros</option>
			<option>Cook Islands</option>
			<option>Coral Sea Islands</option>
			<option>Costa Rica</option>
			<option>Cote D&#x27;Ivoire</option>
			<option>Croatia</option>
			<option>Cuba</option>
			<option>Cura&ccedil;ao</option>
			<option>Cyprus</option>
			<option>Czech Republic</option>
			<option>Democratic Republic of the Congo</option>
			<option>Denmark</option>
			<option>Dhekelia</option>
			<option>Djibouti</option>
			<option>Dominica</option>
			<option>Dominican Republic</option>
			<option>Ecuador</option>
			<option>Egypt</option>
			<option>El Salvador</option>
			<option>Equatorial Guinea</option>
			<option>Eritrea</option>
			<option>Estonia</option>
			<option>Ethiopia</option>
			<option>Europa Island</option>
			<option>Falkland Islands &#x28;Islas Malvinas&#x29;</option>
			<option>Faroe Islands</option>
			<option>Federated States of Micronesia</option>
			<option>Fiji</option>
			<option>Finland</option>
			<option>France</option>
			<option>French Guiana</option>
			<option>French Polynesia</option>
			<option>French Southern and Antarctic Lands</option>
			<option>Gabon</option>
			<option>Gaza Strip</option>
			<option>Georgia</option>
			<option>Germany</option>
			<option>Ghana</option>
			<option>Gibraltar</option>
			<option>Glorioso Islands</option>
			<option>Greece</option>
			<option>Greenland</option>
			<option>Grenada</option>
			<option>Guadeloupe</option>
			<option>Guam</option>
			<option>Guatemala</option>
			<option>Guernsey</option>
			<option>Guinea</option>
			<option>Guinea-bissau</option>
			<option>Guyana</option>
			<option>Haiti</option>
			<option>Heard Island and Mcdonald Islands</option>
			<option>Holy See &#x28;Vatican City&#x29;</option>
			<option>Honduras</option>
			<option>Hong Kong</option>
			<option>Hungary</option>
			<option>Iceland</option>
			<option>India</option>
			<option>Indonesia</option>
			<option>Iran</option>
			<option>Iraq</option>
			<option>Ireland</option>
			<option>Isle of Man</option>
			<option>Israel</option>
			<option>Italy</option>
			<option>Jamaica</option>
			<option>Jan Mayen</option>
			<option>Japan</option>
			<option>Jersey</option>
			<option>Jordan</option>
			<option>Juan De Nova Island</option>
			<option>Kazakhstan</option>
			<option>Kenya</option>
			<option>Kiribati</option>
			<option>Kosovo</option>
			<option>Kuwait</option>
			<option>Kyrgyzstan</option>
			<option>Laos</option>
			<option>Latvia</option>
			<option>Lebanon</option>
			<option>Lesotho</option>
			<option>Liberia</option>
			<option>Libya</option>
			<option>Liechtenstein</option>
			<option>Lithuania</option>
			<option>Luxembourg</option>
			<option>Macau</option>
			<option>Macedonia</option>
			<option>Madagascar</option>
			<option>Malawi</option>
			<option>Malaysia</option>
			<option>Maldives</option>
			<option>Mali</option>
			<option>Malta</option>
			<option>Marshall Islands</option>
			<option>Martinique</option>
			<option>Mauritania</option>
			<option>Mauritius</option>
			<option>Mayotte</option>
			<option>Mexico</option>
			<option>Moldova</option>
			<option>Monaco</option>
			<option>Mongolia</option>
			<option>Montenegro</option>
			<option>Montserrat</option>
			<option>Morocco</option>
			<option>Mozambique</option>
			<option>Myanmar</option>
			<option>Namibia</option>
			<option>Nauru</option>
			<option>Navassa Island</option>
			<option>Nepal</option>
			<option>Netherlands</option>
			<option>Netherlands Antilles</option>
			<option>New Caledonia</option>
			<option>New Zealand</option>
			<option>Nicaragua</option>
			<option>Niger</option>
			<option>Nigeria</option>
			<option>Niue</option>
			<option>Norfolk Island</option>
			<option>North Korea</option>
			<option>Northern Mariana Islands</option>
			<option>Norway</option>
			<option>Oman</option>
			<option>Pakistan</option>
			<option>Palau</option>
			<option>Palestine</option>
			<option>Panama</option>
			<option>Papua New Guinea</option>
			<option>Paracel Islands</option>
			<option>Paraguay</option>
			<option>Peru</option>
			<option>Philippines</option>
			<option>Pitcairn Islands</option>
			<option>Poland</option>
			<option>Portugal</option>
			<option>Puerto Rico</option>
			<option>Qatar</option>
			<option>Republic of the Congo</option>
			<option>Reunion</option>
			<option>Romania</option>
			<option>Russia</option>
			<option>Rwanda</option>
			<option>Saint Barth&Atilde;&copy;lemy</option>
			<option>Saint Helena</option>
			<option>Saint Kitts and Nevis</option>
			<option>Saint Lucia</option>
			<option>Saint Martin</option>
			<option>Saint Pierre and Miquelon</option>
			<option>Saint Vincent and the Grenadines</option>
			<option>Samoa</option>
			<option>San Marino</option>
			<option>Sao Tome and Principe</option>
			<option>Saudi Arabia</option>
			<option>Senegal</option>
			<option>Serbia</option>
			<option>Seychelles</option>
			<option>Sierra Leone</option>
			<option>Singapore</option>
			<option>Sint Maarten</option>
			<option>Slovakia</option>
			<option>Slovenia</option>
			<option>Solomon Islands</option>
			<option>Somalia</option>
			<option>South Africa</option>
			<option>South Georgia and the South Sandwich Islands</option>
			<option>South Korea</option>
			<option>South Sudan</option>
			<option>Spain</option>
			<option>Spratly Islands</option>
			<option>Sri Lanka</option>
			<option>Sudan</option>
			<option>Suriname</option>
			<option>Svalbard</option>
			<option>Swaziland</option>
			<option>Sweden</option>
			<option>Switzerland</option>
			<option>Syria</option>
			<option>Taiwan</option>
			<option>Tajikistan</option>
			<option>Tanzania</option>
			<option>Thailand</option>
			<option>The Bahamas</option>
			<option>The Gambia</option>
			<option>Timor-leste</option>
			<option>Togo</option>
			<option>Tokelau</option>
			<option>Tonga</option>
			<option>Trinidad and Tobago</option>
			<option>Tromelin Island</option>
			<option>Tunisia</option>
			<option>Turkey</option>
			<option>Turkmenistan</option>
			<option>Turks and Caicos Islands</option>
			<option>Tuvalu</option>
			<option>Uganda</option>
			<option>Ukraine</option>
			<option>United Arab Emirates</option>
			<option>United Kingdom</option>
			<option>United States</option>
			<option>Uruguay</option>
			<option>Uzbekistan</option>
			<option>Vanuatu</option>
			<option>Venezuela</option>
			<option>Vietnam</option>
			<option>Virgin Islands</option>
			<option>Wake Island</option>
			<option>Wallis and Futuna</option>
			<option>West Bank</option>
			<option>Western Sahara</option>
			<option>Yemen</option>
			<option>Zambia</option>
			<option>Zimbabwe</option>
</select>
<label>Country</label>
 </span>
<div class="zf-clearBoth"></div><p id="Address_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
</div></div><div class="zf-eclearBoth"></div></li><!---------Address Ends Here---------->
<!---------Single Line Starts Here---------->
<li class="zf-tempFrmWrapper zf-large"><label class="zf-labelName"> 
Voucher 
</label>
<div class="zf-tempContDiv">
<span> <input type="text" name="SingleLine2" checktype="c1" value="" maxlength="255" fieldType=1 placeholder=""/></span> <p id="SingleLine2_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
</div><div class="zf-clearBoth"></div></li><!---------Single Line Ends Here---------->
<!--fileupload-->
<!---------File Upload Starts Here---------->  
<li class="zf-tempFrmWrapper"><label class="zf-labelName">Identity Card
<em class="zf-important">*</em>
</label>
<div class="zf-tempContDiv">
<input type="file"  name="FileUpload" checktype="c1"/>
<p id="FileUpload_error" class="zf-errorMessage" style="display:none;">Choose any file for this field.</p>
</div><div class="zf-clearBoth"></div></li><!---------File Upload Ends Here---------->  
<!--fileupload-->
<!---------File Upload Starts Here---------->  
<li class="zf-tempFrmWrapper"><label class="zf-labelName">Certificate of Last Education
</label>
<div class="zf-tempContDiv">
<input type="file"  name="FileUpload1" checktype="c1"/>
<p id="FileUpload1_error" class="zf-errorMessage" style="display:none;">Choose any file for this field.</p>
</div><div class="zf-clearBoth"></div></li><!---------File Upload Ends Here---------->  
</ul></div><!---------template Container Starts Here---------->
<ul><li class="zf-fmFooter"><button class="zf-submitColor" >Submit</button></li></ul></div><!-- 'zf-templateWrapper' ends --></form></div><!-- 'zf-templateWidth' ends -->
</main>

   <!-- ======= Footer ======= -->
   <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>McIndeez Academy</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

  
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/country.js"></script>
  <script src="assets/js/data.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script type="text/javascript">
	var zf_DateRegex = new RegExp("^(([0][1-9])|([1-2][0-9])|([3][0-1]))[-](Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec|JAN|FEB|MAR|APR|MAY|JUN|JUL|AUG|SEP|OCT|NOV|DEC)[-](?:(?:19|20)[0-9]{2})$");
var zf_MandArray = [ "Dropdown1", "Name_First", "Name_Last", "Date", "Radio", "Email", "PhoneNumber_countrycode", "PhoneNumber_countrycodeVal", "Dropdown", "SingleLine1", "Address_AddressLine1", "Address_City", "Address_ZipCode", "Address_Country", "FileUpload"]; 
var zf_FieldArray = [ "Dropdown1", "Name_First", "Name_Last", "Date", "Radio", "Email", "PhoneNumber_countrycode", "PhoneNumber_countrycodeVal", "Dropdown", "SingleLine1", "Address_AddressLine1", "Address_AddressLine2", "Address_City", "Address_Region", "Address_ZipCode", "Address_Country", "SingleLine2", "FileUpload", "FileUpload1"]; 
var isSalesIQIntegrationEnabled = false;
var salesIQFieldsArray = [];
window.location.href = 'verification.php';
return true;
  </script>
  <script type="text/javascript">
    function submitToCRM() {
		var zf_DateRegex = new RegExp("^(([0][1-9])|([1-2][0-9])|([3][0-1]))[-](Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec|JAN|FEB|MAR|APR|MAY|JUN|JUL|AUG|SEP|OCT|NOV|DEC)[-](?:(?:19|20)[0-9]{2})$");
var zf_MandArray = [ "Dropdown1", "Name_First", "Name_Last", "Date", "Radio", "Email", "PhoneNumber_countrycode", "PhoneNumber_countrycodeVal", "Dropdown", "SingleLine1", "Address_AddressLine1", "Address_City", "Address_ZipCode", "Address_Country", "FileUpload"]; 
var zf_FieldArray = [ "Dropdown1", "Name_First", "Name_Last", "Date", "Radio", "Email", "PhoneNumber_countrycode", "PhoneNumber_countrycodeVal", "Dropdown", "SingleLine1", "Address_AddressLine1", "Address_AddressLine2", "Address_City", "Address_Region", "Address_ZipCode", "Address_Country", "SingleLine2", "FileUpload", "FileUpload1"]; 
var isSalesIQIntegrationEnabled = false;
var salesIQFieldsArray = [];
        
        // After successfully submitting to CRM, redirect to the verification page
        window.location.href = 'verification.php'; // Replace with the correct path to your verification page
        
        // Return false to prevent the form from submitting through its default action
        return false;
    }
</script>



</body>

</html>