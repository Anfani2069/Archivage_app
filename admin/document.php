
<?php include '../lib/db.php';
 include '../lib/form.php';

 $select= $db->query('SELECT * FROM arret ORDER BY portant ASC');
 $arrets=$select->fetchAll();
 if(isset($_GET['sup'])){
    
        // checkCsrf();
    $id = $db->quote($_GET['sup']);
    $db->query("DELETE FROM arret WHERE id_at=$id");
    header('Location: document.php');
    die();
    
    }

    if(isset($_GET['sup1'])){
        
            // checkCsrf();
        $id = $db->quote($_GET['sup1']);
        $db->query("DELETE FROM arrete WHERE id_art=$id");
        header('Location: document.php');
        die();
        
        }

        //arrete

                
    

    if(isset($_GET['sup2'])){
        
            // checkCsrf();
        $id = $db->quote($_GET['sup2']);
        $db->query("DELETE FROM contrat WHERE id_cnt=$id");
        header('Location: document.php');
        die();
        
        }
    
 
    if(isset($_GET['sup3'])){
        
            // checkCsrf();
        $id = $db->quote($_GET['sup3']);
        $db->query("DELETE FROM cadr_leg WHERE id_cadr=$id");
        header('Location: document.php');
        die();
        
        }
    

    if(isset($_GET['sup4'])){
        
            // checkCsrf();
        $id = $db->quote($_GET['sup4']);
        $db->query("DELETE FROM decision WHERE id_deci=$id");
        header('Location: document.php');
        die();
        
        }
    

    if(isset($_GET['sup5'])){
        
            // checkCsrf();
        $id = $db->quote($_GET['sup5']);
        $db->query("DELETE FROM decret WHERE id_dec=$id");
        header('Location: document.php');
        die();
        
        }
    

    if(isset($_GET['sup6'])){
        
            // checkCsrf();
        $id = $db->quote($_GET['sup6']);
        $db->query("DELETE FROM pv WHERE id_pv=$id");
        header('Location: document.php');
        die();
        
        }
    

    if(isset($_GET['sup7'])){
        
            // checkCsrf();
        $id = $db->quote($_GET['sup7']);
        $db->query("DELETE FROM rapport WHERE id_rap=$id");
        header('Location: document.php');
        die();
        
        }

    if(isset($_GET['sup8'])){
        
            // checkCsrf();
        $id = $db->quote($_GET['sup8']);
        $db->query("DELETE FROM reglement WHERE id_reg=$id");
        header('Location: document.php');
        die();
        
        }
 if (isset($_POST['action'])) { 
    $action = $_POST['action'];

    switch ($action) {
        case 'contrat':{


            var_dump($_POST);
            var_dump($_FILES); 
           $title =$_POST['title'];
           $type =$_POST['type'];
           $memb =$_POST['memb'];
        //    $file =$_POST['file'];

        $file=$_FILES['file'];
        $name=$file["name"];

        $mov=  move_uploaded_file($file['tmp_name'], "C:\wamp\www\Projet\CENI\App\admin".'/web/pdf/contrats/'.$name);

           $sql=$db->query("INSERT INTO contrat SET title='$title', type_cont='$type', memb='$memb', file_cont='$name'");
          
           var_dump($mov);
            // on peut utiliser somes includes
            
            break;
        }
        case 'arret':{

            
            $portant =$_POST['port_arret'];
            $num=$_POST['num_arret'];
            $dat_arret=$_POST['dat_arret'];
            // $file =$_POST['file'];

// on met enctype dans le formulaire ensuite les choses ci-dessous mais on va enregistré dans pdf ......

            $file=$_FILES['file'];
            $name=$file["name"];
            
            $desti="C:\wamp\www\Projet\CENI\App\admin\img";

            $mov=  move_uploaded_file($file['tmp_name'], "C:\wamp\www\Projet\CENI\App\admin".'/web/pdf/arrets/'.$name);
 
            $sql=$db->query("INSERT INTO arret SET portant='$portant', num_at='$num', dat_at='$dat_arret', file='$name'");
           
            

           
                        
                        break;
                    }
         case 'arrete':{
            $portant =$_POST['port_arrete'];
            $num=$_POST['num_arrete'];
            $dat_arrete=$_POST['dat_arrete'];
            // $file =$_POST['file'];

            $file=$_FILES['file'];
            $name=$file["name"];
    
            $mov=  move_uploaded_file($file['tmp_name'], "C:\wamp\www\Projet\CENI\App\admin".'/web/pdf/arretes/'.$name);
    
             
            $sql=$db->query("INSERT INTO arrete SET portant='$portant', num_art='$num', dat_art='$dat_arrete', file='$name'");
                       
                          
                        break;
                    }

        case 'decision':{
        
            $portant =$_POST['port_deci'];
            $num=$_POST['num_deci'];
            $dat_deci=$_POST['dat_deci'];
            // $file =$_POST['file'];
            $memb =$_POST['memb'];

            $file=$_FILES['file'];
            $name=$file["name"];
    
            $mov=  move_uploaded_file($file['tmp_name'], "C:\wamp\www\Projet\CENI\App\admin".'/web/pdf/decisions/'.$name);
    
                         
            $sql=$db->query("INSERT INTO decision SET portant='$portant', num_deci='$num', dat_deci='$dat_deci', memb='$memb', file='$name'");
                                   
                       
            
                         break;
                     } 

         case 'decret':{
                        
            $portant =$_POST['port_dec'];
            $num=$_POST['num_dec'];
            $dat_dec=$_POST['dat_dec'];
            // $file =$_POST['file'];
            $memb =$_POST['memb'];

            
            $file=$_FILES['file'];
            $name=$file["name"];
    
            $mov=  move_uploaded_file($file['tmp_name'], "C:\wamp\www\Projet\CENI\App\admin".'/web/pdf/decrets/'.$name);
    
                                         
            $sql=$db->query("INSERT INTO decret SET portant='$portant', num_dec='$num', dat_dec='$dat_dec', memb='$memb', file='$name'");
                        
             
                                                                
        break;
            } 
            case 'pv':{
                
         $objet=$_POST['objet'];
         $dat_pv=$_POST['dat_pv'];
         $rap=$_POST['rap'];
        // $file =$_POST['file'];
        $type =$_POST['type'];

        $file=$_FILES['file'];
        $name=$file["name"];

        $mov=  move_uploaded_file($file['tmp_name'], "C:\wamp\www\Projet\CENI\App\admin".'/web/pdf/pvs/'.$name);

                                 
        $sql=$db->query("INSERT INTO pv SET objet='$objet', type='$type', dat_pv='$dat_pv', rap='$rap', file='$name'");
                      
        
                                                        
        break;
                             } 

         case 'rapport':{
                                
        $objet=$_POST['objet'];
        $dat_rap=$_POST['dat_rap'];
        $rap=$_POST['rap'];
        // $file =$_POST['file'];
        $type =$_POST['type'];

        $file=$_FILES['file'];
        $name=$file["name"];

        $mov=  move_uploaded_file($file['tmp_name'], "C:\wamp\www\Projet\CENI\App\admin".'/web/pdf/rapports/'.$name);

                                                 
        $sql=$db->query("INSERT INTO rapport SET objet='$objet', type='$type', dat_rap='$dat_rap', rap='$rap', file='$name'");
                
        
                                                                        
        break;
        } 
        case 'cadre':{
        $type =$_POST['type'];
        // $file =$_POST['file'];

        $file=$_FILES['file'];
        $name=$file["name"];

        $mov=  move_uploaded_file($file['tmp_name'], "C:\wamp\www\Projet\CENI\App\admin".'/web/pdf/cadres/'.$name);

        $sql=$db->query("INSERT INTO cadr_leg SET type='$type', file='$name'");

        
        
            break;
    } 
    case 'reglement':{
    $niveau =$_POST['niveau'];
    $peri =$_POST['peri'];
    // $file =$_POST['file'];

    $file=$_FILES['file'];
    $name=$file["name"];

    $mov=  move_uploaded_file($file['tmp_name'], "C:\wamp\www\Projet\CENI\App\admin".'/web/pdf/reglements/'.$name);

    $sql=$db->query("INSERT INTO reglement SET niveau='$niveau', peri_reg='$peri', file='$name'");
    
    
        break;}
        default:{
            echo "aucun action";
        }
    }


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
                        <a href="#" data-toggle="dropdown">Membre <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                        <li><a href="membre.php">Insertion</a></li>
                            <li><a href="list_memb.php">Voir membres</a></li>

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
                        <a class="active" href="#" data-toggle="dropdown">Documents <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="document.php">gestion documents</a></li>

                        </ul>
                    </li>
                    <!-- Search form ends -->

                    <!-- Mobile Menu Start -->
                   
                    <!-- Mobile Menu End -->

            </div>
    </nav>
    <!-- Navbar End -->

</header>

<body>

<div class="container" style="margin-top:20px;">
        <div class="col-md-12">
       
        <div class="col-md-6">

                         <label for="choix">Veuillez choisir le document</label>
                         <select class="form-control" name="" id="select" required="required">
                            <option value="arret">Arrêt</option>
                            <option value="arrete">Arrêté</option>
                            <option value="cadre">Cadre légale</option>
                            <option value="contrat">Contrat</option>
                            <option value="decision">Décision</option>
                            <option value="decret">Décret</option>
                            <option value="pv">PV</option>
                            <option value="rapport">Rapport</option>
                            <option value="reglement">Réglement</option>
                        
                         </select>
                        </div>

        </div>

        <div class="row">
 
        <form action="document.php" method="POST" enctype="multipart/form-data" role="form">

       
                         
                <div id="formInput">

                <legend style="text-align:center;">Insertion d'arrêt</legend>
                          <div class="col-md-6">
                          
                                <label for="tel1">Portant</label>
                                <input type="text" name="port_arret" class="form-control" placeholder="" value="" required> 
                          </div>

                          <div class="col-md-6">
                                <label for="num_arret">Numéro arrêt</label>
                                <input type="text" name="num_arret" class="form-control" placeholder="" value="" required>                
                          </div>

                          <div class="col-md-6">
                                <label for="dat_arret">Date d'arrêt</label>
                                <input type="date" name="dat_arret" class="form-control" placeholder="" value="" required>                
                          </div>

                          <div class="custom-file" >
                                <input type="file" name="file" class="custom-file-input"  placeholder="" required>
                     
                         </div>

                         <div class="form-group">
            
                                 <input type="hidden" name="action" value="arret" class="form-control" id="" placeholder="Input field">
                           </div>
                           <button type="submit" class="btn btn-primary">Ajouter</button>
                           <button type="reset" class="btn btn-danger">Vider</button>


                                                   
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 style="text-align:center;">Liste Arrêts</h1>


           
            
                <input class="form-control form-control-sm keyword" name="ress" value="" placeholder="Recherche" type="text">
               
              

            <div id="resultat" class="table-responsive">
               
               
                                
                <table id="mytabel" class="table table-borded table-striped">

                    <thead>
                        <th>Portant</th>
                        <th>Numéro</th>
                        <th>Date de l'arrêt</th>
                        <th style="text-align:center;">Actions</th>                      
                    </thead>
                    <tbody>
                    <?php foreach($arrets as $arret): ?>

                    <tr>
                        
                        <td><?= $arret['portant']; ?></td>
                        <td><?= $arret['num_at']; ?></td>
                        <td><?= $arret['dat_at']; ?></td>
                        
                        <td><p data-placement="top" data-toggle="tooltip" tilte="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span><a style="text-decoration:none;" href="cand_edit.php?id=<?= $cand['id_cand']; ?>">Modifier</a></button></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" tilte="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span><a style="text-decoration:none;" href="?sup=<?= $arret['id_at']; ?>" onclick="return confirm('Etes-vous sur de supprimer ?')">Supprimer</a></button></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" tilte="Delete"><button class="btn btn-default btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-plus"></span><a style="text-decoration:none;" href="web/viewer.html?file=pdf/arrets/<?= $arret['file']; ?>">Voir</a></button></p></td>
                    
                    </tr>

                    <?php endforeach; ?>

                    <tr>
               
            
            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
                </div>
        </form>
        </div>
</div>
<!-- 
<select name="" id="select" class="form-control" required="required">
    <option value="contrat">Inserer Cont</option>
    <option value="personne">Inserer Perso</option>
</select>

<form action="document.php" method="POST" role="form">
    <div id="formInput">
        <legend>Insertion personne</legend>

        <div class="form-group">
            <label for="">label</label>
            <input type="text" name="nom"  class="form-control" id="" placeholder="Input field">
        </div>

        <div class="form-group">
            
            <input type="hidden" name="action" value="contrat" class="form-control" id="" placeholder="Input field">
        </div>
    </div>    

    <button type="submit" class="btn btn-primary">Submit</button>
</form> -->

<div>
        <!-- Footer Section -->
        <footer>
    
            <!-- Container Ends -->
    
            <!-- Copyright -->
            <div id="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
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

        </div>

<script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/color-switcher.js"></script>
    <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
    <script type="text/javascript" src="assets/js/wow.js"></script>
    <script type="text/javascript" src="assets/js/nivo-lightbox.min.js"></script>
    <script type="text/javascript" src="assets/js/form-validator.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
  
    <script>
        $(function () {
            $('#select').on( 'change' , function( e ){
                $.ajax({
                    url: 'form1.php',
                    type: 'POST',
                    data: { action: $(this).val()},
                    dataType: 'HTML',
                    success: function( data ){
                        $('#formInput').html(data);
                    },
                    error: function( error ){
                        alert( error );
                    }
                })
            })
        })
    </script>

</body>
</html>

