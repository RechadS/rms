<?php /* Template Name: Admin dashboard */ 
get_header(); ?>
        
    <div class="container-title container" id="admin-dashboard" style="padding-top:40px;">
        <div class="col-md-3">
            <div class="admin-menu admin-menu-active" style="border-top: 1px solid #d6d6d6;"><a href="<?php echo get_home_url();?>/admin-dashboard/" style="color:white;">Tableau de bord</a></div>
            <div class="admin-menu"><a href="<?php echo get_home_url();?>/admin-dashboard/admin-projects/">Projets</a></div>
            <div class="admin-menu"><a href="<?php echo get_home_url();?>/admin-dashboard/admin-clients/">Clients</a></div>
            <div class="admin-menu">Prospects</div>
            <div class="admin-menu"><a href="<?php echo get_home_url();?>/admin-dashboard/admin-project-managers/">Project Managers</a></div>
            <div class="admin-menu"><a href="<?php echo get_home_url();?>/admin-dashboard/admin-designers/">Designers</a></div>
            <div class="admin-menu"><a href="<?php echo get_home_url();?>/admin-dashboard/admin-developers/">Développeurs</a></div>
            <div class="admin-menu">Communication</div>
            <div class="admin-menu">Statistiques</div>
            <div class="admin-menu">Admin</div>
        </div>
        
        <div class="col-md-9">
        
            <?php
            $query = "SELECT * FROM wp_posts as posts INNER JOIN wp_term_relationships WHERE posts.ID = wp_term_relationships.object_id AND post_type = 'project'
            AND NOT EXISTS (
              SELECT * FROM `wp_postmeta`
               WHERE `wp_postmeta`.`meta_key` = '_project_active'
                AND `wp_postmeta`.`meta_value` = 'no'
                AND `wp_postmeta`.`post_id`=posts.ID
            )";
            $projects = $wpdb->get_results($query);
            $nbhabillage = 0;
            $nbemailing = 0;
            $nbrelooking = 0;
            foreach($projects as $project){
                switch($project->term_taxonomy_id){
                    case 8:
                        $nbhabillage++;
                        break;
                    case 7:
                        $nbemailing++;
                        break;
                    case 6:
                        $nbrelooking++;
                        break;  
                }
            }
            ?>
            
            <div class="col-md-6">
                <div style="background-color:#00cff7; width:100%; height:250px;">
                    <p style="color: white;font-size: 20px;text-transform: uppercase;font-weight: 600; text-align: center;   margin: 0px 15px;border-bottom: 1px solid #7de8fa;height: 25%;vertical-align: middle;">
                        <span style="font-size: 45px;margin-right: 5px;"><?php echo $wpdb->num_rows; ?></span> projet<?php if($wpdb->num_rows > 1) echo "s";?> en cours
                    </p>
                    <div style="padding:20px 40px; color:white; font-size:17px; font-weight:600;">
                        <p ><span style="width: 10%;display: inline-block;text-align: right; font-size:25px; margin-right:5px;"><?php echo $nbhabillage; ?></span> Habillage<?php if($nbhabillage > 1) echo "s";?> évènementiel<?php if($nbhabillage > 1) echo "s";?></p>
                        <p ><span style="width: 10%;display: inline-block;text-align: right; font-size:25px; margin-right:5px;"><?php echo $nbemailing; ?></span> E-mailing<?php if($nbemailing > 1) echo "s";?></p>
                        <p><span style="width: 10%;display: inline-block;text-align: right; font-size:25px; margin-right:5px;"><?php echo $nbrelooking; ?></span> Relooking total</p>
                    </div>
                </div>
            </div>
            
            
            
            <div class="col-md-6">
                <div style="background-color:#00a0f8; width:100%; height:250px;   overflow-y: scroll;">
                    <p style="color: white;font-size: 20px;text-transform: uppercase;font-weight: 600; text-align: center;   margin: 0px 15px;border-bottom: 1px solid #7ecffc;height: 25%;line-height: 320%;">Prochaines deadlines</p>
                    <div style="padding:10px 20px; color:white; font-size:14px; font-weight:600;">
                        <table style="width:100%;">
                            <?php
                                $query = "SELECT * FROM wp_posts as posts INNER JOIN wp_postmeta 
                                    WHERE posts.ID = wp_postmeta.post_id
                                    AND posts.post_type     = 'milestone'
                                    AND meta_key = '_due'
                                    AND NOT EXISTS (
                                      SELECT * FROM `wp_postmeta`
                                       WHERE `wp_postmeta`.`meta_key` = '_completed_on'
                                        AND `wp_postmeta`.`post_id`=posts.ID
                                    ) 
                                ";
                                $tasks = $wpdb->get_results($query);
                                foreach($tasks as $task){
                                    
                                    $timeleft = strtotime( $task->meta_value ) - time();
                                    $daysleft = $timeleft / (60*60*24);
                                    if($daysleft < 1){
                                        $daysleft = (int)($timeleft / (60*60));
                                        $daysleft = $daysleft."h";
                                    }
                                    else{
                                        $daysleft = (int)$daysleft;
                                        $daysleft = $daysleft."j";
                                    }
                                    
                                    $query2 = "SELECT post_title FROM wp_posts WHERE ID = ".$task->post_parent;
                                    $parent = $wpdb->get_row($query2);
                                    
                                    $query3 = "SELECT display_name FROM wp_users INNER JOIN wp_cpm_user_role WHERE wp_cpm_user_role.role = 'manager' AND wp_cpm_user_role.project_id = ".$task->post_parent." AND wp_users.ID = wp_cpm_user_role.user_ID";
                                    $manager = $wpdb->get_row($query2);
                                    
                                    
                                    
                                    
                                    
                                    echo '<tr style="border-bottom: 1px dashed #7ecffc;">
                                        <td style="vertical-align:top; width:20%; padding: 10px 0;">Dans '.$daysleft.'</td>
                                        <td style="font-weight:500; padding: 10px 0; ">'.$task->post_title.' - '.$parent->post_title.'<br>'.$manager->display_name.'</td>
                                    </tr>';
                                }
                            ?>
                            
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
    
    <script type="text/javascript">
    
    </script>
    
<?php get_footer(); ?>