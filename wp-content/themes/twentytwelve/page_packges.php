<?php /* Template name: Packages */ ?>
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<link rel="stylesheet" href="style.css" />
	<div id="primary" class="site-content">
    	<div class="headBan">
   	    	<div class="lineHeight0"><img src="<?php echo get_template_directory_uri(); ?>/images/service-page-banner.jpg" alt="Image" /></div>
		</div>
	  	<div id="content" role="main">
        <div class="blueWhtBox">
        	<div class="width900">
            	<div class="space20"></div>
				<div class="marginB20">
                	<h1 class="heading1">DISEASE SPECIFIC PACKAGES<span class="fold"></span></h1>
                	<!--<div class="floatRight fontSize13 marginT15">Lorem Ipsum is simply dummy text of the printing and typesetting industry</div>-->
                </div>
                
                <div class="marginB20 fontSize15 line20">
                	<p>Our custom packages are created based on your health condition, lifestyle and your specific requirements. Please fill the simple form below and we would get back to you at the earliest possible.</p>
                </div>
                
            	<div class="clear marginB20"></div>
                <?php get_contact_form('customPackages');?> 
                <div class="clear"></div>
		  </div>
        </div>
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>