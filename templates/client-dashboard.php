<?php /* Template Name: Client dashboard */ 
get_header(); ?>
        
    <div class="container-title container" id="admin-dashboard" style="padding-top:40px;">
        <div class="col-md-3">
            <div class="admin-menu admin-menu-active" style="border-top: 1px solid #d6d6d6;"><a href="<?php echo get_home_url();?>/client-dashboard/" style="color:white;">Tableau de bord</a></div>
            <div class="admin-menu"><a href="<?php echo get_home_url();?>/client-dashboard/client-projects/">Projets</a></div>
            <div class="admin-menu"><a href="<?php echo get_home_url();?>/client-dashboard/client-messages/">Messages</a></div>
            <div class="admin-menu"><a href="<?php echo get_home_url();?>/client-dashboard/client-files/" >Fichiers</a></div>
            <div class="admin-menu"><a href="<?php echo get_home_url();?>/client-dashboard/client-account/">Mon compte</a></div>
        </div>
        
        <div class="col-md-9">
        
            <?php
            $user_ID = get_current_user_id();
            $query = "SELECT project_id FROM wp_cpm_user_role INNER JOIN wp_postmeta WHERE project_id = post_id AND role = 'client' AND user_id = ".$user_ID." AND meta_key = '_project_active' AND meta_value = 'yes'";
            $ongoingprojects = $wpdb->get_results($query);
            $nbprojects = count($ongoingprojects);
            $typeproject = array();
            
            ?>
            <div class="col-md-6">
                <div style="background-color:#00cff7; width:100%; min-height:250px;">
                    <p style="color: white;font-size: 20px;text-transform: uppercase;font-weight: 600; text-align: center;   margin: 0px 15px;border-bottom: 1px solid #7de8fa;height: 25%;vertical-align: middle;">
                        <span style="font-size: 45px;margin-right: 5px;"><?php echo $nbprojects; ?></span> projet<?php if($nbprojects > 1) echo "s";?> en cours
                    </p>
                    <div style="padding:20px 40px; color:white; font-size:17px; font-weight:600;">
                        <?php
                        $type_array = array(8=>"Habillage évènementiel", 7=>"Emailing", 6=>"Relooking total");
                        foreach($ongoingprojects as $project){
                            $query2 = "SELECT term_taxonomy_id FROM wp_term_relationships WHERE object_id = ".$project->project_id;
                            $type = $wpdb->get_row($query2);
                            $typeproject[$project->project_id] = $type_array[$type->term_taxonomy_id];
                            echo '<p style="margin-bottom:10px;">'.$type_array[$type->term_taxonomy_id].' - <a href="client-projects/?projectabcd='.$project->project_id.'" style="color:white;">voir</a></p>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div style="background-color:#00a0f8; width:100%; height:250px;   overflow-y: scroll;">
                    <p style="color: white;font-size: 20px;text-transform: uppercase;font-weight: 600; text-align: center;   margin: 0px 15px;border-bottom: 1px solid #7ecffc;height: 25%;line-height: 320%;">Messages non lus</p>
                    <div style="padding:10px 20px; color:white; font-size:14px; font-weight:600;">
                        <table>
                            <?php
                            foreach($ongoingprojects as $project){
                                $unread = $wpdb->get_row("SELECT unread_count FROM wp_bp_messages_recipients WHERE thread_id = ".$project->project_id." AND user_id = ".$user_ID);
                                $messages = $wpdb->get_results("SELECT * FROM wp_bp_messages_messages WHERE thread_id = ".$project->project_id." AND sender_id != ".$user_ID." ORDER BY date_sent DESC LIMIT ".$unread->unread_count);
                                foreach($messages as $message){
                                    $from = get_userdata( $message->sender_id );
                                    echo '<tr>
                                        <td style="vertical-align:top; width:20%; padding: 10px 0;">'.date("d/m/Y", strtotime($message->date_sent)).'</td>
                                        <td style="vertical-align:top; width:20%; padding: 10px 0;">'.$from->display_name.'</td>
                                    </tr>';
                                    echo '<tr style="border-bottom: 1px dashed #7ecffc;">
                                        <td style="vertical-align:top; padding: 10px 0;" colspan="2">'.$message->subject.' [...]</td>
                                    </tr>';
                                    
                                }
                            }
                            
                            ?>
                        </table>
                    </div>
                    
                    
                    
                    
                    <!--<div style="padding:10px 20px; color:white; font-size:14px; font-weight:600;">
                        <table>
                            <tr style="border-bottom: 1px dashed #7ecffc;">
                                <td style="vertical-align:top; width:20%; padding: 10px 0;">Dans 3h</td>
                                <td style="font-weight:500; padding: 10px 0; ">Habillage évènementiel - HALLOWEEN <br>Paul LEVAL</td>
                            </tr>
                            <tr style="border-bottom: 1px dashed #7ecffc;">
                                <td style="vertical-align:top; width:20%;  padding: 10px 0;">Dans 2j</td>
                                <td style="font-weight:500;  padding: 10px 0;">Habillage évènementiel - HALLOWEEN <br>Martin DUPONT</td>
                            </tr>
                            <tr style="border-bottom: 1px dashed #7ecffc;">
                                <td style="vertical-align:top; width:20%;  padding: 10px 0;">Dans 3j</td>
                                <td style="font-weight:500;  padding: 10px 0;">Relooking total<br>Jean MARTINS</td>
                            </tr>
                        </table>
                    </div>
                    -->
                </div>
            </div>
            
            <div class="col-md-12" style=" margin-top:25px;">
                <div style="border:1px solid lightgray;">
                    <p style="border-bottom:1px solid lightgray; padding:10px;">Derniers évènements</p>
                    <?php
                    $query3 = "SELECT * FROM wp_comments INNER JOIN wp_cpm_user_role WHERE project_id = comment_post_ID AND wp_cpm_user_role.user_id = ".$user_ID." AND role = 'client' ORDER BY comment_date DESC LIMIT 4";
                    $comments = $wpdb->get_results($query3);
                    foreach($comments as $comment){
                        echo "<div class='row' style='margin-bottom:10px; text-align:center;'>";
                        
                        echo "<div class='col-md-4'>";
                        echo "<p>".$comment->comment_content."</p>";
                        echo "</div>";
                        
                        
                        echo "<div class='col-md-4'>";
                        echo "<p>".get_the_title($comment->comment_post_ID)." - ".$typeproject[$comment->comment_post_ID]."</p>";
                        echo "</div>";
                        
                        echo "<div class='col-md-4'>";
                        echo "<p>".date("d/m/Y", strtotime($comment->comment_date))."</p>";
                        echo "</div>";
                        
                        echo "</div>";
                    }
                 
                    
                    
                    ?>

                </div>
            </div>
            
        </div>
        
        
    </div>
    
    <script type="text/javascript">
    
    </script>
    
<?php get_footer(); ?>