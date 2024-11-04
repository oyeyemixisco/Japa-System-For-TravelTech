<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Start Now | RelocateNow</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Text:wght@800&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Text:wght@800&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

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
          <li><a href="index.php" >Home</a></li>
          <li><a href="about-us.php">About Us</a></li>
          <li><a href="start.php"  class="active">Get Started</a></li>
          <li><a href="login.php">Login</a></li>
          
          <li><a href="contact-us.php">Contact Us</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/aboutbg2.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>This is your big step...</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Get Started</li>
        </ol>

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
              <h3>Complete the assessment here</h3>
              <p>
                Carefully complete the form below. Be sure to provie your correcct email address and mobile number, else we may not be able to get across to you.
              </p>
              <h4><b>What can you do to get started?</b></h4><br>
              <!-- <ul>
                <li><i class="bi bi-check-circle-fill"></i> To begin, you have to know what options are available to you.</li>
                <li><i class="bi bi-check-circle-fill"></i> Next, you have to decide which of the relocation paths you qualify for.</li>
                <li><i class="bi bi-check-circle-fill"></i> Decide and get started immediately.</li>
              </ul> -->
              <!-- <a class="startz" href="start.php"><button>Click to Get Started Now</button></a> -->

              <form action="admin/reg_process.php" method="post" role="form" >
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Full Name" required>
                </div>
                <div class="col-md-6 form-group  mt-3 mt-md-0">
                  <select name="gender" class="form-control" id="gender">
                  <option selected>Please select your gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  </select>
                  <!-- <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required> -->
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="address" id="address" placeholder="Address" required>
              </div>
              <!-- <div class="form-group mt-3">
                <input type="text" class="form-control" name="country" id="country" placeholder="country" required>
              </div> -->
              <div class="form-group mt-3">
              <select name="country" class="form-control" id="country">
                                                                  <option selected>Please select your country</option>
                                                                  <option value="Nigeria">Nigeria</option>
                                                                  <option value="Afghanistan">Afghanistan</option>
                                                                  <option value="Albania">Albania</option>
                                                                  <option value="Alderney (Channel Islands)">Alderney (Channel Islands)</option>
                                                                  <option value="Algeria">Algeria</option>
                                                                  <option value="American Samoa">American Samoa</option>
                                                                  <option value="Andorra">Andorra</option>
                                                                  <option value="Angola">Angola</option>
                                                                  <option value="Anguilla">Anguilla</option>
                                                                  <option value="Anjouan">Anjouan</option>
                                                                  <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                                                                  <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                                  <option value="Argentina">Argentina</option>
                                                                  <option value="Armenia">Armenia</option>
                                                                  <option value="Aruba">Aruba</option>
                                                                  <option value="Australia">Australia</option>
                                                                  <option value="Austria">Austria</option>
                                                                  <option value="Azerbaijan">Azerbaijan</option>
                                                                  <option value="Azores">Azores</option>
                                                                  <option value="Azores Islands">Azores Islands</option>
                                                                  <option value="Bahamas">Bahamas</option>
                                                                  <option value="Bahrain">Bahrain</option>
                                                                  <option value="Bangladesh">Bangladesh</option>
                                                                  <option value="Barbados">Barbados</option>
                                                                  <option value="Barbuda">Barbuda</option>
                                                                  <option value="Belarus">Belarus</option>
                                                                  <option value="Belgium">Belgium</option>
                                                                  <option value="Belize">Belize</option>
                                                                  <option value="Benin">Benin</option>
                                                                  <option value="Bermuda">Bermuda</option>
                                                                  <option value="Bhutan">Bhutan</option>
                                                                  <option value="Bolivia">Bolivia</option>
                                                                  <option value="Bosnia-Herzegovina">Bosnia-Herzegovina</option>
                                                                  <option value="Botswana">Botswana</option>
                                                                  <option value="Brazil">Brazil</option>
                                                                  <option value="British Virgin Islands">British Virgin Islands</option>
                                                                  <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                                  <option value="Bulgaria">Bulgaria</option>
                                                                  <option value="Burkina Faso">Burkina Faso</option>
                                                                  <option value="Burma">Burma</option>
                                                                  <option value="Burundi">Burundi</option>
                                                                  <option value="Cameroon">Cameroon</option>
                                                                  <option value="Canada">Canada</option>
                                                                  <option value="Cape Verde">Cape Verde</option>
                                                                  <option value="Cayman Islands">Cayman Islands</option>
                                                                  <option value="Central African Republic">Central African Republic</option>
                                                                  <option value="Chad">Chad</option>
                                                                  <option value="Chile">Chile</option>
                                                                  <option value="China">China</option>
                                                                  <option value="Colombia">Colombia</option>
                                                                  <option value="Comoros">Comoros</option>
                                                                  <option value="Congo">Congo</option>
                                                                  <option value="Corsica">Corsica</option>
                                                                  <option value="Costa Rica">Costa Rica</option>
                                                                  <option value="Croatia">Croatia</option>
                                                                  <option value="Cyprus">Cyprus</option>
                                                                  <option value="Czech Republic">Czech Republic</option>
                                                                  <option value="Denmark">Denmark</option>
                                                                  <option value="Djibouti">Djibouti</option>
                                                                  <option value="Dominica">Dominica</option>
                                                                  <option value="Dominican Republic">Dominican Republic</option>
                                                                  <option value="EU">EU</option>
                                                                  <option value="Ecuador">Ecuador</option>
                                                                  <option value="Egypt">Egypt</option>
                                                                  <option value="El Salvador">El Salvador</option>
                                                                  <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                  <option value="Eritrea">Eritrea</option>
                                                                  <option value="Estonia">Estonia</option>
                                                                  <option value="Ethiopia">Ethiopia</option>
                                                                  <option value="Faroe Islands">Faroe Islands</option>
                                                                  <option value="Fiji">Fiji</option>
                                                                  <option value="Finland">Finland</option>
                                                                  <option value="France">France</option>
                                                                  <option value="French Polynesia">French Polynesia</option>
                                                                  <option value="French Guiana">French Guiana</option>
                                                                  <option value="Gabon">Gabon</option>
                                                                  <option value="Gambia">Gambia</option>
                                                                  <option value="Georgia, Republic of">Georgia, Republic of</option>
                                                                  <option value="Germany">Germany</option>
                                                                  <option value="Ghana">Ghana</option>
                                                                  <option value="Gibraltar">Gibraltar</option>
                                                                  <option value="Greece">Greece</option>
                                                                  <option value="Greenland">Greenland</option>
                                                                  <option value="Grenada">Grenada</option>
                                                                  <option value="Guadeloupe">Guadeloupe</option>
                                                                  <option value="Guatemala">Guatemala</option>
                                                                  <option value="Guinea">Guinea</option>
                                                                  <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                                  <option value="Guyana">Guyana</option>
                                                                  <option value="Haiti">Haiti</option>
                                                                  <option value="Honduras">Honduras</option>
                                                                  <option value="Hong Kong">Hong Kong</option>
                                                                  <option value="Hong Kong">Hungary</option>
                                                                  <option value="Iceland">Iceland</option>
                                                                  <option value="India">India</option>
                                                                  <option value="Indonesia">Indonesia</option>
                                                                  <option value="Iran">Iran</option>
                                                                  <option value="Ireland">Ireland</option>
                                                                  <option value="Israel">Israel</option>
                                                                  <option value="Italy">Italy</option>
                                                                  <option value="Jamaica">Jamaica</option>
                                                                  <option value="Japan">Japan</option>
                                                                  <option value="Jordan">Jordan</option>
                                                                  <option value="Kazakhstan">Kazakhstan</option>
                                                                  <option value="Kenya">Kenya</option>
                                                                  <option value="Kiribati">Kiribati</option>
                                                                  <option value="Korea, Republic of">Korea, Republic of</option>
                                                                  <option value="Kuwait">Kuwait</option>
                                                                  <option value="Kyrgystan">Kyrgystan</option>
                                                                  <option value="Laos">Laos</option>
                                                                  <option value="Latvia">Latvia</option>
                                                                  <option value="Lebanon">Lebanon</option>
                                                                  <option value="Lesotho">Lesotho</option>
                                                                  <option value="Libya">Libya</option>
                                                                  <option value="Liechtenstein">Liechtenstein</option>
                                                                  <option value="Lithuania">Lithuania</option>
                                                                  <option value="Luxembourg">Luxembourg</option>
                                                                  <option value="Macao">Macao</option>
                                                                  <option value="Macedonia">Macedonia</option>
                                                                  <option value="Madagascar">Madagascar</option>
                                                                  <option value="Madeira Islands">Madeira Islands</option>
                                                                  <option value="Malawi">Malawi</option>
                                                                  <option value="Malaysia">Malaysia</option>
                                                                  <option value="Maldives">Maldives</option>
                                                                  <option value="Mali">Mali</option>
                                                                  <option value="Malta">Malta</option>
                                                                  <option value="Manua Islands">Manua Islands</option>
                                                                  <option value="Martinique">Martinique</option>
                                                                  <option value="Mauritania">Mauritania</option>
                                                                  <option value="Mauritius">Mauritius</option>
                                                                  <option value="Mexico">Mexico</option>
                                                                  <option value="Moldova">Moldova</option>
                                                                  <option value="Monaco">Monaco</option>
                                                                  <option value="Montserrat">Montserrat</option>
                                                                  <option value="Morocco">Morocco</option>
                                                                  <option value="Mozambique">Mozambique</option>
                                                                  <option value="Namibia">Namibia</option>
                                                                  <option value="Nauru">Nauru</option>
                                                                  <option value="Nepal">Nepal</option>
                                                                  <option value="Netherlands">Netherlands</option>
                                                                  <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                                  <option value="Nevis">Nevis</option>
                                                                  <option value="New Zealand">New Zealand</option>
                                                                  <option value="New Caledonia">New Caledonia</option>
                                                                  <option value="Nicaragua">Nicaragua</option>
                                                                  <option value="Niger">Niger</option>
                                                                  <option value="Nigeria">Nigeria</option>
                                                                  <option value="Norway">Norway</option>
                                                                  <option value="Oman">Oman</option>
                                                                  <option value="Pakistan">Pakistan</option>
                                                                  <option value="Panama">Panama</option>
                                                                  <option value="Papua New Guinea">Papua New Guinea</option>
                                                                  <option value="Paraguay">Paraguay</option>
                                                                  <option value="Peru">Peru</option>
                                                                  <option value="Philipines">Philipines</option>
                                                                  <option value="Pitcairn Islands">Pitcairn Islands</option>
                                                                  <option value="Poland">Poland</option>
                                                                  <option value="Portugal">Portugal</option>
                                                                  <option value="Qatar">Qatar</option>
                                                                  <option value="Reunion">Reunion</option>
                                                                  <option value="Romania">Romania</option>
                                                                  <option value="Russia">Russia</option>
                                                                  <option value="Rwanda">Rwanda</option>
                                                                  <option value="Saint Christopher">Saint Christopher</option>
                                                                  <option value="Samoa, American">Samoa, American</option>
                                                                  <option value="San Marino">San Marino</option>
                                                                  <option value="Saudi Arabia">Saudi Arabia</option>
                                                                  <option value="Senegal">Senegal</option>
                                                                  <option value="Seychelles">Seychelles</option>
                                                                  <option value="Sierra Leone">Sierra Leone</option>
                                                                  <option value="Singapore">Singapore</option>
                                                                  <option value="Slovak Republic">Slovak Republic</option>
                                                                  <option value="Slovenia">Slovenia</option>
                                                                  <option value="Solomon Islands">Solomon Islands</option>
                                                                  <option value="Somalia">Somalia</option>
                                                                  <option value="South Korea">South Korea</option>
                                                                  <option value="South Africa">South Africa</option>
                                                                  <option value="Spain">Spain</option>
                                                                  <option value="Sri Lanka">Sri Lanka</option>
                                                                  <option value="St Lucia">St Lucia</option>
                                                                  <option value="St Christopher &amp; Nevis">St Christopher &amp; Nevis</option>
                                                                  <option value="St Helena">St Helena</option>
                                                                  <option value="St Kitts">St Kitts</option>
                                                                  <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                                                  <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                                                  <option value="Sudan">Sudan</option>
                                                                  <option value="Suriname">Suriname</option>
                                                                  <option value="Swaziland">Swaziland</option>
                                                                  <option value="Sweden">Sweden</option>
                                                                  <option value="Switzerland">Switzerland</option>
                                                                  <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                                  <option value="Taiwan">Taiwan</option>
                                                                  <option value="Tajikistan">Tajikistan</option>
                                                                  <option value="Tanzania">Tanzania</option>
                                                                  <option value="Thailand">Thailand</option>
                                                                  <option value="Togo">Togo</option>
                                                                  <option value="Tonga">Tonga</option>
                                                                  <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                                                  <option value="Tristan De Cunha">Tristan De Cunha</option>
                                                                  <option value="Tunisia">Tunisia</option>
                                                                  <option value="Turkey">Turkey</option>
                                                                  <option value="Turkmenistan">Turkmenistan</option>
                                                                  <option value="Turks and Caicos Is">Turks and Caicos Is</option>
                                                                  <option value="Tuvalu">Tuvalu</option>
                                                                  <option value="USA">USA</option>
                                                                  <option value="Uganda">Uganda</option>
                                                                  <option value="Ukraine">Ukraine</option>
                                                                  <option value="United Kingdom">United Kingdom</option>
                                                                  <option value="United Arab Emirates">United Arab Emirates</option>
                                                                  <option value="Uruguay">Uruguay</option>
                                                                  <option value="Uzbekistan">Uzbekistan</option>
                                                                  <option value="Vanuatu">Vanuatu</option>
                                                                  <option value="Vatican city">Vatican city</option>
                                                                  <option value="Venezuela">Venezuela</option>
                                                                  <option value="Vietnam">Vietnam</option>
                                                                  <option value="Wallis &amp; Futuna Islands">Wallis &amp; Futuna Islands</option>
                                                                  <option value="Western Samoa">Western Samoa</option>
                                                                  <option value="Yemen, Republic of">Yemen, Republic of</option>
                                                                  <option value="Zaire">Zaire</option>
                                                                  <option value="Zambia">Zambia</option>
                                                                  <option value="Zimbabwe">Zimbabwe</option>
                                                                  </select>
                                                                </div><br>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Your Mobile Number" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div><br>
              <div class="row">
              <div class="col-md-6 form-group  mt-3 mt-md-0">
                  <select name="education" class="form-control" id="gender">
                  <option selected>Any Educational Qualification?</option>
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                  </select>
                </div>
                <div class="col-md-6 form-group  mt-3 mt-md-0">
                  <select name="work_experience" class="form-control" id="gender">
                  <option selected>Any Work Experience?</option>
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                  </select>
                </div>
              </div>
              <div class="form-group mt-3">
                <select name="relocation_path" class="form-control" id="gender">
                  <option selected>Preferred Relocation Path?</option>
                  <option value="Study">Study Visa Path</option>
                  <option value="Work">Work Visa Path</option>
                  </select>
                
              </div>
              <br>
              <div class="my-3">
                <!-- <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div> -->
              </div>
              <div class="text-center startz"><button type="submit">Complete Assessment >></button></div>
            </form>
            </div>
          </div>
          <div class="col-lg-2"></div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Choose Us Section ======= -->
    <!-- <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Why Choose Us</h2>

        </div>

        <div class="row g-0" data-aos="fade-up" data-aos-delay="200">

          <div class="col-xl-5 img-bg" style="background-image: url('assets/img/why-us-bg.jpg')"></div>
          <div class="col-xl-7 slides  position-relative">

            <div class="slides-1 swiper">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Let's grow your business together</h3>
                    <h4 class="mb-3">Optio reiciendis accusantium iusto architecto at quia minima maiores quidem, dolorum.</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, ipsam perferendis asperiores explicabo vel tempore velit totam, natus nesciunt accusantium dicta quod quibusdam ipsum maiores nobis non, eum. Ullam reiciendis dignissimos laborum aut, magni voluptatem velit doloribus quas sapiente optio.</p>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Unde perspiciatis ut repellat dolorem</h3>
                    <h4 class="mb-3">Amet cumque nam sed voluptas doloribus iusto. Dolorem eos aliquam quis.</h4>
                    <p>Dolorem quia fuga consectetur voluptatem. Earum consequatur nulla maxime necessitatibus cum accusamus. Voluptatem dolorem ut numquam dolorum delectus autem veritatis facilis. Et ea ut repellat ea. Facere est dolores fugiat dolor.</p>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Aliquid non alias minus</h3>
                    <h4 class="mb-3">Necessitatibus voluptatibus explicabo dolores a vitae voluptatum.</h4>
                    <p>Neque voluptates aut. Soluta aut perspiciatis porro deserunt. Voluptate ut itaque velit. Aut consectetur voluptatem aspernatur sequi sit laborum. Voluptas enim dolorum fugiat aut.</p>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Necessitatibus suscipit non voluptatem quibusdam</h3>
                    <h4 class="mb-3">Tempora quos est ut quia adipisci ut voluptas. Deleniti laborum soluta nihil est. Eum similique neque autem ut.</h4>
                    <p>Ut rerum et autem vel. Et rerum molestiae aut sit vel incidunt sit at voluptatem. Saepe dolorem et sed voluptate impedit. Ad et qui sint at qui animi animi rerum.</p>
                  </div>
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>

        </div>

      </div>
    </section> --><!-- End Why Choose Us Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h3 class="startz1">RELOCATION OPPORTUNITIES DO NOT LAST!</h3>
            <p>It is no longer news that the United Kingdom has restricted students from relocating with family. Six months ago, this was not the case. Same thing will happen for care workers by March 2024. What does this mean? It means immigration rules are constantly changing. If you want to relocate, then you have to take action now. Click the button below to begin.</p>
            <a class="startz" href="start.php"><button>Start Your Assessment Now</button></a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->

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
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>