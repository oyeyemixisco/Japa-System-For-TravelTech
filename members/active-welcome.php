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

  <style>
    /* Column styles */
    .column {
    flex: 1;
    padding: 20px;
    background-color: #ffffff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Section for travel packages and news items */
   

    .package, .news-item {
        display: flex;
        flex-direction: column;
        margin-bottom: 15px;
        margin-top: 50px;
    }

    .package img, .news-item img {
        width: 100%; /* Make the image take full width of the container */
        height: auto; /* Maintain aspect ratio */
        margin-bottom: 10px; /* Add space between the image and the text content */
        border-radius: 8px;
    }

    .package-info, .news-info {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .button-group {
    display: flex;
    gap: 20px; /* Space between buttons */
    margin-top: 10px; /* Space between text and buttons */
    }

    /* Styles for the buttons */
    .btn1 {
        padding: 8px 16px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 0.9em;
        transition: background-color 0.3s;
    }

    .btn1:hover {
        background-color: #0056b3; /* Darker blue on hover */
    }

  </style>

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
          <li><a href="../admin/logout.php" >Log out</a></li>
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
        <p></p>
        <p></p>
        <h2 class="startz3" style="margin: 20px;">Welcome, <?php echo $name; ?></h2>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section style="padding:50px !important">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4" data-aos="fade-up">         
          <div class="col-lg-12">
            <div class="content ps-lg-5">
              <h3 class="startabout" style="font-family: 'Big Shoulders Text', sans-serif;">Welcome on Board</h3>
              <p>
                Welcome <?php echo $name; ?> to the Relocate now membership area. If you are here now, it means your account has been <strong>ACTIVATED</strong> and you've taken the right steps in the right direction towards your journey to relocating out of your present country. In the section below we will be sharing with you all available packages to relocate abroad.
                <br>
              </p>
    </section> <!-- End Why Choose Us Section -->

    <section style="padding:5px !important">
      <div class="container" data-aos="fade-up" style="display:flex !important">
        <div class="column" id="travel-packages">
          <h3 class="startabout" style="font-family: 'Big Shoulders Text', sans-serif;">Relocation Paths</h3>
              <div class="package">
              <h4 class="startabout" style="font-family: 'Big Shoulders Text', sans-serif;">Study and Work in France</h4>
                  <img src="../assets/img/bg9.jpg" alt="Package 1 Thumbnail">
                  <div class="package-info">                      
                      <p>If you want to move to Europe and do not have enough funds, then take a minute and read this now. Applications are currently open to two different programs in Europe offering amazing fully funded opportunities.</p>
                  </div>
                  <div class="button-group">
                    <button class="btn1">Get Details</button>
                    <button class="btn1">Apply Now</button>
                </div>
              </div>

              <div class="package">
              <h4 class="startabout" style="font-family: 'Big Shoulders Text', sans-serif;">Sweden Job Seeker Visa Path</h4>
                  <img src="../assets/img/bg3.jpeg" alt="Package 1 Thumbnail">
                  <div class="package-info">                      
                      <p>If you want to move to Europe and do not have enough funds, then take a minute and read this now. Applications are currently open to two different programs in Europe offering amazing fully funded opportunities.</p>
                  </div>
                  <div class="button-group">
                    <button class="btn1">Get Details</button>
                    <button class="btn1">Apply Now</button>
                </div>
              </div>
        </div>    
      

        <div class="column" id="news-announcements">
            <h3 class="startabout" style="font-family: 'Big Shoulders Text', sans-serif;">Announcements & Updates</h3>
            <div class="news-item">
              <h4 class="startabout" style="font-family: 'Big Shoulders Text', sans-serif;">Important News for You</h4>
                <img src="../assets/img/bg10.png" alt="News 1 Thumbnail">
                  <div class="news-info">                      
                      <p>Stay updated with the latest news from our company.</p>
                  </div>
            </div>
            
            <div class="news-item">
              <h4 class="startabout" style="font-family: 'Big Shoulders Text', sans-serif;">New Video! How to Apply</h4>
                  <div class="news-info">
                    <p>Check out the video guide on how to apply now</p>
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/57Yssut170w" 
                        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                  </div>
              </div>  

              <div class="news-item">
              <h4 class="startabout" style="font-family: 'Big Shoulders Text', sans-serif;">Consultation Session</h4>
                <img src="../assets/img/aboutbg2.jpg" alt="News 1 Thumbnail">
                  <div class="news-info">                      
                      <p>Have you had your consultation?</p>
                  </div>
                  <div class="button-group">
                    <button class="btn1">Get Details</button>
                    <button class="btn1">Apply Now</button>
                </div>
            </div>
              <!-- Add more news items as needed -->
          </div>
      </div>

    </section>

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