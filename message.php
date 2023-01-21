<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Wildernuts LTD</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body style="background-image: url('assets/img/doc.png'); background-repeat: no-repeat;   background-attachment: fixed;   background-size: cover; font-family: sans-serif;">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="container d-flex align-items-center">

      <h1> <a href="index.html"><span>

        <img src="assets/img/logo.png" alt="logo"  height="50" width="130"  >
     
      </a></h1>
      <h1 class="logo me-auto"> </h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="about.html" class="active">About Us</a></li>
              <li><a href="factory.html">Our Factory</a></li>
            </ul>
          </li>
          <li><a href="buyersguide.html">Buyer's Guide</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container"><br><br><br><br><br><br><br><br>


      <center>  <h1 style="color: white"><b> Message </b></h1></center>  

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
           <p> <?php 
    if(!isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $message = $_POST['message']; 

        $to = "macs@wildernutske.com";
        // $from = "info@shabachgardens.com"; 
        $subject = 'Message from Prime Group Limited'." , ";
        $msg ="Name: ".$name." , "."Telephone: ".$telephone." , "." Subject: ".$subject."wrote the following: ".$message;
        $headers ="From: ".$email;
         if(mail($to,$subject,$msg,$headers)){
            
          echo "<b>Message Sent. Thank You $name for your message.<b>";
}

else {
    echo "yolo";
    
}

       


    }
    else
    {
        echo "try again";
    }

 ?></p>
          
        </div>

      </div>
    </section><!-- End About Section -->

   

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Address</h3>
              <p>
                Wildernuts is Roughly 3 km From<br>The Makutano junction <br>
                Sagana Kirinyaga - Kenya<br><br>
                <strong>Phone:</strong> +254 114 380 696<br>
                <strong>Email:</strong> macs@wildernutsltd.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.html">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="factory.html">Our Factory</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="buyersguide.html">Buyer's Guide</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.html">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Core Values</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">We're Trustworthy</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">We're Honest</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">We're Reliable</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">We're Quality Conscious</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">We're Customer Oriented</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Kindly fill your email below to subscribe to your monthly newsletter</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Wildernuts Limited</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Developed by <a href="https://softwaretechn.co.ke">Software Technology Kenya</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>