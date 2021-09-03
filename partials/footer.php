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



    <!-- jQuery  -->
    <script type="text/javascript" src="asset/js/jquery.min.js"></script>
    <script type="text/javascript" src="asset/js/bootstrap.js"></script>
    <script type="text/javascript" src="asset/js/color-switcher.js"></script>
    <script type="text/javascript" src="asset/js/jquery.mixitup.js"></script>
    <script type="text/javascript" src="asset/js/wow.js"></script>
    <script type="text/javascript" src="asset/js/nivo-lightbox.min.js"></script>
    <script type="text/javascript" src="asset/js/jquery.countdown.js"></script>
    <script type="text/javascript" src="asset/js/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="asset/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="asset/js/form-validator.min.js"></script>
    <script type="text/javascript" src="asset/js/contact-form-script.js"></script>

    <script type="text/javascript" src="asset/js/jquery.slicknav.js"></script>
    <script src="asset/js/main.js"></script>
    <script src="asset/js/bootstrap-select.min.js"></script>

    <script>
        $(function () {
            $('#select').on( 'change' , function( e ){
                $.ajax({
                    url: 'form2.php',
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

<script>
$(document).ready(function() {
         var $input=$('input[name=rech]');
         var critere=$.trim($input.val());

         $input.keyup(function(){
                critere=$.trim($input.val());
                
                if(critere!=''){
                    $.get('recherche.php?critere='+critere,function(retour){
                        
                        $('#resultat').html(retour).fadeIn();
                    });
                }else $('#resultat').html().fadeOut();
         });
     });

</script>

</body>

</html>