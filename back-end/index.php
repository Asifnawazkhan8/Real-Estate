<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sheltos - Admin dashboard page">
    <meta name="keywords" content="sheltos">
    <meta name="author" content="sheltos">
    <link rel="icon" href="../assets/images/logo/" type="image/x-icon" />
    <title>VIXION CAPITAL - Admin dashboard page</title>

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
                                            <p class="mb-0">"the table is broken:"</p>
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
                                <a href="user-profile.php">View all</a>
                            </div>
                            <ul>
                                <li>
                                    <div class="media">
                                        <div class="chat-user">
                                            <img src="../assets/images/avatar/1.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="media-body">
                                            <a href="user-profile.php">
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
                                            <a href="user-profile.php">
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
                                            <a href="user-profile.php">
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
                                            <a href="user-profile.php">
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
                            <li><a href="user-profile.php"><span>Account </span><i data-feather="user"></i></a></li>
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
                    <a href="index.php">
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
                                <a href="user-profile.php"><h6>Vixion Capital</h6></a>
                                <span class="font-roboto">Admin@vixioncapital.ae</span>
                            </div>
                        </div>
                    </div>
                    <div id="mainsidebar">
                        <ul class="sidebar-menu custom-scrollbar">
                            <li class="sidebar-item">
                                <a href="index.php" class="sidebar-link only-link">
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
                                        <a href="user-profile.php">
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
                                    <h3>Dashboard
                                        <small>Welcome to admin panel</small>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-sm-6">

                                <!-- Breadcrumb start -->
                                <ol class="breadcrumb pull-right">
                                    <li class="breadcrumb-item">
                                        <a href="index.php">
                                            <i class="fa fa-home"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active">Dashboard</li>
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
                        <div class="col-xl-4 large-12">
                            <div class="row">
                                <div class="large-6 col-lg-12 col-md-6">
                                    <div class="card all-properties">
                                        <div class="card-body">
                                            <div class="media">
                                                <img src="../assets/images/svg/icon/1.svg" class="img-fluid" alt="">
                                                <div class="media-body">
                                                    <h4 class="mb-0">0</h4>
                                                    <h6 class="light-font">Properties</h6>
                                                </div>
                                                <a href="listing.html" class="arrow-animated">
                                                    See all properties
                                                    <i data-feather="chevron-right"></i>
                                                </a>
                                            </div>
                                            <ul class="light-box">
                                                <li>
                                                    <img src="../assets/images/svg/icon/sold.png" class="img-fluid" alt="">
                                                    <div>
                                                        <h5>0</h5>  
                                                        <span class="light-font">Sale</span>                                                                                                          
                                                    </div>
                                                </li>
                                                <li>     
                                                    <img src="../assets/images/svg/icon/rent.png" class="img-fluid" alt="">
                                                    <div>                                               
                                                        <h5>0</h5>
                                                        <span class="light-font">Rented</span>                                                       
                                                    </div>
                                                </li>
                                                <li>      
                                                    <img src="../assets/images/svg/icon/unlisted.png" class="img-fluid" alt="">
                                                    <div>                                                   
                                                        <h5>0</h5>
                                                        <span class="light-font">Unlisted</span>
                                                        
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="large-6 col-lg-12 col-md-6">
                                    <div class="card invoice-card">
                                        <div class="card-header pb-0">
                                           <div>
                                                <h5>Last Month</h5>
                                           </div>
                                        </div>
                                        <div class="card-body calculations">
                                            <ul>
                                                <li>
                                                    <h5 class="font-success">$0</h5>
                                                    <h6 class="light-font mb-0">Paid invoices</h6>
                                                </li>
                                                <li>
                                                    <h5 class="font-danger">$0</h5>
                                                    <h6 class="light-font mb-0">Open invoices</h6>
                                                </li>
                                            </ul>
                                            <div class="d-flex">
                                                <a href="agent-invoice.html" class="label label-light color-4">
                                                    <i class="fas fa-hand-holding-usd me-1"></i>
                                                     Payments Receive</a>
                                                <a href="agent-invoice.html" class="arrow-animated">
                                                    View all
                                                    <i data-feather="chevron-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 large-12">
                            <div class="card sales-details">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="sales-status">
                                                <h5 class="light-font">Sales summary</h5>
                                                <div class="status-price">
                                                    <h3>
                                                        $0/-
                                                    </h3>
                                                    <span>
                                                        last week
                                                        <span class="font-success">
                                                            0%
                                                            <i data-feather="trending-up"></i>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="chart-legends">
                                                <ul>
                                                    <li>
                                                        <div class="bg-primary circle-label"></div>
                                                        <span>Last week</span>
                                                    </li>
                                                    <li class="mt-1">
                                                        <div class="bg-secondary circle-label"></div>
                                                        <span>Running week</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="last-updated light-box">
                                                <span>Last updated</span>
                                                <h5>june 26, 2023</h5>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="monthly-sales">
                                                <div class="icon-box">
                                                    <i class="fas fa-chevron-left light-font"></i>
                                                </div>
                                                <h6>june, 2023</h6>
                                                <div class="icon-box">
                                                    <i class="fas fa-chevron-right light-font"></i>
                                                </div>
                                            </div>
                                            <div class="bar-sales">
                                                <div id="sale-chart"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 xl-6 col-md-6 project-widgets">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="widget-icon bg-primary-light">
                                            <i class="fab fa-foursquare"></i>
                                        </div>
                                        <div class="media-body">
                                            <span>
                                                Completed
                                                <span class="font-success">
                                                    0%
                                                    <i data-feather="trending-up"></i>
                                                </span>
                                            </span>
                                            <h4>Total projects</h4>
                                            <span class="status-history">New users</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 xl-6 col-md-6 project-widgets">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="widget-icon bg-warning-light">
                                            <i class="fab fa-behance"></i>
                                        </div>
                                        <div class="media-body">
                                            <span>
                                                Completed
                                                <span class="font-success">
                                                    0%
                                                    <i data-feather="trending-up"></i>
                                                </span>
                                            </span>
                                            <h4>Behance project</h4>
                                            <span class="status-history">Users</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 xl-6 col-md-6 project-widgets">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="widget-icon bg-success-light">
                                            <i class="fab fa-angellist"></i>
                                        </div>
                                        <div class="media-body">
                                            <span>
                                                <span class="font-success">
                                                    Coming soon
                                                </span>
                                            </span>
                                            <h4>0</h4>
                                            <span class="status-history">Agents</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 xl-6 col-md-6 project-widgets">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <i class="fab fa-cloudscale"></i>
                                        <div class="media-body">
                                            <span>
                                                Monthly
                                                <span class="font-success">
                                                    0%
                                                    <i data-feather="trending-up"></i>
                                                </span>
                                            </span>
                                            <h4>0</h4>
                                            <span class="status-history"> New project</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex">
                                        <h5>Project timeline</h5>
                                        <a href="add-property.html">+ Add project</a>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="timeline-container">
                                        <div id="timeline-chart">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Assignees</h5>
                                </div>
                                <div class="card-body assign-table pt-0">
                                    <div class="table-responsive">
                                        <table class="table table-bordernone">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img src="../assets/images/avatar/1.jpg" class="img-fluid" alt="">
                                                            <div class="media-body">
                                                                <a href="user-profile.php"><a href="user-profile.php">
                                                <h6>Bob Frapples</h6>
                                            </a></a>
                                                                <span>Pumbing</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h6 class="font-danger">0</h6>
                                                        <span>Open</span>
                                                    </td>
                                                    <td>
                                                        <h6 class="font-warning">0</h6>
                                                        <span>Escaleted</span>
                                                    </td>
                                                    <td>
                                                        <h6 class="font-success">0</h6>
                                                        <span>Completed</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img src="../assets/images/avatar/3.jpg" class="img-fluid" alt="">
                                                            <div class="media-body">
                                                                <a href="user-profile.php"><a href="user-profile.php">
                                                <h6>Greta Life</h6>
                                            </a></a>
                                                                <span>Pest control</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h6 class="font-danger">0</h6>
                                                        <span>Open</span>
                                                    </td>
                                                    <td>
                                                        <h6 class="font-warning">0</h6>
                                                        <span>Escaleted</span>
                                                    </td>
                                                    <td>
                                                        <h6 class="font-success">0</h6>
                                                        <span>Completed</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img src="../assets/images/avatar/5.jpg" class="img-fluid" alt="">
                                                            <div class="media-body">
                                                                <a href="user-profile.php"><h6>vixion capital</h6></a>
                                                                <span>others</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h6 class="font-danger">0</h6>
                                                        <span>Open</span>
                                                    </td>
                                                    <td>
                                                        <h6 class="font-warning">0</h6>
                                                        <span>Escaleted</span>
                                                    </td>
                                                    <td>
                                                        <h6 class="font-success">0</h6>
                                                        <span>Completed</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img src="../assets/images/avatar/6.jpg" class="img-fluid" alt="">
                                                            <div class="media-body">
                                                                <a href="user-profile.php"><h6>Paige Turner</h6></a>
                                                                <span>Pest control</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h6 class="font-danger">0</h6>
                                                        <span>Open</span>
                                                    </td>
                                                    <td>
                                                        <h6 class="font-warning">0</h6>
                                                        <span>Escaleted</span>
                                                    </td>
                                                    <td>
                                                        <h6 class="font-success">0</h6>
                                                        <span>Completed</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img src="../assets/images/avatar/4.jpg" class="img-fluid" alt="">
                                                            <div class="media-body">
                                                                <a href="user-profile.php"><h6>Mary Goround</h6></a>
                                                                <span>Pumbing</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h6 class="font-danger">0</h6>
                                                        <span>Open</span>
                                                    </td>
                                                    <td>
                                                        <h6 class="font-warning">0</h6>
                                                        <span>Escaleted</span>
                                                    </td>
                                                    <td>
                                                        <h6 class="font-success">0</h6>
                                                        <span>Completed</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 xl-6 col-lg-12 col-md-6">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <div class="d-flex">
                                        <h5>My properties</h5>
                                        <a href="add-property.html">+ New</a>
                                    </div>
                                </div>
                                <div class="card-body properties-list">
                                    <div class="media">
                                        <img src="../assets/images/property/14.jpg" class="img-fluid" alt="">
                                        <div class="media-body">
                                            <a href="listing.html"><h6>Orchard House</h6></a>
                                            <ul>
                                                <li>
                                                    <img src="../assets/images/svg/icon/double-bed.svg" class="img-fluid" alt="">
                                                    <span>3</span>
                                                </li>
                                                <li>
                                                    <img src="../assets/images/svg/icon/bathroom.svg" class="img-fluid" alt="">
                                                    <span>2</span>
                                                </li>
                                                <li>
                                                    <img src="../assets/images/svg/icon/sofa.svg" class="img-fluid" alt="">
                                                    <span>1</span>
                                                </li>
                                            </ul>
                                            <div>
                                                <span class="light-font">Status: </span>
                                                <span class="label label-light color-4">Rented</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <img src="../assets/images/7.jpg" class="img-fluid" alt="">
                                        <div class="media-body">
                                            <a href="listing.html"><h6>Neverland</h6></a>
                                            <ul>
                                                <li>
                                                    <img src="../assets/images/svg/icon/double-bed.svg" class="img-fluid" alt="">
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <img src="../assets/images/svg/icon/bathroom.svg" class="img-fluid" alt="">
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <img src="../assets/images/svg/icon/sofa.svg" class="img-fluid" alt="">
                                                    <span>2</span>
                                                </li>
                                            </ul>
                                            <div>
                                                <span class="light-font">Status: </span>
                                                <span class="label label-light color-4">Rented</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <img src="../assets/images/8.jpg" class="img-fluid" alt="">
                                        <div class="media-body">
                                            <a href="listing.html"><h6>Sea Breezes</h6></a>
                                            <ul>
                                                <li>
                                                    <img src="../assets/images/svg/icon/double-bed.svg" class="img-fluid" alt="">
                                                    <span>3</span>
                                                </li>
                                                <li>
                                                    <img src="../assets/images/svg/icon/bathroom.svg" class="img-fluid" alt="">
                                                    <span>2</span>
                                                </li>
                                                <li>
                                                    <img src="../assets/images/svg/icon/sofa.svg" class="img-fluid" alt="">
                                                    <span>0</span>
                                                </li>
                                            </ul>
                                            <div>
                                                <span class="light-font">Status: </span>
                                                <span class="label label-light color-3">Listed</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 xl-6">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <h5>Management Reports</h5>
                                </div>
                                <div class="card-body management-table">
                                    <div class="table-responsive">
                                        <table class="table table-bordernone">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img src="../assets/images/svg/icon/pdf.png" class="img-fluid" alt="">
                                                            <div class="media-body">
                                                                <h6>Report 8/10/22 - 15/10/22</h6>
                                                                <span>Created 16/10/22</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="text_file.txt" download ><i data-feather="download" class="light-font"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img src="../assets/images/svg/icon/microsoft.png" class="img-fluid" alt="">
                                                            <div class="media-body">
                                                                <h6>Report 20/10/22 - 25/10/22</h6>
                                                                <span>Created 24/10/22</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="text_file.txt" download ><i data-feather="download" class="light-font"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img src="../assets/images/svg/icon/excel.png" class="img-fluid" alt="">
                                                            <div class="media-body">
                                                                <h6>Report 30/10/22 - 5/11/22</h6>
                                                                <span>Created 1/11/22</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="text_file.txt" download ><i data-feather="download" class="light-font"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img src="../assets/images/svg/icon/pdf.png" class="img-fluid" alt="">
                                                            <div class="media-body">
                                                                <h6>Report 10/11/22 - 15/11/22</h6>
                                                                <span>Created 17/11/22</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="text_file.txt" download ><i data-feather="download" class="light-font"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img src="../assets/images/svg/icon/excel.png" class="img-fluid" alt="">
                                                            <div class="media-body">
                                                                <h6>Report 20/11/22 - 25/11/22</h6>
                                                                <span>Created 28/11/22</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="text_file.txt" download ><i data-feather="download" class="light-font"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 xl-6">
                            <div class="card expiring-card">
                                <div class="card-header">
                                    <div class="d-flex">
                                        <h5>Sold out</h5>
                                        <a href="apartment.html" class="arrow-animated">
                                            See Details
                                            <i data-feather="chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body pt-0 expiring-details">
                                    <div class="expiring-chart">
                                        <div id="Radial-chart"></div>
                                    </div>
                                    <div class="chart-detail">
                                        <div class="d-flex">
                                            <div class="media">
                                               <div class="with-reload">
                                                    <img src="../assets/images/svg/icon/1.svg" class="img-fluid" alt="">
                                               </div>
                                                <div class="media-body">
                                                    <h5>0</h5>
                                                    <span class="light-font">Properties</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="legend-exiring">
                                        <ul>
                                            <li>
                                                <div class="d-flex">
                                                    <span class="square-series bg-primary"></span>
                                                    <h6>0</h6>
                                                </div>
                                                <span class="light-font">> 0 Days</span>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <span class="square-series bg-success"></span>
                                                    <h6>0</h6>
                                                </div>
                                                <span class="light-font">0 Days</span>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <span class="square-series bg-warning"></span>
                                                    <h6>0</h6>
                                                </div>
                                                <span class="light-font">0 Days</span>
                                            </li>
                                        </ul>
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
                      <p class="mb-0">Copyright 2023, All Right Reserved Vixion Capital.</p>
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

    <!-- sidebar js -->
    <script src="../assets/js/sidebar.js"></script>

    <!-- apex chart js-->
    <script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="../assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="../assets/js/admin-dashboard.js"></script>

    <!--admin js -->
    <script src="../assets/js/admin-script.js"></script>

    <!-- Customizer js-->
    <script src="../assets/js/customizer.js"></script>

    <!-- Color-picker js-->
    <script src="../assets/js/color/custom-colorpicker.js"></script>
    
</body>

</html>