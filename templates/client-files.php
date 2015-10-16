<?php /* Template Name: Client files */ 
get_header(); ?>
        
    <div class="container-title container" id="admin-dashboard" style="padding-top:40px;">
        <div class="col-md-3">
            <div class="admin-menu" style="border-top: 1px solid #d6d6d6;"><a href="<?php echo get_home_url();?>/client-dashboard/">Tableau de bord</a></div>
            <div class="admin-menu"><a href="<?php echo get_home_url();?>/client-dashboard/client-projects/">Projets</a></div>
            <div class="admin-menu"><a href="<?php echo get_home_url();?>/client-dashboard/client-messages/">Messages</a></div>
            <div class="admin-menu admin-menu-active"><a href="<?php echo get_home_url();?>/client-dashboard/client-files/" style='color:white;'>Fichiers</a></div>
            <div class="admin-menu"><a href="<?php echo get_home_url();?>/client-dashboard/client-account/">Mon compte</a></div>
        </div>
        
        <div class="col-md-9">
        
            <?php
            $user_ID = get_current_user_id();
            $query = "SELECT project_id FROM wp_cpm_user_role WHERE role = 'client' AND user_id = ".$user_ID." ORDER BY project_id DESC";
            $projects = $wpdb->get_results($query);
            
            foreach($projects as $project){
                
                
                echo '<div style="border:1px solid lightgray; margin-bottom:20px;">';
                echo '<p style="font-size:20px; text-align:left;padding:5px; border-bottom:1px solid lightgray;" >Fichiers pour le projet '.get_the_title($project->project_id).'</p>';
                $queryfiles = "SELECT * FROM wp_posts WHERE post_type = 'attachment' AND post_parent IN (
                        SELECT ID FROM wp_posts WHERE post_type = 'message' AND post_parent = ".$project->project_id." )";
                $files = $wpdb->get_results($queryfiles);
                foreach($files as $file){
                    
                    echo '<div class="row" style="text-align:center; padding:10px; border-bottom:1px solid lightgray; margin:0;">';
                        echo '<div class="col-md-4">Date : '.date("d/m/Y", strtotime($file->post_date)).'</div>';
                        echo '<div class="col-md-4">Nom : '.$file->post_title.'</div>';
                        echo '<div class="col-md-4"><a href="'.wp_get_attachment_url($file->ID).'">Télécharger</a></div>';
                    echo '</div>';
                }
                echo '</div>';
            }

            ?>
 
        </div>

        
    </div>
    
    <script type="text/javascript">
    
    </script>
    
<?php get_footer(); ?>