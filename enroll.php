<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Course Details - Midad Academy</title>
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
    <style>
        html {
            height: auto;
        }

        /*the container must be positioned relative:*/
        .custom-select {
            position: relative;
            font-family: Arial;
        }

        .custom-select select {
            display: none;
            /*hide original SELECT element:*/
        }

        .select-selected {
            background-color: DodgerBlue;
        }

        /*style the arrow inside the select element:*/
        .select-selected:after {
            position: absolute;
            content: "";
            top: 14px;
            right: 10px;
            width: 0;
            height: 0;
            border: 6px solid transparent;
            border-color: #fff transparent transparent transparent;
        }

        /*point the arrow upwards when the select box is open (active):*/
        .select-selected.select-arrow-active:after {
            border-color: transparent transparent #fff transparent;
            top: 7px;
        }

        /*style the items (options), including the selected item:*/
        .select-items div,
        .select-selected {
            color: #ffffff;
            padding: 8px 16px;
            border: 1px solid transparent;
            border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
            cursor: pointer;
            user-select: none;
        }

        /*style items (options):*/
        .select-items {
            position: absolute;
            background-color: DodgerBlue;
            top: 100%;
            left: 0;
            right: 0;
            z-index: 99;
        }

        /*hide the items when the select box is closed:*/
        .select-hide {
            display: none;
        }

        .select-items div:hover,
        .same-as-selected {
            background-color: rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>


    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1><a href="index.php"><img src="img/Midad Academy without bg.png" class="midadlogo"></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a class="active" href="courses.php">Courses</a></li>
                    <li><a href="trainers.php">Trainers</a></li>
                    <li><a href="Workshops.php">Workshops</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <?php

if(isset($_SESSION['id'])  )
{
  ?>
    <a href="logout.php" class="get-started-btn">LOGOUT</a>
<?php }else{ ?>
<a href="login.php" class="get-started-btn">Get Started</a>

<?php } ?>
        </div>
    </header><!-- End Header -->
    <br> <br> <br> <br>

    <main id="main">
        <!-- ======= Cource Details Section ======= -->
        <section id="course-details" class="course-details">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-8">
                        <img src="img/web-developer-3.jpg" class="img-fluid" alt="">
                        <h3>Web development essentials</h3>
                        <p>
                            In this course, students will delve into the essential components of web development, exploring the key languages, technologies, and frameworks used to craft interactive web experiences. From the basic building blocks of HTML and CSS to dynamic functionality with JavaScript and popular libraries like jQuery, participants will gain a well-rounded understanding of front-end web development.
                        </p>



                        <form action="enrollaction.php" method="post">

                            <div class="col-md-6 form-group">
                                <label for="fname">Full Name|الإسم الثلاثي:</label>
                                <input type="text" class="form-control" name="fname" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="email">E-mail | الإيميل:</label>
                                <input type="text" class="form-control" name="email" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="phone">Phone number|رقم الهاتف
                                    :</label>
                                <input type="text" class="form-control" name="phone" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="dob">تاريخ الولادة|Date of birth:</label>
                                <input type="date" class="form-control" name="dob" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="educationl">المستوى التعليمي|Educational Level
                                    :</label>
                                <input type="text" class="form-control" name="educationl" required>
                            </div>
                            <div class="custom-select" style="width:200px;">
                                <label for="education">الإختصاص الجامعي :</label>
                                <select name="education" required>

                                    <option value="0">الإختصاص الجامعي :</option>
                                    <option value="Computer Science">Computer Science</option>
                                    <option value="Management Information System">Management Information System</option>
                                    <option value="Not A Student">Not A Student</option>


                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="University">إسم المدرسة/الجامعة/المعهد
                                    :</label>
                                <input type="text" class="form-control" name="University" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="web">ما هدفك من دراسة Web development:</label>
                                <input type="text" class="form-control" name="web" required>
                            </div>
                            <div class="custom-select" style="width:200px;">
                                <label for="support">هل ترتبط الدورة ب إختصاصك الجامعي ؟:</label>
                                <select name="support" required>

                                    <option value="0">هل ترتبط الدورة ب إختصاصك الجامعي ؟:</option>
                                    <option value="YES">YES</option>
                                    <option value="NO">NO</option>


                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="nationality">Nationality|الجنسية
                                    :</label>
                                <input type="text" class="form-control" name="nationality" required>
                            </div>
                            <div class="custom-select" style="width:200px;">
                                <label for="address">مكان السكن|Address
                                    :</label>
                                <select name="address" required>

                                    <option value="0">مكان السكن|Address</option>
                                    <option value="inside lebanon">inside lebanon</option>
                                    <option value="outside lebanon">outside lebanon</option>


                                </select>
                            </div>
                            <div class="custom-select" style="width:200px;">
                                <label for="pt">Your preferable time | الوقت المفضل لديك
                                    :</label>
                                <select name="pt" required>

                                    <option value="0">Your preferable time | الوقت المفضل لديك</option>
                                    <option value="morning shift">morning shift</option>
                                    <option value="night shift">night shift</option>


                                </select>
                            </div>

<br>
                            
                                <input type='submit' value='submit' class="get-started-btn" name='submit'>
                            
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
            <script>
                var x, i, j, l, ll, selElmnt, a, b, c;
                /*look for any elements with the class "custom-select":*/
                x = document.getElementsByClassName("custom-select");
                l = x.length;
                for (i = 0; i < l; i++) {
                    selElmnt = x[i].getElementsByTagName("select")[0];
                    ll = selElmnt.length;
                    /*for each element, create a new DIV that will act as the selected item:*/
                    a = document.createElement("DIV");
                    a.setAttribute("class", "select-selected");
                    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
                    x[i].appendChild(a);
                    /*for each element, create a new DIV that will contain the option list:*/
                    b = document.createElement("DIV");
                    b.setAttribute("class", "select-items select-hide");
                    for (j = 1; j < ll; j++) {
                        /*for each option in the original select element,
                        create a new DIV that will act as an option item:*/
                        c = document.createElement("DIV");
                        c.innerHTML = selElmnt.options[j].innerHTML;
                        c.addEventListener("click", function(e) {
                            /*when an item is clicked, update the original select box,
                            and the selected item:*/
                            var y, i, k, s, h, sl, yl;
                            s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                            sl = s.length;
                            h = this.parentNode.previousSibling;
                            for (i = 0; i < sl; i++) {
                                if (s.options[i].innerHTML == this.innerHTML) {
                                    s.selectedIndex = i;
                                    h.innerHTML = this.innerHTML;
                                    y = this.parentNode.getElementsByClassName("same-as-selected");
                                    yl = y.length;
                                    for (k = 0; k < yl; k++) {
                                        y[k].removeAttribute("class");
                                    }
                                    this.setAttribute("class", "same-as-selected");
                                    break;
                                }
                            }
                            h.click();
                        });
                        b.appendChild(c);
                    }
                    x[i].appendChild(b);
                    a.addEventListener("click", function(e) {
                        /*when the select box is clicked, close any other select boxes,
                        and open/close the current select box:*/
                        e.stopPropagation();
                        closeAllSelect(this);
                        this.nextSibling.classList.toggle("select-hide");
                        this.classList.toggle("select-arrow-active");
                    });
                }

                function closeAllSelect(elmnt) {
                    /*a function that will close all select boxes in the document,
                    except the current select box:*/
                    var x, y, i, xl, yl, arrNo = [];
                    x = document.getElementsByClassName("select-items");
                    y = document.getElementsByClassName("select-selected");
                    xl = x.length;
                    yl = y.length;
                    for (i = 0; i < yl; i++) {
                        if (elmnt == y[i]) {
                            arrNo.push(i)
                        } else {
                            y[i].classList.remove("select-arrow-active");
                        }
                    }
                    for (i = 0; i < xl; i++) {
                        if (arrNo.indexOf(i)) {
                            x[i].classList.add("select-hide");
                        }
                    }
                }
                /*if the user clicks anywhere outside the select box,
                then close all select boxes:*/
                document.addEventListener("click", closeAllSelect);
            </script>
</body>

</html>