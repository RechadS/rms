<?php /* Template Name: FAQ */ 
get_header(); ?>

    <div class="container-fluid container-title blue-title blue-title-small" style="position:relative;">
        <div class="col-md-12 text-center title-wrap">
            <h2>FAQ</h2>
        </div>
    </div>
    
        
    <div class="container page-content" id="faq-page">
        <div class="container faqTitleWrap">
            <p class="faqTitle">Toutes vos questions... Toutes les réponses</p>
        </div>
        
        <div class="container faqMenu">
            <a href="#" class="faqMenuItem faqMenuItemActive" data-filter="all">Toutes</a>
            <a href="#" class="faqMenuItem" data-filter="habillage">Habillage évènementiel</a>
            <a href="#" class="faqMenuItem" data-filter="emailing">E-mailing</a>
            <a href="#" class="faqMenuItem" data-filter="relooking">Relooking total</a>
        </div>
        
        <div class="container faqWrap">
            <?php
                query_posts('cat=2');

                // The Loop
                while ( have_posts() ) : the_post();
                    $class = "";
                    if (in_category( '3' ))
                        $class .= "habillage ";
                    if (in_category( '4' ))
                        $class .= "emailing ";
                    if (in_category( '5' ))
                        $class .= "relooking ";
                    echo '
                        <article class="faq-entry '.$class.'">
                            <header class="faq-trigger">
                                <h2><i class="fa fa-plus-square"></i>'.get_the_title().'</h2>
                            </header>
                            <div class="faq-entry-content">
                                <p>'.get_the_content().'</p>
                            </div>
                        </article>';
                endwhile;
                
                query_posts('cat=2');

                // The Loop
                while ( have_posts() ) : the_post();
                    $class = "";
                    if (in_category( '3' ))
                        $class .= "habillage ";
                    if (in_category( '4' ))
                        $class .= "emailing ";
                    if (in_category( '5' ))
                        $class .= "relooking ";
                    echo '
                        <article class="faq-entry '.$class.'">
                            <header class="faq-trigger">
                                <h2><i class="fa fa-plus-square"></i>'.get_the_title().'</h2>
                            </header>
                            <div class="faq-entry-content">
                                <p>'.get_the_content().'</p>
                            </div>
                        </article>';
                endwhile;
            ?>
        </div>
    </div>
    
    <script type="text/javascript">
        jQuery(".faq-trigger").click(function(){
            jQuery(this).toggleClass("active").next().slideToggle("fast");
            jQuery(this).find('i').toggleClass('fa-plus-square').toggleClass('fa-minus-circle');
            return false;
        });
         jQuery(".faqMenuItem").click(function(){
            jQuery(".faqMenuItem").removeClass("faqMenuItemActive");
            jQuery(this).addClass("faqMenuItemActive");
            if(jQuery(this).attr("data-filter") == "all"){
                jQuery(".faq-entry").show(); 
            }
            else{
                jQuery(".faq-entry").hide(); 
                jQuery("."+ jQuery(this).attr("data-filter")).show();
            }
            return false;
        });
    </script>
    
<?php get_footer(); ?>