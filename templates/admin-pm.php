<?php /* Template Name: Admin project managers */ 
get_header(); ?>
        
    <div class="container-title container" id="admin-dashboard" style="padding-top:40px;">
        <div class="col-md-3">
            <div class="admin-menu" style="border-top: 1px solid #d6d6d6;"><a href="<?php echo get_home_url();?>/admin-dashboard/">Tableau de bord</a></div>
            <div class="admin-menu"><a href="<?php echo get_home_url();?>/admin-dashboard/admin-projects/">Projets</a></div>
            <div class="admin-menu"><a href="<?php echo get_home_url();?>/admin-dashboard/admin-client/">Clients</a></div>
            <div class="admin-menu">Prospects</div>
            <div class="admin-menu admin-menu-active"><a href="<?php echo get_home_url();?>/admin-dashboard/admin-project-managers/" style="color:white;">Project Managers</a></div>
            <div class="admin-menu"><a href="<?php echo get_home_url();?>/admin-dashboard/admin-designers/">Designers</a></div>
            <div class="admin-menu"><a href="<?php echo get_home_url();?>/admin-dashboard/admin-developers/">Développeurs</a></div>
            <div class="admin-menu">Communication</div>
            <div class="admin-menu">Statistiques</div>
            <div class="admin-menu">Admin</div>
        </div>
            
        <div class="col-md-9">
        
            <?php
            if(isset($_GET['action']) && $_GET['action'] == 'create'){
                
                if(isset($_POST['ajoutPM'])){
                    if(isset($_POST['pmLogin']) && $_POST['pmLogin'] != '' && isset($_POST['pmFirstname']) && $_POST['pmFirstname'] != '' && 
                    isset($_POST['pmLastname']) && $_POST['pmLastname'] != '' && isset($_POST['pmEmail']) && $_POST['pmEmail'] != '' && 
                    isset($_POST['pmPassword']) && $_POST['pmPassword'] != ''){
                        
                        $userdata = array(
                            'user_login'  =>  $_POST['pmLogin'],
                            'first_name'    =>  $_POST['pmFirstname'],
                            'last_name'   =>  $_POST['pmLastname'],
                            'user_email'   =>  $_POST['pmEmail'],
                            'user_pass'   =>  $_POST['pmPassword'],
                            'display_name'   =>  $_POST['pmFirstname']." ".$_POST['pmLastname']
                        );

                        $user_id = wp_insert_user( $userdata ) ;
                        if( !is_wp_error($user_id) ) {
                            echo '<p style="color:red;">Le project manager a bien été créé.</p>';
                            $wpdb->query("INSERT INTO wp_usermeta (user_id, meta_key, meta_value) VALUES (".$user_id.", 'rms_role', 'project_manager')");
                        }
                        else{
                            echo $return->get_error_message();
                        } 
                    }
                    
                    else {
                        echo '<p style="color:red;">Merci de remplir tous les champs.</p>'; 
                    }
                    
                }
                
                
                
                echo "<form method='post'>";
                echo "<span style='display:inline-block; width:100px;'>Login</span><input type='text' name='pmLogin' placeholder='Login' /><br>";
                echo "<span style='display:inline-block; width:100px;'>Prénom</span><input type='text' name='pmFirstname' placeholder='Prénom' /><br>";
                echo "<span style='display:inline-block; width:100px;'>Nom</span><input type='text' name='pmLastname' placeholder='Nom' /><br>";
                echo "<span style='display:inline-block; width:100px;'>Email</span><input type='text' name='pmEmail' placeholder='Email' /><br>";
                echo "<span style='display:inline-block; width:100px;'>Mot de passe</span><input type='password' name='pmPassword' placeholder='Mot de passe' /><br>";
                echo "<input type='submit' name='ajoutPM' value='Créer' />";
                echo "</form>";      
            }
            
            else{
                
            ?>
        
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <?php
                
                $query = "SELECT display_name, ID FROM wp_users INNER JOIN wp_usermeta WHERE wp_users.ID = wp_usermeta.user_id AND meta_key = 'rms_role' AND meta_value = 'project_manager'";
                $listprojectmanagers = $wpdb->get_results($query);
                $numpm = 1;
                foreach($listprojectmanagers as $projectmanager){
                    
                    $query2 = "SELECT project_id FROM wp_postmeta INNER JOIN wp_cpm_user_role WHERE wp_postmeta.post_id = project_id AND user_id = ".$projectmanager->ID." AND meta_key = '_project_active' AND meta_value = 'yes'";
                    $listprojects = $wpdb->get_results($query2);
                    
                    $pluriel = "";
                    if(count($listprojects)>1)
                        $pluriel = "s";
                    echo '
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab">
                          <div class="row" style="padding-top:5px;">
                            <div class="col-md-6">
                                <p><a data-toggle="collapse" data-parent="#accordion" href="#collapse'.$numpm.'">'.$projectmanager->display_name.'</a></p>
                                <p>'.count($listprojects).' projet'.$pluriel.' en cours</p>
                            </div>
                            <div class="col-md-6">';
                                foreach($listprojects as $project){
                                    $type_array = array(8=>"Habillage évènementiel", 7=>"Emailing", 6=>"Relooking total");
                                    echo '<p>';
                                    echo get_the_title( $project->project_id ).'</p>';
                                    $typeproject = $wpdb->get_row("SELECT term_taxonomy_id FROM wp_term_relationships WHERE object_id = ".$project->project_id);
                                    echo '<p>'.$type_array[$typeproject->term_taxonomy_id].'</p>';
                                }
                                
                    echo    '</div>
                          </div>
                        </div>
                        <div id="collapse'.$numpm.'" class="panel-collapse collapse" role="tabpanel">
                            <div class="panel-body">';
                            echo 'bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
                            bla bla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
                            bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla';
                            echo '</div>';
                    echo '</div>
                        </div>';
                        
                     $numpm++;   
                    
                }
                
                echo "<a href='".get_home_url()."/admin-dashboard/admin-project-managers/?action=create'>Créer un project manager</a>";

                  
                ?>
            
            </div>
            
            <?php
            
            }
            
            ?>
  
        </div>
        
    </div>
    
    <script type="text/javascript">
    
    </script>
    
<?php get_footer(); ?>