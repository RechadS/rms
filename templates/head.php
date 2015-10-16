<?php
    if(isset($_POST['submit-connect'])){
        if(isset($_POST['identifiant']) && $_POST['identifiant'] != '' && isset($_POST['password']) && $_POST['password'] != ''){
            $creds = array();
            $creds['user_login'] = $_POST['identifiant'];
            $creds['user_password'] = $_POST['password'];
            $creds['remember'] = true;
            $user = wp_signon( $creds, false );   
            if ( is_wp_error($user) )
                $errConnect = $user->get_error_message();
            elseif($user->has_cap("administrator")){
                header("Location: ".get_home_url()."/admin-dashboard/");
                exit;
            }
            else{
                header("Location: ".get_home_url()."/client-dashboard/");
                exit;
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Relook my Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,800italic,400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo get_home_url(); ?>/assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_home_url(); ?>/assets/plugins/layer-slider/layerslider/css/layerslider.css">
    

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <link href="<?php echo get_home_url(); ?>/assets/css/animate.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
    <script src="<?php echo get_home_url(); ?>/assets/js/jquery.cookie.js"></script>
  </head>
  <body class="header-fixed">