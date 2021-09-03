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

$select= $db->query('SELECT * FROM arret ORDER BY portant ASC');
$arrets=$select->fetchAll();

// on change le critere , resultat, rech et on copie le script de js

if (isset($_GET['critere'])) {
    
        $q=$_GET['critere'];
    
        $req=$db->query("SELECT * FROM arret WHERE  portant LIKE '%". $q . "%'");
        // $req->execute(array($critere));
    
        $table=$req->fetchAll();
    
        if (count($table)>0) {
           echo count($table)." resultat(s) trouvé(s)";
?>

<table id="mytabel" class="table table-borded table-striped">

                    <thead>
                        <th>Portant</th>
                        <th>Numero</th>
                        <th>Date de l'arret</th>
                        <th style="text-align:center;">Actions</th>                      
                    </thead>
                    <tbody>
                    <?php foreach($table as $arret): ?>

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

<?php

        }
    
    }

$select= $db->query('SELECT * FROM arrete ORDER BY portant ASC');
$arretes=$select->fetchAll();
             
        if (isset($_GET['critere1'])) {
            
                $q=$_GET['critere1'];
            
                $req=$db->query("SELECT * FROM arrete WHERE  portant LIKE '%". $q . "%'");
                // $req->execute(array($critere));
            
                $table=$req->fetchAll();
            
                if (count($table)>0) {
                   echo count($table)." resultat(s) trouvé(s)";
        ?>
        
                          
        <table id="mytabel" class="table table-borded table-striped">
        
                            <thead>
                                <th>Portant</th>
                                <th>Numero</th>
                                <th>Date de l'arrete</th>
                                <th style="text-align:center;">Actions</th>                      
                            </thead>
                            <tbody>
                            <?php foreach($table as $arrete): ?>
        
                            <tr>
                                
                                <td><?= $arrete['portant']; ?></td>
                                <td><?= $arrete['num_art']; ?></td>
                                <td><?= $arrete['dat_art']; ?></td>
                                
                                <td><p data-placement="top" data-toggle="tooltip" tilte="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span><a style="text-decoration:none;" href="cand_edit.php?id=<?= $arrete['id_cand']; ?>">Modifier</a></button></p></td>
                                <td><p data-placement="top" data-toggle="tooltip" tilte="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span><a style="text-decoration:none;" href="?sup1=<?= $arrete['id_art']; ?>" onclick="return confirm('Etes-vous sur de supprimer ?')">Supprimer</a></button></p></td>
                                <td><p data-placement="top" data-toggle="tooltip" tilte="Delete"><button class="btn btn-default btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-plus"></span><a style="text-decoration:none;" href="web/viewer.html?file=pdf/arretes<?= $arrete['file']; ?>" target="_blank">Voir</a></button></p></td>
                            
                            </tr>
        
                            <?php endforeach; ?>
        
                            <tr>
                       
                    
                    </tr>
                            </tbody>
                        </table>
        
        
        <?php
                }
            
            }
         
    


$select= $db->query('SELECT * FROM contrat ORDER BY title ASC');
$contrats=$select->fetchAll();

      
if (isset($_GET['critere2'])) {
    
        $q=$_GET['critere2'];
    
        $req=$db->query("SELECT * FROM contrat WHERE  title LIKE '%". $q . "%' OR memb LIKE '%". $q . "%'");
        // $req->execute(array($critere));
    
        $table=$req->fetchAll();
    
        if (count($table)>0) {
           echo count($table)." resultat(s) trouvé(s)";
?>

                 
<table id="mytabel" class="table table-borded table-striped">

                    <thead>
                        <th>Titre</th>
                        <th>Type</th>
                        <th>Membre</th>
                        <th style="text-align:center;">Actions</th>                      
                    </thead>
                    <tbody>
                    <?php foreach($table as $contrat): ?>

                    <tr>
                        
                        <td><?= $contrat['title']; ?></td>
                        <td><?= $contrat['type_cont']; ?></td>
                        <td><?= $contrat['memb']; ?></td>
                        
                        <td><p data-placement="top" data-toggle="tooltip" tilte="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span><a style="text-decoration:none;" href="cand_edit.php?id=<?= $contrat['']; ?>">Modifier</a></button></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" tilte="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span><a style="text-decoration:none;" href="?sup2=<?= $contrat['id_cnt']; ?>" onclick="return confirm('Etes-vous sur de supprimer ?')">Supprimer</a></button></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" tilte="Delete"><button class="btn btn-default btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-plus"></span><a style="text-decoration:none;"  href="web/viewer.html?file=pdf/contrats/<?= $contrat['file_cont']; ?>">Voir</a></button></p></td>
                    
                    </tr>

                    <?php endforeach; ?>

                    <tr>
               
            
            </tr>
                    </tbody>
                </table>


<?php
        }
    
    }
 

$select= $db->query('SELECT * FROM cadr_leg ORDER BY type ASC');
$cadres=$select->fetchAll();


$select= $db->query('SELECT * FROM decision ORDER BY portant ASC');
$decis=$select->fetchAll();


$select= $db->query('SELECT * FROM decret ORDER BY portant ASC');
$decs=$select->fetchAll();


$select= $db->query('SELECT * FROM pv ORDER BY type ASC');
$pvs=$select->fetchAll();

$select= $db->query('SELECT * FROM rapport ORDER BY type ASC');
$raps=$select->fetchAll();


$select= $db->query('SELECT * FROM reglement ORDER BY niveau ASC');
$regs=$select->fetchAll();



if (isset($_POST['action'])) {
    $action = $_POST['action'];

    switch ($action) {
        case 'arret':{

                            ?>
                
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


           
            
                <input class="form-control form-control-sm keyword" name="rech" value="" placeholder="Recherche" type="text">
               
               
            <div id="resultat0" class="table-responsive">
                
                                
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


            <?php
            break;
        }
        case 'arrete':{
            ?>
                <legend style="text-align:center;">Insertion d'arrêté</legend>
                <div class="col-md-6">
                        <label for="tel1">Portant</label>
                        <input type="text" name="port_arrete" class="form-control" placeholder="" value="" required> 
                </div>

                <div class="col-md-6">
                        <label for="num_arret">Numéro arrêté</label>
                        <input type="text" name="num_arrete" class="form-control" placeholder="" value="" required>                
                </div>

                <div class="col-md-6">
                        <label for="dat_arret">Date d'arrêté</label>
                        <input type="date" name="dat_arrete" class="form-control" placeholder="" value="" required>                
                </div>

                <div class="custom-file" >
                        <input type="file" name="file" class="custom-file-input"  placeholder="" required>
            
                </div>

                <div class="form-group">
            
                                 <input type="hidden" name="action" value="arrete" class="form-control" id="" placeholder="Input field">
                           </div>
                           <button type="submit" class="btn btn-primary">Ajouter</button>
                        <button type="reset" class="btn btn-danger">Vider</button>


                        <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 style="text-align:center;">Liste Arretes</h1>


            
                <input class="form-control form-control-sm keyword" name="rech1" value="" placeholder="Recherche" type="text">
               
               
            <div id="resultat"  class="table-responsive">
               
                                
                <table id="mytabel" class="table table-borded table-striped">

                    <thead>
                        <th>Portant</th>
                        <th>Numéro</th>
                        <th>Date de l'arrêté</th>
                        <th style="text-align:center;">Actions</th>                      
                    </thead>
                    <tbody>
                    <?php foreach($arretes as $arrete): ?>

                    <tr>
                        
                        <td><?= $arrete['portant']; ?></td>
                        <td><?= $arrete['num_art']; ?></td>
                        <td><?= $arrete['dat_art']; ?></td>
                        
                        <td><p data-placement="top" data-toggle="tooltip" tilte="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span><a style="text-decoration:none;" href="cand_edit.php?id=<?= $arrete['id_cand']; ?>">Modifier</a></button></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" tilte="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span><a style="text-decoration:none;" href="?sup1=<?= $arrete['id_art']; ?>" onclick="return confirm('Etes-vous sur de supprimer ?')">Supprimer</a></button></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" tilte="Delete"><button class="btn btn-default btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-plus"></span><a style="text-decoration:none;" href="web/viewer.html?file=pdf/arretes/<?= $arrete['file']; ?>" target="_blank">Voir</a></button></p></td>
                    
                    </tr>

                    <?php endforeach; ?>

                    <tr>
               
            
            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
            <?php

            break;
        }

        case 'contrat':{
            ?>
                <legend style="text-align:center;">Insertion de contrat</legend>
                <div class="col-md-6">
                        <label for="tel1">Titre du contrat</label>
                        <input type="text" name="title" class="form-control" placeholder="" value="" required> 
                </div>

                <div class="col-md-6">
                        <label for="num_arret">Type de contrat</label>
                        <input type="text" name="type" class="form-control" placeholder="" value="" required>                
                </div>

                <div class="col-md-6">
                        <label for="dat_arret">membre</label>
                        <input type="text" name="memb" class="form-control" placeholder="" value="" required>                
                </div>

                <div class="custom-file" >
                        <input type="file" name="file" class="custom-file-input"  placeholder="" required>
            
                </div>

                <div class="form-group">
            
                                 <input type="hidden" name="action" value="contrat" class="form-control" id="" placeholder="Input field">
                           </div>
                
                           <button type="submit" class="btn btn-primary">Ajouter</button>
                        <button type="reset" class="btn btn-danger">Vider</button>


                        
                        <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 style="text-align:center;">Liste des Contrats</h1>


            
                <input class="form-control form-control-sm keyword" name="rech2" value="" placeholder="Recherche" type="text">
               
           

            <div id="resultat1" class="table-responsive">
               
                                
                <table id="mytabel" class="table table-borded table-striped">

                    <thead>
                        <th>Titre</th>
                        <th>Type</th>
                        <th>Membre</th>
                        <th style="text-align:center;">Actions</th>                      
                    </thead>
                    <tbody>
                    <?php foreach($contrats as $contrat): ?>

                    <tr>
                        
                        <td><?= $contrat['title']; ?></td>
                        <td><?= $contrat['type_cont']; ?></td>
                        <td><?= $contrat['memb']; ?></td>
                        
                        <td><p data-placement="top" data-toggle="tooltip" tilte="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span><a style="text-decoration:none;" href="cand_edit.php?id=<?= $contrat['']; ?>">Modifier</a></button></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" tilte="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span><a style="text-decoration:none;" href="?sup2=<?= $contrat['id_cnt']; ?>" onclick="return confirm('Etes-vous sur de supprimer ?')">Supprimer</a></button></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" tilte="Delete"><button class="btn btn-default btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-plus"></span><a style="text-decoration:none;"  href="web/viewer.html?file=pdf/contrats/<?= $contrat['file_cont']; ?>">Voir</a></button></p></td>
                    
                    </tr>

                    <?php endforeach; ?>

                    <tr>
               
            
            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

            <?php

            break;
        }

        case 'cadre':{
            ?>
                <legend style="text-align:center;">Insertion d'un Cadre legal</legend>
               

                <div class="col-md-6">
                        <label for="num_arret">Type de cadre</label>
                        <input type="text" name="type" class="form-control" placeholder="" value="" required>                
                </div>


                <div class="custom-file col-md-6" >
                        <input type="file" name="file" class="custom-file-input"  placeholder="" required>
            
                </div>

                <div class="form-group">
            
                                 <input type="hidden" name="action" value="cadre" class="form-control" id="" placeholder="Input field">
                           </div>
                           <button type="submit" class="btn btn-primary">Ajouter</button>
                        <button type="reset" class="btn btn-danger">Vider</button>

                        
                        <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 style="text-align:center;">Liste cadre légale</h1>


            
                <input class="form-control form-control-sm keyword" name="ress" value="" placeholder="Recherche" type="text">
               
                
                          

            <div class="table-responsive">
                     
                <table id="mytabel" class="table table-borded table-striped">

                    <thead>
                        <th>Type</th>
                        
                        <th style="text-align:center;">Actions</th>                      
                    </thead>
                    <tbody>
                    <?php foreach($cadres as $cadre): ?>

                    <tr>
                        
                        <td><?= $cadre['type']; ?></td>
                        
                        
                        <td><p data-placement="top" data-toggle="tooltip" tilte="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span><a style="text-decoration:none;" href="cand_edit.php?id=<?= $cadre['']; ?>">Modifier</a></button></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" tilte="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span><a style="text-decoration:none;" href="?sup3=<?= $cadre['id_cadr']; ?>" onclick="return confirm('Etes-vous sur de supprimer ?')">Supprimer</a></button></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" tilte="Delete"><button class="btn btn-default btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-plus"></span><a style="text-decoration:none;" href="web/viewer.html?file=pdf/cadres/<?= $cadre['file']; ?>" target="_blank">Voir</a></button></p></td>
                    
                    </tr>

                    <?php endforeach; ?>

                    <tr>
               
            
            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
            <?php

            break;
        }

        case 'decision':{
            ?>
                <legend style="text-align:center;">Insertion de décision</legend>
                <div class="col-md-6">
                        <label for="tel1">Portant</label>
                        <input type="text" name="port_deci" class="form-control" placeholder="" value="" required> 
                </div>

                <div class="col-md-6">
                        <label for="num_arret">Numéro décision</label>
                        <input type="text" name="num_deci" class="form-control" placeholder="" value="" required>                
                </div>

                <div class="col-md-6">
                        <label for="dat_arret">Date de décision</label>
                        <input type="date" name="dat_deci" class="form-control" placeholder="" value="" required>                
                </div>
                <div class="col-md-6">
                        <label for="dat_arret">membre</label>
                        <input type="text" name="memb" class="form-control" placeholder="" value="" required>                
                </div>

                <div class="custom-file" >
                        <input type="file" name="file" class="custom-file-input"  placeholder="" required>
            
                </div>

                <div class="form-group">
            
                                 <input type="hidden" name="action" value="decision" class="form-control" id="" placeholder="Input field">
                           </div>
                           <button type="submit" class="btn btn-primary">Ajouter</button>
                        <button type="reset" class="btn btn-danger">Vider</button>


                        
                        <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 style="text-align:center;">Liste des décisions</h1>


            
                <input class="form-control form-control-sm keyword" name="ress" value="" placeholder="Recherche" type="text">
               
               
                         

            <div class="table-responsive">
                       
                <table id="mytabel" class="table table-borded table-striped">

                    <thead>
                        <th>Portant</th>
                        <th>Numéro</th>
                        <th>Membre</th>
                        <th>Date de décision</th>
                        <th style="text-align:center;">Actions</th>                      
                    </thead>
                    <tbody>
                    <?php foreach($decis as $deci): ?>

                    <tr>
                        
                        <td><?= $deci['portant']; ?></td>
                        <td><?= $deci['num_deci']; ?></td>
                        <td><?= $deci['memb']; ?></td>
                        <td><?= $deci['dat_deci']; ?></td>
                        
                        <td><p data-placement="top" data-toggle="tooltip" tilte="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span><a style="text-decoration:none;" href="cand_edit.php?id=<?= $dec['']; ?>">Modifier</a></button></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" tilte="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span><a style="text-decoration:none;" href="?sup4=<?= $deci['id_deci']; ?>" onclick="return confirm('Etes-vous sur de supprimer ?')">Supprimer</a></button></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" tilte="Delete"><button class="btn btn-default btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-plus"></span><a style="text-decoration:none;" href="web/viewer.html?file=pdf/decisions/<?= $deci['file']; ?>" target="_blank">Voir</a></button></p></td>
                    
                    </tr>

                    <?php endforeach; ?>

                    <tr>
               
            
            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

            <?php

            break;
        }

        case 'decret':{
            ?>
                <legend style="text-align:center;">Insertion de décret</legend>
                <div class="col-md-6">
                        <label for="tel1">Portant</label>
                        <input type="text" name="port_dec" class="form-control" placeholder="" value="" required> 
                </div>

                <div class="col-md-6">
                        <label for="num_arret">Numéro décret</label>
                        <input type="text" name="num_dec" class="form-control" placeholder="" value="" required>                
                </div>

                <div class="col-md-6">
                        <label for="dat_arret">Date de décret</label>
                        <input type="date" name="dat_dec" class="form-control" placeholder="" value="" required>                
                </div>
                <div class="col-md-6">
                        <label for="dat_arret">membre</label>
                        <input type="text" name="memb" class="form-control" placeholder="" value="" required>                
                </div>

                <div class="custom-file" >
                        <input type="file" name="file" class="custom-file-input"  placeholder="" required>
            
                </div>

                <div class="form-group">
            
                                 <input type="hidden" name="action" value="decret" class="form-control" id="" placeholder="Input field">
                           </div>
                           <button type="submit" class="btn btn-primary">Ajouter</button>
                        <button type="reset" class="btn btn-danger">Vider</button>

                          
                        <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 style="text-align:center;">Liste des décrets</h1>


          
                <input class="form-control form-control-sm keyword" name="ress" value="" placeholder="Recherche" type="text">
               
                

            <div class="table-responsive">
                
                                
                <table id="mytabel" class="table table-borded table-striped">

                    <thead>
                        <th>Portant</th>
                        <th>Numéro</th>
                        <th>Membre</th>
                        <th>Date du décret</th>
                        <th style="text-align:center;">Actions</th>                      
                    </thead>
                    <tbody>
                    <?php foreach($decs as $dec): ?>

                    <tr>
                        
                        <td><?= $dec['portant']; ?></td>
                        <td><?= $dec['num_dec']; ?></td>
                        <td><?= $dec['memb']; ?></td>
                        <td><?= $dec['dat_dec']; ?></td>
                        
                        <td><p data-placement="top" data-toggle="tooltip" tilte="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span><a style="text-decoration:none;" href="cand_edit.php?id=<?= $dec['']; ?>">Modifier</a></button></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" tilte="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span><a style="text-decoration:none;" href="?sup5=<?= $dec['id_dec']; ?>" onclick="return confirm('Etes-vous sur de supprimer ?')">Supprimer</a></button></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" tilte="Delete"><button class="btn btn-default btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-plus"></span><a style="text-decoration:none;" href="web/viewer.html?file=pdf/decrets/<?= $dec['file']; ?>">Voir</a></button></p></td>
                    
                    </tr>

                    <?php endforeach; ?>

                    <tr>
               
            
            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

            <?php

            break;
        }

        case 'pv':{
            ?>
                <legend style="text-align:center;">Insertion De PV</legend>
                <div class="col-md-6">
                        <label for="tel1">Type</label>
                        <input type="text" name="type" class="form-control" placeholder="" value="" required> 
                </div>

                <div class="col-md-6">
                        <label for="num_arret">Objet</label>
                        <input type="text" name="objet" class="form-control" placeholder="" value="" required>                
                </div>

                <div class="col-md-6">
                        <label for="dat_arret">Date du PV</label>
                        <input type="date" name="dat_pv" class="form-control" placeholder="" value="" required>                
                </div>
                <div class="col-md-6">
                        <label for="dat_arret">Raporteur</label>
                        <input type="text" name="rap" class="form-control" placeholder="" value="" required>                
                </div>

                <div class="custom-file" >
                        <input type="file" name="file" class="custom-file-input"  placeholder="" required>
            
                </div>
                <div class="form-group">
            
                                 <input type="hidden" name="action" value="pv" class="form-control" id="" placeholder="Input field">
                           </div>
                           <button type="submit" class="btn btn-primary">Ajouter</button>
                        <button type="reset" class="btn btn-danger">Vider</button>


                          
                        <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 style="text-align:center;">Liste des PVs</h1>


          
                <input class="form-control form-control-sm keyword" name="ress" value="" placeholder="Recherche" type="text">
               
                
                         

            <div class="table-responsive">
                     
                <table id="mytabel" class="table table-borded table-striped">

                    <thead>
                        <th>Type</th>
                        <th>Objet</th>
                        <th>Rapporteur</th>
                        <th>Date du PV</th>
                        <th style="text-align:center;">Actions</th>                      
                    </thead>
                    <tbody>
                    <?php foreach($pvs as $pv): ?>

                    <tr>
                        
                        <td><?= $pv['type']; ?></td>
                        <td><?= $pv['objet']; ?></td>
                        <td><?= $pv['rap']; ?></td>
                        <td><?= $pv['dat_pv']; ?></td>
                        
                        <td><p data-placement="top" data-toggle="tooltip" tilte="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span><a style="text-decoration:none;" href="cand_edit.php?id=<?= $pv['']; ?>">Modifier</a></button></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" tilte="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span><a style="text-decoration:none;" href="?sup6=<?= $pv['id_pv']; ?>" onclick="return confirm('Etes-vous sur de supprimer ?')">Supprimer</a></button></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" tilte="Delete"><button class="btn btn-default btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-plus"></span><a style="text-decoration:none;" href="web/viewer.html?file=pdf/pvs/<?= $pv['file']; ?>">Voir</a></button></p></td>
                    
                    </tr>

                    <?php endforeach; ?>

                    <tr>
               
            
            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

            <?php

            break;
        }

        case 'rapport':{
            ?>
                <legend style="text-align:center;">Insertion de Rapport</legend>
                <div class="col-md-6">
                        <label for="tel1">Type</label>
                        <input type="text" name="type" class="form-control" placeholder="" value="" required> 
                </div>

                <div class="col-md-6">
                        <label for="num_arret">Objet</label>
                        <input type="text" name="objet" class="form-control" placeholder="" value="" required>                
                </div>

                <div class="col-md-6">
                        <label for="dat_arret">Date de rapport</label>
                        <input type="date" name="dat_rap" class="form-control" placeholder="" value="" required>                
                </div>
                <div class="col-md-6">
                        <label for="dat_arret">Rapporteur</label>
                        <input type="text" name="rap" class="form-control" placeholder="" value="" required>                
                </div>

                <div class="custom-file" >
                        <input type="file" name="file" class="custom-file-input"  placeholder="" required>
            
                </div>

                <div class="form-group">
            
                                 <input type="hidden" name="action" value="rapport" class="form-control" id="" placeholder="Input field">
                           </div>
                           <button type="submit" class="btn btn-primary">Ajouter</button>
                        <button type="reset" class="btn btn-danger">Vider</button>


                          
                        <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 style="text-align:center;">Liste des rapports</h1>


           
                <input class="form-control form-control-sm keyword" name="ress" value="" placeholder="Recherche" type="text">
               
                

            <div class="table-responsive">
                
                                
                <table id="mytabel" class="table table-borded table-striped">

                    <thead>
                        <th>Type</th>
                        <th>Objet</th>
                        <th>Rapporteur</th>
                        <th>Date de rapport</th>
                        <th style="text-align:center;">Actions</th>                      
                    </thead>
                    <tbody>
                    <?php foreach($raps as $rap): ?>

                    <tr>
                        
                        <td><?= $rap['type']; ?></td>
                        <td><?= $rap['objet']; ?></td>
                        <td><?= $rap['rap']; ?></td>
                        <td><?= $rap['dat_rap']; ?></td>
                        
                        <td><p data-placement="top" data-toggle="tooltip" tilte="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span><a style="text-decoration:none;" href="cand_edit.php?id=<?= $rap['']; ?>">Modifier</a></button></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" tilte="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span><a style="text-decoration:none;" href="?sup7=<?= $rap['id_rap']; ?>" onclick="return confirm('Etes-vous sur de supprimer ?')">Supprimer</a></button></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" tilte="Delete"><button class="btn btn-default btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-plus"></span><a style="text-decoration:none;" href="web/viewer.html?file=pdf/rapports/<?= $rap['file']; ?>">Voir</a></button></p></td>
                    
                    </tr>

                    <?php endforeach; ?>

                    <tr>
               
            
            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

            <?php

            break;
        }

        case 'reglement':{
            ?>
                <legend style="text-align:center;">Insertion de réglement</legend>
                <div class="col-md-6">
                        <label for="tel1">Niveau</label>
                        <input type="text" name="niveau" class="form-control" placeholder="" value="" required> 
                </div>

                <div class="col-md-6">
                        <label for="tel1">Période</label>
                        <input type="text" name="peri" class="form-control" placeholder="2015-2016" value="" required> 
                </div>
                <div class="custom-file" >
                        <input type="file" name="file" class="custom-file-input"  placeholder="" required>
            
                </div>

                <div class="form-group">
            
                                 <input type="hidden" name="action" value="reglement" class="form-control" id="" placeholder="Input field">
                           </div>
                           <button type="submit" class="btn btn-primary">Ajouter</button>
                        <button type="reset" class="btn btn-danger">Vider</button>

                          
                        <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 style="text-align:center;">Liste reglements</h1>


           
                <input class="form-control form-control-sm keyword" name="ress" value="" placeholder="Recherche" type="text">
               
               

            <div class="table-responsive">
                

                
                                
                <table id="mytabel" class="table table-borded table-striped">

                    <thead>
                        <th>Niveau</th>
                        <th>Période</th>
                        <th style="text-align:center;">Actions</th>                      
                    </thead>
                    <tbody>
                    <?php foreach($regs as $reg): ?>

                    <tr>
                        
                        <td><?= $reg['niveau']; ?></td>
                        <td><?= $reg['peri_reg']; ?></td>
                        
                        
                        <td><p data-placement="top" data-toggle="tooltip" tilte="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span><a style="text-decoration:none;" href="cand_edit.php?id=<?= $reg['']; ?>">Modifier</a></button></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" tilte="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span><a style="text-decoration:none;" href="?sup8=<?= $reg['id_reg']; ?>" onclick="return confirm('Etes-vous sur de supprimer ?')">Supprimer</a></button></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" tilte="Delete"><button class="btn btn-default btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-plus"></span><a style="text-decoration:none;" href="web/viewer.html?file=pdf/reglements/<?= $reg['file']; ?>"target="_blank">Voir</a></button></p></td>
                    
                    </tr>

                    <?php endforeach; ?>

                    <tr>
               
            
            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

            <?php

            break;
        }
        default:{
            echo "aucun action";
        }
    }

 }
 ?>

<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script>
$(document).ready(function() {
         var $input=$('input[name=rech]');
         var critere=$.trim($input.val());

         $input.keyup(function(){
                critere=$.trim($input.val());
                
                if(critere!=''){
                    $.get('form1.php?critere='+critere,function(retour){
                        
                        $('#resultat0').html(retour).fadeIn();
                    });
                }else $('#resultat0').html().fadeOut();
         });
     });

</script>
<script>
$(document).ready(function() {
         var $input=$('input[name=rech1]');
         var critere1=$.trim($input.val());

         $input.keyup(function(){
                critere1=$.trim($input.val());
                
                if(critere1!=''){
                    $.get('form1.php?critere1='+critere1,function(retour){
                        
                        $('#resultat').html(retour).fadeIn();
                    });
                }else $('#resultat').html().fadeOut();
         });
     });

</script>
<script>
$(document).ready(function() {
         var $input=$('input[name=rech2]');
         var critere2=$.trim($input.val());

         $input.keyup(function(){
                critere2=$.trim($input.val());
                
                if(critere2!=''){
                    $.get('form1.php?critere2='+critere2,function(retour){
                        
                        $('#resultat1').html(retour).fadeIn();
                    });
                }else $('#resultat1').html().fadeOut();
         });
     });

</script>
</body>
</html>