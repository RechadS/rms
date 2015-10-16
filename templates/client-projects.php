<?php /* Template Name: Client projects */ 
get_header(); ?>
        
    <div class="container-title container" id="admin-dashboard" style="padding-top:40px;">
        <div class="col-md-3">
            <div class="admin-menu" style="border-top: 1px solid #d6d6d6;"><a href="<?php echo get_home_url();?>/client-dashboard/">Tableau de bord</a></div>
            <div class="admin-menu admin-menu-active"><a href="<?php echo get_home_url();?>/client-dashboard/client-projects/" style='color:white;'>Projets</a></div>
            <div class="admin-menu"><a href="<?php echo get_home_url();?>/client-dashboard/client-messages/">Messages</a></div>
            <div class="admin-menu"><a href="<?php echo get_home_url();?>/client-dashboard/client-files/">Fichiers</a></div>
            <div class="admin-menu"><a href="<?php echo get_home_url();?>/client-dashboard/client-account/">Mon compte</a></div>
        </div>
        
        <?php
        
        $user_ID = get_current_user_id();
        $query = "SELECT project_id FROM wp_cpm_user_role INNER JOIN wp_postmeta WHERE project_id = post_id AND role = 'client' AND user_id = ".$user_ID." AND meta_key = '_project_active' AND meta_value = 'yes'";
        $ongoingprojects = $wpdb->get_results($query);
        
        if( (isset($_GET['projectabcd']) && get_post_status( $_GET['projectabcd'] )) || count($ongoingprojects) == 1){ // $_GET['projectabcd']; <a data-toggle="collapse" data-parent="#accordion" href="#collapse'.$numpm.'">'.$developer->display_name.'</a>
            if(isset($_GET['projectabcd']) && get_post_status( $_GET['projectabcd'] ))
                $idproject = $_GET['projectabcd'];
            else $idproject = $ongoingprojects[0]->project_id;
            
            echo '<div class="col-md-9">';
            echo '<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">';

            $type_array = array(8=>"Habillage évènementiel", 7=>"Emailing", 6=>"Relooking total");
            $query2 = "SELECT term_taxonomy_id FROM wp_term_relationships WHERE object_id = ".$idproject;
            $type = $wpdb->get_row($query2); 
            
            echo '
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab">
                      <div class="row" style="padding-top:5px;">
                        <div class="col-md-6">
                            <p>'.$type_array[$type->term_taxonomy_id].'</p>
                        </div>
                        <div class="col-md-6">';
                        echo '<p style="border:1px solid lightgray; display:inline-block; padding:5px;">'.get_post_meta( $idproject, "_project_status", true ).'</p>';
                        echo '<p><a data-toggle="collapse" data-parent="#accordion" href="#collapse">Voir détails</a></p>';
            echo    '</div>
                  </div>
                </div>
                <div id="collapse" class="panel-collapse collapse" role="tabpanel">
                    <div class="panel-body">';
                    
                    if($type->term_taxonomy_id == 8 ){
                            $event = get_post_meta( $idproject, '_evenement', true);
                            $kit = get_post_meta( $idproject, '_kit_graphique', true);
                            echo '<p>Évènement : '.$event.'</p>';
                            echo '<p>Kit graphique : '.$kit.'</p>';
                            echo '<p>Options : </p>';
                            
                            $code = get_post_meta( $idproject, '_code', true);
                            if($code == "true"){
                                echo '<p style="margin-left:5px;">- Design + Code</p>';
                            }
                            else{
                                echo '<p style="margin-left:5px;">- Design</p>';
                            }
                            
                            $panier = get_post_meta( $idproject, '_bouton_panier', true);
                            if($panier == "true"){
                                echo '<p style="margin-left:5px;">- Design du bouton "ajout au panier"</p>';
                            }
                            
                            $produit = get_post_meta( $idproject, '_vignette_produit', true);
                            if($produit == "true"){
                                echo '<p style="margin-left:5px;">- Design des vignettes produit</p>';
                            }
                            
                            $slide = get_post_meta( $idproject, '_slide_supp', true);
                            if($slide == "true"){
                                echo '<p style="margin-left:5px;">- Création d\'un slide supplémentaire sur mesure</p>';
                            }
                            
                            $express = get_post_meta( $idproject, '_express', true);
                            if($express == "true"){
                                echo '<p style="margin-left:5px;">- Délai express 48h</p>';
                            }
                            
                            $oppemailing = get_post_meta( $idproject, '_emailing', true);
                            if($oppemailing == "true"){
                                echo '<p style="margin-left:5px;">- E-mailing Opération soldes (prêt à envoyer)</p>';
                            }
                            
                            $nbmodifs = get_post_meta( $idproject, '_nb_modifications', true);
                            echo '<p style="margin-left:5px;">- '.$nbmodifs.' modifications sur le design</p>';
                            
                        }
                        
                        elseif($type->term_taxonomy_id == 6){

                            echo '<p>Options : </p>';
                            
                            $structure = get_post_meta( $idproject, '_conserver_structure', true);
                            if($structure == "true"){
                                echo '<p style="margin-left:5px;">- Conserver la structure de votre site pour faciliter l\'intégration</p>';
                            }
                            
                            $logo = get_post_meta( $idproject, '_refonte_logo', true);
                            if($logo == "true"){
                                echo '<p style="margin-left:5px;">- Refonte de votre logo</p>';
                            }
                            
                            $menu = get_post_meta( $idproject, '_design_menu', true);
                            if($menu == "true"){
                                echo '<p style="margin-left:5px;">- Design du menu dynamique</p>';
                            }
                            
                            $slide = get_post_meta( $idproject, '_slide_supp', true);
                            if($slide == "true"){
                                echo '<p style="margin-left:5px;">- Création d\'un slide supplémentaire sur mesure</p>';
                            }
                            
                            $express = get_post_meta( $idproject, '_express', true);
                            if($express == "true"){
                                echo '<p style="margin-left:5px;">- Délai express 7 jours</p>';
                            }
                            
                            $briefing = get_post_meta( $idproject, '_briefing_tel', true);
                            if($briefing == "true"){
                                echo '<p style="margin-left:5px;">- 1 HEURE de briefing téléphonique avec notre Directeur Artistique</p>';
                            }
                            
                            $nbmodifs = get_post_meta( $idproject, '_nb_modifications', true);
                            echo '<p style="margin-left:5px;">- '.$nbmodifs.' modifications sur le design</p>';
                            
                        }
                    
                    
                echo '</div>';
            echo '</div>
            </div>';
            echo '</div>';
            
            
            echo '<div style="border:1px solid lightgray; padding:25px;">';
                echo '<p style="font-size:45px; text-align:center;">'.get_post_meta( $idproject, "_project_status", true ).'</p>';
            echo '</div>';
           
            $wpdb->update( "wp_bp_messages_recipients", array("unread_count"=>0), array("thread_id"=>$idproject, "user_id"=>$user_ID) );
                
            echo '<div class="row" style="margin:0; border:1px solid lightgray; margin-top:20px;">';
                echo '<div class="col-md-4" style="padding:0; border-right:1px solid lightgray; height:300px;">';
                
                $query3 = "SELECT wp_usermeta.user_id FROM wp_usermeta INNER JOIN wp_cpm_user_role WHERE wp_usermeta.user_id = wp_cpm_user_role.user_id AND meta_key = 'rms_role' AND meta_value = 'project_manager' AND role = 'co_worker' AND project_id = ".$idproject;
                $pm = $wpdb->get_row($query3);
                $pminfo = get_userdata($pm->user_id);
                echo '<p style="height:100%; text-align:center; line-height:300px;"><span style="line-height: normal; vertical-align: middle; display: inline-block;">'.$pminfo->display_name.'<br>';  
                echo 'Project Manager</span></p>';
                
                echo '</div>';
                
                if(isset($_POST['submitMsg']) && isset($_POST['messageField']) && $_POST['messageField'] != '') {
                    $content = mysql_real_escape_string(htmlentities($_POST['messageField']));
                    $title = $type_array[$type->term_taxonomy_id]." - ".get_post_meta( $idproject, "_project_status", true );
                    $wpdb->query( $wpdb->prepare( 
                        "
                            INSERT INTO wp_bp_messages_messages
                            ( thread_id, sender_id, subject, message, date_sent )
                            VALUES ( %d, %d, %s, %s, %s )
                        ", 
                        $idproject,
                        $user_ID,
                        $title,
                        $content,
                        date('Y-m-d H:i:s.u')
                    ) );
                    $wpdb->query( "UPDATE wp_bp_messages_recipients SET unread_count = unread_count+1 WHERE thread_id = ".$idproject." AND user_id = ".$pm->user_id);
                }
                
                echo '<div class="col-md-8" style="padding:0; height:300px; ">';
                    
                $messages = $wpdb->get_results("SELECT * FROM ( SELECT * FROM wp_bp_messages_messages WHERE ( sender_id = ".$pm->user_id." OR sender_id = ".$user_ID." ) AND thread_id = ".$idproject." ORDER BY id DESC LIMIT 5 ) sub ORDER BY id ASC");
                echo "<div style='height:80%; overflow-y: scroll;'>";
                foreach($messages as $message){
                    if($message->sender_id == $user_ID)
                        $sender = "vous";
                    else $sender = $pminfo->display_name;
                    echo "<p style='padding:10px; margin-bottom:10px;'>Message envoyé par ".$sender." le ".date("d/m/Y", strtotime($message->date_sent)).".<br>Sujet : ".$message->subject."<br>";
                    echo $message->message."</p>";
                }
                echo "</div>";
                echo "<div style='height:20%'>";
                    echo "<form name='messageToPM' method='post'>";
                    echo "<textarea name='messageField' style='width:80%; height:100%;' placeholder='Saisissez votre message'></textarea>";
                    echo "<input type='submit' name='submitMsg' value='Envoyer' style='width:20%; height:100%;'/>";
                    echo "</form>";
                echo "</div>";
                
                echo '</div>';
            
            
            echo '</div>';

            
            echo '<div style="border:1px solid lightgray; margin-top:20px;">';
                echo '<p style="font-size:20px; text-align:left;padding:5px; border-bottom:1px solid lightgray;" >Fichiers</p>';
                $queryfiles = "SELECT * FROM wp_posts WHERE post_type = 'attachment' AND post_parent IN (
                        SELECT ID FROM wp_posts WHERE post_type = 'message' AND post_parent = ".$idproject." )";
                $files = $wpdb->get_results($queryfiles);
                foreach($files as $file){
                    
                    echo '<div class="row" style="text-align:center; padding:10px; border-bottom:1px solid lightgray; margin:0;">';
                        echo '<div class="col-md-4">Date : '.date("d/m/Y", strtotime($file->post_date)).'</div>';
                        echo '<div class="col-md-4">Nom : '.$file->post_title.'</div>';
                        echo '<div class="col-md-4"><a href="'.wp_get_attachment_url($file->ID).'">Télécharger</a></div>';
                    echo '</div>';
                }
            echo '</div>';
            

            echo '</div>';
        }
        
        else{
            
        ?>
        
        <div class="col-md-9">
        
            <?php
            $user_ID = get_current_user_id();
            $query = "SELECT project_id FROM wp_cpm_user_role INNER JOIN wp_postmeta WHERE project_id = post_id AND role = 'client' AND user_id = ".$user_ID." AND meta_key = '_project_active' AND meta_value = 'yes'";
            $ongoingprojects = $wpdb->get_results($query);
            $type_array = array(8=>"Habillage évènementiel", 7=>"Emailing", 6=>"Relooking total");
            
            foreach($ongoingprojects as $project){
                echo '
                <div class="col-md-12">
                    <div style="border:1px solid lightgray; padding:10px;">
                        <div class="row">
                            <div class="col-md-6">';
                $query2 = "SELECT term_taxonomy_id FROM wp_term_relationships WHERE object_id = ".$project->project_id;
                $type = $wpdb->get_row($query2);                
                echo '<p>'.$type_array[$type->term_taxonomy_id].'</p>';
                
                
                $query3 = "SELECT wp_usermeta.user_id FROM wp_usermeta INNER JOIN wp_cpm_user_role WHERE wp_usermeta.user_id = wp_cpm_user_role.user_id AND meta_key = 'rms_role' AND meta_value = 'project_manager' AND role = 'co_worker' AND project_id = ".$project->project_id;
                $pm = $wpdb->get_row($query3);
                $pminfo = get_userdata($pm->user_id);
                echo '<p>Project manager : '.$pminfo->display_name.'</p>';          
                
                echo       '</div>
                            <div class="col-md-6">';
                            
                $date = $wpdb->get_row("SELECT meta_value FROM wp_posts INNER JOIN wp_postmeta where ID = post_id AND post_type = 'milestone' and post_parent = ".$project->project_id." AND meta_key = '_due'");
                echo '<p>Date prévue : '.date("d/m/Y", strtotime($date->meta_value)).'</p>';
                
                $statut = get_post_meta( $project->project_id, "_project_status", true );
                echo '<p style="border:1px solid black; padding:5px; display:inline-block;">'.$statut.'</p>';
                
                echo '<p ><a style="color:black; font-weight:bold;" href="'.add_query_arg( 'projectabcd', $project->project_id ).'" >Voir</a></p>';
                            
                echo       '</div>
                        </div>
                    </div>
                </div>';
            }
            
            
            ?>
 
        </div>
        
        <?php
        
        }
        
        ?>
        
    </div>
    
    <script type="text/javascript">
    
    </script>
    
<?php get_footer(); ?>