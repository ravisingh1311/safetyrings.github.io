<?php 
  session_start();

  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
      $server="localhost";
      $user="root";
      $pass="";
      $db="protectivering";

      $conn = new mysqli($server,$user,$pass,$db);
       
      if($conn -> connect_errno)
      {
          echo"database connection failed!<BR>";
          echo "Reason:",$conn->connect_error;
          exit();
      }
      else
      {
          $fname=$_POST['naame'];
          $fuser=$_POST['user'];
          $fmail=$_POST['mail'];
          $fpassword=$_POST['pwd'];
          $fnumber=$_POST['num'];
          $fenumber=$_POST['enumber'];
          $fringid=$_POST['ringid'];

          
          $sql="INSERT INTO protectivering (naame,user,mail,pwd,num,enumber,ringid) VALUES ('$fname','$fuser','$fmail','$fpassword','$fnumber','$fenumber','$fringid')";
        echo  "INSERT INTO protectivering (naame,user,mail,pwd,num,enumber,ringid) VALUES ('$fname','$fuser','$fmail','$fpassword','$fnumber','$fenumber','$fringid')";
          $q=$conn -> query($sql);

          if($q)
          {
              echo"registration done successfully:";
              header('location:login.php');
          }
          else
          {
              echo"something went wrong while registration<BR>";
              echo"error description:",$conn -> error;
          }
      }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Safety Ring</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  
       
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.html">PROTECTIVE RING</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">HOME</a></li>
          <li><a class="nav-link scrollto" href="#about">PURPOSE</a></li>
          <li><a class="nav-link scrollto" href="signup.php">SIGN UP</a></li>
          <li><a class="nav-link   scrollto" href="login.php">LOG IN</a></li>
          <li><a class="nav-link scrollto" href="#contact">CONTACT</a></li>
          <li><a class="nav-link  scrollto" href="admin.php">ADMIN</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
         
          <div class="d-flex justify-content-center justify-content-lg-start">
          </div>
  <div>
          <!--FORM START-->
   <center>
    <form method="POST" action="signup.php">
        <div class="container bg-4">
        <h1>Register here</h1>
        <label for="naame"><b><b>Full Name</b></b></label>
        <input type="text" name="naame" required><br>
        <label for="naame"><b>Username</b></label>
        <input type="text" name="user" required><br>
        <label for="mail"><b>Email Id</b></label>
        <input type="mail"  name="mail" required><br>
        <label for="naame"><b>Set Password</b></label>
        <input type="text"  name="pwd" required><br>
        <label for="naame"><b>Phone Number</b></label>
        <input type="text"  name="num" required><br>
        <label for="naame"><b>Emergency Phone No</b></label>
        <input type="text"  name="enumber" required><br>
        <label for="naame"><b>Ring Id</b></label>
        <input type="text"  name="ringid" required><br>
        <hr>
        <input type="submit" name="submit">
        <input type="reset">
        </div>
    </form>
</center></div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->


  <main id="main">

    

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>PURPOSE</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              In india day by day the rape cases are increasing. The total count of the past 1year rape cases is 2382. Somewhere to stop this types of sexual acts or to create safe environment in society I made this Safety Ring.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Stop crime against women</li>
              <li><i class="ri-check-double-line"></i> Easy to use and install</li>
              <li><i class="ri-check-double-line"></i> Cheapest rate</li>
              <li><i class="ri-check-double-line"></i> More convinent</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              With all the technology available to us in recent times, it's not hard to build a safety device for women which will not only generate an emergency alarm but also send a message to our 
              stuff, family and friends. Here we build a ring that can be worn by women, using which they can inform police Or anyone, using SOS emergency SMS along with the live location. Using the 
              information, the police and our staff will be able to save the victim from the location. For this, here we are using an Arduino which can be interfaced with GPS module for sending getting the 
              location co ordinates.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>To track the women location who are in danger. To stop the rape cases all over the world.</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Sane chowk,Sane colony,Pune=411062</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+91 74980 07326</p>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>PROTECTIVE RING</h3>
            <p>
              Sane chowk,Sane colony <br>
              Pune city, 411062<br>
              maharashtra States <br><br>
              <strong>Phone:</strong> +91 74980 07326<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>USEFUL LINK</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Purpose</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Log in</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Sign up</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
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

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Protective Ring</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">Ravi Singh</a>
      </div>

    
    
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>


