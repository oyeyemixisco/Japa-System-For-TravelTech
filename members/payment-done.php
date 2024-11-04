<?php
session_start();
if (isset($_SESSION['username'])) {
?>

<?php
include '../admin/connect.php';

function mysqli_result($res,$row=0,$col=0){ 
    $numrows = mysqli_num_rows($res); 
    if ($numrows && $row <= ($numrows-1) && $row >=0){
        mysqli_data_seek($res,$row);
        $resrow = (is_numeric($col)) ? mysqli_fetch_row($res) : mysqli_fetch_assoc($res);
        if (isset($resrow[$col])){
            return $resrow[$col];
        }
    }
    return false;
}


$user=$_SESSION['username'];
$query=mysqli_query($conn, "select * from relc_reg where email = '$user'" );
$row=mysqli_fetch_array($query);

$name=$row['name'];
$email=$row['email'];
$last_login=$row['last_login'];
$mobile=$row['mobile'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Welcome | RelocateNow Members Area</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Text:wght@800&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Text:wght@800&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">

</head>

<body class="page-about">

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="d-flex align-items-center">RelocateNow</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="logout.php" >Log out</a></li>
          <!-- <li><a href="about-us.php">About Us</a></li>
          <li><a href="start.php"  class="active">Get Started</a></li>
          <li><a href="login.php">Login</a></li>
          
          <li><a href="contact-us.php">Contact Us</a></li> -->
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbsw d-flex align-items-center" style="background-image: url('../assets/img/bg10.png'); //background: #eeeeee;">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2 class="startz3">Welcome, <?php echo $name; ?></h2>
        <!-- <ol>
          <li><a href="index.php">Home</a></li>
          <li>Get Started</li>
        </ol> -->

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4" data-aos="fade-up">
          <div class="col-lg-2">
            <!-- <img src="assets/img/aboutbg.jpeg" class="img-fluid" alt=""> -->
          </div>
          <div class="col-lg-8">
            <div class="content ps-lg-5">
              <h3 class="startabout" style="font-family: 'Big Shoulders Text', sans-serif;">Your Payment Was Successful!</h3>
              <p>
                <div class="alert alert-success" role="alert">
                Your membership payment was succesful. Your account will be activated shortly and We'll be in touch. 
              </div>
                <br>
                In the meantime, if you require any help or assistance, kindly call, message or whatsapp us on 08090934330 or you can also send us a mail at info@relocatenow.ng. Cheers!
              </p>

              <!-- <h3 style="font-family: 'Big Shoulders Text', sans-serif;">What is this all about?</h3> -->
              

              <!-- <h3 style="font-family: 'Big Shoulders Text', sans-serif;">How is this going to help me?</h3> -->
              <!-- <p>
                In order to make it clear and so there is no confusion, RelocateNow.ng will be helping you in more than one way. Kindly see the point below and let us know as soon as you'd want 
                <ul>
                <li><i class="bi bi-check2-circle"></i> We show you how to relocate to Sweden, Austria, Luxembourg, United Kingdom and others 
                <li><i class="bi bi-check2-circle"></i> Step by step guidance of the entire process</li>
                <li><i class="bi bi-check2-circle"></i> Online consultation & enlightenment session</li>
                <li><i class="bi bi-check2-circle"></i> One-time consultation at any of our offices</li>
                <li><i class="bi bi-check2-circle"></i> Regular upates on immigration opportunities and changes</li>
                <li><i class="bi bi-check2-circle"></i> How to apply or your visas</li>
                <li><i class="bi bi-check2-circle"></i> All this and more for only <s>N24,500</s> N9,999.</li>
              </ul>
              </p> -->
              
              <!-- <div class="alert alert-success" role="alert">
                Your Registration was successful. Check your email to login to your account. 
              </div> -->

                <!-- <h3 style="font-family: 'Big Shoulders Text', sans-serif;">Get Started Now</h3> -->
                <!-- <p>
                Kindly note that our current fee of <b>N9,999</b> is an introductory fee and will be ending by month end. Our non promo fee is <b>N24,500.</b> Over 1,800 members of this platform can not be wrong. It means you're in good hands. Kindly use the button below to complete your payment via online card or bank transfer payment.</p> -->
              <!-- <a class="startz" href="https://paystack.com/pay/relocatenow"><button>Click here to pay now</button></a> -->
                <!-- <br><br>
              <h3 style="font-family: 'Big Shoulders Text', sans-serif;">Other Payment Instruction</h3>
                <p>
                Kindly make a transfer to any of the bank details provided below. Once done, kindly send your username (email address) and proof of payment to info@relocatenow.ng. You can also call 08090934330.</p>
                <br> -->
                <!-- <div class="row" data-aos="fade-up">
                  <div class="col-lg-2">
                    <img src="../assets/img/fcmb.png" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-10">FCMB<br>FLY TRAVELNOW LOGISTICS LTD<br>2000254857</div>
        </div> -->
            </div>
          </div>
          <div class="col-lg-2"></div>
        </div>

      </div>
    </section><!-- End About Section -->

    
    </section> <!-- End Why Choose Us Section -->

    <!-- ======= Call To Action Section ======= -->
    <!-- <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h3 class="startz1">RELOCATION OPPORTUNITIES DO NOT LAST!</h3>
            <p>It is no longer news that the United Kingdom has restricted students from relocating with family. Six months ago, this was not the case. Same thing will happen for care workers by March 2024. What does this mean? It means immigration rules are constantly changing. If you want to relocate, then you have to take action now. Click the button below to begin.</p>
            <a class="startz" href="start.php"><button>Start Your Assessment Now</button></a>
          </div>
        </div>

      </div>
    </section> --><!-- End Call To Action Section -->

    <!-- ======= Team Section ======= -->
    <!-- <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Team</h2>

        </div>

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> --><!-- End Team Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <span>RelocateNow</span>
            </a>
            <p>With a growing community of over 1,800 users, RelocateNow is your first and final solution to all visa and relocation issues. We help you relocate stress-free to countries like Germany, Sweden, Portugal, Luxembourg and others. Join us today!</p>
            <div class="social-links d-flex  mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="https://facebook.com/travelnowlogistics" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://instagram.com/travelnowlogistics" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-12 footer-contact text-center text-md-start">
            <h4>Our Locations</h4>
            <p>
              <i class="bi bi-geo-alt-fill"></i> 3rd Floor, Lennox Mall, Admiralty way, Lekki, Lagos<br>
              <i class="bi bi-geo-alt-fill"></i> 1st Floor, Novare Central, Shoprite Wuse Zone 5, Abuja<br>
              <i class="bi bi-geo-alt-fill"></i> 1st Floor, Zoro Building, 71 Adesuwa Road, GRA, Benin<br>
              
            </p>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              <strong>Telephone:</strong> 0809 093 4330<br>
              <strong>Email:</strong> info@relocatenow.ng<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <?php echo date("Y"); ?><strong><span> RELOCATENOW.NG.</span></strong> The RelocateNow brand is owned by TravelNow Logistics Ltd. All Rights Reserved
        </div>
        <div class="credits">
          
          Designed by <a href="https://webplay.com.ng/">Webplay Nig Ltd</a>
        </div>
      </div>
    </div>
  </footer><!-- End Footer --><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>

<?php  

} 
  else {
  
    header ('Location: ../login.php');
    exit();
    }


?>