<?php
session_start();
echo ("<script>console.log('PHP: " . $_SESSION["coursename"] . "');</script>");

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

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
    <style>
      body {
          font-family: Arial, sans-serif;
          text-align: center;
      }

      .container {
          margin-top: 50px;
      }

      .hidden {
          display: none;
      }

      input[type="text"] {
          padding: 10px;
          width: 200px;
          margin: 10px;
      }

      button {
          padding: 10px 20px;
          background-color: #007bff;
          color: #fff;
          border: none;
          cursor: pointer;
      }
  </style>
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

  <main id="verification">
    <div>
      <br><br>
    </div>
    <div>
    <section>
  
      <div class="container">
      <input type="text" id="email" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>" readonly>
    <input type="text" id="phone" value="<?php echo isset($_SESSION['phoneNumber']) ? $_SESSION['phoneNumber'] : ''; ?>" readonly>
     <button id="sendCodeBtn" onclick="showOTPFields()">Send Code</button>
        <div id="otpFields" class="hidden">
            <input type="text" id="emailOTP" placeholder="Enter OTP for Email">
            <input type="text" id="phoneOTP" placeholder="Enter OTP for Phone">
            <button id="verifyOTPBtn" onclick="verifyOTP()">Verify OTP</button>
        </div>
    </div>
  </section>
  </div>
      
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

<script>
  function showOTPFields() {
      document.getElementById("sendCodeBtn").style.display = "none";
      document.getElementById("otpFields").style.display = "block";

      var myHeaders = new Headers();
myHeaders.append("Content-Type", "application/json");
myHeaders.append("Authorization", "Basic R1lhbnZRUnBYM1FLakQ4MHlwZTA6WTd0RzhuaGk0dWpYaTg4UTc2RFdSN1E0YW5XVmdDcGZMMG9keEFYeQ==");

var raw = JSON.stringify({
  "Text": "Sample text",
  "Number": "97336628188",
  "SenderId": "SMSINFO",
  "DRNotifyUrl": "https://www.domainname.com/notifyurl",
  "DRNotifyHttpMethod": "POST",
  "Tool": "API"
});

var requestOptions = {
  method: 'POST',
  headers: myHeaders,
  body: raw,
  redirect: 'follow'
};

fetch("https://restapi.smscountry.com/v0.1/Accounts/GYanvQRpX3QKjD80ype0/SMSes/", requestOptions)
  .then(response => response.text())
  .then(result => console.log(result))
  .catch(error => console.log('error', error));

      // var request = new XMLHttpRequest();

      //   request.open('POST', 'https://restapi.smscountry.com/v0.1/Accounts/CXcxVnWRSAI85Y2axIoW/SMSes/');

      //   request.setRequestHeader('Content-Type', 'application/json');

      //   request.onreadystatechange = function () {
      //     if (this.readyState === 4) {
      //       console.log('Status:', this.status);
      //       console.log('Headers:', this.getAllResponseHeaders());
      //       console.log('Body:', this.responseText);
      //     }
      //   };

      //   var body = {
      //     'Text': 'Sample text',
      //     'Number': '97336628188',
      //     'SenderId': 'SMSINFO',
      //     'DRNotifyUrl': 'https://www.domainname.com/notifyurl',
      //     'DRNotifyHttpMethod': 'POST',
      //     'Tool': 'API'
      //   };

      //   request.send(JSON.stringify(body));
      }

  function verifyOTP() {
      // Here you can add your OTP verification logic
      // For simplicity, we're just displaying an alert message
      alert("OTP verification successful!");
  }
</script>

</body>

</html>