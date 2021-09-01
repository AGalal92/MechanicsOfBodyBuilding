<meta charset="UTF-8" />
<meta property="og:title" content="Mechanics of Bodybuilding" />
<meta property="og:og:site_name"  content="Mechanics of Bodybuilding"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<meta name="keywords"    content="MOBB, GYM, Mechanics Of Bodybulding, Fitness"    />
<meta property="og:title" content="Mechanics of Bodybuilding" />
<meta property="og:type" content="website" />
<title>Mechanics of Bodybuilding</title>

<?php
if (isset($_GET['id']) && isset($_GET['page']) && $_GET['page'] == "articls_details") {
    $sql = "SELECT * FROM `articles` where `id`='$_GET[id]'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        ?>
        <meta    name="keywords"    content="MOBB, GYM, Mechanics Of Bodybulding, Fitness"    />
        <meta property="og:url" content="https://mobb-eg.com/index.php?page=articls_details&id=<?php echo $_GET['id']; ?>" />
        <meta property="og:image" content="https://mobb-eg.com/app/articles/<?php echo $row['image']; ?>" />
        <meta property="og:description" content="<?php echo $row['title'] ?>" />
        <?php
    }
} else {
    ?>
    <meta name="description" content="MOBB" />
    <meta property="og:url" content="https://mobb-eg.com" />
    <meta property="og:image" content="https://mobb-eg.com/img/hero/slide02.jpg" />
    <meta property="og:description" content="Mechanics of Bodybuilding is the brand of Mustafa Khalaf, a certified professional trainer, nutritionist, and competitive athlete which was founded back in 2016. " />
<?php } ?><!-- Google Font -->
<link    href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap"    rel="stylesheet"    />
<link  href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap"    rel="stylesheet"    />



<!-- Css Styles -->

<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
<link rel="stylesheet" href="css/flaticon.css" type="text/css" />
<link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" />
<link rel="stylesheet" href="css/barfiller.css" type="text/css" />
<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
<link rel="stylesheet" href="css/slicknav.min.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link href="img/icon_v.ico" rel="shortcut icon" type="image/x-icon">
<script src="js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/jquery.barfiller.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
<script src="js/counter.js"></script>

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>


<style>
    @media only screen and (max-width: 767px){
        #intro > div.owl-stage-outer > div > div > div > div > div > div > div > h1{
            font-size: 30px
        }
        body > section.breadcrumb-section.set-bg > div > div > div > div > h2{
            font-size: 18px
        }
        body > section.breadcrumb-section.set-bg > div > div > div > div > h3{
            font-size: 30px !important
        }
        .set-bg{
            height: 350px
        }
        #counterContainer{
            height: auto
        }
        .logo-img {
            width: 70px;
            height: 37px;
        }
        .hs-slider .hs-item {
            height: 510px !important;
            background-size: 160% 100%
        }
        .counterBack{
            background-position: left;
            background-size: 320% 100%
        }
        .set_bg_custom{
            background-size: 520% 100%

        }
    }
    .customBtn{
        background: transparent !important;
        border: 2px solid #f36100 !important;
    }
    .customBtn:hover{
        background: #f36100 !important;
        border: 2px solid #f36100 !important;    }
    .to-social>a:hover ,.fa-social>a:hover{
        color:  #f36100;
    }
    .getTouchIcon>.fa:hover{
        color: #fff !important;
        background: #f36100 !important
    }
    input,textarea,select{
        color: #000 !important;
        background-color: #fff !important;

    }
    .thumb{
        margin-bottom: 30px;
    }
    img.zoom {

        border-radius:5px;
        object-fit:cover;
        -webkit-transition: all .3s ease-in-out;
        -moz-transition: all .3s ease-in-out;
        -o-transition: all .3s ease-in-out;
        -ms-transition: all .3s ease-in-out;
    }


    .transition {
        -webkit-transform: scale(1.2); 
        -moz-transform: scale(1.2);
        -o-transform: scale(1.2);
        transform: scale(1.2);
    }
    .page-link{
        color: #e6e6e6;
        background-color: #6c6a6a9e;
        border: 1px solid #313131;
    }

</style>
</head>

<body>
    <!-- Page Preloder 
    <div id="preloder">
      <div class="loader"></div>
    </div>
    -->
    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="fa fa-close"></i>
        </div>
        <!--   <div class="canvas-search search-switch">
          <i class="fa fa-search"></i>
        </div> -->
        <nav class="canvas-menu mobile-menu">
            <ul>
                <li><a href="./index.php?page=home">Home</a></li>
                <li><a href="./index.php?page=about-us">About Us</a></li>
                <li><a href="./index.php?page=services">Services</a></li>
                <li><a href="./index.php?page=gallery">Transformations</a></li>
                <li>
                    <a>Calculator</a>
                    <ul class="dropdown">
                        <li><a href="./index.php?page=bmi-calculator">BMR and TDEE</a></li>
                        <li><a href="./index.php?page=tread-calculator">Treadmill</a></li>
                        <li><a href="./index.php?page=bike-calculator">Bike</a></li>
                        <li><a href="./index.php?page=stair-calculator">Stairmaster</a></li>
                    </ul>
                </li>
                <li><a href="./index.php?page=articles">Articles</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="canvas-social">
            <a target="_blank" href="https://www.facebook.com/MechanicsOfBodybuilding"
               ><i class="fa fa-facebook"></i
                ></a>
            <a href="index.php?page=contact"><i class="fa fa-envelope-o"></i></a>
            <a target="_blank"       
               href="https://www.youtube.com/MechanicsOfBodybuilding"
               ><i class="fa fa-youtube-play"></i>
            </a>
            <a  target="_blank"
                href="https://www.instagram.com/MechanicsOfBodybuilding"
                ><i class="fa fa-instagram"></i
                ></a>
        </div>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="./index.php?page=home">
                            <img class="logo-img" src="img/logo.png" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="nav-menu">
                        <ul>
                            <li class="<?php echo $page == "home" ? "active" : ""; ?>"><a href="./index.php?page=home">Home</a></li>
                            <li class="<?php echo $page == "about-us" ? "active" : ""; ?>"><a href="./index.php?page=about-us">About Us</a></li>
                            <li class="<?php echo $page == "services" ? "active" : ""; ?>"><a href="./index.php?page=services">Services</a></li>
                            <li class="<?php echo $page == "gallery" ? "active" : ""; ?>"><a href="./index.php?page=gallery">Transformations</a></li>
                            <li class="<?php
                            if ($page == "bmi-calculator" || $page == "tread-calculator" || $page == "bike-calculator" || $page == "stair-calculator") {
                                echo "active";
                            }
                            ?>">
                                <a>Calculator</a>
                                <ul class="dropdown">
                                    <li><a href="./index.php?page=bmi-calculator">BMR and TDEE</a></li>
                                    <li><a href="./index.php?page=tread-calculator">Treadmill</a></li>
                                    <li><a href="./index.php?page=bike-calculator">Bike</a></li>
                                    <li><a href="./index.php?page=stair-calculator">Stairmaster</a></li>
                                </ul>
                            </li>
                            <li class="<?php echo $page == "articles" ? "active" : ""; ?>"><a href="./index.php?page=articles">Articles</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="top-option">
                        <div class="to-social">
                            <a target="_blank" href="https://www.facebook.com/MechanicsOfBodybuilding" ><i class="fa fa-facebook"></i></a>
                            <a href="index.php?page=contact"><i class="fa fa-envelope-o"></i></a>
                            <a target="_blank" href="https://www.youtube.com/MechanicsOfBodybuilding?fbclid=IwAR2Ezg-cxcK7CvY6T0maTCbVSIj9m5abozJXc1fMTY74y0r7FmHAusKZlkA"
                               ><i class="fa fa-youtube-play"></i
                                ></a>
                            <a  target="_blank"
                                href="https://www.instagram.com/MechanicsOfBodybuilding/?fbclid=IwAR0HZxEH7pWyBTueTNTT1m9oq5nn9iISNfVSbVQsP-5tjwo-Ae_nvxRdXxo"
                                ><i class="fa fa-instagram"></i
                                ></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas-open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>