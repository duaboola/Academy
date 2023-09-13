<?php
session_start();

// Check if the course ID is provided in the URL
if (isset($_GET["id"])) {
    $courseId = $_GET["id"];
    
    // Include the data.php file to access the courses array
    include('data.php');
    
    // Find the course by ID in the courses array
    $course = null;
    foreach ($courses as $c) {
        if ($c['id'] == $courseId) {
            $course = $c;
            break;
        }
    }
    //  echo ("<script>console.log('PHP: " . $course["title"] . "');</script>");
    // Check if the course was found
    if ($course) {
        // Store the course ID and course name in session variables
        $_SESSION["course_id"] = $course["id"];
        $_SESSION["coursename"] = $course["title"];
    }

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
    <style>
        #categories .container {
      display: flex;
      justify-content: center;
    }
    
    #categories .row {
      display: flex;
      justify-content: center;
    }
    
    #categories .col-md-6 {
      margin: 0 auto;
      float: none;
    }
    
    #cybersquareDiv {
        display: none; 
    }

    #iitDiv {
        display: block; 
    }

    #cybersquareCourseDetails {
        display: none; 
    }

    #iitCourseDetails {
        display: block; 
    }


      </style>
      <script src="assets/js/data.js"></script>

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

  <main id="coursedetailsmain">
    <section class="c" id="c">
        <div class="section-title">
          <h2 id="courseTitle">Course Title</h2>
        </div>
        <div class="row d-flex align-items-center">
          <div class="col-md-6 p-5">
            <p id="courseDescription">The Programme aims to teach the fundamentals of deep learning and applications of deep learning models for AI tasks related to text processing and image and video processing. 
                <br><br>
                The Programme will help develop capabilities to build deep learning models for real-world problems.
            </p>
           
            <div >
                <a href="register.php" class="download-btn"><i class="bx bxs-purchase-tag"></i> Enroll Now</a>
            </div>
          </div>
          <div class="col-md-6 p-5 text-center">
            <img src="assets/img/3784896.jpg" style="width:80%;padding:0 20px 20px 0;
            background:linear-gradient(lightblue 0 0) 100% 100% / 60% 60% no-repeat;
            /* cut top corner */
            clip-path:polygon(30% 0,100% 0,100% 100%,0 100%,0 30%);">
          </div>
          
        </div>
    
        <div class="container" >
    
          <div class="row d-flex align-items-center p-5" style="background-color: white; border-radius: 2rem;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
    
            <div class="col-md-4 p-2 text-center">
              <img src="assets/img/freelance.png" style="height: 50px;">
              <h2 id="selectAgeMode"> Mode </h2>
              <p id="courseMode"> Online + Final Offline Exam </p>
            </div>
    
            <div class="col-md-4 p-2 text-center">
              <img src="assets/img/in-process.png" style="height: 50px;">
              <h2 > Duration </h2>
              <p id="courseDuration">Duration 150 Hours covered across 10 months (Includes 10 Hours of Examination)</p>
            </div>
    
            <div class="col-md-4 p-2 text-center">
              <img src="assets/img/translation.png" style="height: 50px;">
              <h2> Language </h2>
              <p id="courseLanguage"> English</p>
            </div>
    
          </div>
    
        </div>
    
        
    
      </section>
    
      
      <section id="categories align-items-center" class="categories">
        <div class="section-title" >
          <h2 id="downloadPerks">Downloads</h2></div>
          <div class="container" id="cybersquareDiv">
  
          
        
            <div class="row d-flex align-items-center">
              <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bxs-certification"></i></div>
                  <h4 class="title"><a href="">UK Certification</a></h4>
                  <p class="description">UK certification will be awarded to kids on course completion.</p>
                  
                </div>
              </div>
        
              <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bxs-check-square"></i></div>
                  <h4 class="title"><a href="">Benefits For Kids</a></h4>
                 <p class="description">Kids will learn the basics of coding in a fun way. They will learn to create games and animations.
                </p> 
                </div>
              </div>
        
              <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bx-laptop"></i></div>
                  <h4 class="title"><a href="">1:1 Online Classes</a></h4>
                  <p class="description">We have experienced trainers to provide 1:1 live online coding classes for kids.</p>
                 
                </div>
              </div>
      
              <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bx-globe"></i></div>
                  <h4 class="title"><a href="">Syllabus Designed By Experts</a></h4>
                  <p class="description">Our syllabus is designed by alumnus of IIT, IIM, & NIT.</p>
                  
                </div>
              </div>
              
       
            </div>
            
          </div>
        
        
          <div class="container" id="iitDiv">
      
          
      
          <div class="row d-flex justify-content-center">
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0 text-center">
              <div class="icon-box"  >
                <div class="icon"><i class="bx bxs-detail"></i></div>
                <h4 class="title"><a href="">Program Description</a></h4>
                <p class="description">To access the information about the course, click here. It will lead you to the description page where you can find details, objectives, and content of the course.</p>
                  
                <div >
                    <a href="#services" class="btn-get-started scrollto">Download</a>
                  </div>  
                
              </div>
            </div>
    
           
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                  <div class="icon-box">
                    <div class="icon"><i class="bx bxs-paste"></i></div>
                    <h4 class="title"><a href="">Program Brochure</a></h4>
                    <p class="description">To see the program brochure, click on the button. You'll be directed to a page containing comprehensive details about the program's offerings, structure, and benefits.</p>
                 
                    <div >
                        <a href="#services" class="btn-get-started scrollto">Download</a>
                      </div>  
                    
                  </div>
                </div>
    
               
                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                      <div class="icon-box" >
                        <div class="icon"><i class="bx bxs-certification"></i></div>
                        <h4 class="title"><a href="">Sample Certificate</a></h4>
                        <p class="description">Certified by IITM Pravarthak and renowned course providers. Certificates will be awarded digitally, but can be printed for use. To view the sample of the certificate provided, click below.</p>
                        <div >
                            <a href="#services" class="btn-get-started scrollto">Download</a>
                          </div>  
                        
                      </div>
                    </div>
      
                    
          </div>
          
        </div>
      </section>
    
    
      <section>
        <div class="container">
          <div id="cybersquareCourseDetails">
            <div class="row" style="align-items: flex-start;">
              
              <div class="col-md-6 p-3 right ">
                <div class="row p-3">
                  <div class="card p-3 " style="background-color: white; border-radius: 2rem;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                      <div class="card-body p-3">
                          <h5 class="card-title" style="color: rgb(97, 163, 224);">About This Course</h5>
                          <p class="card-text" id="aboutCourse">
                              ...</p>
                      </div>
                  </div>
                </div>
             
                <div class="row p-3">
                  <div class="card p-3 " style="background-color: white; border-radius: 2rem;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                      <div class="card-body p-3">
                          <h5 class="card-title" style="color: rgb(97, 163, 224);">Skills You Gain</h5>
                          <p class="card-text" id="cybersquareSkills">
                              ...</p>
                      </div>
                  </div>
                </div>

                <div class="d-flex align-items-center justify-content-center">
                  <div  >
                    <a href="register.php" class="btn-enroll scrollto" >Enroll Now</a>
                  </div>
                </div>
                
              </div>  
              <div class="col-md-6 right" style="height: 100%; overflow-y: scroll; position: relative;">
                <div class="section-title">
                    <h2>Learning Schedule</h2>
                </div>
                <div class="ctime">
                  <div class="main-timeline-2" id="timeline">
                      <!-- Modules will be dynamically added here -->
                  </div>
                </div>
            </div>
            
            
            
            
            </div>
          </div>
      
          <div id="iitCourseDetails">
            <div class="row" style="align-items: flex-start;">

              <div class="col-md-6 p-3 right test">
                <div class="row p-3">
                  <div class="card p-3 " style="background-color: white; border-radius: 2rem;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                      <div class="card-body p-3">
                          <h5 class="card-title" style="color: rgb(97, 163, 224);">Education Qualification</h5>
                          <p class="card-text" id="qualification">
                             ...</p>
                      </div>
                  </div>
               </div>
              
              <div class="row p-3">
                  <div class="card p-3 " style="background-color: white; border-radius: 2rem;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                      <div class="card-body p-3">
                          <h5 class="card-title" style="color: rgb(97, 163, 224);">Suggested Prerequisites</h5>
                          <p class="card-text" id="prerequisites">
                              ...</p>
                      
                              <div >
                                <a href="register.php" class="btn-enroll scrollto" >Enroll Now</a>
                              </div>
                      </div>
                  </div>
              </div>
              
              <br><br>
              <div class="section-title">
                <h2>Lead Faculty</h2>
              </div>
        
              <div class="row p-3">
                  <div class="card p-3" style="background-color: white; border-radius: 2rem;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                      <div class="card-body p-3">
                          <h5 class="card-title" style="color: rgb(97, 163, 224);"></h5>
                          
                          <p class="card-text" id="faculty">
                              <!-- <strong>Programme Coordinator<br> -->
                                ...
                            </p>
                      </div>
                  </div>
              </div>

              <!-- <div class="row p-3">
                <div class="card p-3" style="background-color: white; border-radius: 2rem;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                    <div class="card-body p-3">
                        <h5 class="card-title" style="color: rgb(97, 163, 224);">Dr. Dileep A.D.</h5>
                        
                        <p class="card-text">
                           
                                <strong>Programme Faculty <br>
                                    Associate Professor, School of computing and electrical engineering, IIT Mandi</strong><br><br>
                                    Received his M. Tech and PhD in computer science and engineering from IIT Madras His research interest includes pattern recognition, Kernel methods of Pattern Analysis, Machine learning for speech technology, Computer vision, Cloud and telecom networks.In 2020 he was the recipient of Teaching Honour Roll Award for Excellence in Teaching during the academic year 2019-20 at IIT Mandi.
                        </p>
                    </div>
                </div>
              </div> -->
              <div class="d-flex align-items-center justify-content-center">
                <div  >
                  <a href="register.php" class="btn-enroll scrollto" >Enroll Now</a>
                </div>
              </div>
            
            </div>
            <div class="col-md-6 right" style="height: 100%; overflow-y: scroll; position: relative;">
              <div class="section-title">
                  <h2>Learning Schedule</h2>
              </div>
              <div class="itime">
                <div class="main-timeline-2" id="timelinetwo">
                    <!-- Modules will be dynamically added here -->
                </div>
              </div>
            </div>
          
          </div>
        </div>
      </div>
      </section>
    
      <section style="background-color: rgb(238, 237, 232);">
        <div class="d-style p-5 px-2 btn btn-brc-tp border-2 bgc-white btn-outline-blue btn-h-outline-blue btn-a-outline-blue w-100 my-2 py-3 shadow-sm"  style="background-color: white; border-radius: 2rem;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
          <!-- Basic Plan -->
          <div class="row align-items-center p-5">
            <div class="col-12 col-md-4">
              <h4 class="pt-3 text-170 text-600 text-primary-d1 letter-spacing" style="color:#3498db ;">
                Program Fee
              </h4>
    
              <div class="text-secondary-d1 text-120">
                <span class="ml-n15 align-text-bottom" id="courseFee">...</span> 
              </div>
            </div>
    
            <ul class="list-unstyled mb-0 col-12 col-md-4 text-dark-l1 text-90 text-left my-4 my-md-0">
              <li>
                <i class="fa fa-check text-success-m2 text-110 mr-2 mt-1"></i>
               
                  <span class="text-110" id="courseDate">...</span>
               
              </li>
    
    
            </ul>
    
            <div class="col-12 col-md-4 text-center">
              <div >
                <a href="register.php" class="btn-enroll scrollto" >Get Started</a>
              </div>
            </div>
          </div>
    
        </div>
      </section>
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
    
        <!-- <div class="container py-4">
          <div class="copyright">
            &copy; Copyright <strong><span>Appland</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div> -->
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
      <!-- <script src="assets/js/data.js"></script> -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

      <script>
       document.addEventListener("DOMContentLoaded", function () {
      // Get the course ID from the URL parameter
      const urlParams = new URLSearchParams(window.location.search);
      const courseId = parseInt(urlParams.get('id'));

      // Find the course by ID in the courses array from data.js
      var coursesParsed = JSON.parse(courseData);
      const course = coursesParsed.find(course => course.id === courseId);
        
      if (course) {
        // Populate the course details on the page
        
        document.getElementById('courseTitle').textContent = course.title;
        document.getElementById('courseDescription').textContent = course.description;
        // document.getElementById('courseCover').textContent = course.cover;   
       
       
        document.getElementById('courseDuration').textContent = course.duration;
        document.getElementById('courseLanguage').textContent = course.language;
        document.getElementById('courseFee').textContent = course.fee; 
        document.getElementById('courseDate').textContent = course.date;  

        if (course.owner === "cybersquare"){
          document.getElementById('courseMode').textContent = course.age;
          document.getElementById('selectAgeMode').textContent = "Age";
          document.getElementById('downloadPerks').textContent = "Perks";
          document.getElementById('cybersquareDiv').style.display = 'block';
          document.getElementById('iitDiv').style.display = 'none';
          document.getElementById('cybersquareCourseDetails').style.display = 'block';
          document.getElementById('iitCourseDetails').style.display = 'none';
          document.getElementById('aboutCourse').textContent = course.about;
          
          const cybersquareSkillsDiv = document.getElementById('cybersquareSkills');
          cybersquareSkillsDiv.innerHTML = ''; 
          for (const key in course.skills) {
              const skill = course.skills[key];
              const skillElement = document.createElement('p');
              skillElement.textContent = skill;
              cybersquareSkillsDiv.appendChild(skillElement);
          }
         
        const modules = course.modules; 

        // Clear any previous content in the timeline container
        const timelineContainer = document.getElementById('timeline');
        timelineContainer.innerHTML = '';
        

        for (let i = 0; i < modules.length; i++) {
            const module = modules[i];
            const modulePosition = i % 2 === 0 ? 'left-2' : 'right-2'; // Alternate positions

            const timelineEntry = document.createElement('div');
            timelineEntry.classList.add('timeline-2', modulePosition);

            const card = document.createElement('div');
            card.classList.add('card');
            card.innerHTML = `
                <div class="card-body p-4">
                    <h4 class="fw-bold mb-4">${module.title}</h4>
                    <p class="mb-0">${module.content}</p>
                </div>
            `;

            timelineEntry.appendChild(card);

            // Append the timeline entry to the timeline container
            timelineContainer.appendChild(timelineEntry);
        }
      }
        else{
          document.getElementById('courseMode').textContent = course.mode;
          document.getElementById('selectAgeMode').textContent = "Mode";
          document.getElementById('downloadPerks').textContent = "Downloads";
          document.getElementById('cybersquareDiv').style.display = 'none';
          document.getElementById('iitDiv').style.display = 'block';
          document.getElementById('cybersquareCourseDetails').style.display = 'none';
          document.getElementById('iitCourseDetails').style.display = 'block';
          document.getElementById('qualification').textContent = course.qualification;
          document.getElementById('prerequisites').textContent = course.prerequisites;
          document.getElementById('faculty').textContent = course.faculty;

          const modules = course.modules; // Access modules array from the specific course

        // Clear any previous content in the timeline container
        const timelineContainer = document.getElementById('timelinetwo');
        timelineContainer.innerHTML = '';
        

        for (let i = 0; i < modules.length; i++) {
            const module = modules[i];
            const modulePosition = i % 2 === 0 ? 'left-2' : 'right-2'; // Alternate positions

            const timelineEntry = document.createElement('div');
            timelineEntry.classList.add('timeline-2', modulePosition);

            const card = document.createElement('div');
            card.classList.add('card');
            card.innerHTML = `
                <div class="card-body p-4">
                    <h4 class="fw-bold mb-4">${module.title}</h4>
                    <p class="mb-0">${module.content}</p>
                </div>
            `;

            timelineEntry.appendChild(card);

            // Append the timeline entry to the timeline container
            timelineContainer.appendChild(timelineEntry);
        }
         }
        
      }
      
        });
      </script>
      <script>
        // JavaScript to set the height of the second column to match the first column
        window.addEventListener('DOMContentLoaded', function () {
          var firstColumnHeight = document.querySelector('.col-md-6.p-3').offsetHeight;
          var secondColumn = document.querySelector('.col-md-6 .ctime ');
          secondColumn.style.height = firstColumnHeight + 'px';
   
        });
      
        // JavaScript to update the second column height on window resize
        window.addEventListener('resize', function () {
          var firstColumnHeight = document.querySelector('.col-md-6.p-3').offsetHeight;
          var secondColumn = document.querySelector('.col-md-6 .ctime ');
          secondColumn.style.height = firstColumnHeight + 'px';
        });

 // JavaScript to set the height of the second column to match the first column
       window.addEventListener('DOMContentLoaded', function () {
          var firstColumnHeight = document.querySelector('.col-md-6.p-3.right.test').offsetHeight;
          var secondColumn = document.querySelector('.col-md-6 .itime ');
          secondColumn.style.height = firstColumnHeight + 'px';
          
        });
      
        // JavaScript to update the second column height on window resize
        window.addEventListener('resize', function () {
          var firstColumnHeight = document.querySelector('.col-md-6.p-3.right.test').offsetHeight;
          var secondColumn = document.querySelector('.col-md-6 .itime ');
          secondColumn.style.height = firstColumnHeight + 'px';
        });
         

      </script>
    
</body>
</html>
