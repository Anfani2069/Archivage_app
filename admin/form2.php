


<?php
include '../lib/db.php';
include '../lib/form.php';

if (isset($_POST['action'])) {
    $action = $_POST['action'];

    switch ($action) {
        case 'ressource':{
?>
           

           <div class="col-md-3 col-sm-6 search-col">
                                    <input class="form-control form-control-sm keyword" name="ress" value="" placeholder="candidat ou membre" type="text">
                                    <i class="fa fa-search"></i>
                                </div>
                                <div class="col-md-3 col-sm-6 search-col">
                                    <button class="btn btn-common btn-search btn-block"><strong>Chercher</strong></button>
                                </div>
           
                                <div class="form-group">
            
                                 <input type="hidden" name="action" value="Ressource_humaine" class="form-control" id="" placeholder="Input field">
                           </div>

<?php
            break;
        }
        case 'Documents':{
            ?>
            
                                <div class="col-md-3 col-sm-6 search-col">
                                    <input class="form-control form-control-sm keyword" name="keyword" value="" placeholder="contrat ou arret,..." type="text">
                                    <i class="fa fa-search"></i>
                                </div>
                                <div class="col-md-3 col-sm-6 search-col">
                                    <button type="submit" class="btn btn-common btn-search btn-block"><strong>Chercher</strong></button>
                                </div>

                                <div class="form-group">
            
                                 <input type="hidden" name="action" value="Ressource_humaine" class="form-control" id="" placeholder="Input field">
                           </div>
          <?php  
                        break;
                    }
        default:{


        }
    }

}
?>

</html>