<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Berita</title>
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/line-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/animated-headline.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/chosen.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- start per-loader -->
    <div class="loader-container">
        <div class="loader-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- end per-loader -->

    <!-- ================================
    START DASHBOARD AREA
================================= -->
    <section class="dashboard-wrap d-flex">
        <ul class="navbar-nav dashboard-sidebar">
            <li>
                <span id="sidebar-close">
                    <i class="la la-times"></i>
                </span>
            </li>
            <li>
                <div class="sidebar-brand" href="index.html">
                    <img src="images/logo-white.png" alt="logo">
                </div>
            </li>
            <li class="sidebar-heading pt-3">Main</li>
            <li class="nav-item">
                <a class="nav-link" href="/dboard">
                    <i class="la la-dashboard font-size-18 mr-1"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/">
                    <i class="la la-dashboard font-size-18 mr-1"></i>
                    <span>News</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/bikin">
                    <i class="la la-plus-circle font-size-18 mr-1"></i>
                    <span>Add News</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/logout">
                    <i class="la la-power-off font-size-18 mr-1"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
        <div class="dashboard-body d-flex flex-column">
            <div class="dashboard-inner-body flex-grow-1">
                <nav class="navbar navbar-expand bg-navbar dashboard-topbar mb-4">
                    <button id="sidebarToggleTop" class="btn rounded-circle mr-3">
                        <i class="la la-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle after-none" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-search"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="search-box">
                                    <div class="input-group">
                                        <label class="input-label mb-0">
                                            <input type="text" class="form-control" placeholder="Search here...">
                                        </label>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="la la-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="nav-item dropdown border-left pl-3 ml-4">
                            <a class="nav-link dropdown-toggle after-none" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="user-thumb user-thumb-sm position-relative">
                                    <img src="zakimerong.jpg" alt="author-image">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <span class="ml-2 small font-weight-medium d-none d-lg-inline"><?= session()->get('name') ?></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right animated--grow-in py-2" aria-labelledby="userDropdown">
                                <a class="dropdown-item text-color font-size-15" href="dashboard-my-profile.html">
                                    <i class="la la-user mr-2 text-gray font-size-18"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item text-color font-size-15" href="dashboard-messages.html">
                                    <i class="la la-envelope mr-2 text-gray font-size-18"></i>
                                    Messages
                                </a>
                                <a class="dropdown-item text-color font-size-15" href="dashboard-booking.html">
                                    <i class="la la-shopping-bag mr-2 text-gray font-size-18"></i>
                                    Bookings
                                </a>
                                <a class="dropdown-item text-color font-size-15" href="dashboard-bookmark.html">
                                    <i class="la la-bookmark mr-2 text-gray font-size-18"></i>
                                    Bookmarks
                                </a>
                                <a class="dropdown-item text-color font-size-15" href="add-listing.html">
                                    <i class="la la-plus-circle mr-2 text-gray font-size-18"></i>
                                    Add Listing
                                </a>
                                <a class="dropdown-item text-color font-size-15" href="/logout">
                                    <i class="la la-power-off mr-2 text-gray font-size-18"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav><!-- end dashboard-topbar -->
                <div class="col-lg-3 col-md-6">
                    <div class="card-item dashboard-stat">
                        <div class="card-content">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h2 class="card-title font-size-40"><?= $berita ?></h2>
                                    <p class="card-sub font-size-18 line-height-24">Berita</p>
                                </div>
                                <div class="col-auto font-size-60">
                                    <i class="la la-map-marked text-primary"></i>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card-item dashboard-stat">
                        <div class="card-content">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h2 class="card-title font-size-40"><?= $user ?></h2>
                                    <p class="card-sub font-size-18 line-height-24">Pengguna</p>
                                </div>
                                <div class="col-auto font-size-60">
                                    <i class="la la-map-marked text-primary"></i>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                </div><!-- end col-lg-3 -->



















                <div class="dashboard-footer bg-white">
                    <div class="container-fluid">
                        <div class="copy-right d-flex align-items-center justify-content-between">
                            <p class="copy__desc">
                                &copy; Copyright Listhub <script>
                                    document.write(new Date().getFullYear());
                                </script>. Made with
                                <span class="la la-heart-o"></span> by <a href="https://themeforest.net/user/techydevs/portfolio">TechyDevs</a>
                            </p>
                            <ul class="list-items term-list text-right">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- end dashboard-body -->
    </section>
    <!-- ================================
    START DASHBOARD AREA
================================= -->

    <!-- Template JS Files -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/animated-headline.js"></script>
    <script src="js/chosen.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/datedropper.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/chart.min.js"></script>
    <script src="js/line-chart.js"></script>
    <script src="js/main.js"></script>
</body>

</html>