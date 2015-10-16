<?php /* Template Name: Comment ca marche */ 
get_header(); ?>

    <div class="container-fluid container-title blue-title">
        <div class="col-md-12 text-center title-wrap">
            <h2>C'est super simple ;)</h2>
        </div>
    </div>
        
    <div class="container page-content">
        <div class="container">
            <h3>QUE FAISONS NOUS ?</h3>
            <div class="col-md-4 text-center">
                <div class="inner" style="margin: 100px 0;">
                    <img src="<?php echo get_home_url(); ?>/img/habillage.png" alt="Habillage" />
                    <p class="que-faisons-nous"><a class="relooking-link" href="#"><strong>Habillage</strong><br>évènementiel</a></p>
                    <div class="qfn-desc" style="display:none;">
                        <p class="qfn-detail">Recevez votre design <br><span>SUR MESURE</span> en moins de <span>48h</span><br> au format de votre choix <br><br><em>*option d'intégration possible</em></p>
                        <p class="qfn-bouton"><em>A partir de 499€</em><br><span>EN SAVOIR PLUS </span></p>
                    </div>
                </div>
            </div>
           
            <div class="col-md-4 text-center">
                <div class="inner" style="margin: 100px 0;">
                    <img src="<?php echo get_home_url(); ?>/img/emailing.png" alt="Emailing" />
                    <p class="que-faisons-nous"><a class="relooking-link" href="#">Design<br><strong>e-mailing</strong></a></p>
                    <div class="qfn-desc" style="display:none;">
                        <p class="qfn-detail">Recevez votre design <br><span>SUR MESURE</span> en moins de <span>48h</span><br> au format de votre choix <br><br><em>*option d'intégration possible</em></p>
                        <p class="qfn-bouton"><em>A partir de 499€</em><br><span>EN SAVOIR PLUS </span></p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 text-center">
                <div class="inner" style="margin: 100px 0;">
                    <img src="<?php echo get_home_url(); ?>/img/relooking.png" alt="Relooking total" />
                    <p class="que-faisons-nous"><a class="relooking-link" href="#"><strong>Relooking</strong> total<br>de votre e-shop</a></p>
                    <div class="qfn-desc" style="display:none;">
                        <p class="qfn-detail">Recevez votre design <br><span>SUR MESURE</span> en moins de <span>48h</span><br> au format de votre choix <br><br><em>*option d'intégration possible</em></p>
                        <p class="qfn-bouton"><em>A partir de 499€</em><br><span>EN SAVOIR PLUS </span></p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container" style="margin-top:50px;">
            <h3 style="margin-bottom:-30px;">COMMENT TRAVAILLONS NOUS ?</h3>
            <div class="col-md-12">
                <img src="<?php echo get_home_url(); ?>/img/schema.png" alt="Comment travaillons nous ?" class="img-responsive"/>
            </div>
        </div>
        
        <div class="container" style="margin-top:50px;">
            <div class="col-md-12" style="background:url('<?php echo get_home_url(); ?>/img/commandez.png') no-repeat center center; height : 92px;">
               <a class="text-center" style="color:white;   line-height: 92px; font-size:18px; display:block;" href="<?php echo get_home_url(); ?>/commande/"><strong>Commandez votre design</strong></a>
            </div>
        </div>
    </div>
    
    <script type="text/javascript">
        jQuery( ".inner" ).hover(
          function() {
            jQuery( this ).find(".qfn-desc").show();
            jQuery( this ).addClass("qfn-show");
            jQuery( this ).css("margin", "0");
          }, function() {
            jQuery( this ).find(".qfn-desc").hide();
            jQuery( this ).removeClass("qfn-show");
             jQuery( this ).css("margin", "100px 0");
          }
        );
    </script>
    

<?php get_footer(); ?>