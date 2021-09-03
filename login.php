<?php $auth = 0; ?>
<?php include 'lib/includes.php';?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <title>Gestion-Archivage</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/logo.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!--Material-Kit -->
    <link href="assets/css/material-kit.css" rel="stylesheet" />

</head>

<body class="signup-page">

    <div class="wrapper">
        <div class="header header-filter" style="background-image: url('assets/img/city.jpg'); background-size: cover; background-position: top center;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                        <div class="card card-signup">

                        <?php
                        if (isset($_POST['username']) && isset($_POST['password'])) {
                            $username=$db->quote($_POST['username']);
                            $password= sha1 ($_POST['password']);

                           

                                $select=$db->query("SELECT * FROM admin WHERE nom=$username AND password='$password'");
                               
                        //    var_dump($select->rowCount());
                           
                             if ($select->rowCount() > 0) {
                                 $_SESSION['Auth']= $select->fetch();
         
                                 header('Location:'.WEBROOT.'admin/index.php');
                               }
                       
                        }
                        ?>
                        


                            <form class="form" method="POST" action="#">
                                <div class="header header-primary text-center">
                                    <h4>Se Connecter</h4>
                                    <div class="social-line">
                                        <a href="#pablo" class="btn btn-simple btn-just-icon">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-simple btn-just-icon">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-simple btn-just-icon">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <p class="text-divider">Connexion</p>
                                <div class="content">

                                    <div class="input-group">
                                        <span class="input-group-addon">
											<i class="material-icons">Username</i>
										</span>
                                        

                                        <?php echo input('username');?>



                                    </div>


                                    <div class="input-group">
                                        <span class="input-group-addon">
											<i class="material-icons">Password</i>
										</span>
                                        <input type="password" id="password" placeholder="Mot De Passe" class="form-control" name="password"/>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                                <input type="checkbox" name="optionsCheckboxes">
                                             Remember me
                                            </label>
                                    </div>


                                </div>
                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-round btn-primary btn-md">Se connecter</button>
                                </div>
                            </form>
                           
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    

    <!-- Footer Section -->
    <footer>

        <!-- Container Ends -->

        <!-- Copyright -->
        <div id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6  col-sm-6">
                        <p class="copyright-text">
                            © All rights reserved 2018 &amp; Developed by <a rel="nofollow" href="http://graygrids.com"> Anfani et Abdel</a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <!-- Copyright  End-->

    </footer>
    <!-- Footer Section End-->

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
        <i class="fa fa-arrow-up"></i>
    </a>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.js" type="text/javascript"></script>
    <script src="assets/js/material.min.js"></script>

    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="assets/js/nouislider.min.js" type="text/javascript"></script>

    <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
    <script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

    <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
    <script src="assets/js/material-kit.js" type="text/javascript"></script>



</body>

</html>