<?php /* Template Name: Services */ 
get_header(); ?>

    <div class="container-fluid container-title blue-title">
        <div class="col-md-12 text-center title-wrap">
            <h2>On fait quoi ?</h2>
        </div>
    </div>
        
    <div class="container page-content">
        <div class="container">
            <div class="col-sm-3">
                <div>
                    <a href="#" class="services-bouton-active">HABILLAGE ÉVÈNEMENTIEL</a>
                </div>
            </div>
            
            <div class="col-sm-3">
                <div>
                    <a href="#" class="services-bouton">E-MAILING</a>
                </div>
            </div>
            
            <div class="col-sm-3">
                <div>
                    <a href="#" class="services-bouton">RELOOKING TOTAL</a>
                </div>
            </div>
        </div>
        
        <div class="container content-services">
            <div class="col-md-6">
                <img src="<?php echo get_home_url(); ?>/img/service-habillage.png" alt="Habillage" class="animated bounceInRight img-responsive"/>
            </div>
            <div class="col-md-6"><br><br><br>
                <h2>Habillage évènementiel</h2>
                <h3>PROCHAIN ÉVÈNEMENT : SOLDES D'ÉTÉ 2015</h3>
                <p>Démarquez vous des autres sites E-commerces, n'attendez plus et faites appel à nous pour un design original qui plaira à coup sûr à vos clients et augmentera vos ventes.</p>
                <br><br>
                <a href="#">
                    <img src="<?php echo get_home_url(); ?>/img/commander-habillage.jpg" alt="Commandez votre habillage"/>
                </a>
            </div>
        </div>
        
        <div class="container content-services">
            <div class="col-md-6"><br><br><br>
                <h2>E-mailing prêt à envoyer</h2>
                <h3>ENVOYER DES E-MAILS ORIGINAUX</h3>
                <p>Démarquez vous des autres sites E-commerces, n'attendez plus et faites appel à nous pour un design original qui plaira à coup sûr à vos clients.</p>
                <br><br>
                <a href="#">En savoir plus sur l'E-MAILING</a><br>
                <span>• À partir de 99€  &emsp; • Livré en 48h</span>
            </div>
            <div class="col-md-6">
                <img src="<?php echo get_home_url(); ?>/img/service-emailing.png" alt="Emailing" class="animated bounceInLeft img-responsive"/>
            </div>
        </div>
        
        <div class="container content-services">
            <div class="col-md-6">
                <img src="<?php echo get_home_url(); ?>/img/service-relooking.png" alt="Relooking total" class="animated bounceInRight img-responsive"/>
            </div>
            <div class="col-md-6"><br><br><br>
                <h2>Relooking total de votre e-shop</h2>
                <h3>FAITES PEAU NEUVE À MOINDRE FRAIS</h3>
                <p>Démarquez vous des autres sites E-commerces, n'attendez plus et faites appel à nous pour un design original qui plaira à coup sûr à vos clients et augmentera vos ventes.</p>
                <br><br>
                <a href="#">En savoir plus sur le RELOOKING TOTAL</a><br>
                <span>• À partir de 499€ </span>
            </div>
        </div>
        <br><br>
        <a href="<?php echo get_home_url(); ?>/commande/">
            <img src="<?php echo get_home_url(); ?>/img/commander-bottom.jpg" alt="Commandez votre habillage"/>
        </a>
    </div>
    
    <script type="text/javascript">
        jQuery('.services-bouton, .services-bouton-active').click( function() { 
            jQuery(this).parent().parent().parent().find(".services-bouton-active").attr("class", "services-bouton");
            jQuery(this).attr("class", "services-bouton-active");
            return false;
        });
    </script>
    

<?php get_footer(); ?>