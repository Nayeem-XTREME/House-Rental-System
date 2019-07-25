<?php
  session_start();
  $name = $_SESSION['name'];
  $email = $_SESSION['email'];



  $_SESSION['name'] = $name;
  $_SESSION['email'] = $email;

?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HouseRental.bsdesign1</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/register.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/post.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form-1.css">
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top" id="top">
        <div class="container" id="Hi">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="index.html" id="nav-text"><strong>House Rental</strong> System</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right" id="Hello">
                    <li class="dropdown">
                        <a class="text-uppercase dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" id="nav-drop"><img src="assets/img/gzypyldoqaxjhvtyyhei.png" id="pic"><?php echo $name;?> <span class="caret"></span></a>
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
    <div id="main-main">
        <div class="container" id="main-container">
            <div class="row" id="upper-sec">
                <div class="col-md-12" id="up-sec">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle option" data-toggle="dropdown" aria-expanded="false" type="button">SELECT LOCATION<span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="#">First Item</a></li>
                            <li role="presentation"><a href="#">Second Item</a></li>
                            <li role="presentation"><a href="#">Third Item</a></li>
                        </ul>
                    </div>
                    <div class="dropdown"><a class="btn btn-primary dropdown-toggle option" data-toggle="dropdown" aria-expanded="false" role="button" href="#">SORT BY<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="#">First Item</a></li>
                            <li role="presentation"><a href="#">Second Item</a></li>
                            <li role="presentation"><a href="#">Third Item</a></li>
                        </ul>
                    </div><a class="btn btn-primary" role="button" href="post.php" id="post">POST AN ADD</a></div>
            </div>
            <div class="row">
                <div class="col-md-3" id="left-sec">
                    <h4 id="maincata-head">Select Catagory</h4>
                    <button class="btn btn-primary catagory-butt" type="button">APARTMENT </button>
                    <button class="btn btn-primary catagory-butt" type="button">HOUSE </button>
                    <button class="btn btn-primary catagory-butt" type="button">MESS </button>
                    <button class="btn btn-primary catagory-butt" type="button">HOTEL </button>
                </div>
                <div class="col-md-9">
                    <div class="row one-product">
                        <div class="col-md-4" id="product-img-col">
                            <div class="product-img"></div>
                        </div>
                        <div class="col-md-8">
                            <div class="jumbotron product-detail">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h3>Product Name</h3></div>
                                    <div class="col-md-4 product-id">
                                        <h5>Product ID</h5></div>
                                </div>
                                <h4>Detail hgb jhb ghbksdb skdg hbsdkj hskdgj bhsdg bsdgjsn dgh snd hsg nsdgh sdiguh sudgh nsdugm sdgum sgumsdugm sdguh msdgum sdgum sdgu msdugm .</h4>
                                <div class="row price-row">
                                    <div class="col-md-6 price">
                                        <p>Price: 3500Tk</p>
                                    </div>
                                    <div class="col-md-6 product-butt">
                                        <button class="btn btn-info" type="button">View Detail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row one-product">
                        <div class="col-md-4" id="product-img-col">
                            <div class="product-img"></div>
                        </div>
                        <div class="col-md-8">
                            <div class="jumbotron product-detail">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h3>Product Name</h3></div>
                                    <div class="col-md-4 product-id">
                                        <h5>Product ID</h5></div>
                                </div>
                                <h4>Detail hgb jhb ghbksdb skdg hbsdkj hskdgj bhsdg bsdgjsn dgh snd hsg nsdgh sdiguh sudgh nsdugm sdgum sgumsdugm sdguh msdgum sdgum sdgu msdugm .</h4>
                                <div class="row price-row">
                                    <div class="col-md-6 price">
                                        <p>Price: 3500Tk</p>
                                    </div>
                                    <div class="col-md-6 product-butt">
                                        <button class="btn btn-info" type="button">View Detail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row one-product">
                        <div class="col-md-4" id="product-img-col">
                            <div class="product-img"></div>
                        </div>
                        <div class="col-md-8">
                            <div class="jumbotron product-detail">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h3>Product Name</h3></div>
                                    <div class="col-md-4 product-id">
                                        <h5>Product ID</h5></div>
                                </div>
                                <h4>Detail hgb jhb ghbksdb skdg hbsdkj hskdgj bhsdg bsdgjsn dgh snd hsg nsdgh sdiguh sudgh nsdugm sdgum sgumsdugm sdguh msdgum sdgum sdgu msdugm .</h4>
                                <div class="row price-row">
                                    <div class="col-md-6 price">
                                        <p>Price: 3500Tk</p>
                                    </div>
                                    <div class="col-md-6 product-butt">
                                        <button class="btn btn-info" type="button">View Detail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row one-product">
                        <div class="col-md-4" id="product-img-col">
                            <div class="product-img"></div>
                        </div>
                        <div class="col-md-8">
                            <div class="jumbotron product-detail">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h3>Product Name</h3></div>
                                    <div class="col-md-4 product-id">
                                        <h5>Product ID</h5></div>
                                </div>
                                <h4>Detail hgb jhb ghbksdb skdg hbsdkj hskdgj bhsdg bsdgjsn dgh snd hsg nsdgh sdiguh sudgh nsdugm sdgum sgumsdugm sdguh msdgum sdgum sdgu msdugm .</h4>
                                <div class="row price-row">
                                    <div class="col-md-6 price">
                                        <p>Price: 3500Tk</p>
                                    </div>
                                    <div class="col-md-6 product-butt">
                                        <button class="btn btn-info" type="button">View Detail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row one-product">
                        <div class="col-md-4" id="product-img-col">
                            <div class="product-img"></div>
                        </div>
                        <div class="col-md-8">
                            <div class="jumbotron product-detail">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h3>Product Name</h3></div>
                                    <div class="col-md-4 product-id">
                                        <h5>Product ID</h5></div>
                                </div>
                                <h4>Detail hgb jhb ghbksdb skdg hbsdkj hskdgj bhsdg bsdgjsn dgh snd hsg nsdgh sdiguh sudgh nsdugm sdgum sgumsdugm sdguh msdgum sdgum sdgu msdugm .</h4>
                                <div class="row price-row">
                                    <div class="col-md-6 price">
                                        <p>Price: 3500Tk</p>
                                    </div>
                                    <div class="col-md-6 product-butt">
                                        <button class="btn btn-info" type="button">View Detail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row one-product">
                        <div class="col-md-4" id="product-img-col">
                            <div class="product-img"></div>
                        </div>
                        <div class="col-md-8">
                            <div class="jumbotron product-detail">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h3>Product Name</h3></div>
                                    <div class="col-md-4 product-id">
                                        <h5>Product ID</h5></div>
                                </div>
                                <h4>Detail hgb jhb ghbksdb skdg hbsdkj hskdgj bhsdg bsdgjsn dgh snd hsg nsdgh sdiguh sudgh nsdugm sdgum sgumsdugm sdguh msdgum sdgum sdgu msdugm .</h4>
                                <div class="row price-row">
                                    <div class="col-md-6 price">
                                        <p>Price: 3500Tk</p>
                                    </div>
                                    <div class="col-md-6 product-butt">
                                        <button class="btn btn-info" type="button">View Detail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row one-product">
                        <div class="col-md-4" id="product-img-col">
                            <div class="product-img"></div>
                        </div>
                        <div class="col-md-8">
                            <div class="jumbotron product-detail">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h3>Product Name</h3></div>
                                    <div class="col-md-4 product-id">
                                        <h5>Product ID</h5></div>
                                </div>
                                <h4>Detail hgb jhb ghbksdb skdg hbsdkj hskdgj bhsdg bsdgjsn dgh snd hsg nsdgh sdiguh sudgh nsdugm sdgum sgumsdugm sdguh msdgum sdgum sdgu msdugm .</h4>
                                <div class="row price-row">
                                    <div class="col-md-6 price">
                                        <p>Price: 3500Tk</p>
                                    </div>
                                    <div class="col-md-6 product-butt">
                                        <button class="btn btn-info" type="button">View Detail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row one-product">
                        <div class="col-md-4" id="product-img-col">
                            <div class="product-img"></div>
                        </div>
                        <div class="col-md-8">
                            <div class="jumbotron product-detail">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h3>Product Name</h3></div>
                                    <div class="col-md-4 product-id">
                                        <h5>Product ID</h5></div>
                                </div>
                                <h4>Detail hgb jhb ghbksdb skdg hbsdkj hskdgj bhsdg bsdgjsn dgh snd hsg nsdgh sdiguh sudgh nsdugm sdgum sgumsdugm sdguh msdgum sdgum sdgu msdugm .</h4>
                                <div class="row price-row">
                                    <div class="col-md-6 price">
                                        <p>Price: 3500Tk</p>
                                    </div>
                                    <div class="col-md-6 product-butt">
                                        <button class="btn btn-info" type="button">View Detail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row one-product">
                        <div class="col-md-4" id="product-img-col">
                            <div class="product-img"></div>
                        </div>
                        <div class="col-md-8">
                            <div class="jumbotron product-detail">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h3>Product Name</h3></div>
                                    <div class="col-md-4 product-id">
                                        <h5>Product ID</h5></div>
                                </div>
                                <h4>Detail hgb jhb ghbksdb skdg hbsdkj hskdgj bhsdg bsdgjsn dgh snd hsg nsdgh sdiguh sudgh nsdugm sdgum sgumsdugm sdguh msdgum sdgum sdgu msdugm .</h4>
                                <div class="row price-row">
                                    <div class="col-md-6 price">
                                        <p>Price: 3500Tk</p>
                                    </div>
                                    <div class="col-md-6 product-butt">
                                        <button class="btn btn-info" type="button">View Detail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row one-product">
                        <div class="col-md-4" id="product-img-col">
                            <div class="product-img"></div>
                        </div>
                        <div class="col-md-8">
                            <div class="jumbotron product-detail">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h3>Product Name</h3></div>
                                    <div class="col-md-4 product-id">
                                        <h5>Product ID</h5></div>
                                </div>
                                <h4>Detail hgb jhb ghbksdb skdg hbsdkj hskdgj bhsdg bsdgjsn dgh snd hsg nsdgh sdiguh sudgh nsdugm sdgum sgumsdugm sdguh msdgum sdgum sdgu msdugm .</h4>
                                <div class="row price-row">
                                    <div class="col-md-6 price">
                                        <p>Price: 3500Tk</p>
                                    </div>
                                    <div class="col-md-6 product-butt">
                                        <button class="btn btn-info" type="button">View Detail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row one-product">
                        <div class="col-md-4" id="product-img-col">
                            <div class="product-img"></div>
                        </div>
                        <div class="col-md-8">
                            <div class="jumbotron product-detail">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h3>Product Name</h3></div>
                                    <div class="col-md-4 product-id">
                                        <h5>Product ID</h5></div>
                                </div>
                                <h4>Detail hgb jhb ghbksdb skdg hbsdkj hskdgj bhsdg bsdgjsn dgh snd hsg nsdgh sdiguh sudgh nsdugm sdgum sgumsdugm sdguh msdgum sdgum sdgu msdugm .</h4>
                                <div class="row price-row">
                                    <div class="col-md-6 price">
                                        <p>Price: 3500Tk</p>
                                    </div>
                                    <div class="col-md-6 product-butt">
                                        <button class="btn btn-info" type="button">View Detail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row one-product">
                        <div class="col-md-4" id="product-img-col">
                            <div class="product-img"></div>
                        </div>
                        <div class="col-md-8">
                            <div class="jumbotron product-detail">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h3>Product Name</h3></div>
                                    <div class="col-md-4 product-id">
                                        <h5>Product ID</h5></div>
                                </div>
                                <h4>Detail hgb jhb ghbksdb skdg hbsdkj hskdgj bhsdg bsdgjsn dgh snd hsg nsdgh sdiguh sudgh nsdugm sdgum sgumsdugm sdguh msdgum sdgum sdgu msdugm .</h4>
                                <div class="row price-row">
                                    <div class="col-md-6 price">
                                        <p>Price: 3500Tk</p>
                                    </div>
                                    <div class="col-md-6 product-butt">
                                        <button class="btn btn-info" type="button">View Detail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-primary range-but" type="button">1 </button>
                        <button class="btn btn-primary range-but" type="button">2 </button>
                        <button class="btn btn-primary range-but" type="button">3 </button>
                        <button class="btn btn-primary range-but" type="button">4 </button>
                        <button class="btn btn-primary range-but" type="button">5 </button>
                        <button class="btn btn-primary range-but" type="button">6 </button>
                        <button class="btn btn-primary range-but" type="button">7 </button>
                        <button class="btn btn-primary range-but" type="button">8 </button>
                        <button class="btn btn-primary range-but" type="button">9 </button>
                        <button class="btn btn-primary range-but" type="button">10 </button>
                        <button class="btn btn-primary range-but" type="button">11 </button>
                        <button class="btn btn-primary range-but" type="button">12 </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="main-footer">
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
