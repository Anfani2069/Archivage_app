<?php include '../lib/db.php';
// include '../lib/auth.php';

$select= $db->query('SELECT * FROM candidat ORDER BY nom ASC');
$cands=$select->fetchAll();

// suppression

if(isset($_GET['sup'])){

    // checkCsrf();
$id = $db->quote($_GET['sup']);
$db->query("DELETE FROM candidat WHERE id_cand=$id");
header('Location: list_cand.php');
die();

}



?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../../../favicon.ico"> -->
    <title>Gestion-Archivage</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/logo.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!-- Custom styles for this template -->
    <link href="assets/css/form-validation.css" rel="stylesheet">
    <!-- Normalize Style -->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Line Icons CSS -->
    <link rel="stylesheet" href="assets/fonts/line-icons/line-icons.css" type="text/css">
    <!-- Fonts Awesome -->
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <!-- Color Switcher -->
    <link rel="stylesheet" href="assets/css/color-switcher.css" type="text/css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/extras/animate.css" type="text/css">
    <!-- Rev Slider Css -->
    <link rel="stylesheet" href="assets/extras/settings.css" type="text/css">
    <!-- Nivo Lightbox Css -->
    <link rel="stylesheet" href="assets/extras/nivo-lightbox.css" type="text/css">
    <!-- Slicknav Css -->
    <link rel="stylesheet" href="assets/css/slicknav.css" type="text/css">
    <!-- Responsive Style -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="assets/css/colors/sky.css" media="screen" />
    <!-- Bootstrap Select -->
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
</head>

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
    <nav class="navbar navbar-default main-navigation hidden-print" role="navigation" data-spy="affix" data-offset-top="50">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed hidden-print" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <a class="navbar-brand" href="index.php"><img src="assets/img/logo.png" alt=""></a>
            </div>
            <!-- Brand End -->

            <!-- Search Icon -->
            <!-- Collapse Navbar -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown dropdown-toggle">
                        <a  href="index.php">Accueil</a>

                    </li>
                    <li class="dropdown dropdown-toggle">
                        <a href="#" data-toggle="dropdown">Utilisateur  <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                        <li><a href="membre.php">Insertion</a></li>
                            <li><a href="#">Voir utilisateurs</a></li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-toggle">
                        <a href="#" data-toggle="dropdown">Membre <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                        <li><a href="membre.php">Insertion</a></li>
                            <li><a href="list_memb.php">Voir membres</a></li>

                        </ul>
                    </li>
                    <li class="dropdown dropdown-toggle">
                        <a class="active" href="#" data-toggle="dropdown">Candidat <i class="fa fa-angle-down"></i></a>
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

<body>
    <h1>Liste des candidats</h1>

    

    <table class="table table-striped">
        <thead>
            <tr>
                 <th>id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>ile</th>
                <th class="hidden-print">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($cands as $cand): ?>

            <tr>
                <td><?= $cand['id_cand']; ?></td>
                <td><?= $cand['nom']; ?></td>
                <td><?= $cand['prenom']; ?></td>
                <td><?= $cand['ile']; ?></td>
                <td class="hidden-print"><a href="cand_edit.php?id=<?= $cand['id_cand']; ?>" class="btn btn-default hidden-print">Modifier</a>
                <a href="cand_desc.php?id=<?= $cand['id_cand']; ?>" class="btn btn-default hidden-print">Details</a>
                <a href="?sup=<?= $cand['id_cand']; ?>" class="btn btn-error hidden-print" onclick="return confirm('Etes-vous sur de supprimer ?')">Supprimer</a>
                </td>
            </tr>

            <?php endforeach; ?>
            <tr>
                <td>
                <form>
                <input type="button" class="hidden-print" value="Imprimer" onclick="window.print()"></form>
                
                </td>
            
            </tr>
        </tbody>
    </table>
    

<footer>
    
            <!-- Container Ends -->
    
            <!-- Copyright -->
            <div id="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6  col-sm-6">
                            <p class="copyright-text hidden-print">
                                ?? All rights reserved 2018 &amp; Developed by <a rel="nofollow" href="http://graygrids.com"> Anfani et Abdel</a>
                            </p>
                        </div>
    
                    </div>
                </div>
            </div>
            <!-- Copyright  End-->
    
        </footer>
        <!-- Footer Section End-->
    
        <!-- Go To Top Link -->
        <!-- <a href="#" class="back-to-top">
            <i class="fa fa-arrow-up"></i>
        </a> -->

      
    <!-- jQuery  -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/color-switcher.js"></script>
    <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
    <script type="text/javascript" src="assets/js/wow.js"></script>
    <script type="text/javascript" src="assets/js/nivo-lightbox.min.js"></script>
    <script type="text/javascript" src="assets/js/form-validator.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>


</body>
</html>

