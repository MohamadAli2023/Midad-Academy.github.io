<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Courses-Midad Academy</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/Midad Academy without bg.png" rel="icon">
  <link href="img/Midad Academy without bg.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1><a href="index.php"><img src="img/Midad Academy without bg.png" class="midadlogo"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a class="active" href="courses.php">Courses</a></li>
          <li><a href="trainers.php">Trainers</a></li>
          <li><a href="workshops.php">Workshops</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    
      <?php
      session_start();
      if(isset($_SESSION['id'])  )
      {
        ?>
          <a href="logout.php" class="get-started-btn">LOGOUT</a>
    <?php }else{ ?>
      <a href="login.php" class="get-started-btn">Get Started</a>
      
    <?php } ?>

    </div>
  </header><!-- End Header -->

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <br><br><br><br>
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <?php
          require('config.php');
          $sql = "SELECT * FROM `courses`";
          $result = mysqli_query($con, $sql);
          if (!$result) {
            die("something went wrong");
          } else {
            $y = 0;
            for ($i = 1; $i <= mysqli_num_rows($result); $i++) {

              $row = mysqli_fetch_assoc($result);
              $id = $row['teacher_id'];
              $sql1 = "SELECT * FROM `teacher` WHERE `id`=$id";
              $result1 = mysqli_query($con, $sql1);
              if (!$result1) {
                die("something went wrong");
              } else {
                $y = 0;
                for ($i1 = 1; $i1 <= mysqli_num_rows($result1); $i1++) {

                  $row1 = mysqli_fetch_assoc($result1);

                  echo '<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="course-item">
            <img src="' . $row['image'] . '" class="img-fluid" alt="...">
            <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>' . $row['section'] . '</h4>
                </div>
    
                <h3><a href="webcourse.php?cid=' . $row['id'] . '">' . $row['title'] . '</a></h3>
                <p>' . $row['subject'] . '</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                        <img src="assets/img/trainers/trainer-1.jpg" class="' . $row1['image'] . '" alt="">
                        <span>' . $row1['first_name'] . ' ' . $row1['last_name'] . '</span>
                    </div>
                    <div class="trainer-rank d-flex align-items-center">
                        <i class="bx bx-user"></i>&nbsp;50
                        &nbsp;&nbsp;
                        <i class="bx bx-heart"></i>&nbsp;65
                    </div>
                </div>
            </div>
        </div>
    </div>';
                }
              }
            }
          } ?> <!-- End Course Item-->


        </div>

      </div>
    </section><!-- End Popular Courses Section -->



  </main><!-- End #main -->

  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Midad Academy</h3>
            <p>
              Haret Hreik <br>
              Beirut<br>
              Lebanon <br><br>
              <strong>Phone:</strong> +961 81761365 <br>
              <strong>Email:</strong> <a href="mailto:info.midadacademy@gmail.com">info.midadacademy@gmail.com </a><br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="courses.php">Courses</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="privacy.php">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Courses</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>



        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Midad Academy</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://www.facebook.com/profile.php?id=100087566350952" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://instagram.com/midad_academy22?igshid=MjEwN2IyYWYwYw==" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.linkedin.com/company/midad-academy/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>