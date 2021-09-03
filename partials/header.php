<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Gestion-Archivage</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="asset/img/logo.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="asset/css/bootstrap.css">
    <!-- Main Style -->
    <link rel="stylesheet" href="asset/css/main.css">
    <!-- Normalize Style -->
    <link rel="stylesheet" href="asset/css/normalize.css">
    <!-- Line Icons CSS -->
    <link rel="stylesheet" href="asset/fonts/line-icons/line-icons.css" type="text/css">
    <!-- Fonts Awesome -->
    <link rel="stylesheet" href="asset/fonts/font-awesome.min.css">
    <!-- Color Switcher -->
    <link rel="stylesheet" href="asset/css/color-switcher.css" type="text/css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="asset/extras/animate.css" type="text/css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="asset/extras/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="asset/extras/owl.theme.css" type="text/css">
    <!-- Rev Slider Css -->
    <link rel="stylesheet" href="asset/extras/settings.css" type="text/css">
    <!-- Nivo Lightbox Css -->
    <link rel="stylesheet" href="asset/extras/nivo-lightbox.css" type="text/css">
    <!-- Slicknav Css -->
    <link rel="stylesheet" href="asset/css/slicknav.css" type="text/css">
    <!-- Responsive Style -->
    <link rel="stylesheet" href="asset/css/responsive.css">
    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="asset/css/colors/sky.css" media="screen" />
    <!-- Bootstrap Select -->
    <link rel="stylesheet" href="asset/css/bootstrap-select.min.css">


</head>

<body>
<!-- Header area wrapper Starts -->
<header id="header-wrap">
    <!-- Roof area Starts -->
    <div id="roof" class="hidden-xs">
        <div class="container">
            <!-- Wellcome Starts -->
            <div class="pull-left">
            <i class="fa fa-map-o" aria-hidden="true"></i> CENI 2018, MORONI
        </div>
            <!-- Wellcome End -->

            <!-- Quick Contacts Starts -->
            <div class="quick-contacts pull-right">
               
                <span><a href="../logout.php" onclick="return confirm('Etes-vous sur de vous deconnecter?')"><i class="fa fa-user"></i> Se deconnecter</a></span>
            </div>

            
            <!-- Quick Contacts End -->
        </div>
    </div>
    <!-- Roof area End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-default main-navigation" role="navigation" data-spy="affix" data-offset-top="50">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <a class="navbar-brand" href="index.php"><img src="asset/img/logo.png" alt=""></a>
            </div>
            <!-- Brand End -->

            <!-- Search Icon -->
            <!-- Collapse Navbar -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown dropdown-toggle">
                        <a class="active" href="index.php">Accueil</a>

                    </li>
                   
                    <li class="dropdown dropdown-toggle">
                        <a href="#" data-toggle="dropdown">Membre <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="membre.php">Insertion</a></li>
                            <li><a href="list_memb">Voir membres</a></li>

                        </ul>
                    </li>
                    <li class="dropdown dropdown-toggle">
                        <a href="#" data-toggle="dropdown">Candidat <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                        <li><a href="candidat.php">Insertion</a></li>
                        <li><a href="list_cand.php">Voir candidats</a></li>

                        </ul>
                    </li>
                    <li class="dropdown dropdown-toggle">
                        <a href="#" data-toggle="dropdown">Documents <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="document.php">gestion documents</a></li>

                        </ul>
                    </li>
                    <!-- Search form ends -->

                    <!-- Mobile Menu Start -->
                    <ul class="wpb-mobile-menu">
                        <li>
                            <a class="active" href="index.html">Home</a>
                            <ul>
                                <li><a class="active" href="index.html">Home Page 1</a></li>
                                <li><a href="index-1.html">Home Page 2</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Courses</a>
                            <ul>
                                <li><a href="courses-list.html">Courses List</a></li>
                                <li><a href="courses-grid.html">Courses Grid</a></li>
                                <li><a href="courses-single.html">Single Course</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Pages</a>
                            <ul>
                                <li><a href="about.html">About Page</a></li>
                                <li><a href="gallery.html">Image Gallery</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="login.html">Login Page</a></li>
                                <li><a href="single-teacher.html">Single Teacher</a></li>
                                <li><a href="registration.html">Registration Form</a></li>
                                <li><a href="contact.html">Contacts</a></li>
                                <li><a href="404.html">404</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Events</a>
                            <ul>
                                <li><a href="event-grid.html">Events Grid</a></li>
                                <li><a href="event.html">Single Event</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                            <ul>
                                <li><a href="blog.html">Blog - Right Sidebar</a></li>
                                <li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a></li>
                                <li><a href="blog-full-width.html">Blog - Full Width</a></li>
                                <li><a href="single-post.html">Blog Single Post</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                    <!-- Mobile Menu End -->

            </div>
    </nav>
    <!-- Navbar End -->

</header>