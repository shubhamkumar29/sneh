<?php /* Template name:  sneh-philosophy */ ?>
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
			<div class="lineHeight0 inHeadBan snehPhilosophyPageTemp"></div>
		</div>
	  	<div id="content" role="main">
        <div class="blueWhtBox">
        	<div class="width900">
            	<div class="space20"></div>
				<div class="marginB20">
                	<h1 class="heading1">SNeH Philosophy<span class="fold"></span></h1>
                    <!--<div class="philosphyGraphics"><img src="<?php echo get_template_directory_uri(); ?>/images/philosphy_graphics.jpg" alt="" /></div>-->
                </div>
              	<ul class="ancServices">
                    <li>
                        <a href="#contact">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/ourVision.png" width="109" height="109" alt="Nursing Services" title="Nursing Services" />
                            <span class="asContent">
                                <span class="ancServicesHead">Our Vision</span>
                                To become the leading pan India provide of most effective preventive healthcare solutions.
                            </span>
                        </a>
                        <div class="clear"></div>
                    </li>
                    <li class="ancServicesSecond">
                        <a href="#contact">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/ourMission.png" width="109" height="109" alt="Caregivers Services" title="Caregivers Services" />
                            <span class="asContent">
                                <span class="ancServicesHead">Our Mission</span>
                                To provide the best possible experience and care for the physical and mental wellbeing of people during their journey of life.
                            </span>
                        </a>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <a href="#contact">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/coreValues.png" width="109" height="109" alt="Delivery &amp; Setting Up of Mobility &amp; Medical Equipment" title="Delivery &amp; Setting Up of Mobility &amp; Medical Equipment" />
                            <span class="asContent">
                                <span class="ancServicesHead">Core Values</span>
                                Integrity, simplicity, excellence, customisation.
                            </span>
                        </a>
                        <div class="clear"></div>
                    </li>
                    <li class="ancServicesSecond">
                        <a href="#contact">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/ourMantra.png" width="109" height="109" alt="Home Delivery of Medicines" title="Home Delivery of Medicines" />
                            <span class="asContent">
                                <span class="ancServicesHead">Our Mantra</span>
                                Make preventive healthcare simple.
                            </span>
                        </a>
                        <div class="clear"></div>
                    </li>
                </ul>
                <div class="clear"></div>
              <!--<div class="clear marginB20"></div>
               
                <?php //get_contact_form();?> 
                <div class="clear"></div>
              -->
              
		  </div>
        </div>
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>