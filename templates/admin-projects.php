<?php /* Template Name: Admin projects */ 
get_header(); ?>
        
    <div class="container-title container" id="admin-dashboard" style="padding-top:40px;">
        <div class="col-md-3">
            <div class="admin-menu" style="border-top: 1px solid #d6d6d6;"><a href="<?php echo get_home_url();?>/admin-dashboard/">Tableau de bord</a></div>
            <div class="admin-menu admin-menu-active"><a href="<?php echo get_home_url();?>/admin-dashboard/admin-projects/" style="color:white;">Projets</a></div>
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
            
            if(isset($_GET['action']) && ($_GET['action'] == 'pm' || $_GET['action'] == 'designer' || $_GET['action'] == 'developer') && isset($_GET['idproject'])){

            echo "<p>Nom du projet : ".get_the_title($_GET['idproject'])."</p>";
            echo "<form method='post' action='".get_permalink()."'>";
            switch($_GET['action']){
                case "pm":
                    $pms = $wpdb->get_results("SELECT display_name, wp_users.ID from wp_users INNER JOIN wp_usermeta WHERE wp_users.ID = wp_usermeta.user_id AND meta_key = 'rms_role' AND meta_value = 'project_manager'");
                    if($pms == NULL)
                        echo "<p style='color:red;'>Erreur : aucun project manager dans la base.</p>";
                    else{
                        echo "<select name='staffMember'>";
                        $first = "selected";
                        foreach($pms as $pm){
                            echo "<option value='".$pm->ID."' $first>".$pm->display_name."</option>";
                            $first = "";
                        }
                    }
                    break;
                    
                case "designer":
                    $designers = $wpdb->get_results("SELECT display_name, wp_users.ID from wp_users INNER JOIN wp_usermeta WHERE wp_users.ID = wp_usermeta.user_id AND meta_key = 'rms_role' AND meta_value = 'designer'");
                    if($designers == NULL)
                        echo "<p style='color:red;'>Erreur : aucun designer dans la base.</p>";
                    else{
                        echo "<select name='staffMember'>";
                        $first = "selected";
                        foreach($designers as $designer){
                            echo "<option value='".$designer->ID."' $first>".$designer->display_name."</option>";
                            $first = "";
                        }
                    }
                    break;
                    
                case "developer":
                    $developers = $wpdb->get_results("SELECT display_name, wp_users.ID from wp_users INNER JOIN wp_usermeta WHERE wp_users.ID = wp_usermeta.user_id AND meta_key = 'rms_role' AND meta_value = 'developer'");
                    if($developers == NULL)
                        echo "<p style='color:red;'>Erreur : aucun développeur dans la base.</p>";
                    else{
                        echo "<select name='staffMember'>";
                        $first = "selected";
                        foreach($developers as $developer){
                            echo "<option value='".$developer->ID."' $first>".$developer->display_name."</option>";
                            $first = "";
                        }
                    }
                    break;
                
            }
            echo "<input type='hidden' name='numProject' value='".$_GET['idproject']."' />";
            echo "<input type='submit' name='attribuerStaff' value='Valider' />";
            echo "</form>";

            }
            
            else{
                
                if(isset($_POST['attribuerStaff']) && isset($_POST['staffMember']) && isset($_POST['numProject'])){
                    $numProject = intval($_POST['numProject']);
                    $staffMember = intval($_POST['staffMember']);
                    $wpdb->query($wpdb->prepare(
                    "INSERT INTO wp_cpm_user_role (project_id, user_id, role) VALUES ( %d, %d, 'co_worker' )",
                    $numProject,
                    $staffMember));
                }
                
            ?>
        
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              
            
        
            <?php
    
            $query = "SELECT * FROM wp_posts as posts INNER JOIN wp_postmeta WHERE wp_postmeta.post_id = posts.ID AND post_title='Fin' AND post_type='milestone' and meta_key = '_due' 
                    AND EXISTS (
                      SELECT * FROM `wp_postmeta`
                       WHERE `wp_postmeta`.`meta_key` = '_project_active'
                        AND `wp_postmeta`.`meta_value` = 'yes'
                        AND `wp_postmeta`.`post_id`=posts.post_parent
                    )
                    ORDER BY meta_value ASC";
            $projects = $wpdb->get_results($query);
            $type_array = array(8=>"Habillage évènementiel", 7=>"Emailing", 6=>"Relooking total");
            $type_user = array("project_manager"=>"Project manager", "designer"=>"Designer", "developer"=>"Développeur", "client"=>"Client");
            $numproject = 1;
            
            foreach($projects as $project){
                
                $datefin = $project->meta_value;
                $idprojet = $project->post_parent;
                
                $queryproject = "SELECT * FROM wp_posts INNER JOIN wp_term_relationships WHERE ID = $idprojet AND wp_posts.ID = wp_term_relationships.object_id";
                $projectdesc = $wpdb->get_row($queryproject);
                
                $queryusers = "SELECT * FROM wp_users INNER JOIN wp_cpm_user_role INNER JOIN wp_usermeta WHERE wp_users.ID = wp_cpm_user_role.user_id AND wp_users.ID = wp_usermeta.user_id AND project_id = $idprojet AND meta_key = 'rms_role' AND meta_value != 'admin' ORDER BY FIELD(meta_value, 'project_manager', 'designer', 'developer', 'client')";
                $listusers = $wpdb->get_results($queryusers);
                $pm = $wpdb->get_row("SELECT * FROM wp_users INNER JOIN wp_cpm_user_role INNER JOIN wp_usermeta WHERE wp_users.ID = wp_cpm_user_role.user_id AND wp_users.ID = wp_usermeta.user_id AND project_id = $idprojet AND meta_key = 'rms_role' AND meta_value = 'project_manager'");
                $designer = $wpdb->get_row("SELECT * FROM wp_users INNER JOIN wp_cpm_user_role INNER JOIN wp_usermeta WHERE wp_users.ID = wp_cpm_user_role.user_id AND wp_users.ID = wp_usermeta.user_id AND project_id = $idprojet AND meta_key = 'rms_role' AND meta_value = 'designer'");
                $developer = $wpdb->get_row("SELECT * FROM wp_users INNER JOIN wp_cpm_user_role INNER JOIN wp_usermeta WHERE wp_users.ID = wp_cpm_user_role.user_id AND wp_users.ID = wp_usermeta.user_id AND project_id = $idprojet AND meta_key = 'rms_role' AND meta_value = 'developer'");
                $client = $wpdb->get_row("SELECT * FROM wp_users INNER JOIN wp_cpm_user_role INNER JOIN wp_usermeta WHERE wp_users.ID = wp_cpm_user_role.user_id AND wp_users.ID = wp_usermeta.user_id AND project_id = $idprojet AND meta_key = 'rms_role' AND meta_value = 'client'");
                
                $price = get_post_meta( $idprojet, '_price', true);
                $project_status = get_post_meta( $idprojet, '_project_status', true);
                
                
                echo '
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab">
                      <div class="row" style="padding-top:5px;">
                        <div class="col-md-6">
                            <p><a data-toggle="collapse" data-parent="#accordion" href="#collapse'.$numproject.'">'.$projectdesc->post_title.'</a><span style="margin-left:25px;">'.$type_array[$projectdesc->term_taxonomy_id].'</span></p>
                            <p>Project manager : ';
                            if($pm != NULL)
                                echo $pm->display_name;
                            else
                                echo '<a href="'.get_home_url().'/admin-dashboard/admin-projects/?action=pm&idproject='.$idprojet.'">Attribuer un project manager</a>';
                            echo '</p>
                        </div>
                        <div class="col-md-6" style="text-align:right;">
                            <p>'.$project_status.' - '.date("d/m/y", strtotime($datefin)).'</p>
                            <p>'.$price.'€</p>
                        </div>
                      </div>
                    </div>
                    <div id="collapse'.$numproject.'" class="panel-collapse collapse" role="tabpanel">
                        <div class="panel-body">';
                        echo '<div class="col-md-6">';
                        
                        if($pm != NULL)
                            echo "<p>Project manager : ".$pm->display_name."</p>";
                        else
                            echo '<p><a href="'.get_home_url().'/admin-dashboard/admin-projects/?action=pm&idproject='.$idprojet.'">Attribuer un project manager</a></p>';
                        
                        if($designer != NULL)
                            echo "<p>Designer : ".$designer->display_name."</p>";
                        else
                            echo '<p><a href="'.get_home_url().'/admin-dashboard/admin-projects/?action=designer&idproject='.$idprojet.'">Attribuer un designer</a></p>';
                        
                        if($developer != NULL)
                            echo "<p>Développeur : ".$developer->display_name."</p>";
                        else
                            echo '<p><a href="'.get_home_url().'/admin-dashboard/admin-projects/?action=developer&idproject='.$idprojet.'">Attribuer un développeur</a></p>';
                        
                        echo "<p>Client : ".$client->display_name."</p>";
                        
                        if($projectdesc->term_taxonomy_id == 8 || $projectdesc->term_taxonomy_id == 7){
                            $event = get_post_meta( $idprojet, '_evenement', true);
                            $kit = get_post_meta( $idprojet, '_kit_graphique', true);
                            echo '<p>Évènement : '.$event.'</p>';
                            echo '<p>Kit graphique : '.$kit.'</p>';
                            echo '<p>Options : </p>';
                            
                            $code = get_post_meta( $idprojet, '_code', true);
                            if($code == "true"){
                                echo '<p style="margin-left:5px;">- Design + Code</p>';
                            }
                            else{
                                echo '<p style="margin-left:5px;">- Design</p>';
                            }
                            
                            $panier = get_post_meta( $idprojet, '_bouton_panier', true);
                            if($panier == "true"){
                                echo '<p style="margin-left:5px;">- Design du bouton "ajout au panier"</p>';
                            }
                            
                            $produit = get_post_meta( $idprojet, '_vignette_produit', true);
                            if($produit == "true"){
                                echo '<p style="margin-left:5px;">- Design des vignettes produit</p>';
                            }
                            
                            $slide = get_post_meta( $idprojet, '_slide_supp', true);
                            if($slide == "true"){
                                echo '<p style="margin-left:5px;">- Création d\'un slide supplémentaire sur mesure</p>';
                            }
                            
                            $express = get_post_meta( $idprojet, '_express', true);
                            if($express == "true"){
                                echo '<p style="margin-left:5px;">- Délai express 48h</p>';
                            }
                            
                            $oppemailing = get_post_meta( $idprojet, '_emailing', true);
                            if($oppemailing == "true"){
                                echo '<p style="margin-left:5px;">- E-mailing Opération soldes (prêt à envoyer)</p>';
                            }
                            
                            $nbmodifs = get_post_meta( $idprojet, '_nb_modifications', true);
                            echo '<p style="margin-left:5px;">- '.$nbmodifs.' modifications sur le design</p>';
                            
                        }
                        
                        else{

                            echo '<p>Options : </p>';
                            
                            $structure = get_post_meta( $idprojet, '_conserver_structure', true);
                            if($structure == "true"){
                                echo '<p style="margin-left:5px;">- Conserver la structure de votre site pour faciliter l\'intégration</p>';
                            }
                            
                            $logo = get_post_meta( $idprojet, '_refonte_logo', true);
                            if($logo == "true"){
                                echo '<p style="margin-left:5px;">- Refonte de votre logo</p>';
                            }
                            
                            $menu = get_post_meta( $idprojet, '_design_menu', true);
                            if($menu == "true"){
                                echo '<p style="margin-left:5px;">- Design du menu dynamique</p>';
                            }
                            
                            $slide = get_post_meta( $idprojet, '_slide_supp', true);
                            if($slide == "true"){
                                echo '<p style="margin-left:5px;">- Création d\'un slide supplémentaire sur mesure</p>';
                            }
                            
                            $express = get_post_meta( $idprojet, '_express', true);
                            if($express == "true"){
                                echo '<p style="margin-left:5px;">- Délai express 7 jours</p>';
                            }
                            
                            $briefing = get_post_meta( $idprojet, '_briefing_tel', true);
                            if($briefing == "true"){
                                echo '<p style="margin-left:5px;">- 1 HEURE de briefing téléphonique avec notre Directeur Artistique</p>';
                            }
                            
                            $nbmodifs = get_post_meta( $idprojet, '_nb_modifications', true);
                            echo '<p style="margin-left:5px;">- '.$nbmodifs.' modifications sur le design</p>';
                            
                        }
                        
                        echo '</div>';
                        echo '<div class="col-md-6">';
                        $queryactivity = "SELECT * FROM wp_comments WHERE comment_post_ID = ".$idprojet." ORDER BY comment_date DESC";
                        $activities = $wpdb->get_results($queryactivity);

                        foreach($activities as $activity) {
                            if(strpos($activity->comment_content, 'To-do') === false){
                                $comment = preg_replace("/par \[cpm_user_url id=\"[\d+]\"\]/","", $activity->comment_content);
                                echo '<p>'.$comment.'</p>';
                            }
                        }
                        echo '</div>';
                echo '</div>
                    </div>
                </div> ';
                $numproject++;
            }
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