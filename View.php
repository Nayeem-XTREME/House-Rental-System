<?php
  session_start();
  $name = $_SESSION['name'];
  $email = $_SESSION['email'];

  $_SESSION['name'] = $name;
  $_SESSION['email'] = $email;

  $price = $_SESSION['Heading'];
  $des = $_SESSION['Description'];

  $db = $db = mysqli_connect('localhost', 'root', '', 'house_rental');
  $query = "SELECT * FROM ADDS WHERE Price = '$price', Description = '$des'";
  $result = mysqli_query($db, $query);

  $row = mysqli_fetch_assoc($result);

  $heading1 = $row['Heading'];
  $des1 = $row['Description'];
  $price1 = $row['Price'];
  $add1 = $row['Address'];
  $lat = $row['Latitude'];
  $lng = $row['Longitude'];

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HouseRental</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/register.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/view.css">
</head>

<body>
    <div id="main" class="main2">
        <div class="row register-form">
            <div class="col-md-6">
                <div id="map"></div>
            </div>
            <div class="col-md-6">
                <div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="main heading"><?php echo $heading1; ?></h4></div>
                        <div class="col-md-12">
                            <p class="description"><?php echo $des1; ?></p>
                        </div>
                        <div class="col-md-12">
                            <h4 class="price"><?php echo $price1; ?></h4></div>
                    </div>
                </div>
                <div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="address">Address </h4></div>
                        <div class="col-md-12">
                            <p class="address_detail"><?php echo $add1; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="foot">
        <div class="row">
            <div class="col-md-4 col-sm-6 footer-navigation">
                <h3><a href="#">Smart<span> HouseRental</span></a></h3>
                <p class="links"><a href="#">Home</a><strong> · </strong><a href="#">Blog</a><strong> · </strong><a href="#">Pricing</a><strong> · </strong><a href="#">About</a><strong> · </strong><a href="#">Faq</a><strong> · </strong><a href="#">Contact</a></p>
                <p class="company-name">Smart House Rental System© 2017 </p>
            </div>
            <div class="col-md-4 col-sm-6 footer-contacts">
                <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p><span class="new-line-span">21 Revolution Street</span> Paris, France</p>
                </div>
                <div><i class="fa fa-phone footer-contacts-icon"></i>
                    <p class="footer-center-info email text-left"> +1 555 123456</p>
                </div>
                <div><i class="fa fa-envelope footer-contacts-icon"></i>
                    <p> <a href="#" target="_blank">support@houserental.com</a></p>
                </div>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-4 footer-about">
                <h4>About the company</h4>
                <p> Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
                </p>
                <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
            </div>
        </div>
    </footer>
    <nav class="navbar navbar-default navbar-fixed-top" id="top">
        <div class="container" id="Hi">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="index.html"><strong>House Rental</strong> System</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right" id="Hello">
                    <li class="dropdown">
                        <a class="text-uppercase dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><img src="assets/img/gzypyldoqaxjhvtyyhei.png" id="pic">NAME <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="#">Profile </a></li>
                            <li role="presentation"><a href="#">Settings </a></li>
                            <li role="presentation"><a href="#">Log out</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form" id="searchbar">
                    <input class="form-control AAA" type="search" placeholder="Search">
                    <button class="btn btn-default AAA" type="button"><img src="assets/img/gzypyldoqaxjhvtyyhei.png" id="searchicon"> </button>
                </form>
            </div>
        </div>
    </nav>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
