<?php /* Template Name: Client messages */ 
get_header(); ?>
        
    <div class="container-title container" id="admin-dashboard" style="padding-top:40px;">
        <div class="col-md-3">
            <div class="admin-menu" style="border-top: 1px solid #d6d6d6;"><a href="<?php echo get_home_url();?>/client-dashboard/">Tableau de bord</a></div>
            <div class="admin-menu"><a href="<?php echo get_home_url();?>/client-dashboard/client-projects/">Projets</a></div>
            <div class="admin-menu admin-menu-active"><a href="<?php echo get_home_url();?>/client-dashboard/client-messages/" style='color:white;'>Messages</a></div>
            <div class="admin-menu"><a href="<?php echo get_home_url();?>/client-dashboard/client-files/">Fichiers</a></div>
            <div class="admin-menu"><a href="<?php echo get_home_url();?>/client-dashboard/client-account/">Mon compte</a></div>
        </div>
        
        <div class="col-md-9">
        
            <?php
            $user_ID = get_current_user_id();
            $query = "SELECT project_id FROM wp_cpm_user_role INNER JOIN wp_postmeta WHERE project_id = post_id AND role = 'client' AND user_id = ".$user_ID." AND meta_key = '_project_active' AND meta_value = 'yes'";
            $ongoingprojects = $wpdb->get_results($query);
            $type_array = array(8=>"Habillage évènementiel", 7=>"Emailing", 6=>"Relooking total");
            $numproject = 1;
            
            foreach($ongoingprojects as $project){
                
                $wpdb->update( "wp_bp_messages_recipients", array("unread_count"=>0), array("thread_id"=>$project->project_id, "user_id"=>$user_ID) );
                
                echo '<div class="row" style="margin:0; border:1px solid lightgray;">';
                    echo '<div class="col-md-4" style="padding:0; border-right:1px solid lightgray; height:300px;">';
                    
                    $query3 = "SELECT wp_usermeta.user_id FROM wp_usermeta INNER JOIN wp_cpm_user_role WHERE wp_usermeta.user_id = wp_cpm_user_role.user_id AND meta_key = 'rms_role' AND meta_value = 'project_manager' AND role = 'co_worker' AND project_id = ".$project->project_id;
                    $pm = $wpdb->get_row($query3);
                    $pminfo = get_userdata($pm->user_id);
                    echo '<p style="height:100%; text-align:center; line-height:300px;"><span style="line-height: normal; vertical-align: middle; display: inline-block;">Project manager : '.$pminfo->display_name.'<br>';  
                    
                    $query2 = "SELECT term_taxonomy_id FROM wp_term_relationships WHERE object_id = ".$project->project_id;
                    $type = $wpdb->get_row($query2);                
                    echo $type_array[$type->term_taxonomy_id].'</span></p>';
                    
                    echo '</div>';
                    
                    if(isset($_POST['submitMsg'.$numproject]) && isset($_POST['messageField'.$numproject]) && $_POST['messageField'.$numproject] != ''){
                        $content = mysql_real_escape_string(htmlentities($_POST['messageField'.$numproject]));
                        $title = $type_array[$type->term_taxonomy_id]." - ".get_post_meta( $project->project_id, "_project_status", true );
                        $wpdb->query( $wpdb->prepare( 
                            "
                                INSERT INTO wp_bp_messages_messages
                                ( thread_id, sender_id, subject, message, date_sent )
                                VALUES ( %d, %d, %s, %s, %s )
                            ", 
                            $project->project_id,
                            $user_ID,
                            $title,
                            $content,
                            date('Y-m-d H:i:s.u')
                        ) );
                        $wpdb->query( "UPDATE wp_bp_messages_recipients SET unread_count = unread_count+1 WHERE thread_id = ".$idproject." AND user_id = ".$pm->user_id);
                    }
                    
                    echo '<div class="col-md-8" style="padding:0; height:300px;">';
                    echo "<div style='height:80%; overflow-y: scroll;'>";
                    $messages = $wpdb->get_results("SELECT * FROM ( SELECT * FROM wp_bp_messages_messages WHERE ( sender_id = ".$pm->user_id." OR sender_id = ".$user_ID." ) AND thread_id = ".$project->project_id." ORDER BY id DESC LIMIT 5 ) sub ORDER BY id ASC");
                    foreach($messages as $message){
                        if($message->sender_id == $user_ID)
                            $sender = "vous";
                        else $sender = $pminfo->display_name;
                        echo "<p style='padding:10px; margin-bottom:10px;'>Message envoyé par ".$sender." le ".date("d/m/Y", strtotime($message->date_sent)).".<br>Sujet : ".$message->subject."<br>";
                        echo $message->message."</p>";
                    }
                    echo "</div>";
                    echo "<div style='height:20%'>";
                        echo "<form name='messageToPM$numproject' method='post'>";
                        echo "<textarea name='messageField$numproject' style='width:80%; height:100%;' placeholder='Saisissez votre message'></textarea>";
                        echo "<input type='submit' name='submitMsg$numproject' value='Envoyer' style='width:20%; height:100%;'/>";
                        echo "</form>";
                    echo "</div>";
                    
                    echo '</div>';
                
                
                echo '</div>';
                
                $numproject++;
            }

            ?>
 
        </div>
        
    </div>
    
    <script type="text/javascript">
    
    </script>
    
<?php get_footer(); ?>