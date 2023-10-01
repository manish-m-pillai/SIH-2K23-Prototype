<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between position-relative">
    <div>
      <img src="assets/img/MainLogo2.png" alt="Indian judicial">
    </div>
      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>e-JUSTICE INDIA</span></a></h1>
        <h2>YOUR CASE, YOUR WAY</h2>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <form action="/action_page.php">
          <label for="cars"></label>
        </form>

          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="caseregistration.html">Case Registration</a></li>
              <li><a href="cases.php">Case Status</a></li>
              <li><a href="#">Case Withdrawl</a></li>
              <li><a href="#">Meeting Tools</a></li>
              <li><a href="#">Past Cases</a></li>
            </ul>
          </li>
          </li>
          <li><a href="contact.html">Feedback</a></li>
          <li><a href="myprofile.html">My Profile</a></li>
           <li><p><b>Welcome <strong><?php echo $_SESSION['username']; ?></strong></b></p> </li>
          <li><a href="index.php?logout='1'" style="color: red;">LOGOUT</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h1>||  यातो धर्मस्ततो जय: || </h1>
      <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
            <div class="content">
              <h3>Welcome to TechNerd's Judicial Case Management System</h3>
              <p>
                Welcome to Technerd's Judicial Case Registration portal. We are
        dedicated to simplifying and streamlining the process of registering
        judicial cases. Our mission is to provide a user-friendly platform that
        empowers individuals and legal professionals to efficiently initiate and
        manage their cases.
              </p>
              <a href="#" class="about-btn">About us <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <h4>SEAMLESS CASE REGISTRARION AND WITHDRAWL</h4>
                  <p>Seamless case registration offers numerous benefits. Firstly, it enhances accessibility, allowing litigants to file cases conveniently from anywhere with internet access. This streamlines the legal process, reducing paperwork and administrative burdens. Additionally, it promotes transparency by providing a digital record of case submissions and updates. Online filing can expedite case initiation, benefiting both plaintiffs and defendants. Moreover, it can lead to cost savings for individuals and the judicial system itself by reducing the need for physical visits to courthouses. Overall, seamless case registration enhances efficiency, accessibility, and transparency in the legal system, fostering a more accessible and equitable justice system.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-cube-alt"></i>
                  <h4>MEETING TOOLS</h4>
                  <p>Meeting tools allow us to create a virtual session with the court Judges and Lawyers which provides the features of a real Virtual Court in Session.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-images"></i>
                  <h4>ACCESS PAST CASES</h4>
                  <p>This feature allows user to review their past cases and can act acoordingly.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-shield"></i>
                  <h4>PRIVACY</h4>
                  <p>Your privacy is our top priority, and we are committed to maintaining the highest standards of data protection. Your trust and confidence in our platform are paramount to us.</p>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Services</h2>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up">
              <!-- <div class="icon"><i class="bx bxl-dribbble"></i></div> -->
              <h4 class="title"><a href="">Case Registration</a></h4>
              <p class="description"></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <!-- <div class="icon"><i class="bx bx-file"></i></div> -->
              <h4 class="title"><a href="">Case Status</a></h4>
              <p class="description">
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <!-- <div class="icon"><i class="bx bx-world"></i></div> -->
              <h4 class="title"><a href="">Meeting Tools</a></h4>
              <p class="description"> </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up">
              <!-- <div class="icon"><i class="bx bx-shield "></i></div> -->
              <h4 class="title"><a href="">Case Withdrawl</a></h4>
              <p class="description"></p>
            </div>
          </div>
          <div style="padding-top: 20px;" class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up">
              <!-- <div class="icon"><i class="bx bx-shield "></i></div> -->
              <h4 class="title"><a href="">Past Cases</a></h4>
              <p class="description"></p>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts  section-bg">
      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="24356" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Solved Cases</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Ongoing Cases</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>24/7 Customer Support</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Branches</strong></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>CUSTOMER REVIEW</h2>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                   I recently had the opportunity to explore the judicial website, and I must say, it's an excellent resource for anyone seeking legal information or navigating the complex world of the justice system.First and foremost, the website's user interface is intuitive and easy to navigate. Finding the information I needed was a breeze, thanks to well-organized menus and a powerful search function. Whether you're a legal professional or a curious citizen, the site's user-friendliness is a definite plus.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpeg" class="testimonial-img" alt="">
                <h3>Akash Kumar Singh</h3>
                <h4>Customer from Allahbad High Court</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  One of the standout features of this website is its commitment to transparency. It provides access to a wealth of legal resources, from court forms and case law to frequently asked questions about the legal process. It's clear that the creators of this site understand the importance of making legal information accessible to the public. Furthermore, the website keeps users informed about recent legal developments and changes in the justice system. The news and updates section is a valuable resource for staying up-to-date on the latest legal matters and judicial decisions
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Manish M Pillai</h3>
                <h4>Customer from Delhi High Court</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Commendable aspect of this website is its dedication to community engagement. It provides information on local events, legal aid services, and even opportunities for volunteering within the justice system. This emphasis on community involvement is truly commendable.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpeg" class="testimonial-img" alt="">
                <h3>Rishika R Mishra</h3>
                <h4>Customer from Varanasi District Court</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  The website boasts an incredibly intuitive and straightforward user interface. Even for someone not well-versed in legal procedures, navigating through the case registration process was a breeze.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.png" class="testimonial-img" alt="">
                <h3>Sanjay kumar Yadav</h3>
                <h4>Customer from District & Sessions Judge Court, Dibrugarh, Assam </h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  This judicial case registration website has exceeded my expectations in terms of ease of use, efficiency, and security. It has simplified a typically complex process, and the responsive customer support team adds to its overall appeal. I have confidence in its ability to handle my legal matters effectively, making it my top choice for case registration.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>Aditya</h3>
                <h4>Customer from Mumbai high Court</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>e-JUSTICE INDIA</h3>
              <p class="pb-3"><em>To Resolve all types of cases</em></p>
              <p>
                Lovely Professional University <br>
                Jalandhar 144411, INDIA<br><br>
                <strong>Phone:</strong> +1234567890<br>
                <strong>Email:</strong> TechNerds@gmail.com<br>
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
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>TechNerds</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">TechNerds</a>
      </div>
    </div>
    <div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>WELCOME <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">LOGOUT</a> </p>
    <?php endif ?>
</div>

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>