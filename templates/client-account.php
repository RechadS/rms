<?php /* Template Name: Client my account */ 
get_header(); ?>
        
    <div class="container-title container" id="admin-dashboard" style="padding-top:40px;">
        <div class="col-md-3">
            <div class="admin-menu" style="border-top: 1px solid #d6d6d6;"><a href="<?php echo get_home_url();?>/client-dashboard/">Tableau de bord</a></div>
            <div class="admin-menu"><a href="<?php echo get_home_url();?>/client-dashboard/client-projects/">Projets</a></div>
            <div class="admin-menu"><a href="<?php echo get_home_url();?>/client-dashboard/client-messages/">Messages</a></div>
            <div class="admin-menu"><a href="<?php echo get_home_url();?>/client-dashboard/client-files/">Fichiers</a></div>
            <div class="admin-menu admin-menu-active"><a href="<?php echo get_home_url();?>/client-dashboard/client-account/" style='color:white;'>Mon compte</a></div>
        </div>
        
        <div class="col-md-9">
        
            <?php
            global $current_user;
            get_currentuserinfo();
            
            if(isset($_GET['action']) && $_GET['action'] == 'modifier'){
                
                echo '<form name="modifierCompte" method="post" action="'.get_permalink().'">';
                    echo '<span style="width:100px;display:inline-block;">Email: </span><input type="text" name="email" value="'.$current_user->user_email.'" /><br>';
                    echo '<span style="width:100px;display:inline-block;">Prénom: </span><input type="text" name="prenom" value="'.$current_user->user_firstname.'" /><br>';
                    echo '<span style="width:100px;display:inline-block;">Nom: </span><input type="text" name="nom" value="'.$current_user->user_lastname.'" /><br>';
                    echo '<span style="width:100px;display:inline-block;">Société: </span><input type="text" name="societe" value="'.xprofile_get_field_data( 'Société', $current_user->ID ).'" /><br>';
                    echo '<span style="width:100px;display:inline-block;">Site internet: </span><input type="text" name="site" value="'.xprofile_get_field_data( 'Site internet', $current_user->ID ).'" /><br>';
                    echo '<span style="width:100px;display:inline-block;">Adresse: </span><input type="text" name="adresse" value="'.xprofile_get_field_data( 'Adresse', $current_user->ID ).'" /><br>';
                    echo '<span style="width:100px;display:inline-block;">Code postal: </span><input type="text" name="cp" value="'.xprofile_get_field_data( 'Code postal', $current_user->ID ).'" /><br>';
                    echo '<span style="width:100px;display:inline-block;">Ville: </span><input type="text" name="ville" value="'.xprofile_get_field_data( 'Ville', $current_user->ID ).'" /><br>';
                    echo '<span style="width:100px;display:inline-block;">Pays: </span><input type="text" name="pays" value="'.xprofile_get_field_data( 'Pays', $current_user->ID ).'" /><br>';
                    echo '<span style="width:100px;display:inline-block;">Téléphone: </span><input type="text" name="telephone" value="'.xprofile_get_field_data( 'Téléphone', $current_user->ID ).'" /><br>';
                    echo '<input type="submit" name="submitModif" value="Valider" /><br>';
                echo '</form>';
                
            }
            
            else{
                
                if(isset($_POST['submitModif'])){
                    
                    if(isset($_POST['email']) && $_POST['email'] != '' && $_POST['email'] != $current_user->user_email){
                        wp_update_user( array( 'ID' => $current_user->ID, 'user_email' => $_POST['email'] ) );
                    }
                    if(isset($_POST['prenom']) && $_POST['prenom'] != '' && $_POST['prenom'] != $current_user->user_firstname){
                        wp_update_user( array( 'ID' => $current_user->ID, 'first_name' => $_POST['prenom'] ) );
                        wp_update_user( array( 'ID' => $current_user->ID, 'nickname' => $_POST['prenom']." ".$current_user->user_lastname ) );
                        wp_update_user( array( 'ID' => $current_user->ID, 'display_name' => $_POST['prenom']." ".$current_user->user_lastname ) );
                        $newprenom = $_POST['prenom'];
                    }
                    if(isset($_POST['nom']) && $_POST['nom'] != '' && $_POST['nom'] != $current_user->user_lastname){
                        $prenom = $current_user->user_firstname;
                        if(isset($newprenom))
                            $prenom = $newprenom;
                        wp_update_user( array( 'ID' => $current_user->ID, 'last_name' => $_POST['nom'] ) );
                        wp_update_user( array( 'ID' => $current_user->ID, 'nickname' => $prenom." ".$_POST['nom'] ) );
                        wp_update_user( array( 'ID' => $current_user->ID, 'display_name' => $prenom." ".$_POST['nom'] ) );
                    }
                    if(isset($_POST['societe']) && $_POST['societe'] != '' && $_POST['societe'] != xprofile_get_field_data( 'Société', $current_user->ID )){
                        xprofile_set_field_data("Société", $user_ID, $_POST['societe']);
                    }
                    if(isset($_POST['site']) && $_POST['site'] != '' && $_POST['site'] != xprofile_get_field_data( 'Site internet', $current_user->ID )){
                        xprofile_set_field_data("Site internet", $user_ID, $_POST['site']);
                    }
                    if(isset($_POST['adresse']) && $_POST['adresse'] != '' && $_POST['adresse'] != xprofile_get_field_data( 'Adresse', $current_user->ID )){
                        xprofile_set_field_data("Adresse", $user_ID, $_POST['adresse']);
                    }
                    if(isset($_POST['cp']) && $_POST['cp'] != '' && $_POST['cp'] != xprofile_get_field_data( 'Code postal', $current_user->ID )){
                        xprofile_set_field_data("Code postal", $user_ID, $_POST['cp']);
                    }
                    if(isset($_POST['ville']) && $_POST['ville'] != '' && $_POST['ville'] != xprofile_get_field_data( 'Ville', $current_user->ID )){
                        xprofile_set_field_data("Ville", $user_ID, $_POST['ville']);
                    }
                    if(isset($_POST['pays']) && $_POST['pays'] != '' && $_POST['pays'] != xprofile_get_field_data( 'Pays', $current_user->ID )){
                        xprofile_set_field_data("Pays", $user_ID, $_POST['pays']);
                    }
                    if(isset($_POST['telephone']) && $_POST['telephone'] != '' && $_POST['telephone'] != xprofile_get_field_data( 'Téléphone', $current_user->ID )){
                        xprofile_set_field_data("Téléphone", $user_ID, $_POST['telephone']);
                    }
                    
                    echo '<p style="color:red;">Vos changements ont bien été enregistrés.</p>';
                    
                }
                
                echo 'Login: ' . $current_user->user_login . "<br>";
                echo 'Email: ' . $current_user->user_email . "<br>";
                echo 'Prénom: ' . $current_user->user_firstname . "<br>";
                echo 'Nom: ' . $current_user->user_lastname . "<br>";
                echo 'Société: ' . xprofile_get_field_data( 'Société', $current_user->ID ). "<br>";
                echo 'Site internet: ' . xprofile_get_field_data( 'Site internet', $current_user->ID ). "<br>";
                echo 'Adresse: ' . xprofile_get_field_data( 'Adresse', $current_user->ID )."<br>".xprofile_get_field_data( 'Code postal', $current_user->ID )." ".xprofile_get_field_data( 'Ville', $current_user->ID ).", ".xprofile_get_field_data( 'Pays', $current_user->ID ). "<br>";
                echo 'Téléphone: ' . xprofile_get_field_data( 'Téléphone', $current_user->ID ). "<br><br>";
                
                echo "<a href='".get_home_url()."/client-dashboard/client-account/?action=modifier'>Modifier</a>";
            
            }

            ?>
 
        </div>
        
    </div>
    
    <script type="text/javascript">
    
    </script>
    
<?php get_footer(); ?>