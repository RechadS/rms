<?php /* Template Name: Admin clients */ 
get_header(); ?>
        
    <div class="container-title container" id="admin-dashboard" style="padding-top:40px;">
        <div class="col-md-3">
            <div class="admin-menu" style="border-top: 1px solid #d6d6d6;"><a href="<?php echo get_home_url();?>/admin-dashboard/">Tableau de bord</a></div>
            <div class="admin-menu"><a href="<?php echo get_home_url();?>/admin-dashboard/admin-projects/">Projets</a></div>
            <div class="admin-menu admin-menu-active"><a href="<?php echo get_home_url();?>/admin-dashboard/admin-clients/" style="color:white;">Clients</a></div>
            <div class="admin-menu">Prospects</div>
            <div class="admin-menu"><a href="<?php echo get_home_url();?>/admin-dashboard/admin-project-managers/">Project Managers</a></div>
            <div class="admin-menu"><a href="<?php echo get_home_url();?>/admin-dashboard/admin-designers/">Designers</a></div>
            <div class="admin-menu"><a href="<?php echo get_home_url();?>/admin-dashboard/admin-developers/">Développeurs</a></div>
            <div class="admin-menu">Communication</div>
            <div class="admin-menu">Statistiques</div>
            <div class="admin-menu">Admin</div>
        </div>
            
        <div class="col-md-9">
        
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            
            <?php
            
            $query = "SELECT *, COUNT(*) as pcount FROM `wp_cpm_user_role` WHERE role = 'client' AND project_id IN (
            SELECT ID FROM wp_posts INNER JOIN wp_postmeta WHERE wp_posts.ID = wp_postmeta.post_id AND meta_key = '_project_active' AND meta_value = 'yes'
            ) GROUP BY user_id ORDER BY COUNT(*) DESC";
            $projectsactives = $wpdb->get_results($query);
            $count = 1;
            foreach($projectsactives as $projectactive){
                $userinfo = get_userdata( $projectactive->user_id );
                $tel = xprofile_get_field_data( 'Téléphone', $projectactive->user_id );
                $allprojects = $wpdb->get_row("SELECT COUNT(*) as fcount FROM `wp_cpm_user_role` WHERE role = 'client' AND user_id = ".$projectactive->user_id);
                $endedprojects = intval($allprojects->fcount) - intval($projectactive->pcount);
                
                $queryprice = "SELECT * FROM wp_posts INNER JOIN wp_postmeta INNER JOIN wp_cpm_user_role WHERE wp_posts.ID = post_id AND wp_posts.ID = project_id AND meta_key = '_price' AND post_type = 'project' AND user_id = ".$projectactive->user_id;
                $prices = $wpdb->get_results($queryprice);
                $sumpriceactive = 0;
                $sumpriceinactive = 0;
                $listprojectids = array();
                foreach($prices as $price){
                    $isactive = get_post_meta( $price->project_id, '_project_active', true );
                    if($isactive == "yes"){
                        $sumpriceactive += intval($price->meta_value);
                        $tmp = array("id"=> $price->project_id, "price"=> $price->meta_value, "title"=> $price->post_title);
                        $listprojectids[] = $tmp;
                    }
                    else $sumpriceinactive += intval($price->meta_value);
                }
                
                
                 echo '
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab">
                      <div class="row" style="padding-top:5px;">
                        <div class="col-md-6">';
                            echo '<p><a data-toggle="collapse" data-parent="#accordion" href="#collapse'.$count.'">'.$userinfo->user_nicename.'</a></p>
                            <p style="text-decoration:underline;">Contact : </p>
                            <p style="margin-left:5px;">- Nom : '.$userinfo->display_name.' - Téléphone : '.$tel.'</p>
                        </div>
                        <div class="col-md-6" style="text-align:right;">
                            <p>'.$projectactive->pcount.' projet en cours / '.$sumpriceactive.'€</p>
                            <p>'.$endedprojects.' projets terminés / '.$sumpriceinactive.'€</p>
                        </div>
                      </div>
                    </div>
                    <div id="collapse'.$count.'" class="panel-collapse collapse" role="tabpanel">
                        <div class="panel-body">';
                        echo '<div class="col-md-6">';
                        echo '<p>Informations détaillées du client : </p>';
                        echo '<p style="margin-left:15px;">Nom : '.$userinfo->display_name.'</p>';
                        echo '<p style="margin-left:15px;">Société : '.xprofile_get_field_data( 'Société', $projectactive->user_id ).'</p>';
                        echo '<p style="margin-left:15px;">Site : '.xprofile_get_field_data( 'Site internet', $projectactive->user_id ).'</p>';
                        echo '<p style="margin-left:15px;">Adresse : '.xprofile_get_field_data( 'Adresse', $projectactive->user_id ).', '.xprofile_get_field_data( 'Code postal', $projectactive->user_id ).' '.xprofile_get_field_data( 'Ville', $projectactive->user_id ).' - '.xprofile_get_field_data( 'Pays', $projectactive->user_id ).'</p>';
                        echo '<p style="margin-left:15px;">Téléphone : '.$tel.'</p>';
                        echo '<p style="margin-left:15px;">Email : '.$userinfo->user_email.'</p>';
                        echo '</div>';
                        echo '<div class="col-md-6">';
                        echo '<p>'.$projectactive->pcount.' projet en cours / '.$sumpriceactive.'€</p>';
                        foreach($listprojectids as $clientproject){
                            echo '<p style="margin-left:15px;">';
                            
                            $type_array = array(8=>"Habillage évènementiel", 7=>"Emailing", 6=>"Relooking total");
                            $tmp = $wpdb->get_row("SELECT term_taxonomy_id FROM wp_term_relationships WHERE object_id=".$clientproject["id"]);
                            $typeproject = $type_array[$tmp->term_taxonomy_id];
                            
                            echo '<span>'.$clientproject["title"].' - '.$typeproject.' - '.$clientproject["price"].'€</span><br>';
                            $date = $wpdb->get_row("SELECT meta_value FROM wp_posts INNER JOIN wp_postmeta where ID = post_id AND post_type = 'milestone' and post_parent = ".$clientproject["id"]." AND meta_key = '_due'");
                            echo '<span>Livraison prévue : '.date("d/m/Y", strtotime($date->meta_value)).'</span><br>';
                            if($tmp->term_taxonomy_id == 8){
                                $event = get_post_meta( $clientproject["id"], '_evenement', true);
                                $kit = get_post_meta( $clientproject["id"], '_kit_graphique', true);
                                echo '<span>- Évènement : '.$event.'</span><br>';
                                echo '<span>- Kit graphique : '.$kit.'</span><br>';   
                                
                                $code = get_post_meta( $clientproject["id"], '_code', true);
                                if($code == "true"){
                                    echo '<span>- Design + Code</span><br>';
                                }
                                else{
                                    echo '<span>- Design</span><br>';
                                }
                                
                                $panier = get_post_meta( $clientproject["id"], '_bouton_panier', true);
                                if($panier == "true"){
                                    echo '<span>- Design du bouton "ajout au panier"</span><br>';
                                }
                                
                                $produit = get_post_meta( $clientproject["id"], '_vignette_produit', true);
                                if($produit == "true"){
                                    echo '<span>- Design des vignettes produit</span><br>';
                                }
                                
                                $slide = get_post_meta( $clientproject["id"], '_slide_supp', true);
                                if($slide == "true"){
                                    echo '<span>- Création d\'un slide supplémentaire sur mesure</span><br>';
                                }
                                
                                $express = get_post_meta( $clientproject["id"], '_express', true);
                                if($express == "true"){
                                    echo '<span>- Délai express 48h</span><br>';
                                }
                                
                                $oppemailing = get_post_meta( $clientproject["id"], '_emailing', true);
                                if($oppemailing == "true"){
                                    echo '<span>- E-mailing Opération soldes (prêt à envoyer)</span><br>';
                                }
                                
                                $nbmodifs = get_post_meta( $clientproject["id"], '_nb_modifications', true);
                                echo '<span>- '.$nbmodifs.' modifications sur le design</span><br>';
                            }
                            
                            elseif($tmp->term_taxonomy_id == 6){
                                
                                $structure = get_post_meta( $clientproject["id"], '_conserver_structure', true);
                                if($structure == "true"){
                                    echo '<span>- Conserver la structure de votre site pour faciliter l\'intégration</span><br>';
                                }
                                
                                $logo = get_post_meta( $clientproject["id"], '_refonte_logo', true);
                                if($logo == "true"){
                                    echo '<span>- Refonte de votre logo</span><br>';
                                }
                                
                                $menu = get_post_meta( $clientproject["id"], '_design_menu', true);
                                if($menu == "true"){
                                    echo '<span>- Design du menu dynamique</span><br>';
                                }
                                
                                $slide = get_post_meta( $clientproject["id"], '_slide_supp', true);
                                if($slide == "true"){
                                    echo '<span>- Création d\'un slide supplémentaire sur mesure</span><br>';
                                }
                                
                                $express = get_post_meta( $clientproject["id"], '_express', true);
                                if($express == "true"){
                                    echo '<span>- Délai express 7 jours</span><br>';
                                }
                                
                                $briefing = get_post_meta( $clientproject["id"], '_briefing_tel', true);
                                if($briefing == "true"){
                                    echo '<span>- 1 HEURE de briefing téléphonique avec notre Directeur Artistique</span><br>';
                                }
                                
                                $nbmodifs = get_post_meta( $clientproject["id"], '_nb_modifications', true);
                                echo '<span>- '.$nbmodifs.' modifications sur le design</span><br>';
                            }
                            
                            
                            echo '</p>';
                        }
                        echo '<p>'.$endedprojects.' projets terminés / '.$sumpriceinactive.'€</p>';
                        echo '</div>';
                echo '</div>
                    </div>
                </div> ';
                $count++;

            }
            
            $query = "SELECT *, COUNT(*) as pcount FROM `wp_cpm_user_role` WHERE role = 'client' AND project_id NOT IN (
            SELECT ID FROM wp_posts INNER JOIN wp_postmeta WHERE wp_posts.ID = wp_postmeta.post_id AND meta_key = '_project_active' AND meta_value = 'yes'
            ) GROUP BY user_id ORDER BY COUNT(*) DESC";
            $projectsinactives = $wpdb->get_results($query);
            foreach($projectsinactives as $projectinactive){
                $userinfo = get_userdata( $projectinactive->user_id );
                $tel = xprofile_get_field_data( 'Téléphone', $projectinactive->user_id );
                
                $queryprice = "SELECT * FROM wp_posts INNER JOIN wp_postmeta INNER JOIN wp_cpm_user_role WHERE wp_posts.ID = post_id AND wp_posts.ID = project_id AND meta_key = '_price' AND post_type = 'project' AND user_id = ".$projectinactive->user_id;
                $prices = $wpdb->get_results($queryprice);
                $sumpriceactive = 0;
                $sumpriceinactive = 0;
                foreach($prices as $price){
                    $isactive = get_post_meta( $price->project_id, '_project_active', true );
                    if($isactive == "yes")
                        $sumpriceactive += intval($price->meta_value);
                    else $sumpriceinactive += intval($price->meta_value);
                }
                /* userinfo->user_email; */
                
                 echo '
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab">
                      <div class="row" style="padding-top:5px;">
                        <div class="col-md-6">';
                            echo '<p><a data-toggle="collapse" data-parent="#accordion" href="#collapse'.$count.'">'.$userinfo->user_nicename.'</a></p>
                            <p style="text-decoration:underline;">Contact : </p>
                            <p style="margin-left:5px;">- Nom : '.$userinfo->display_name.' - Téléphone : '.$tel.'</p>
                        </div>
                        <div class="col-md-6" style="text-align:right;">
                            <p>0 projet en cours / '.$sumpriceactive.'€</p>
                            <p>'.$projectinactive->pcount.' projets terminés / '.$sumpriceinactive.'€</p>
                        </div>
                      </div>
                    </div>
                    <div id="collapse'.$count.'" class="panel-collapse collapse" role="tabpanel">
                        <div class="panel-body">';
                        echo '<div class="col-md-6">';
                        echo '<p>Informations détaillées du client : </p>';
                        echo '<p style="margin-left:5px;">Nom : '.$userinfo->display_name.'</p>';
                        echo '<p style="margin-left:5px;">Société : '.xprofile_get_field_data( 'Société', $projectinactive->user_id ).'</p>';
                        echo '<p style="margin-left:5px;">Site : '.xprofile_get_field_data( 'Site internet', $projectinactive->user_id ).'</p>';
                        echo '<p style="margin-left:5px;">Adresse : '.xprofile_get_field_data( 'Adresse', $projectinactive->user_id ).', '.xprofile_get_field_data( 'Code postal', $projectinactive->user_id ).' '.xprofile_get_field_data( 'Ville', $projectinactive->user_id ).' - '.xprofile_get_field_data( 'Pays', $projectinactive->user_id ).'</p>';
                        echo '<p style="margin-left:5px;">Téléphone : '.$tel.'</p>';
                        echo '<p style="margin-left:5px;">Email : '.$userinfo->user_email.'</p>';
                        echo '</div>';
                        echo '<div class="col-md-6">';
                        echo '<p>0 projet en cours / '.$sumpriceactive.'€</p>';
                        echo '<p>'.$projectinactive->pcount.' projets terminés / '.$sumpriceinactive.'€</p>';
                        echo '</div>';
                echo '</div>
                    </div>
                </div> ';
                $count++;

            }
           
           
            /*echo '
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab">
                      <div class="row" style="padding-top:5px;">
                        <div class="col-md-6">
                            <p><a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Client1</a></p>
                            <p style="text-decoration:underline;">Contact : </p>
                            <p style="margin-left:5px;">- Nom : Client1</p>
                            <p style="margin-left:5px;">- Tel : 0102030405</p>
                            <p style="margin-left:5px;">- Email : client1@client.com</p>
                        </div>
                        <div class="col-md-6" style="text-align:right;">
                            <p>1 projet en cours / 99€</p>
                            <p>6 projets terminés / 1345€</p>
                        </div>
                      </div>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse" role="tabpanel">
                        <div class="panel-body">';
                        echo '<div class="col-md-6">';
                        echo 'bla bla bla bla bla bla bla <br>bla bla bla bla bla bla bla <br>bla bla bla bla bla bla bla <br>bla bla bla bla bla bla bla <br>';
                        echo '</div>';
                        echo '<div class="col-md-6">';
                        echo 'bla bla bla bla bla bla bla <br>bla bla bla bla bla bla bla <br>bla bla bla bla bla bla bla <br>bla bla bla bla bla bla bla <br>';
                        echo '</div>';
                echo '</div>
                    </div>
                </div> ';*/
              
            ?>
            
            </div>
  
        </div>
        
    </div>
    
    <script type="text/javascript">
    
    </script>
    
<?php get_footer(); ?>