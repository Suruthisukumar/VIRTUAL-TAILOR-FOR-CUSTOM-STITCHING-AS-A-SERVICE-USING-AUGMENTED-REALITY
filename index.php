<?php
session_start();
include("dbconnect.php");
extract($_REQUEST);
$msg="";
if(isset($btn))
{	
$qry=mysqli_query($connect,"select * from tt_customer where uname='$uname' && pass='$pass'");
$num=mysqli_num_rows($qry);
    if($num==1)
    {
    $_SESSION['uname_cu']=$uname;
    header("location:web/cu_home.php");
    }
    else
    {
    $msg="Incorrect Username/Password!";
    }

}
?>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Loanday Template">
    <meta name="keywords" content="Loanday, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php include("title.php"); ?></title>


    <!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

<!--Css Styles -->
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
<link rel="stylesheet" href="css/nice-select.css" type="text/css">
<link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
<link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
<link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
<!-- Page Preloder -->
<!--<div id="preloder">
<div class="loader"></div>
</div>-->

<!--Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
<div class="offcanvas__search">
<i class="fa fa-search search-switch"></i>
</div>
<div class="offcanvas__logo">
<a href=""><imgsrc="img/logo.png" alt=""></a>
</div>
<nav class="offcanvas__menu mobile-menu">
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="login.php">Tailor</a></li>
<li><a href="login_admin.php">Admin</a></li>
</ul>
</nav>
<div id="mobile-menu-wrap"></div>
<ul class="offcanvas__widget">
<li><i class="fa fa-map-marker"></i> India</li>


<li><i class="fa fa-phone"></i> (123) 456-78-910</li>
<li><i class="fa fa-envelope"></i> tailor@info.com</li>
</ul>
<!--<div class="offcanvas__language">
<imgsrc="img/flag.png" alt="">
<span>English</span>
<i class="fa fa-angle-down"></i>
<ul>
<li><a href="#">English</a></li>
<li><a href="#">Bangla</a></li>
</ul>
</div>-->
</div>
<!--Offcanvas Menu End -->
<!-- Header Section Begin -->
<header class="header">
<div class="header__top">
<div class="container">
<div class="row">
<div class="col-lg-9">
<ul class="header__top__widget">
<li><i class="fa fa-map-marker"></i> India</li>
<li><i class="fa fa-phone"></i> (123) 456-78-910</li>
<li><i class="fa fa-envelope"></i> tailor@info.com</li>
</ul>
</div>
<!--<div class="col-lg-3">
<div class="header__top__language">
<imgsrc="img/flag.png" alt="">
<span>English</span>
<i class="fa fa-angle-down"></i>
<ul>
<li><a href="#">English</a></li>
<li><a href="#">Bangla</a></li>
</ul>
</div>
</div>-->
</div>
</div>
</div>
<div class="container">
<div class="row">


<div class="col-lg-3">
<div class="header__logo">
<a href=""><imgsrc="img/logo.png" alt=""></a>
</div>
</div>
<div class="col-lg-9">
<div class="header__nav">
<nav class="header__menu">
<ul>
<li class="active"><a href="index.php">Home</a></li>
<li><a href="login.php">Tailor</a></li>
<li><a href="login_admin.php">Admin</a></li>

<!--<li><a href="#">Pages</a>
<ul class="dropdown">
<li><a href="./services.html">Features</a></li>
<li><a href="./services-details.html">Services Details</a></li>
<li><a href="./blog-details.html">Blog Details</a></li>
</ul>
</li>
<li><a href="./contact.html">Contact</a></li>-->
</ul>
</nav>
<!--<div class="header__search">
<i class="fa fa-search search-switch"></i>
</div>-->
</div>
</div>
</div>
<div class="canvas__open">
<span class="fa fa-bars"></span>
</div>
</div>
</header>
<!-- Header Section End -->

<!-- Hero Section Begin -->
<section class="hero set-bg" data-setbg="img/hero-bg.jpg">
<div class="container">
<div class="row">
<div class="col-lg-5">
<div class="hero__text">


<h2>Find The Best Tailor</h2>
<p>Online Tailor for Custom Stitching</p>
<!--<a href="#" class="primary-btn">Get Start</a>
<a href="#" class="primary-btnhowit-btn">How It Work</a>-->
</div>
</div>
<div class="col-lg-5 offset-lg-2">
<div class="hero__form">
<h3>Customer Login</h3>
<form action="#">
<span style="color:#FF0000"><?php echo $msg; ?></span>
<div class="input-list last">
<div class="input-list-item">
<p>Username:</p>
<input type="text" name="uname" required>
</div>
<div class="input-list-item">
<p>Password:</p>
<input type="password" name="pass" required>
</div>
</div>
<button type="submit" name="btn" class="site-btn">Login</button>

Don't have an account? <a href="register.php">Register</a>
<!--<p align="center"><imgsrc="img/tlfl.jpg" class="img-fluid"></p>-->
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</form>
</div>
</div>
</div>
</div>
</section>
<!-- Hero Section End -->

<!-- Home About Begin -->
<section class="home-about spad">
<div class="container">
<div class="row">


<div class="col-lg-6">
<div class="home__about__text">
<div class="section-title">
<h2>Prefer custom-made clothes</h2>
<p>Virtual Tailor is an online tailor web application at your doorstep for stitching the custom made clothes.</p>
</div>
<div class="row">
<div class="col-lg-6 col-md-6">
<div class="home__about__item">
<h4>Tailor Interface</h4>
<p>It is a complete solution for tailors and fashion designers. </p>
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="home__about__item">
<h4>Custom Interface</h4>
<p>It helps to manage all customer measurements, orders/sales, customers, income, expenses
.</p>
</div>
</div>
</div
</div>
</div>
<div class="col-lg-5 offset-lg-1">
<div class="home__about__img">
<imgsrc="img/tter.jpeg" alt="">
</div>
</div>
</div>
</div>
</section>
<!-- Home About End -->

<!-- Loan Services Section Begin -->

<!-- Loan Services Section End -->

<!-- Choose Section Begin -->

<!-- Choose Section End -->


<!-- Testimonial Section Begin -->

<!-- Testimonial Section End -->

<!-- Counter Begin -->

<!-- Counter End -->

<!-- Call Section Begin -->

<!-- Call Section End -->

<!-- Blog Section Begin -->

<!-- Blog Section End -->

<!-- Contact Begin -->

<!-- Contact End -->

<!-- Footer Section Begin -->
<footer class="footer">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="footer__about">
<div class="footer__logo">
<span style="color:#FFFFFF"><?php include("title.php"); ?></span>
</div>
<p>Virtual Tailor is an online tailor web application at your doorstep for stitching the custom made clothes.</p>
</div>
</div>
<div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
<div class="footer__widget">
<h5>Quick Links</h5>
<div class="footer__widget">
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="login.php">Tailor</a></li>
<li><a href="login_admin.php">Admin</a></li>



</ul>
</div>
</div>
</div>
</div>
<div class="footer__copyright">
<div class="row">
<div class="col-lg-6 col-md-6">
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<div class="footer__copyright__text">
<p><a href="https://colorlib.com" target="_blank"></a></p>
</div>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
</div>
</div>
</div>
</footer>
<!-- Footer Section End -->
<!-- Search Begin -->
<!--<div class="search-model">
<div class="h-100 d-flex align-items-center justify-content-center">
<div class="search-close-switch">+</div>
<form class="search-model-form">
<input type="text" id="search-input" placeholder="Search here.....">
</form>
</div>
</div>-->
<!-- Search End -->
<!--Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
