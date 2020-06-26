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
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/dragula.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/dashboard-analytics.css">
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
                    <a class="nav-link bg-white activeLink" href="manage-kart.html">
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
                    <a class="nav-link bg-white" href="payments.html">
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
                            <h5 class="content-header-title float-left pr-1 mb-0">Manage Kart</h5>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb p-0 mb-0">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a></li>
                                    <li class="breadcrumb-item"><a href="manage-kart.html">Manage Kart</a></li>
                                    <li class="breadcrumb-item active">List of demands</li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-md-3 text-sm-right">
                            <a href="demand-form.html" type="button" class="btn btn-sm btn-primary">Create new demand list</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- account setting page start -->
                <section id="page-account-settings">
                    <div class="row">
                        <div class="card py-2 col-lg-12">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>CREATED AT</th>
                                            <th>LIST NAME</th>
                                            <th>ITEMS IN LIST</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>23-06-2020</td>
                                            <td>Special items list </td>
                                            <td>8 items</td>
                                            <td class='d-flex'>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Order now"><i class="badge-circle badge-circle-light-secondary  text-primary bx bx-truck font-medium-1"></i></a>

                                                <a href="demand-form.html" class="mx-1" data-toggle="tooltip" data-placement="top" title="Edit list"><i class="badge-circle text-primary badge-circle-light-secondary bx bx-edit font-medium-1"></i></a>

                                                <a href="#" class="mr-1" data-toggle="tooltip" data-placement="top" title="Delete list"><i class="badge-circle badge-circle-light-secondary text-danger bx bx-trash font-medium-1"></i></a>

                                                <span data-toggle="modal" data-target="#listModal">
                                                    <a href="#" data-toggle="tooltip" title="See list"><i class="badge-circle badge-circle-light-secondary bx bx-info-circle text-warning font-medium-1"></i></a>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>23-06-2020</td>
                                            <td>Special items list </td>
                                            <td>8 items</td>
                                            <td class='d-flex'>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Order now"><i class="badge-circle badge-circle-light-secondary text-primary bx bx-truck font-medium-1"></i></a>

                                                <a href="demand-form.html" class="mx-1" data-toggle="tooltip" data-placement="top" title="Edit list"><i class="badge-circle text-primary badge-circle-light-secondary bx bx-edit font-medium-1"></i></a>

                                                <a href="#" class="mr-1" data-toggle="tooltip" data-placement="top" title="Delete list"><i class="badge-circle badge-circle-light-secondary text-danger bx bx-trash font-medium-1"></i></a>

                                                <span data-toggle="modal" data-target="#listModal">
                                                    <a href="#" data-toggle="tooltip" title="See list"><i class="badge-circle badge-circle-light-secondary bx bx-info-circle text-warning font-medium-1"></i></a>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>23-06-2020</td>
                                            <td>Special items list </td>
                                            <td>8 items</td>
                                            <td class='d-flex'>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Order now"><i class="badge-circle badge-circle-light-secondary text-primary bx bx-truck font-medium-1"></i></a>

                                                <a href="demand-form.html" class="mx-1" data-toggle="tooltip" data-placement="top" title="Edit list"><i class="badge-circle text-primary badge-circle-light-secondary bx bx-edit font-medium-1"></i></a>

                                                <a href="#" class="mr-1" data-toggle="tooltip" data-placement="top" title="Delete list"><i class="badge-circle badge-circle-light-secondary text-danger bx bx-trash font-medium-1"></i></a>

                                                <span data-toggle="modal" data-target="#listModal">
                                                    <a href="#" data-toggle="tooltip" title="See list"><i class="badge-circle badge-circle-light-secondary bx bx-info-circle text-warning font-medium-1"></i></a>
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- account setting page ends -->
            </div>
        </div>
    </div>

    
    <div class="modal fade " id="listModal" tabindex="-1" role="dialog" aria-labelledby="Demand List Modal" aria-modal="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLongTitle">Details of the demand list</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="bx bx-x"></i>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <p class="ml-1 text-dark">List Name - Special items list</p>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-6 p-0 pt-1 border-right d-flex">
                            <div class="col-6">Potato -</div>
                            <div class="col-5">8kg</div>
                        </div>
                        <div class="col-sm-6 p-0 pt-1 d-flex">
                            <div class="col-6">Tomato -</div>
                            <div class="col-4">5kg</div>
                        </div>
                        <div class="col-sm-6 p-0 pt-1 border-right  d-flex">
                            <div class="col-6">Ginger -</div>
                            <div class="col-5">3kg</div>
                        </div>
                        <div class="col-sm-6 p-0 pt-1 d-flex">
                            <div class="col-6">Garlic -</div>
                            <div class="col-4">3kg</div>
                        </div>
                        <div class="col-sm-6 p-0 pt-1 border-right d-flex">
                            <div class="col-6">Cauliflower -</div>
                            <div class="col-5">10kg</div>
                        </div>
                        <div class="col-sm-6 p-0 pt-1 d-flex">
                            <div class="col-6">Pumpkin -</div>
                            <div class="col-4">5kg</div>
                        </div>
                        <div class="col-sm-6 p-0 pt-1 border-right d-flex">
                            <div class="col-6">Coriander -</div>
                            <div class="col-5">1.5kg</div>
                        </div>
                        <div class="col-sm-6 p-0 pt-1 d-flex">
                            <div class="col-6">Chilles -</div>
                            <div class="col-4">2kg</div>
                        </div>
                        <div class="col-sm-6 p-0 pt-1 border-right d-flex">
                            <div class="col-6"> </div>
                            <div class="col-4"></div>
                        </div>
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
    <script src="../../../app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <script src="../../../app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
    <script src="../../../app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="../../../app-assets/vendors/js/extensions/dragula.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/scripts/configs/horizontal-menu.js"></script>
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <script src="../../../app-assets/js/scripts/components.js"></script>
    <script src="../../../app-assets/js/scripts/footer.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/forms/number-input.js"></script>
    <script src="../../../app-assets/js/scripts/pages/dashboard-analytics.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>


