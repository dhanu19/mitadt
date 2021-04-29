<?php 
require_once('connection.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">
     <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

     <title>Amit</title>


     <!-- Additional CSS Files -->
     <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

     <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

     <link rel="stylesheet" href="assets/css/templatemo-softy-pinko.css">
     <meta charset='utf-8'>
     <meta name='viewport' content='width=device-width, initial-scale=1'>
     <title>Login</title>
     <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
     <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
     <style>
     .dropbtn {
          background-color: white;
          color: black;
          padding: 8px;
          font-size: 15px;
          border: none;
          cursor: pointer;
     }

     .dropdown {
          position: inherit;
          display: inline-block;
     }

     .dropdown-content {
          display: none;
          position: absolute;
          background-color: white;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
          z-index: 1;
     }

     .dropdown-content a {
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
     }

     .dropdown-content a:hover {
          background-color: white
     }

     .dropdown:hover .dropdown-content {
          display: block;
     }

     .dropdown:hover .dropbtn {
          background-color: white;
     }
     </style>
</head>

<body>

     <!-- ***** Preloader Start ***** -->
     <div id="preloader">
          <div class="jumper">
               <div></div>
               <div></div>
               <div></div>
          </div>
     </div>
     <!-- ***** Preloader End ***** -->


     <!-- ***** Header Area Start ***** -->
     <header class="header-area header-sticky">
          <div class="container">
               <div class="row">
                    <div class="col-12">
                         <nav class="main-nav">
                              <!-- ***** Logo Start ***** -->
                              <a href="#" class="logo">
                                   <img src="assets/images/logo.jpg" alt="Softy Pinko" />
                              </a>
                              <!-- ***** Logo End ***** -->
                              <!-- ***** Menu Start ***** -->
                              <ul class="nav">
                                   <li><a href="index.php" class="active">Home</a></li>
                                   <li>
                                        <div class="dropdown">
                                             <button class="dropbtn">Register</button>
                                             <div class="dropdown-content">
                                                  <a href="register-self.php">Self</a>
                                                  <a href="register-HOD.php">HOD</a>
                                                  <a href="register.php">Director</a>
                                                  <br>
                                             </div>

                                   <li>
                                        <div class="dropdown">
                                             <button class="dropbtn">Log-In</button>
                                             <div class="dropdown-content">
                                                  <a href="loginself.php">Self</a>
                                                  <a href="login - HOD.php">HOD</a>
                                                  <a href="login.php">Director</a>
                                                  <br>
                                             </div>


                                   </li>
                                   <li><a href="#testimonials">Testimonials</a></li>
                                   <li><a href="#pricing-plans">Pricing Tables</a></li>
                                   <li><a href="#blog">Awards</a></li>
                                   <li><a href="contact.php">Contact Us</a></li>
                              </ul>
                              <a class='menu-trigger'>
                                   <span>Menu</span>
                              </a>
                              <!-- ***** Menu End ***** -->
                         </nav>
                    </div>
               </div>
          </div>
     </header>
     <!-- ***** Header Area End ***** -->

     <!-- ***** Welcome Area Start ***** -->
     <div class="welcome-area" id="welcome">

          <!-- ***** Header Text Start ***** -->
          <div class="header-text">
               <div class="container">
                    <div class="row">
                         <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                              <h1><strong>MIT Art, Design, and Technology University</strong></h1>
                              <p>EXPERIENCE THE NEXT LEVEL EDUCATION </p>
                              <!-- ***** <a href="#features" class="main-button-slider">Discover More</a> ***** -->
                         </div>
                    </div>
               </div>
          </div>
          <!-- ***** Header Text End ***** -->
     </div>
     <!-- ***** Welcome Area End ***** -->

     <!-- ***** Features Small Start ***** -->
     <section class="section home-feature">
          <div class="container">
               <div class="row">
                    <div class="col-lg-12">
                         <div class="row">
                              <!-- ***** Features Small Item Start ***** -->
                              <div class="col-lg-4 col-md-6 col-sm-6 col-12"
                                   data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                                   <div class="features-small-item">
                                        <div class="icon">
                                             <i><img src="assets/images/featured-item-01.png" alt=""></i>
                                        </div>
                                        <h5 class="features-title">TOP</h5>
                                        <p>PRIVATE UNIVERSITY IN INDIA<BR>UNDER ENNG. CATEGORY</p>
                                   </div>
                              </div>
                              <!-- ***** Features Small Item End ***** -->

                              <!-- ***** Features Small Item Start ***** -->
                              <div class="col-lg-4 col-md-6 col-sm-6 col-12"
                                   data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                                   <div class="features-small-item">
                                        <div class="icon">
                                             <i><img src="assets/images/featured-item-01.png" alt=""></i>
                                        </div>
                                        <h5 class="features-title">26TH</h5>
                                        <p>IN ARIIA ATAL RANKING ON INSTITUTIONS'S INNOVATION ACHIEVEMENT 2020</p>
                                   </div>
                              </div>
                              <!-- ***** Features Small Item End ***** -->

                              <!-- ***** Features Small Item Start ***** -->
                              <div class="col-lg-4 col-md-6 col-sm-6 col-12"
                                   data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                                   <div class="features-small-item">
                                        <div class="icon">
                                             <i><img src="assets/images/featured-item-01.png" alt=""></i>
                                        </div>
                                        <h5 class="features-title">5 STAR RATING</h5>
                                        <p>INSTITUTION INNOVATION COUNCIL BY MINISTRY OF EDUCATION GOVT. OF INDIA</p>
                                   </div>
                              </div>
                              <!-- ***** Features Small Item End ***** -->
                         </div>
                    </div>
               </div>
          </div>
     </section>
     <!-- ***** Features Small End ***** -->

     <!-- ***** Features Big Item Start ***** -->
     <section class="section padding-top-70 padding-bottom-0" id="features">
          <div class="container">
               <div class="row">
                    <div class="col-lg-5 col-md-12 col-sm-12 align-self-center"
                         data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                         <img src="assets/images/college.jpg" class="rounded img-fluid d-block mx-auto" alt="App">
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                         <div class="left-heading">
                              <h2 class="section-title">About MIT Art, Design, & Technology University, Rajbaug, Pune
                              </h2>
                         </div>
                         <div class="left-text">
                              <p>Creativity and innovation co-exist and thrive at MIT-ADT University, Pune. Located at
                                   Rajbaug Campus, Loni Kalbhor, the award-winning campus spans over 100 acres of
                                   greenery and inspiration. The private University is established as per the Government
                                   and University Act and offers Undergraduate, Post-Graduate and Doctoral degrees in
                                   Art, Design, and Technology through industry-focused programs</p>
                         </div>
                    </div>
               </div>
               <div class="row">
                    <div class="col-lg-12">
                         <div class="hr"></div>
                    </div>
               </div>
          </div>
     </section>
     <!-- ***** Features Big Item End ***** -->

     <!-- ***** Features Big Item Start ***** -->
     <section class="section padding-bottom-100">
          <div class="container">
               <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                         <div class="left-heading">
                              <h2 class="section-title">Why to choose MIT Art, Design, and Technology University?</h2>
                         </div>
                         <div class="left-text">
                              <p>1)100+ Acres of Inspiring Campus<br>2)113+ Courses<br>3)20+ Foreign University
                                   Collaborations<br>4)300+ Campus Recruiters<br>5)110+ Faculty Mentors<br>6)26+
                                   Patents<br></p>
                         </div>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-5 col-md-12 col-sm-12 align-self-center mobile-bottom-fix-big"
                         data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                         <img src="assets/images/dome.jpg" class="rounded img-fluid d-block mx-auto" alt="App">
                    </div>
               </div>
          </div>
     </section>
     <!-- ***** Features Big Item End ***** -->

     <!-- ***** Home Parallax Start ***** -->
     <section class="mini" id="work-process">
          <div class="mini-content">
               <div class="container">
                    <div class="row">
                         <div class="offset-lg-3 col-lg-6">
                              <div class="info">
                                   <h1>Work Process</h1>
                                   <p></p>
                              </div>
                         </div>
                    </div>

                    <!-- ***** Mini Box Start ***** -->
                    <div class="row">
                         <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                              <a href="#" class="mini-box">
                                   <i><img src="assets/images/work-process-item-01.png" alt=""></i>
                                   <strong>Get Ideas</strong>
                                   <span></span>
                              </a>
                         </div>
                         <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                              <a href="#" class="mini-box">
                                   <i><img src="assets/images/work-process-item-01.png" alt=""></i>
                                   <strong>Sketch Up</strong>
                                   <span></span>
                              </a>
                         </div>
                         <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                              <a href="#" class="mini-box">
                                   <i><img src="assets/images/work-process-item-01.png" alt=""></i>
                                   <strong>Discuss</strong>
                                   <span></span>
                              </a>
                         </div>
                         <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                              <a href="#" class="mini-box">
                                   <i><img src="assets/images/work-process-item-01.png" alt=""></i>
                                   <strong>Revise</strong>
                                   <span></span>
                              </a>
                         </div>
                         <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                              <a href="#" class="mini-box">
                                   <i><img src="assets/images/work-process-item-01.png" alt=""></i>
                                   <strong>Approve</strong>
                                   <span></span>
                              </a>
                         </div>
                         <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                              <a href="#" class="mini-box">
                                   <i><img src="assets/images/work-process-item-01.png" alt=""></i>
                                   <strong>Launch</strong>
                                   <span></span>
                              </a>
                         </div>
                    </div>
                    <!-- ***** Mini Box End ***** -->
               </div>
          </div>
     </section>
     <!-- ***** Home Parallax End ***** -->

     <!-- ***** Testimonials Start ***** -->
     <section class="section" id="testimonials">
          <div class="container">
               <!-- ***** Section Title Start ***** -->
               <div class="row">
                    <div class="col-lg-12">
                         <div class="center-heading">
                              <h2 class="section-title">What do we provide?</h2>
                         </div>
                    </div>
                    <div class="offset-lg-3 col-lg-6">
                         <div class="center-text">
                              <p></p>
                         </div>
                    </div>
               </div>
               <!-- ***** Section Title End ***** -->

               <div class="row">
                    <!-- ***** Testimonials Item Start ***** -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                         <div class="team-item">
                              <div class="team-content">
                                   <i><img src="assets/images/testimonial-icon.png" alt=""></i>
                                   <p>1)World Class Curriculum with emphasis on Project Based Learning.<br>
                                        2)Incubation Center for entrepreneurial ideas & networking opportunities<br>
                                        3)Finishing Schools for employability enhancement; across niche domains</p>

                              </div>
                         </div>
                    </div>
                    <!-- ***** Testimonials Item End ***** -->

                    <!-- ***** Testimonials Item Start ***** -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                         <div class="team-item">
                              <div class="team-content">
                                   <i><img src="assets/images/testimonial-icon.png" alt=""></i>
                                   <p>1)Industry experts delivering value added programme<br>
                                        2)Believes and practices Indian Culture, Values & Ethos to promote World
                                        Peace<br>
                                        3)Unique, Innovative and Industry relevant courses across domains</p>

                              </div>
                         </div>
                    </div>
                    <!-- ***** Testimonials Item End ***** -->

                    <!-- ***** Testimonials Item Start ***** -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                         <div class="team-item">
                              <div class="team-content">
                                   <i><img src="assets/images/testimonial-icon.png" alt=""></i>
                                   <p>1)Training and Placement (T&P) Cell to help secure the best prospects with
                                        reputable MNCs around the world; offering 100 percent placement assistance to
                                        graduating students<br>

                                        3)Best University Campus Award-2017 from ASSOCHAM, New Delhi</p>

                              </div>
                         </div>
                    </div>
                    <!-- ***** Testimonials Item End ***** -->
               </div>
          </div>
     </section>
     <!-- ***** Testimonials End ***** -->
     <!-- ***** Blog Start ***** -->
     <section class="section" id="blog">
          <div class="container">
               <!-- ***** Section Title Start ***** -->
               <div class="row">
                    <div class="col-lg-12">
                         <div class="center-heading">
                              <h2 class="section-title">Awards & Accolades</h2>
                         </div>
                    </div>
                    <div class="offset-lg-3 col-lg-6">
                         <div class="center-text">
                              <p></p>
                         </div>
                    </div>
               </div>
               <!-- ***** Section Title End ***** -->

               <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                         <div class="blog-post-thumb">
                              <div class="img">
                                   <img src="assets/images/1st.png" alt="">
                              </div>
                              <div class="blog-content">
                                   <h3>
                                        <a href="#">ASSOCHAM of India</a>
                                   </h3>
                                   <div class="text">
                                        Awarded as ‘Best University Campus’ by ASSOCHAM of India
                                   </div>

                              </div>
                         </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                         <div class="blog-post-thumb">
                              <div class="img">
                                   <img src="assets/images/2nd.png" alt="">
                              </div>
                              <div class="blog-content">
                                   <h3>
                                        <a href="#">NITI Aayog, Govt. of India</a>
                                   </h3>
                                   <div class="text">
                                        Only State Private University to get recognized by NITI Aayog, Govt. of India
                                        for ATAL Innovation Mission.
                                   </div>

                              </div>
                         </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                         <div class="blog-post-thumb">
                              <div class="img">
                                   <img src="assets/images/3rd.png" alt="">
                              </div>
                              <div class="blog-content">
                                   <h3>
                                        <a href="#">Dewang Mehta Foundation</a>
                                   </h3>
                                   <div class="text">
                                        Education Leadership Award by Dewang Mehta Foundation
                                   </div>

                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>
     <!-- ***** Blog End ***** -->


     <!-- ***** Footer Start ***** -->
     <footer>
          <div class="container">
               <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                         <ul class="social">
                              <li><a href="https://www.facebook.com/mitadtuniversity/"><i
                                             class="fa fa-facebook"></i></a></li>
                              <li><a href="https://www.instagram.com/mitadtuniversity/?hl=en"><i
                                             class="fa fa-instagram"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                              <li><a href="#"><i class="fa fa-rss"></i></a></li>
                              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                         </ul>
                    </div>
               </div>
               <div class="row">
                    <div class="col-lg-12">
                         <p class="copyright">Copyright &copy; 2021 MitRecruiter - Design:-TeamSOE</p>
                    </div>
               </div>
          </div>
     </footer>

     <!-- jQuery -->
     <script src="assets/js/jquery-2.1.0.min.js"></script>

     <!-- Bootstrap -->
     <script src="assets/js/popper.js"></script>
     <script src="assets/js/bootstrap.min.js"></script>

     <!-- Plugins -->
     <script src="assets/js/scrollreveal.min.js"></script>
     <script src="assets/js/waypoints.min.js"></script>
     <script src="assets/js/jquery.counterup.min.js"></script>
     <script src="assets/js/imgfix.min.js"></script>

     <!-- Global Init -->
     <script src="assets/js/custom.js"></script>

</body>

</html>