<?php
session_start();
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="TopGym Template">
    <meta name="keywords" content="TopGym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,700,900" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-menu">
                        <div class="logo">
                            <a href="./index.html">
                                <img src="img/logo.gif" alt="">
                            </a>
                        </div>
                        <nav class="mobile-menu">
                            <ul>
                                <li><a href="./index.php">Home</a></li>
                                <li><a href="./about-us.php">About us</a></li>
                                <li><a href="./Plans.php">PLANS</a></li>
                                <li><a href="./Trainers.php">MY WORKOUTS</a></li>
                                <li><a href="./Progress.php">PROGRESS</a></li>
                                <li><a href="./contact.php">Contact</a></li>
                                <li class="search-btn search-trigger"><i class="fa fa-search"></i></li>

                                 <!-- Show Logout if logged in, otherwise show Login -->
                                 <?php if (isset($_SESSION["user_id"])): ?>
                                 <li><a href="php/logout.php" class="mobile-menu">Logout</a></li>
                             <?php else: ?>
                                 <li><a href="Login.html" class="mobile-menu">Login</a></li>
                             <?php endif; ?>
                            </ul>
                        </nav>
                        <div id="mobile-menu-wrap"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->
    <!-- Search Bar Begin -->
    <section class="search-bar-wrap">
        <span class="search-close"><i class="fa fa-close"></i></span>
        <div class="search-bar-table">
            <div class="search-bar-tablecell">
                <div class="search-bar-inner">
                    <h2>Search</h2>
                    <form action="#">
                        <input type="search" placeholder="Type Keywords">
                        <button type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Search Bar End -->
    <!-- Top Social Begin -->
    <div class="top-social">
        <div class="top-social-links">
            <ul>
                <li><a href="./UserProfile.php"><i class="fa fa-user" color="white"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
            </ul>
        </div>
    </div>
    <!-- Top Social End -->
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-area set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-content">
                        <h2>About us</h2>
                        <div class="links">
                            <a href="./index.html">Home</a>
                            <a href="./about-us.html" class="rt-breadcrumb">About us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <!-- About Us Begin -->
    <section class="about-us-area spad-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Features</span>
                        <h2>Who We Are</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="about-text">
                        <p class="t-text">FlexiGym is a cutting-edge gym management system designed to enhance the fitness experience for both members and trainers. We strive to provide a seamless and personalized fitness journey by offering advanced features, including workout tracking, trainer management, and progress monitoring. Our goal is to make fitness more accessible, efficient, and engaging for everyone. </p>
                        <div class="about-features">
                            <div class="about-features-item">
                                <div class="about-feature-img">
                                    <img src="img/check.png" alt="">
                                </div>
                                <div class="about-feature-text">
                                    <h4>We have the best Gym Trainers</h4>
                                    <p> </p>
                                </div>
                            </div>
                            <div class="about-features-item">
                                <div class="about-feature-img">
                                    <img src="img/check.png" alt="">
                                </div>
                                <div class="about-feature-text">
                                    <h4>The best fitness facilities</h4>
                                    <p>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">Read about topgym</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img class="about-img" src="img/about-us.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- About Us End -->
    <!-- Skills Section Begin -->
    <section class="skill-section set-bg" data-setbg="img/about-bg-2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Features</span>
                        <h2>Why Choose us?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="skill-text">
                        <p>At FlexiGym, we understand that every fitness journey is unique. Our gym management system offers a tailored approach to suit the needs of both members and trainers. With user-friendly interfaces, real-time progress tracking, and personalized workout plans, we ensure that each individual receives the attention and support they deserve. Our system helps gym owners and trainers manage operations effortlessly, while providing members with an engaging and motivating fitness experience. Choose FlexiGym for a smarter, more efficient way to reach your fitness goals.

</p>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="skill-bar">
                        <div id="bar1" class="single-bar barfiller">
                            <span class="fill" data-percentage="75"></span>
                            <h5>Body building</h5>
                            <div class="tipWrap">
                                <span class="tip"></span>
                            </div>
                        </div>
                        <div id="bar2" class="single-bar barfiller">
                            <span class="fill" data-percentage="95"></span>
                            <h5>Training</h5>
                            <div class="tipWrap">
                                <span class="tip"></span>
                            </div>
                        </div>
                        <div id="bar3" class="single-bar barfiller">
                            <span class="fill" data-percentage="85"></span>
                            <h5>Fitness</h5>
                            <div class="tipWrap">
                                <span class="tip"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter">
                        <div class="counter-icon">
                            <img src="img/shirt-icon.png" alt="">
                        </div>
                        <span class="counter">561</span>
                        <p>Members</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter">
                        <div class="counter-icon">
                            <img src="img/certify.png" alt="">
                        </div>
                        <span class="counter">12</span>
                        <p>Trainers</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter">
                        <div class="counter-icon">
                            <img src="img/award-icon.png" alt="">
                        </div>
                        <span class="counter">25</span>
                        <p>Awards</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter">
                        <div class="counter-icon">
                            <img src="img/footer-icon.png" alt="">
                        </div>
                        <span class="counter">56</span>
                        <strong>k</strong>
                        <p>Ig folowers</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Skills Section End -->
    <!-- Testimonial Section Begin -->
    <section class="testimonial-section spad-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>What Clients Say</span>
                        <h2>Testimonials</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="testimonial-content">
                        <div class="testimonial-pic set-bg" data-setbg="img/trainer.jpg"></div>
                        <div class="testimonial-text">
                            <h4>Megan Smith, <span>Client</span></h4>
                            <p> </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-content">
                        <div class="testimonial-pic set-bg" data-setbg="img/trainer1.jpg"></div>
                        <div class="testimonial-text">
                            <h4>Michael Joe, <span>Client</span></h4>
                            <p> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->
    <!-- Call To Action Section Begin -->
    <section class="about-callto-section set-bg" data-setbg="img/callto-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-callto-text">
                        <div class="cl-left">
                            <h2>Join our gym now!</h2>
                            <p></p>
                        </div>
                        <div class="cl-right">
                            <a href="#" class="primary-btn">Join</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section End -->
    <!-- Footer Section Begin -->
    <footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-content">
                        <div class="footer-logo">
                            <a href="#"><img src="img/logo.png" alt=""></a>
                        </div>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="./home.html">Home</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Classes</a></li>
                                <li><a href="#">Instructors</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                        <div class="subscribe-form">
                            <form action="#">
                                <input type="text" placeholder="your Email">
                                <button type="submit">Sign Up</button>
                            </form>
                        </div>
                        <div class="social-links">
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                        <div class="footer-icon-img">
                            <img src="img/footer-icon.png" alt="">
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/circle-progress.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/main.js"></script>
</body>

</html>