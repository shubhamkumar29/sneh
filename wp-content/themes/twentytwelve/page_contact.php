<?php /* Template name:  Contact */ ?>
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
	<div id="primary" class="site-content">
    	<div class="headBan">
			<div class="lineHeight0 inHeadBan contactPageTemp"></div>
		</div>
	  	<div id="content" role="main">
        <div class="blueWhtBox">
        	<div class="width900">
            	<div class="space20"></div>
				<div class="marginB20">
                	<h1 class="heading1">CONTACT US<span class="fold"></span></h1>
                	
                </div>
              
                
                
               
             <div class="clear marginB20"></div>
                <!--<p class="fontSize15 marginB20">Please fill the form below, and our representative will contact you shortly.</p>-->
                 <?php echo do_shortcode('[contact-form-7 id="169" title="Contact form 1"]'); ?>

				<?php //get_contact_form();?> 
                <div class="clear"></div>
                <div class="marginT15 fontSize16 line24">
                	<p>Corporate Address:<br />
                        <span class="openSansLight">SNEH Eldercare Private Limited<br />
                        A11, Mahesh Niwas, Road No. 3, LT Nagar, Goregaon West, Mumbai 400062</span>
                    </p>
                </div>
                
		  </div>
        </div>
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>