<footer class="content-info" role="contentinfo">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>


  <div id="footer-v1" class="footer-v1">

    <div class="footer">

        <div class="container">

            <div class="row">

                <div class="col-md-6 md-margin-bottom-40 md-margin-top-20 footer-about" style="padding-top:15px;">

                     <img src="<?php echo get_home_url(); ?>/img/footer-logo.png" alt="Relook my Shop" class="footer-logo-img"/>

                    <div class="headline"><h2>Relook My Shop </h2></div>

                    <p>L'unique agence spécialisée en relooking E-commerce. Relooking total ou habillage évènementiel, Relook My Shop donne de la couleur à votre activité E-commerce.</p>

                </div>

                

                <div class="col-md-3 md-margin-bottom-40" style="padding-top:15px; padding-right:50px;">

                    <div class="posts">

                        <div class="headlinebis"><h2>Menu navigation</h2></div>

                        <ul class="list-unstyled latest-list">

                            <li><a href="<?php echo get_home_url(); ?>/comment-ca-marche/">Comment ça marche</a></li>

                            <li><a href="<?php echo get_home_url(); ?>/galerie/">Galerie</a></li>

                            <li><a href="<?php echo get_home_url(); ?>/services/">Services</a></li>

                            <li><a href="<?php echo get_home_url(); ?>/commande/">Commander</a></li>

                            <li><a href="<?php echo get_home_url(); ?>/contact/">Contact</a></li>

                        </ul>

                    </div>

                </div>  



                <div class="col-md-3 md-margin-bottom-40" style="padding-top:15px; padding-left:50px;">

                    <div class="posts">

                        <div class="headlinebis"><h2>Liens utiles</h2></div>

                        <ul class="list-unstyled latest-list">

                            <li><a href="<?php echo get_home_url(); ?>/faq/">FAQ</a></li>

                            <!--<li><a href="#">Blog</a></li>-->

                            <li><a href="<?php echo get_home_url(); ?>/client-dashboard/">Mon compte</a></li>

                            <li><a href="<?php echo get_home_url(); ?>/cgv/">CGV</a></li>

                            <li><a href="<?php echo get_home_url(); ?>/mentions-legales/">Mentions légales</a></li>

                        </ul>

                    </div>

                </div>



            </div>

        </div> 

    </div><!--/footer-->

    

    <div class="copyright">

        <div class="container">

            <div class="row copyright-border">

                <div class="col-md-12">                     

                    <p class="text-center">

                        www.relookmyshop.com © 2015 | Tous droits réservés

                    </p>

                </div>

            </div>

        </div> 

    </div><!--/copyright-->

</div>



    



    <?php wp_footer(); ?>

    <script type="text/javascript" src="<?php echo get_home_url(); ?>/assets/js/app.js"></script>

    <script type="text/javascript">

        jQuery(document).ready(function() {

            App.init();

            var docHeight = jQuery(window).height();

            var footerHeight = jQuery('#footer-v1').height();

            var footerTop = jQuery('#footer-v1').position().top + footerHeight;



            if (footerTop < docHeight) {

                jQuery('#footer-v1').css('margin-top',  (docHeight - footerTop) + 'px');

            }

        });

    </script>

  
</footer>
