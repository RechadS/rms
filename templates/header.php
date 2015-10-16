<body class="header-fixed">
<header>
     <div class="header-v6 header-classic-dark header-sticky">
        <!-- Navbar -->
        <div class="navbar mega-menu" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="menu-container">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Navbar Brand -->
                    <div class="navbar-brand">
                        <a href="<?php echo get_home_url(); ?>">
                            <img class="default-logo" src="<?php echo get_home_url(); ?>/img/logo.png" alt="Logo" />
                        </a>
                    </div>
                    <!-- ENd Navbar Brand -->

                    <!-- Header Inner Right -->
                    <!--<div class="header-inner-right">
                        <ul class="menu-icons-list">
                            <li class="menu-icons">
                                <i class="menu-icons-style search search-close search-btn fa fa-search"></i>
                                <div class="search-open">
                                    <input type="text" class="animated fadeIn form-control" placeholder="Start searching ...">
                                </div>
                            </li>
                            <li class="menu-icons shopping-cart">
                                <i class="menu-icons-style radius-x fa fa-shopping-cart"></i>
                                <span class="badge">0</span>
                                <div class="shopping-cart-open">
                                    <span class="shc-title">No products in the Cart</span>
                                    <button type="button" class="btn-u"><i class="fa fa-shopping-cart"></i> Cart</button>
                                    <span class="shc-total">Total: <strong>$0.00</strong></span>
                                </div>
                            </li>                            
                        </ul>    
                    </div>-->
                    <!-- End Header Inner Right -->
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-responsive-collapse">
                    <div class="menu-container">
                        <ul class="nav navbar-nav right-menu">
                            <li>
                                <a href="#"><img src="<?php echo get_home_url(); ?>/img/french-flag.jpg" alt="France" style="vertical-align: baseline;"/>&nbsp; Langue </a>
                            </li>
                            <?php
                            if ( is_user_logged_in() ) {
                                global $current_user;
                                get_currentuserinfo();
                            }
                            ?>
                            <li class="dropdown">
                                <a href="#" class="connect-link" >
                                    <span class="glyphicon glyphicon-user"></span>
                                    <?php
                                    if ( is_user_logged_in() ) {
                                        echo "&nbsp; ".$current_user->user_login;
                                    }
                                    else{
                                        echo "&nbsp; Connexion";
                                    }
                                    ?>
                                </a>
                                <?php
                                $display = "display:none;";
                                if(isset($errConnect)){
                                    $display="";
                                }
                                else{
                                    $errConnect = "";
                                }
                                ?>
                                <div id="connexion-menu" style="<?php echo $display; ?>">
                                    <div class="triangle-connexion"></div>
                                    <?php
                                    if ( !is_user_logged_in() ) {
                                    ?>
                                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onSubmit="return checkConnect(this);">
                                            <div class="identifiant-field" >
                                                <div class="connexion-logo-container"><img src="<?php echo get_home_url(); ?>/img/logo-identifiant.png" alt="Identifiant" /></div>
                                                <div class="connexion-field-container"><input type="text" name="identifiant" placeholder="Identifiant" /></div>
                                            </div>
                                            <div class="password-field">
                                                <div class="connexion-logo-container"><img src="<?php echo get_home_url(); ?>/img/logo-password.png" alt="Password" /></div>
                                                <div class="connexion-field-container"><input type="password" name="password" placeholder="Mot de passe" /></div>
                                            </div>
                                            <div style="margin-top:15px;">
                                                <a href="<?php echo wp_lostpassword_url(); ?>" style="font-size: 11px; font-style: italic;">Mot de passe oublié ?</a>
                                                <div class="triangle-connexion-bis"></div>
                                                <input type="submit" name="submit-connect" value="Connexion" style="margin:0; padding:0;border:none; background-color:transparent; color: white; text-transform: uppercase; font-weight: bold; font-size: 14px; line-height: 10px; margin-left: 2px;" /> 
                                            </div>
                                            
                                            <p id="err-connexion" style="<?php echo $display; ?> color:red;"><?php echo $errConnect?></p>
                                        </form>
                                        <div style="border-top:1px solid black; margin-top:20px;   padding-top: 5px;">
                                            <p style="font-size: 13px;">Pas encore membre ? <a href="<?php echo get_home_url()."/inscription/"; ?>" style="color: #02a1f5;font-weight: 700;font-size: 14px;">Créer un compte</a></p>
                                        </div>
                                    <?php
                                    }
                                    elseif(current_user_can( 'administrator' )){
                                    ?>
                                        <a href="<?php echo get_home_url()."/admin-dashboard/"; ?>">Espace admin</a><br>
                                        <a href="<?php echo wp_logout_url( home_url() ); ?>">Se déconnecter</a>
                                    <?php
                                    }
                                    else{
                                    ?>
                                        <a href="<?php echo get_home_url()."/client-dashboard/"; ?>">Mon espace client</a><br>
                                        <a href="<?php echo wp_logout_url( home_url() ); ?>">Se déconnecter</a>
                                    <?php
                                    }
                                    ?>
                                </div>
                                
                            </li>            

                        </ul>
                        <ul class="nav navbar-nav">
                            <!-- Home -->
                            <li>
                                <a href="<?php echo get_home_url(); ?>/comment-ca-marche/" >
                                    <span>Comment ça marche</span>
                                </a>
                            </li>
                            <!-- End Home -->

                            <!-- Pages -->                        
                            <li>
                                <a href="<?php echo get_home_url(); ?>/galerie/">
                                    <span>Galerie</span>
                                </a>
                            </li>
                            <!-- End Pages -->

                            <!-- Blog -->
                            <li>
                                <a href="<?php echo get_home_url(); ?>/services/">
                                    <span>Services</span>
                                </a>
                            </li>
                            <!-- End Blog -->

                            <!-- Portfolio -->
                            <li>
                                <a href="<?php echo get_home_url(); ?>/commande/" class="commander-header">
                                    <span class="commander-header-txt">Commander</span>
                                </a>
                            </li>
                            <!-- End Portfolio -->
                        </ul>
                        
                        
                    </div>
                </div><!--/navbar-collapse-->
            </div>    
        </div>            
        <!-- End Navbar -->
    </div>
    
    <script type="text/javascript">
        jQuery(".connect-link").click(function(e){
            e.preventDefault();
            jQuery("#connexion-menu").toggle();
        });
        function checkConnect(form){
            var check = (form['identifiant'].value != '' && form['password'].value != '');
            if(!check){
                jQuery("#err-connexion").text("Veuillez remplir les champs").show();
            }
            return check;
        }
    </script>

</header>

