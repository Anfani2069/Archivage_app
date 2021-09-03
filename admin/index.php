
<?php include '../lib/includes.php';?>

<?php include '../partials/header.php';?>


<?php 

if (isset($_POST['action'])) { 
    $action = $_POST['action'];
 
    switch ($action) {
       case 'ressource':{
          echo("je");  
        break;
       }
    default:
    }
}



 ?>

<!-- Header area wrapper End -->

<!-- Start Content Section -->


<!-- End Content Section  -->

<!-- Activity Area Start -->

    <!-- end intro section -->
   <!-- Start intro section -->
   <section id="intro" class="section-intro">
        <div class="overlay">
            <div class="container">
                <div class="main-text">
                    <h1 class="intro-title"><span style="color: #3498DB">CENI</span></h1>

                    
                    <!-- Start Search box -->
                    <div class="row search-bar">
                        <div class="advanced-search">
                            
                                <div class="col-md-3 col-sm-6 search-col">
                                    <div class="input-group-addon search-category-container">
                                        <label class="styled-select">
                          <select class="dropdown-product selectpicker" name="product-cat" id="select" >
                          
                            <option value="ressource">RessourceHumaine</option>
                            <option value="Documents">Documents</option>
                           
                          </select>                                    
                        </label>
                                    </div>
                                </div>

                    <form action="index.php" method="POST" role="form">

                         <div id="formInput">
                                
                                <div class="col-md-3 col-sm-6 search-col">
                                    <input class="form-control form-control-sm keyword" name="rech" value="" placeholder="Recherche" type="text">
                                    <i class="fa fa-search"></i>
                                </div>
                                <div class="col-md-3 col-sm-6 search-col">
                                    <button class="btn btn-common btn-search btn-block"><strong>Chercher</strong></button>
                                </div>

                                <div class="form-group">
            
                                 <input type="hidden" name="action" value="ressource" class="form-control" id="" placeholder="Input field">
                           </div>
                       </div>
                    </form>
                        </div>
                    </div>
                    <!-- End Search box -->
                </div>
            </div>
        </div>
    </section>
    <!-- <section >



        <div  id="resultat" class="table-responsive">
                
        
    
    </div>

    </section> -->

<!-- Activity Area End -->

<!-- Start Content Section -->

<!-- End Content Section  -->

<!-- Courses Section Start -->


<!-- Courses Section End -->

<!-- Start Content Section -->

<!-- End Content Section  -->

<!-- Why Choose section Start -->


<!-- Why Choose section End -->

<!-- NewsLetter Section Start -->


<!-- NewsLetter Section End -->

<!-- Footer Section -->

<!-- include '../lib/debug.php'; -->
<?php include '../partials/footer.php';?>