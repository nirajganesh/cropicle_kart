<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Ankur (Cluebix)">
    <title>Cropicle - Admin</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/datatables.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu navbar-sticky 2-columns footer-static" data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-fixed navbar-brand-center">
        <div class="navbar-header d-xl-block d-none">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item"><a class="navbar-brand" href="../../../html/ltr/horizontal-menu-template/index.html">
                        <div class="brand-logo mb-1"><img class="logo" src="../../../app-assets/images/logo/favicon.png"></div>
                        <h2 class="brand-text mb-0">Cropicle</h2>
                    </a></li>
            </ul>
        </div>
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu mr-auto"><a class="nav-link nav-menu-main menu-toggle" href="#"><i class="text-white bx bx-menu"></i></a></li>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav float-right d-flex align-items-center">
                        <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language text-white d-lg-inline d-none">English</span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#" data-language="en"><i class="flag-icon flag-icon-us mr-50"></i>English</a>
                            </div>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon text-white bx bx-fullscreen"></i></a></li>
                        <li class="nav-item nav-search"><a class="nav-link nav-link-search pt-2"><i class="ficon text-white bx bx-search"></i></a>
                            <div class="search-input">
                                <div class="search-input-icon"><i class="bx bx-search primary"></i></div>
                                <input class="input" type="text" placeholder="Explore Kart.cropicle..." tabindex="-1" data-search="template-search">
                                <div class="search-input-close"><i class="bx bx-x"></i></div>
                                <ul class="search-list"></ul>
                            </div>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-lg-flex d-none"><span class="user-name text-white">John Doe</span></div><span><img class="round" src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right pb-0">
                                <a class="dropdown-item" href="profile.html"><i class="bx bx-user mr-50"></i> Edit Profile</a>
                                <div class="dropdown-divider mb-0"></div>
                                <a class="dropdown-item" href="auth-login.html"><i class="bx bx-power-off mr-50"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-light navbar-without-dd-arrow shadow" role="navigation" data-menu="menu-wrapper">
        <div class="navbar-header d-xl-none d-block">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html">
                        <div class="brand-logo"><img class="logos" height="38" src="../../../app-assets/images/logo/logo.png" /></div>
                        <h2 class="brand-text mb-0"></h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary toggle-icon"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <!-- Horizontal menu content-->
        <div class="navbar-container main-menu-content mx-auto" data-menu="menu-container">
            <!-- include ../../../includes/mixins-->
            <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="filled">

                <li class="nav-item mr-2 my-25">
                    <a class="nav-link bg-white shadow-md" href="index.html">
                        <i class="menu-livicon" data-icon="desktop"></i><span data-i18n="Dashboard">
                        Dashboard</span>
                    </a>
                </li>

                <li class="nav-item mr-2 my-25">
                    <a class="nav-link bg-white" href="manage-kart.html">
                        <i class="menu-livicon" data-icon="gear"></i><span data-i18n="Dashboard">
                        Manage Kart</span>
                    </a>
                </li>


                <li class="nav-item mr-2 my-25">
                    <a class="nav-link bg-white" href="orders.html">
                        <i class="menu-livicon" data-icon="truck"></i><span data-i18n="Dashboard">
                        Orders</span>
                    </a>
                </li>


                <li class="nav-item mr-2 my-25">
                    <a class="nav-link bg-white activeLink" href="payments.html">
                        <i class="menu-livicon" data-icon="bank"></i><span data-i18n="Dashboard">
                        Payments</span>
                    </a>
                </li>


                <li class="nav-item mr-2 my-25">
                    <a class="nav-link bg-white" href="profile.html">
                        <i class="menu-livicon" data-icon="user"></i><span data-i18n="Dashboard">
                        Profile</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- /horizontal menu content-->
    </div>
    <!-- END: Main Menu-->


    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2 mt-1">
                    <div class="row breadcrumbs-top">
                        <div class="col-md-9">
                            <h5 class="content-header-title float-left pr-1 mb-0">Payments</h5>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb p-0 mb-0">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a></li>
                                    <li class="breadcrumb-item active">Payments</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">See all the Payments</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table table-striped dataex-html5-selectors">
                                            <thead>
                                                <tr>
                                                    <th>Payment Id</th>
                                                    <th>Payment date</th>
                                                    <th>Payment Amt.</th>
                                                    <th>Payment for</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>#xyz5547</td>
                                                    <td>25-06-2020</td>
                                                    <td>Rs. 10500/-</td>
                                                    <td>order id- #5148</td>
                                                    <td class="text-success">Success</td>
                                                    <td class='d-flex'>
                                                        <span data-toggle="modal" data-target="#payModal">
                                                            <a href="#" data-toggle="tooltip" title="See details"><i class="badge-circle border badge-circle-light-primary bx bx-info-circle text-dark font-medium-1"></i></a>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#xyz5548</td>
                                                    <td>25-06-2020</td>
                                                    <td>Rs. 10500/-</td>
                                                    <td>order id- #5148</td>
                                                    <td class="text-success">Success</td>
                                                    <td class='d-flex'>
                                                        <span data-toggle="modal" data-target="#payModal">
                                                            <a href="#" data-toggle="tooltip" title="See details"><i class="badge-circle border badge-circle-light-primary bx bx-info-circle text-dark font-medium-1"></i></a>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#xyz5549</td>
                                                    <td>25-06-2020</td>
                                                    <td>Rs. 10500/-</td>
                                                    <td>order id- #5148</td>
                                                    <td class="text-success">Success</td>
                                                    <td class='d-flex'>
                                                        <span data-toggle="modal" data-target="#payModal">
                                                            <a href="#" data-toggle="tooltip" title="See details"><i class="badge-circle border badge-circle-light-primary bx bx-info-circle text-dark font-medium-1"></i></a>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#xyz5550</td>
                                                    <td>25-06-2020</td>
                                                    <td>Rs. 10500/-</td>
                                                    <td>order id- #5148</td>
                                                    <td class="text-danger">Failed</td>
                                                    <td class='d-flex'>
                                                        <span data-toggle="modal" data-target="#payModal">
                                                            <a href="#" data-toggle="tooltip" title="See details"><i class="badge-circle border badge-circle-light-primary bx bx-info-circle text-dark font-medium-1"></i></a>
                                                        </span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade " id="payModal" tabindex="-1" role="dialog" aria-labelledby="Payment Modal" aria-modal="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLongTitle">Order details</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="bx bx-x"></i>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <p class="text-dark">Payment date- <span class="">26-06-2020</span></p>
                    </div>
                    <div class="row">
                        <p class="text-dark">Status- <span class="text-success">Success</span></p>
                    </div>
                    <div class="row">
                        <p class="text-dark">Payment Id- <mark class="px-1">xyz5548</mark></p>
                    </div>
                    <div class="row">
                        <p class="text-dark">For Order id- #5148</p>
                    </div>
                    <div class="row">
                        <p class="text-dark">Payment mode: <span class="text-dark">cash</span> </p>
                    </div>
                    <div class="row">
                        <p class="text-dark">Amount: <span class="text-dark">Rs. 10500/-</span> </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-left d-inline-block">2020 &copy; Cluebix Softwares</span><span class="float-right d-sm-inline-block d-none">Powered by : <a class="text-uppercase" href="https://cluebix.com" target="_blank">Cluebix Softwares</a></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="bx bx-up-arrow-alt"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <script src="../../../app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
    <script src="../../../app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
    <script src="../../../app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/ui/jquery.sticky.js"></script>=
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/scripts/configs/horizontal-menu.js"></script>
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <script src="../../../app-assets/js/scripts/components.js"></script>
    <script src="../../../app-assets/js/scripts/footer.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/datatables/datatable.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>


