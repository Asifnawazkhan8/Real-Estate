<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sheltos - Login page">
    <meta name="keywords" content="sheltos">
    <meta name="author" content="sheltos">
    <link rel="icon" href="../assets/images/logo/1.png" type="image/x-icon" />
    <title>VIXION CAPITAL - Login page</title>

   <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800,800i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">

    <!-- Template css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/color1.css">

</head>

<body>


    <!-- header start -->
    <header class="header-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="menu">
                        <div style="border: 1px solid rgb(108, 108, 108); border-radius: 20px 15px 13px 12px; width:auto; height:auto;box-shadow: 3px 2px 3px 2px rgb(118, 118, 118); margin-top: 10px;" class="brand-logo">
                            <a href="../main/home.php">
                                <img style="width:150px; height: auto; margin-top: 10px;"  src="../assets/images/logo/1.png" alt="" class="img-fluid for-light">
                            </a>
                        </div>
                        <nav>
                            <div class="main-navbar">
                                <div id="mainnav">
                                    <div class="toggle-nav">
                                        <i class="fa fa-bars sidebar-bar"></i>
                                    </div>
                                    <ul class="nav-menu">
                                        <li class="back-btn">
                                            <div class="mobile-back text-end">
                                                <span style="color:#CFB53B;">Back</span>
                                                <i aria-hidden="true" class="fa fa-angle-right ps-2"></i>
                                            </div>
                                        </li>
                                        <li class="dropdown">
                                            <a href="../main/buy.php" class="nav-link menu-title">Buy</a>
                                            
                                        </li>
                                        <li class="dropdown">
                                            <a href="../main/rent.php" class="nav-link menu-title">Rent</a>
                                            
                                        </li>
                                        <li class="dropdown">
                                            <a href="../main/sell.php" class="nav-link menu-title">Sell</a>
                                           
                                        </li>
                                        <li class="mega-menu">
                                            <a href="../main/off-plan.php" class="nav-link menu-title">
                                                Off-Plan
                                            </a>
                                            </li>
                                        <li class="dropdown">
                                            <a href="../main/vx-blog.php" class="nav-link menu-title">Vx Blog</a>
                                            <ul style="background-color:black; width: auto; " class="nav-submenu menu-content">
                                                <li><a style="color: #CFB53B;" href="../main/news.php">News</a>
                                                </li>
                                                <li><a style="color: #CFB53B;" href="../main/podcast.php">Podcasts</a>
                                                </li>
                                            </ul>
                                        <li class="dropdown">
                                            <a href="../main/Catalog.php" class="nav-link menu-title">Catalogs</a>
                                            
                                        </li>
                                        <li class="dropdown">
                                            <a href="../main/who.php" class="nav-link menu-title">Who We Are</a>
                                            
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </nav>
                        <ul class="header-right">
                            <li>
                                <div style="width: auto;" class="dropdown">
                                    <button style="width: auto;" class="dropbtn"><i data-feather="globe"></i> Language</button>
                                    <div style="background-color: black; width: auto;" class="dropdown-content">
                                    <a style="color: #CFB53B;" href="#">English</a>    
                                    <a style="color: #CFB53B;" href="#">Arabic</a>
                                    <a style="color:#CFB53B;" href="#">Russian</a>
                                    
                                    </div>
                                  </div>
                            </li>
                            
                            <li>
                                <a style="color: #CFB53B;" href="submit-property.html"><i style="color: #CFB53B;" data-feather="filter"></i> Filter</a>
                            </li>
                            <li>
                                <div style="width: auto;" class="dropdown">
                                    <button style="width: auto;" class="dropbtn"><i data-feather="grid"></i></button>
                                    <div style="background-color: black; width: auto;" class="dropdown-content">
                                        <a style="color: #CFB53B;" href="../back-end/index.php">Dashboard</a>   
                                    <a style="color: #CFB53B;" href="../main/signup.php">Sign Up</a>
                                    <a style="color:#CFB53B;" href="../main/login.php">Log In</a>
                                    
                                    </div>
                                  </div>
                                
                            </li>
                            <li style="width: auto;">
                                <a style="color: #CFB53B;" href="../main/contact.php"><i style="color: #CFB53B;" data-feather="phone"></i> Contact Us</a>
                            </li>
                            
                        </ul>
            </div>
                <div style="background: black; width: auto; height:auto;" class="row">
                    
                            <div style=" height:auto; width: auto;" class="col" >
                                <p style="color: #CFB53B; margin-top: 5px; margin-left: 33%;">Find Your Desire Property</p>
                                <input style="background-color: white; width: auto; height: 30px; margin-top: -20px; margin-left: 30%;" type="text" name="Search" placeholder="Search" size="30px"/>
                                <button style="background-color: #a1863d; width: 80px; height: 30px; margin-left: 5px;"><i style="height: 20px; width: auto;" data-feather="search"></i></button>
                            
                            </div>
                           
                </div>                
                                 
        </div>    
    </header>
    <!--  header end -->


    <!-- breadcrumb start -->
    <section class="breadcrumb-section p-0">
        <img src="../assets/images/login.jpg" class="bg-img img-fluid" alt="">
        <div class="container">
            <div class="breadcrumb-content">
                <div>
                    <h2>Log in</h2>
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Log in</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <!-- section start -->
    <section class="login-wrap">
        <div class="container">
            <div class="row log-in">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 col-12">
                    <div class="theme-card">
                    <div class="title-3 text-start">
                        <h2>Log in</h2>
                    </div>
                    <form>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i data-feather="user"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" placeholder="Enter Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i data-feather="lock"></i>
                                    </div>
                                </div>
                                <input type="password" id="pwd-input" class="form-control" placeholder="Password" maxlength="8" required>
                                <div class="input-group-apend">
                                    <div class="input-group-text">
                                        <i id="pwd-icon" class="far fa-eye-slash"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="important-note">
                                password should be a minimum of 8 characters and should contains letters and numbers
                            </div>
                        </div>
                        <div class="d-flex">
                            <label class="d-block mb-0" for="chk-ani">
                                <input class="checkbox_animated color-2" id="chk-ani" type="checkbox"> <span>Remember me</span>
                            </label>
                            <a href="forgot-password.html" class="font-rubik text-color-2">Forgot password ?</a>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-gradient btn-pill color-2 me-sm-3 me-2">Log in</button>
                            <a href="signup.html" class="btn btn-dashed btn-pill color-2">Create Account</a>
                        </div>
                        <div class="divider">
                            <h6>or</h6>
                        </div>
                        <div>
                            <h6>Log in with</h6>
                            <div class="row social-connect">
                                <div class="col-6">
                                    <a href="https://www.facebook.com/" class="btn btn-social btn-flat facebook p-0">
                                        <i class="fab fa-facebook-f"></i>
                                        <span>Facebook</span>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="https://twitter.com/" class="btn btn-social btn-flat twitter p-0">
                                        <i class="fab fa-twitter"></i>
                                        <span>Twitter</span>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="https://account.google.com" class="btn btn-social btn-flat google p-0">
                                        <i class="fab fa-google"></i>
                                        <span>Google</span>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="https://www.linkedin.com/" class="btn btn-social btn-flat linkedin p-0">
                                        <i class="fab fa-linkedin-in"></i>
                                        <span>Linkedin</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->

    <!-- footer start -->
    <footer>
        <div class="footer footer-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3">
                        <div class="footer-details text-center">
                            <a href="../main/home.php">
                                <img style="width: 200px;" src="../assets/images/logo/1.png" alt="">
                            </a>
                            <h6 style="color: #a1863d;">Office Address</h6>
                            <p>17th floor,Office 1707, Opal Tower,
                                Business Bay, Dubai, UAE
                                <br>Toll Free: + 971525700839
                                <br>Email: info@vixioncapital.ae
                            
                                www.vixioncapital.ae
                            </p>
                            <h6>Contact us</h6>
                            <ul class="icon-list">
                                <li><a href="https://goo.gl/maps/7dnZ7xiMwjfEsALSA"><i class="fas fa-map-marker-alt"></i></a></li>
                                <li><a href="../main/contact.php"><i class="fas fa-phone-alt"></i></a></li>
                                <li><a href="../main/contact.php"><i class="fas fa-envelope"></i></a></li>
                                <li><a href="../main/home.php"><i class="fas fa-globe"></i></a></li>
                            
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="row">
                            <div class="col-lg-3 col-md-4">
                                <div class="footer-links footer-left-space">
                                    <h5 class="footer-title ">VX Capital
                                        <span class="according-menu"><i class="fas fa-chevron-down"></i></span>
                                    </h5>
                                    <ul class="footer-content">
                                        <li>
                                            <a href="../main/buy.php">Appartment</a>
                                        </li>
                                        <li>
                                            <a href="../main/buy.php">Penthouse</a>
                                        </li>
                                        <li>
                                            <a href="../main/buy.php">Villas</a>
                                        </li>
                                        <li>
                                            <a href="../main/buy.php">Townhouses</a>
                                        </li>
                                        <li>
                                            <a href="../main/off-plan.php">Off-Plan</a>
                                        </li>
                                        <li>
                                            <a href="https://www.airbnb.ae">Vixion-Holidays</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4">
                                <div class="footer-links">
                                    <h5 class="footer-title">feature
                                        <span class="according-menu"><i class="fas fa-chevron-down"></i></span>
                                    </h5>
                                    <ul class="footer-content">
                                        <li>
                                            <a href="../main/Catalog.php">Catalogs</a>
                                        </li>
                                        <li>
                                            <a href="agency-list.php">Area Guides</a>
                                        </li>
                                        <li>
                                            <a href="agent-grid.php">Vx Design</a>
                                        </li>
                                        <li>
                                            <a href="../main/sell.php">Sell</a>
                                        </li>
                                        <li>
                                            <a href="../main/rent.php">Rent</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4">
                                <div class="footer-links">
                                    <h5 class="footer-title">Social
                                        <span class="according-menu"><i class="fas fa-chevron-down"></i></span>
                                    </h5>
                                    <ul class="footer-content">
                                        <li>
                                            <a href="https://www.facebook.com/">Facebook</a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/">Instagram</a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/">Twitter</a>
                                        </li>
                                        
                                        <li>
                                            <a href="https://accounts.google.com/">Gmail</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                           
                        </div>
                        <div class="bottom-blog">
                            <div class="slick-between">
                                <div class="footer-slider">
                                    <div>
                                        
                                    </div>
                                    <div>
                                        
                                    </div>
                                    <div>
                                        <div class="media">
                                            <a href="blog-detail-left-sidebar.html">
                                                <div class="img-overlay">
                                                        <img src="../assets/images/footer/3.jpg" alt="">
                                                </div>
                                            </a>
                                            <div class="media-body">
                                               <h6><a href="blog-detail-left-sidebar.html">Estate Agents Work</a></h6>
                                                <p class="font-roboto"><a href="blog-detail-right-sidebar.html">The market of buying and selling real estate.</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="media">
                                            <a href="blog-detail-left-sidebar.html">
                                                <div class="img-overlay">
                                                        <img src="../assets/images/footer/4.jpg" alt="">
                                                </div>
                                            </a>
                                            <div class="media-body">
                                                <h6><a href="blog-detail-left-sidebar.html">Increase in Demand</a></h6>
                                                <p class="font-roboto"><a href="blog-detail-right-sidebar.html">The effects of an increase demand in short run.</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-footer footer-light">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="copy-right">
                            <p class="mb-0">Copyright 2023, All Right Reserved Vixion Capital</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 text-end">
                        <ul class="sub-footer-link">
                            <li><a href="layout-2.html">Home</a></li>
                            <li><a href="terms-conditions.html">Terms</a></li>
                            <li><a href="privacy-policy.html">Privacy policy</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
        <div class="elfsight-app-1587aacf-9f90-4824-beec-1a4d6a584bf1"><a href="https://widget-1587aacf9f904824beec1a4d6a584bf1.elfsig.ht"></a></div>
    </footer>
    <!-- footer end -->

    <!-- tap to top start -->
    <div class="tap-top">
        <div>
            <i class="fas fa-arrow-up"></i>
        </div>
    </div>
    <!-- tap to top end -->

    <!-- customizer start -->
    <div class="customizer-wrap">
        <div class="customizer-links">
            <i data-feather="settings"></i>
        </div>
        <div class="customizer-contain custom-scrollbar">
            <div class="setting-back">
                <i data-feather="x"></i>
            </div>
            <div class="layouts-settings">
                <div class="customizer-title">
                    <h6 class="color-2">Layout type</h6>
                </div>
                <div class="option-setting">
                    <span>Light</span>
                    <label class="switch">
                        <input type="checkbox" name="chk1" value="option" class="setting-check"><span class="switch-state"></span>
                    </label>
                    <span>Dark</span>
                </div>
            </div>
            <div class="layouts-settings">
                <div class="customizer-title">
                    <h6 class="color-2">Layout Direction</h6>
                </div>
                <div class="option-setting">
                    <span>LTR</span>
                    <label class="switch">
                        <input type="checkbox" name="chk2" value="option" class="setting-check1"><span class="switch-state"></span>
                    </label>
                    <span>RTL</span>
                </div>
            </div>
            <div class="layouts-settings">
                <div class="customizer-title">
                    <h6 class="color-2">Unlimited Color</h6>
                </div>
                <div class="option-setting unlimited-color-layout">
                    <div class="form-group">
                        <label for="ColorPicker3">color 3</label>
                        <input id="ColorPicker3" type="color" value="#ff5c41" name="Default">
                    </div> 
                    <div class="form-group">
                        <label for="ColorPicker4">color 4</label>
                        <input id="ColorPicker4" type="color" value="#ff8c41" name="Default">
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <!-- customizer end -->

    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.6.0.min.js"></script>

    <!-- popper js-->
    <script src="../assets/js/popper.min.js"></script>

    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <!-- feather icon js-->
    <script src="../assets/js/feather-icon/feather.min.js"></script>
    <script src="../assets/js/feather-icon/feather-icon.js"></script>

    <!-- slick js -->
    <script src="../assets/js/slick.js"></script>
    <script src="../assets/js/slick-animation.min.js"></script>
    <script src="../assets/js/custom-slick.js"></script>

    <!-- login js -->
    <script src="../assets/js/login.js"></script>

    <!-- Template js-->
    <script src="../assets/js/script.js"></script>

    <!-- Customizer js-->
    <script src="../assets/js/customizer.js"></script>

    <!-- wow js-->
    <script src="../assets/js/wow.min.js"></script>

    <!-- Color-picker js-->
    <script src="../assets/js/color/template-color.js"></script>

</body>

</html>