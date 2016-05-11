<!DOCTYPE HTML>



<!--[if IE 7]>



<html class="ie ie7" <?php language_attributes(); ?>>



<![endif]-->



<!--[if IE 8]>



<html class="ie ie8" <?php language_attributes(); ?>>



<![endif]-->



<!--[if !(IE 7) | !(IE 8)  ]><!-->



<html <?php language_attributes(); ?>>



<!--<![endif]-->



<head>



<meta charset="<?php bloginfo( 'charset' ); ?>" />



<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />



<meta name="HandheldFriendly" content="true" />


<?php wp_head();?>

<!--<title><?php //wp_title( '|', true, 'right' ); ?></title>-->


<!--<meta name='description' content='SNeH delivers all services related to Geriatrics and Elder care -Doctor home visits, consultation and health evaluation,nursing care,physiotherapists and EMR'/>
-->


<link rel="profile" href="http://gmpg.org/xfn/11" />



<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />



<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>



<!--[if lt IE 9]>



<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>



<![endif]-->



<?php wp_head(); ?>



<script src="<?php echo get_template_directory_uri(); ?>/js/script.js" type="text/javascript"></script>



<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css" />



</head>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46310883-1', 'auto');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>


<body <?php body_class(); ?>>







<div id="page" class="hfeed site">



        <header id="masthead" class="site-header stickHead" role="banner">



        	<div class="width960">



            	<div class="topBar">

					<a href="tel:+918898119922" class="phonelink"></a>

                	<a href="https://www.youtube.com/user/Snehcare" class="socialIcon youTubeIcon" target="_blank"></a>



                    <a href="https://twitter.com/SNEHEldercare" class="socialIcon twitIcon" target="_blank"></a>



                    <a href="https://www.facebook.com/sneheldercare" class="socialIcon facebookIcon" target="_blank"></a>



                    <div class="username">



                     <?php



					 if ( is_user_logged_in() ) 



					 {



						 global $current_user;



						



						 $current_user = wp_get_current_user();



						  //print_r($current_user); 



						  $user_first = get_user_meta( $current_user->ID, 'pie_text_7', true ); 	



						  $user_last = get_user_meta( $current_user->ID, 'pie_text_8', true ); 	







						 echo 'Welcome <a href="'.home_url().'/pie-register-profile">'. ucwords($user_first.' '.$user_last).' </a>  &nbsp;&nbsp;|&nbsp;&nbsp; <a href="'.home_url().'/my-account">Service Orders</a> &nbsp;&nbsp;|&nbsp;&nbsp;';



						 echo '<a href="'.@piereg_logout_url().'">'.__("Logout","piereg").'</a>';



					 }



					 else



					 {



						// echo '<a href="pie-register-registration">Register</a>   &nbsp;&nbsp;|&nbsp;&nbsp;  <a href="pie-registration-login">Login</a>';



						echo '<a href="'.pie_registration_url().'">'.__("Register","piereg").'</a>'.' | <a href="'.pie_login_url().'">'.__("Log in","piereg").'</a>' ;



					 }



					  //echo 'Welcome Ritu Midha   &nbsp;&nbsp;|&nbsp;&nbsp;  <a href="logout">Logout</a>';



					 ?>



                    	



                    </div>



                </div>



                <hgroup>



                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="logo"></a></h1>



                </hgroup>



        



                <nav id="site-navigation" class="main-navigation" role="navigation">



                    <h3 class="menu-toggle"><!-- ?php _e( 'Menu', 'twentytwelve' ); ? --></h3>



                    <a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>



                    <?php 



					if ( is_front_page() ) 



					{



						wp_nav_menu( array( 'theme_location' => 'termsMenu', 'menu_class' => 'nav-menu' ) );



					}



					else



					{



						wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); 						



					}



					?>



                </nav><!-- #site-navigation -->

        



                <?php if ( get_header_image() ) : ?>



                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>



                <?php endif; ?>



                <div class="clear"></div>



            </div>



        </header><!-- #masthead -->

				<div class="usernameRespons">



                     <?php



					 if ( is_user_logged_in() ) 



					 {



						 global $current_user;



						



						 $current_user = wp_get_current_user();



						  //print_r($current_user); 



						  $user_first = get_user_meta( $current_user->ID, 'pie_text_7', true ); 	



						  $user_last = get_user_meta( $current_user->ID, 'pie_text_8', true ); 	







						 echo 'Welcome <a href="'.home_url().'/pie-register-profile">'. ucwords($user_first).' </a> | <a href="'.home_url().'/my-account">Service Orders</a> | ';



						 echo '<a href="'.@piereg_logout_url().'">'.__("Logout","piereg").'</a>';



					 }



					 else



					 {



						// echo '<a href="pie-register-registration">Register</a>   &nbsp;&nbsp;|&nbsp;&nbsp;  <a href="pie-registration-login">Login</a>';



						echo '<a href="'.pie_registration_url().'">'.__("Register","piereg").'</a>'.' | <a href="'.pie_login_url().'">'.__("Log in","piereg").'</a>' ;



					 }



					  //echo 'Welcome Ritu Midha   &nbsp;&nbsp;|&nbsp;&nbsp;  <a href="logout">Logout</a>';



					 ?>

					&nbsp;&nbsp;&nbsp;

                    	



                    </div>



	<div id="main" class="wrapper">