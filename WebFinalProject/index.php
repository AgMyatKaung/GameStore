<?php
require 'config/database.php';

// check login status
if(!isset($_SESSION['user-id'])){
    header('location: ' . ROOT_URL . 'logIn.php');
    die();
} 

//fetch current user from database
if(isset($_SESSION['user-id'])){
    $id = filter_var($_SESSION['user-id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT username FROM users WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $username = mysqli_fetch_assoc($result);
}

// fetch games from database to download
$query1 = "SELECT gamename FROM freedownload WHERE id='1' ";
$run1 = mysqli_query($connection,$query1);
$row1 = mysqli_fetch_assoc($run1);

$query2 = "SELECT gamename FROM freedownload WHERE id='3' ";
$run2 = mysqli_query($connection,$query2);
$row2 = mysqli_fetch_assoc($run2);

$query3 = "SELECT gamename FROM freedownload WHERE id='4' ";
$run3 = mysqli_query($connection,$query3);
$row3 = mysqli_fetch_assoc($run3);



?>





<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>SteamClone PHP & MySQL</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout" id="home" class="home">
    
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header-top">
            <div class="header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                            <div class="full">
                                <div class="center-desk">
                                    <div class="logo">
                                        <a href="index.php">Game Store<img src="images/logo1.png" alt="#" width="50" height="50"  /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                                    <?php if (isset($_SESSION['user-id'])) : ?>
                                        <ul class="top_icon">
                                            <!--<li class="button_login"> <a href="logIn.php">Login</a> </li>
                                            <li> <a href="SignUp.php">Signup</a> </li> -->
                                            <li class="button_login"><a href="#">Howdy! <?= $username['username'] ?></a></li>
                                            <li><a href="logout.php">Logout</a></li>
                                            <li class="mean-last">
                                             <a href="#"><img src="images/search_icon.png" alt="#" /></a>
                                            </li>
                                        </ul>
                                    <?php else : ?>
                                        <ul class="top_icon">
                                            <li class="button_login"> <a href="logIn.php">Login</a> </li>
                                            <li> <a href="SignUp.php">Signup</a> </li>
                                            <!--<li class="button_login"><a href="#">Account</a></li>
                                            <li><a href="#">Logout</a></li>-->
                                            <li class="mean-last">
                                             <a href="#"><img src="images/search_icon.png" alt="#" /></a>
                                            </li>
                                        </ul>
                                    <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end header inner -->

            <!-- end header -->
            <section class="slider_section">
                <div class="banner_main">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2 padding_left0">
                                <div class="menu-area">
                                <div class="limit-box">
                                    <nav class="main-menu">
                                        <ul class="menu-area-main">
                                            <li class="active"> <a href="#game">Game</a> </li>
                                            <li> <a href="store.php">Store</a> </li>
                                            <li> <a href="#about">About</a> </li>
                                            <li> <a href="emailer/ ">Contact</a> </li>                                         
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 ">
                                <div class="text-bg">
                                    <h1>amazing<br> 3d game</h1>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br> tempor incididunt ut</span>
                                    <a href="store.php">Show More</a>
                                </div>
                            </div>
                             <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ">
                                <div class="text-img">
                                   <figure><img src="images/img.png" alt="#"/></figure>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
        
           </section>
        </div>
    </header>

    <!-- our -->
    <div id="games" class="our">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Our Games</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 margin_bottom">
                    <div class="row">

                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <div class="two-box">
                                <figure><img src="images/our-image1.jpg" alt="#" /></figure>
                            </div>
                        </div>

                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">

                            <div class="Games">
                                <h3>Angry Birds</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et </p>
                                <a href="download-logic.php?file=<?php echo $row1['gamename'] ?>">Free Download</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 margin_bottom">
                    <div class="row">

                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <div class="two-box">
                                <figure><img src="images/our-image2.jpg" alt="#" /></figure>
                            </div>
                        </div>

                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">

                            <div class="Games">
                                <h3>Sanke</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et </p>
                                <a href="download-logic.php?file=<?php echo $row2['gamename'] ?>">Free Download</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">

                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <div class="two-box">
                                <figure><img src="images/our-image3.jpg" alt="#" /></figure>
                            </div>
                        </div>

                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">

                            <div class="Games">
                                <h3>Cricket</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et </p>
                                <a href="download-logic.php?file=<?php echo $row3['gamename'] ?>">Free Download</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <!-- end our -->
    <br><br><br><br>
<hr>
    <!-- latest game -->
    <div id="software" class="We_are">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage" align="center">
                        <h1><b>Latest Game</b></h1><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                     <div class="box_bg">
                         <div class="box_bg_img">
                             <figure><img src="images/feature-right.jpg"></figure>
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 border_right">
                     <div class="box_text">
                         <p>Fortnite is an online video game developed by Epic Games and released in 2017. 
                            It is available in three distinct game mode versions that otherwise share the same general gameplay and game engine: Fortnite</p>
                        <p>Genres: Battle royale game, Online game, Third-person shooter</p>
                        <p>Developer: Epic Games</p>
                        <p>Publisher: Epic Games</p>
                        <p>Release Date: 2017-07-01</p>
                        <a href="store.php">Show more</a>
                     </div>
                 </div> 
            </div>
        </div>
    </div>
    <!-- end We are -->
    <br><br><br><br>
<hr>
    <!-- about  -->
    <div id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage" align="center">
                        <h1><b>About Our Shop</b></h1><br>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="about-box">
                        <figure><img src="images/aboutgame.jpg" alt="#" width="100" height="450"/></figure>

                        <p>Welcome to our game shop! We are a retail store that offers a wide range of games, including video games, for Play Station and PC games
                            <br> Are you a gamer looking for your next favorite game? Look no further than our game shop! </p>
                            <a href="about.php"><button>Read More</button></a>
                        </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end abouts -->

 
    <!--  footer -->
    <footr>
        <div class="footer ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Newsletter</h2>
                    </div>
                    <div class="col-md-10 offset-md-1">
                        <form class="news">
                            <input class="newslatter" placeholder="Enter Your Email" type="text" name="Enter Your Email">
                            <button class="submit">Subscribe</button>
                        </form>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 ">
                                <div class="address">
                                    <ul class="social_link">
                                        <li><a href="#"><img src="icon/fb.png"></a></li>
                                        <li><a href="#"><img src="icon/tw.png"></a></li>
                                        <li><a href="#"><img src="icon/lin(2).png"></a></li>
                                         <li><a href="#"><img src="icon/instagram.png"></a></li>
                                    </ul>
                                    <a href="index.php"> <img src="images/logo.png" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="address">
                                    <h3>Quick links</h3>
                                    <ul class="Menu_footer">
                                        <li class="active"> <img src="images/3.png" alt="#"> <a href="#game">Game</a> </li>
                                        <li><img src="images/3.png" alt="#"> <a href="#software">Software</a> </li>
                                        <li><img src="images/3.png" alt="#"> <a href="#about">About</a> </li>
                                        <li><img src="images/3.png" alt="#"> <a href="#testimonial"> Testimonial</a> </li>
                                        <li><img src="images/3.png" alt="#"> <a href="#contact">Contact</a> </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="address">
                                    <h3>downloded</h3>
                                    <ul class="Links_footer">
                                        <li class="active"><img src="images/3.png" alt="#"> <a href="#">Lorem Ipsum </a> </li>
                                        <li><img src="images/3.png" alt="#"> <a href="#">Simply random</a> </li>
                                        <li><img src="images/3.png" alt="#"> <a href="#">Roots in a</a> </li>
                                        <li><img src="images/3.png" alt="#"> <a href="#"> Piece</a> </li>
                                        <li><img src="images/3.png" alt="#"> <a href="#">Classical</a> </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6 ">
                                <div class="address">
                                    <h3>Contact us </h3>
                                    <ul class="loca">
                                        <li>
                                            <a href="#"><img src="icon/loc.png" alt="#" /></a>London 145
                                            <br>United Kingdom </li>
                                        <li>
                                            <a href="#"><img src="icon/email.png" alt="#" /></a>demo@gmail.com </li>
                                        <li>
                                            <a href="#"><img src="icon/call.png" alt="#" /></a>+12586954775 </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="copyright">
                <div class="container">
                    <p>PHP final project. Group - 1 . <a href="#home"> Power by AMK & Allen </a></p>
                </div>
            </div>
        </div>
    </footr>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

</body>

</html>