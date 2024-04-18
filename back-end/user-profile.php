<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sheltos - User profile page">
    <meta name="keywords" content="sheltos">
    <meta name="author" content="sheltos">
    <link rel="icon" href="../assets/images/logo/1.png" type="image/x-icon" />
    <title>Vixion capital - User profile page</title>

   <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800,800i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">

    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/animate.css">

    <!-- Template css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/admin.css">

</head>

<body>

    <!-- Loader start -->
    <!-- <div class="loader-wrapper">
        <div class="row loader-img">
            <div class="col-12">
                <img src="../assets/images/loader/loader-2.gif" class="img-fluid" alt="">
            </div>
        </div>
    </div> -->
    <!-- Loader end -->
    
    <div class="page-wrapper">

        <!-- page header start -->
        <div class="page-main-header row">
            <div id="sidebar-toggle" class="toggle-sidebar col-auto">
                <i data-feather="chevrons-left"></i>
            </div>
            
            <div class="nav-right col p-0">
                <ul class="header-menu">
                    <li>
                        <div class="d-md-none mobile-search">
                            <i data-feather="search"></i>
                        </div>
                        <div class="form-group search-form">
                            <input type="text" class="form-control" placeholder="Search here...">
                        </div>
                    </li>
                    <li>
                        <a href="#!" onclick="javascript:toggleFullScreen()">
                            <i data-feather="maximize"></i>
                        </a>
                    </li>
                    <li class="onhover-dropdown">
                        <a href="javascript:void(0)">
                            <i data-feather="save"></i>
                        </a>
                        <div class="notification-dropdown onhover-show-div">
                            <div class="dropdown-title">
                                <h6>Recent Attachments</h6>
                                <a href="reports.html">Show all</a>
                            </div>
                            <ul>
                                <li>
                                    <div class="media">
                                        <div class="icon-notification bg-success-light">
                                            <i class="fas fa-file-word"></i>
                                        </div>
                                        <div class="media-body">
                                            <a href="reports.html">
                                                <h6>Doc_file.doc</h6>
                                            </a>
                                            <span>800MB</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="icon-notification bg-primary-light">
                                            <i class="fas fa-file-image"></i>
                                        </div>
                                        <div class="media-body">
                                            <a href="reports.html">
                                                <h6>Apartment.jpg</h6>
                                            </a>
                                            <span>500kb</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="icon-notification bg-warning-light">
                                            <i class="fas fa-file-pdf"></i>
                                        </div>
                                        <div class="media-body">
                                            <a href="reports.html">
                                                <h6>villa_report.pdf</h6>
                                            </a>
                                            <span>26MB</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="onhover-dropdown notification-box">
                        <a href="javascript:void(0)">
                            <i data-feather="bell"></i>
                            <span class="label label-shadow label-pill notification-badge">3</span>
                        </a>
                        <div class="notification-dropdown onhover-show-div">
                            <div class="dropdown-title">
                                <h6>Notifications</h6>
                                <a href="favourites.html">Show all</a>
                            </div>
                            <ul>
                                <li>
                                    <div class="media">
                                        <div class="icon-notification bg-primary-light">
                                            <i class="fab fa-xbox"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6>Item damaged</h6>
                                            <span>8 hours ago, Tadawis 24</span>
                                            <p class="mb-0">"the table is broken:("</p>
                                            <ul class="user-group">
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img src="../assets/images/about/4.jpg" class="img-fluid" alt="">
                                                    </a>
                                                </li>
                                                <li class="reply">
                                                    <a href="javascript:void(0)">
                                                        Reply
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="icon-notification bg-success-light">
                                            <i class="fas fa-file-invoice-dollar"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6>Payment received</h6>
                                            <span>2 hours ago, Bracka 15</span>
                                            <ul class="user-group">
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img src="../assets/images/about/1.jpg" class="img-fluid" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img src="../assets/images/about/2.jpg" class="img-fluid" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img src="../assets/images/about/3.jpg" class="img-fluid" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="icon-notification bg-warning-light">
                                            <i class="fas fa-comment-dots"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6>New inquiry</h6>
                                            <span>1 Days ago, Krowada 7</span>
                                            <p class="mb-0">"is the villa still available?"</p>
                                            <ul class="user-group">
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img src="../assets/images/about/2.jpg" class="img-fluid" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img src="../assets/images/about/3.jpg" class="img-fluid" alt="">
                                                    </a>
                                                </li>
                                                <li class="reply">
                                                    <a href="javascript:void(0)">
                                                        Reply
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="onhover-dropdown">
                        <a href="javascript:void(0)">
                            <i data-feather="mail"></i>
                        </a>
                        <div class="notification-dropdown chat-dropdown onhover-show-div">
                            <div class="dropdown-title">
                                <h6>Messages</h6>
                                <a href="user-profile.html">View all</a>
                            </div>
                            <ul>
                                <li>
                                    <div class="media">
                                        <div class="chat-user">
                                            <img src="../assets/images/avatar/1.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="media-body">
                                            <a href="user-profile.html">
                                                <h6>Bob Frapples</h6>
                                            </a>
                                            <span>Template Represents simply...</span>
                                        </div>
                                        <div class="status online">online</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="chat-user">
                                            <img src="../assets/images/avatar/3.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="media-body">
                                            <a href="user-profile.html">
                                                <h6>Greta Life</h6>
                                            </a>
                                            <span>Template Represents simply...</span>
                                        </div>
                                        <div class="status away">Away</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="chat-user">
                                            <img src="../assets/images/avatar/4.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="media-body">
                                            <a href="user-profile.html">
                                                <h6>Greta Life</h6>
                                            </a>
                                            <span>Template Represents simply...</span>
                                        </div>
                                        <div class="status online">online</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="chat-user">
                                            <img src="../assets/images/avatar/7.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="media-body">
                                            <a href="user-profile.html">
                                                <h6>Greta Life</h6>
                                            </a>
                                            <span>Template Represents simply...</span>
                                        </div>
                                        <div class="status busy">Busy</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="profile-avatar onhover-dropdown">
                        <div>
                            <img src="../assets/images/avatar/3.jpg" class="img-fluid" alt="">
                        </div>
                        <ul class="profile-dropdown onhover-show-div">
                            <li><a href="user-profile.html"><span>Account </span><i data-feather="user"></i></a></li>
                            <li><a href="listing.html"><span>Listing</span><i data-feather="file-text"></i></a></li>
                            <li><a href="login.html"><span>Log in</span><i data-feather="log-in"></i></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <!-- page header end -->
        <div class="page-body-wrapper">

            <!-- page sidebar start -->
            <div class="page-sidebar">
                <div class="logo-wrap">
                    <a href="index.html">
                        <img src="../assets/images/logo/1.png" class="img-fluid for-light" alt="">
                        <img src="../assets/images/logo/1.png" class="img-fluid for-dark" alt="">
                    </a>
                    <div class="back-btn d-lg-none d-inline-block">
                        <i data-feather="chevrons-left"></i>
                    </div>
                </div>
                <div class="main-sidebar">
                    <div class="user-profile">
                        <div class="media">
                            <div class="change-pic">
                                <img src="../assets/images/logo/1.png" class="img-fluid" alt="">
                            </div>
                            <div class="media-body">
                                <a href="user-profile.html"><h6>VIXION CAPITAL</h6></a>
                                <span class="font-roboto">Admin@vixioncapital.ae</span>
                            </div>
                        </div>
                    </div>
                    <div id="mainsidebar">
                        <ul class="sidebar-menu custom-scrollbar">
                            <li class="sidebar-item">
                                <a href="index.html" class="sidebar-link only-link">
                                    <i data-feather="airplay"></i> 
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="javascript:void(0)" class="sidebar-link">
                                    <i data-feather="grid"></i> 
                                    <span>My properties</span>
                                </a>
                                <ul class="nav-submenu menu-content">
                                    <li>
                                        <a href="add-property.html">
                                            <i data-feather="chevrons-right"></i>
                                            add property
                                        </a>
                                    </li>
                                    <li>
                                        <a href="edit-property.html">
                                            <i data-feather="chevrons-right"></i>
                                            edit property
                                        </a>
                                    </li>
                                    <li>
                                        <a href="listing.html">
                                            <i data-feather="chevrons-right"></i>
                                            property list
                                        </a>
                                    </li>
                                    <li>
                                        <a href="favourites.html">
                                            <i data-feather="chevrons-right"></i>
                                            Favourites
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a href="javascript:void(0)" class="sidebar-link">
                                    <i data-feather="users"></i>
                                    <span>Manage users</span>
                                </a>
                                <ul class="nav-submenu menu-content">
                                    <li>
                                        <a href="user-profile.html">
                                            <i data-feather="chevrons-right"></i>
                                            Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="add-user.html">
                                            <i data-feather="chevrons-right"></i>
                                            Add user
                                        </a>
                                    </li>
                                    <li>
                                        <a href="add-user-wizard.html">
                                            <i data-feather="chevrons-right"></i>
                                            Add user wizard <span class="label label-shadow ms-1">new</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="edit-user.html">
                                            <i data-feather="chevrons-right"></i>
                                            Edit user
                                        </a>
                                    </li>
                                    <li>
                                        <a href="all-users.html">
                                            <i data-feather="chevrons-right"></i>
                                            All users
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a href="javascript:void(0)" class="sidebar-link">
                                    <i data-feather="user-plus"></i>
                                    <span>Agents</span>
                                </a>
                                <ul class="nav-submenu menu-content">
                                    <li>
                                        <a href="agent-profile.html">
                                            <i data-feather="chevrons-right"></i>
                                            Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="add-agent.html">
                                            <i data-feather="chevrons-right"></i>
                                            Add agent
                                        </a>
                                    </li>
                                    <li>
                                        <a href="add-agent-wizard.html">
                                            <i data-feather="chevrons-right"></i>
                                            Add agent wizard <span class="label label-shadow ms-1">new</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="edit-agent.html">
                                            <i data-feather="chevrons-right"></i>
                                            Edit agent
                                        </a>
                                    </li>
                                    <li>
                                        <a href="all-agents.html">
                                            <i data-feather="chevrons-right"></i>
                                            All agents
                                        </a>
                                    </li>
                                    <li>
                                        <a href="agent-invoice.html">
                                            <i data-feather="chevrons-right"></i>
                                            Invoice
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a href="map.html" class="sidebar-link only-link">
                                    <i data-feather="map-pin"></i>
                                    <span>Map</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="javascript:void(0)" class="sidebar-link">
                                    <i data-feather="layout"></i>
                                    <span>Types</span>
                                </a>
                                <ul class="nav-submenu menu-content">
                                    <li>
                                        <a href="family-house.html">
                                            <i data-feather="chevrons-right"></i>
                                            Family House
                                        </a>
                                    </li>
                                    <li>
                                        <a href="cottage.html">
                                            <i data-feather="chevrons-right"></i>
                                            Cottage
                                        </a>
                                    </li>
                                    <li>
                                        <a href="apartment.html">
                                            <i data-feather="chevrons-right"></i>
                                            Apartment
                                        </a>
                                    </li>
                                    <li>
                                        <a href="condominium.html">
                                            <i data-feather="chevrons-right"></i>
                                            Condominium
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a href="reports.html" class="sidebar-link only-link">
                                    <i data-feather="bar-chart-2"></i>
                                    <span>Reports</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="payments.html" class="sidebar-link only-link">
                                    <i data-feather="credit-card"></i>
                                    <span>Payments</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="javascript:void(0)" class="sidebar-link">
                                    <i data-feather="unlock"></i>
                                    <span>Authentication</span>
                                </a>
                                <ul class="nav-submenu menu-content">
                                    <li>
                                        <a href="login.html">
                                            <i data-feather="chevrons-right"></i>
                                            Log in
                                        </a>
                                    </li>
                                    <li>
                                        <a href="signup.html">
                                            <i data-feather="chevrons-right"></i>
                                            sign up
                                        </a>
                                    </li>
                                    <li>
                                        <a href="404.html">
                                            <i data-feather="chevrons-right"></i>
                                            404
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="upgrade-box">
                                    <img src="../assets/images/svg/1.svg" class="img-fluid" alt="">
                                    <h6>Need Help</h6>
                                    <a href="https://pixelstrap.freshdesk.com/support/home" target="_blank" class="p-0 m-0">
                                        <span class="d-block">Raise ticket at "support@pixelstrap.com"</a>
                                    </a>
                                    <button type="button" onclick=" window.open('https://themeforest.net/user/pixelstrap/portfolio', '_blank');" class="btn btn-pill btn-gradient color-4 btn-sm mt-2 fw-bold">Buy Now</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- page sidebar end -->

            <div class="page-body">

                <!-- Container-fluid start -->
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="page-header-left">
                                    <h3>User profile
                                        <small>Welcome to admin panel</small>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-sm-6">

                                <!-- Breadcrumb start -->
                                <ol class="breadcrumb pull-right">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">
                                            <i class="fa fa-home"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active">Manage users</li>
                                </ol>
                                <!-- Breadcrumb end -->
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid end -->

                <!-- Container-fluid start -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row user-info">
                                <div class="col-xl-5 xl-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="media contact-media">
                                                <img src="../assets/images/avatar/7.jpg" class="img-fluid img-80" alt="">
                                                <div class="media-body">
                                                    <h4>Good Evening , $User</h4>
                                                    <span class="light-font">My current address <a href="javascript:void(0)">Bussiness bay, Dubai, United Arab Emirates</a></span>
                                                    <ul class="agent-social mt-2">
                                                        <li><a href="https://www.facebook.com/" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="https://twitter.com/" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="https://account.google.com" class="google"><i class="fab fa-google"></i></a></li>
                                                        <li><a href="https://www.linkedin.com/" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                       
                                            <div class="contact-btn">
                                            <button type="button" onclick="document.location='all-users.html'" class="btn btn-gradient color-4 btn-pill">Email</button>
                                            <button type="button" onclick="document.location='add-user.html'" class="btn btn-dashed color-4 ms-2 btn-pill">Message</button>
                                            </div>
                                        </div>
                                     </div>
                                </div>
                                <div class="col-xl-4 xl-6">
                                    <div class="card">
                                        <div class="card-body">
                                           <div class="partner-info">
                                               <div class="title-about">
                                                   <h5>Project meetings</h5>
                                               </div>
                                               <div class="time-details">
                                                   <div>
                                                        <ul>
                                                            <li>
                                                                <img src="../assets/images/avatar/6.jpg" class="img-fluid" alt="">
                                                            </li>
                                                            <li>
                                                                <img src="../assets/images/avatar/5.jpg" class="img-fluid" alt="">
                                                            </li>
                                                            <li>
                                                                <img src="../assets/images/avatar/9.jpg" class="img-fluid" alt="">
                                                            </li>
                                                            <li>
                                                                <img src="../assets/images/avatar/7.jpg" class="img-fluid" alt="">
                                                            </li>
                                                            <li>
                                                                <img src="../assets/images/avatar/9.jpg" class="img-fluid" alt="">
                                                            </li>
                                                            
                                                        </ul>
                                                        <a href="all-users.html" class="arrow-animated">
                                                            Join now
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                                        </a>
                                                   </div>
                                                   <div>
                                                        <h6>4:00 - 5:00 PM</h6>
                                                        <span class="label label-light color-4">10 mins left</span>
                                                   </div>
                                               </div>
                                           </div>
                                        </div>
                                   </div>
                                </div>
                                <div class="col-xl-3 xl-6">
                                     <div class="card timeline-card">
                                         <div class="card-body">
                                            <div class="partner-info">
                                                <div class="title-about">
                                                    <h5>Monthly installment</h5>
                                                </div>
                                                <div class="timeline-pay">
                                                    <ul>
                                                        <li class="pay">
                                                            <div>
                                                                <i class="fas fa-check-circle"></i>
                                                                <span>Oct 18</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div>
                                                                <i class="fas fa-check-circle"></i>
                                                                <span>Sep 25</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div>
                                                                <i class="fas fa-check-circle"></i>
                                                                <span>Aug 10</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="timeline-right">
                                                        <h5 class="mb-0">$4.500</h5>
                                                        <a href="agent-invoice.html">
                                                            View Details
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 xl-6 col-lg-12 col-md-5">
                                    <div class="about-profile row">
                                        <div class="about-info col-xl-12 xl-12 col-lg-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="title-about">
                                                        <h5>About</h5>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <table class="table table-bordernone mb-0">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="pt-0">Email:</td>
                                                                    <td class="light-font pt-0">brockle@gmail.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Mobile Number:</td>
                                                                    <td class="light-font">+ 61 1545812570</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Gender:</td>
                                                                    <td class="light-font">Male</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pb-0">DOB:</td>
                                                                    <td class="light-font pb-0">Dec, 10 1990</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="about-info xl-none col-xl-12 xl-6 col-lg-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="title-about">
                                                        <h5>Friends</h5>
                                                    </div>
                                                    <div class="friend-list">
                                                        <ul class="row">
                                                            <li class="col-md-4 col-sm-3 col-4">
                                                                <img src="../assets/images/avatar/9.jpg" class="img-fluid img-50" alt="">
                                                                <h6>Bob</h6>
                                                                <a href="add-user.html" class="label label-light label-flat color-4">Message</a>
                                                            </li>
                                                            <li class="col-md-4 col-sm-3 col-4">
                                                                <img src="../assets/images/avatar/8.jpg" class="img-fluid img-50" alt="">
                                                                <h6>Greta</h6>
                                                                <a href="add-user.html" class="label label-light label-flat color-4">Message</a>
                                                            </li>
                                                            <li class="col-md-4 col-sm-3 col-4">
                                                                <img src="../assets/images/avatar/5.jpg" class="img-fluid img-50" alt="">
                                                                <h6>Zack</h6>
                                                                <a href="add-user.html" class="label label-light label-flat color-4">Message</a>
                                                            </li>
                                                            <li class="col-md-4 col-sm-3 col-4">
                                                                <img src="../assets/images/avatar/6.jpg" class="img-fluid img-50" alt="">
                                                                <h6>Paige</h6>
                                                                <a href="add-user.html" class="label label-light label-flat color-4">Message</a>
                                                            </li>
                                                            <li class="col-md-4 col-sm-3 col-4">
                                                                <img src="../assets/images/avatar/7.jpg" class="img-fluid img-50" alt="">
                                                                <h6>Mary</h6>
                                                                <a href="add-user.html" class="label label-light label-flat color-4">Message</a>
                                                            </li>
                                                            <li class="col-md-4 col-sm-3 col-4">
                                                                <img src="../assets/images/avatar/1.png" class="img-fluid img-50" alt="">
                                                                <h6>Vella</h6>
                                                                <a href="add-user.html" class="label label-light label-flat color-4">Message</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 xl-6 col-lg-12 col-md-7">
                                    <div class="recent-properties">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="title-about">
                                                    <h5>Recent properties</h5>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table table-bordernone mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>Property</th>
                                                                <th>Rate</th>
                                                                <th>Deposit</th>
                                                                <th>Start date</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="media">
                                                                        <img src="../assets/images/property/4.jpg" class="img-fluid img-80" alt="">
                                                                        <div class="media-body">
                                                                            <h6>Orchard House</h6>
                                                                            <span class="light-font">Brazil</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h6>$5800</h6>
                                                                    <span class="light-font">monthly rent</span>
                                                                </td>
                                                                <td>
                                                                    <h6>$400</h6>
                                                                    <span class="light-font">deposit</span>
                                                                </td>
                                                                <td>
                                                                    <h6>Jan, 18 2022</h6>
                                                                    <span class="light-font">start date</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="media">
                                                                        <img src="../assets/images/property/2.jpg" class="img-fluid img-80" alt="">
                                                                        <div class="media-body">
                                                                            <h6>Neverland</h6>
                                                                            <span class="light-font">France</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h6>$8700</h6>
                                                                    <span class="light-font">monthly rent</span>
                                                                </td>
                                                                <td>
                                                                    <h6>$850</h6>
                                                                    <span class="light-font">deposit</span>
                                                                </td>
                                                                <td>
                                                                    <h6>Mar, 25 2022</h6>
                                                                    <span class="light-font">start date</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="pb-0">
                                                                    <div class="media">
                                                                        <img src="../assets/images/property/3.jpg" class="img-fluid img-80" alt="">
                                                                        <div class="media-body">
                                                                            <h6>Sea Breezes</h6>
                                                                            <span class="light-font">USA</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="pb-0">
                                                                    <h6>$5880</h6>
                                                                    <span class="light-font">monthly rent</span>
                                                                </td>
                                                                <td class="pb-0">
                                                                    <h6>$380</h6>
                                                                    <span class="light-font">deposit</span>
                                                                </td>
                                                                <td class="pb-0">
                                                                    <h6>Jun, 05 2022</h6>
                                                                    <span class="light-font">start date</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="earning-chart card">
                                        <div class="card-body">
                                            <div class="title-about">
                                                <h5>Recent earnings</h5>
                                            </div>
                                            <div class="earnings"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 xl-6 col-md-12">
                                    <div class="row">
                                        <div class="buyer-chart col-xl-12 col-md-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="title-about">
                                                        <h5>Total users</h5>
                                                    </div>
                                                    <div class="total-container">
                                                        <div id="userchart"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="follow-list col-xl-12 col-md-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="title-about">
                                                        <h5>Following</h5>
                                                    </div>
                                                    <ul>
                                                        <li>
                                                            <div class="media">
                                                                <img src="../assets/images/avatar/2.jpg" class="img-fluid img-50" alt="">
                                                                <div class="media-body">
                                                                    <h6>Bob Frapples</h6>
                                                                    <span class="light-font">bobf@gmail.com</span>
                                                                </div>
                                                                <div class="status online">Online</div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="media">
                                                                <img src="../assets/images/avatar/3.jpg" class="img-fluid img-50" alt="">
                                                                <div class="media-body">
                                                                    <h6>Greta Life</h6>
                                                                    <span class="light-font">gretali@gmail.com</span>
                                                                </div>
                                                                <div class="status busy">Busy</div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="media">
                                                                <img src="../assets/images/avatar/4.jpg" class="img-fluid img-50" alt="">
                                                                <div class="media-body">
                                                                    <h6>Zack Lee</h6>
                                                                    <span class="light-font">zack@gmail.com</span>
                                                                </div>
                                                                <div class="status away">Away</div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="media">
                                                                <img src="../assets/images/avatar/5.jpg" class="img-fluid img-50" alt="">
                                                                <div class="media-body">
                                                                    <h6>Zack Lee</h6>
                                                                    <span class="light-font">zack@gmail.com</span>
                                                                </div>
                                                                <div class="status busy">Busy</div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid end -->
            </div>

            <!-- footer start -->
            <footer class="footer">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-6 footer-copyright">
                      <p class="mb-0">Copyright 2022 © Sheltos All rights reserved.</p>
                    </div>
                    <div class="col-md-6">
                      <p class="float-end mb-0">Developed with  <i class="fa fa-heart font-danger"></i></p>
                    </div>
                  </div>
                </div>
              </footer>
            <!-- footer end -->
        </div>
    </div>

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
                    <h6 class="color-4">Layout type</h6>
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
                    <h6 class="color-4">Layout Direction</h6>
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
                    <h6 class="color-4">Unlimited Color</h6>
                </div>
                <div class="option-setting unlimited-color-layout">
                    <div class="form-group">
                        <label for="ColorPicker6">color 6</label>
                        <input id="ColorPicker6" type="color" value="#f35d43" name="Default">
                    </div>
                    <div class="form-group">
                        <label for="ColorPicker7">color 7</label>
                        <input id="ColorPicker7" type="color" value="#f34451" name="Default"> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- customizer end -->

    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <!-- feather icon js-->
    <script src="../assets/js/feather-icon/feather.min.js"></script>
    <script src="../assets/js/feather-icon/feather-icon.js"></script>

    <!-- slick js -->
    <script src="../assets/js/slick.js"></script>

    <!-- chartist chart js-->
    <script src="../assets/js/chart/chartist/chartist.js"></script>
    <script src="../assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>

    <!-- apex chart js-->
    <script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="../assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="../assets/js/user-profile.js"></script>

    <!-- sidebar js -->
    <script src="../assets/js/sidebar.js"></script>

    <!--admin js -->
    <script src="../assets/js/admin-script.js"></script>

    <!-- Customizer js-->
    <script src="../assets/js/customizer.js"></script>

    <!-- Color-picker js-->
    <script src="../assets/js/color/custom-colorpicker.js"></script>

</body>

</html>