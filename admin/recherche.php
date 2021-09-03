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


<?php

include '../lib/db.php';
include '../lib/form.php';

if (isset($_GET['critere'])) {
    
        $q=$_GET['critere'];
    
        $req=$db->query("SELECT * FROM candidat WHERE nom LIKE '%". $q . "%' OR prenom LIKE '%". $q . "%' OR pst_cand LIKE '%". $q . "%' OR peri_scru LIKE '%". $q . "%' OR pst_elu LIKE '%". $q . "%'");
        // $req->execute(array($critere));
    
        $table=$req->fetchAll();
    
        if (count($table)>0) {
           echo count($table)." resultat(s) trouvé(s)";
?>

<table id="mytabel" class="table table-borded table-striped">
       
                           <thead>
                               <th>Nom</th>
                               <th>Prenom</th>
                               <th>Ile</th>
                               <th>Poste candidat</th>
                               <th style="text-align:center;">Actions</th>                      
                           </thead>
                           <tbody>
                           <?php foreach($table as $cand): ?>
       
                           <tr>
                               
                               <td><?= $cand['nom']; ?></td>
                               <td><?= $cand['prenom']; ?></td>
                               <td><?= $cand['ile']; ?></td>
                               <td><?= $cand['pst_cand']; ?></td>
                               <td><p data-placement="top" data-toggle="tooltip" tilte="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span><a style="text-decoration:none;" href="cand_edit.php?id=<?= $cand['id_cand']; ?>">Modifier</a></button></p></td>
                               <td><p data-placement="top" data-toggle="tooltip" tilte="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span><a style="text-decoration:none;" href="?sup=<?= $cand['id_cand']; ?>" onclick="return confirm('Etes-vous sur de supprimer ?')">Supprimer</a></button></p></td>
                               <td><p data-placement="top" data-toggle="tooltip" tilte="Delete"><button class="btn btn-default btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-plus"></span><a style="text-decoration:none;" href="cand_detail.php?id=<?= $cand['id_cand']; ?>">Details</a></button></p></td>
                           
                           </tr>
       
                           <?php endforeach; ?>
       
                           <tr>
                       <td>
                       <form>
                       <input style="color:gray;"  type="button" class="hidden-print" value="Imprimer" onclick="window.print()"></form>
                       
                       </td>
                   
                   </tr>
                           </tbody>
                       </table>


<?php

        }
    
    }
    ?>
    
</body>
</html>