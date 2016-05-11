<?php /* Template name:  Dropdown Centers */ ?>
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
			<div class="lineHeight0 inHeadBan dropdownPageTemp"></div>
		</div>
	  	<div id="content" role="main">
        <div class="blueWhtBox">
        	<div class="width900">
            	<div class="space20"></div>
				<div class="marginB20">
                	<h1 class="heading1">Dropdown Centers<span class="fold"></span></h1>
                	<!--<div class="floatRight fontSize13 marginT15">Lorem Ipsum is simply dummy text of the printing and typesetting industry</div>-->
              </div>
    			<p class="fontSize14 line20 openSansLight marginB20">
                SNeH Dropdown Centres are committed to provide best Preventive Healthcare and Lifestyle Management services. Timely health evaluations and lifestyle management are important for remaining healthy and fit.
				</p>  
				<p class="fontSize18 line20 marginB20">Services offered by SNeH Dropdown Centre are:</p>  
				<div class="dropBox">
                    <p class="dropBoxTital">Preventive Healthcare Services for Elderly</p>
                    <div class="floatLeft marginR15 marginL20 dropboxImg">
                    	<img src="<?php echo get_template_directory_uri(); ?>/images/drop1.jpg" width="194" height="178" alt="" />
                    </div>
                    <div class="floatLeft width460 dropBoxCon">
                    	Preventive Healthcare Services for Elderly are created with special focus on their health requirements. Detailed health evaluation by our doctors, advice on tests if required and regular follow-ups are key highlights of this service. In case a health problem is diagnosed, adequate treatment directions are provided. We also offer vaccination services for the elderly.<br /><br />

                        We understand that elderly need special care, attention and comfort when visiting a doctor, and special attention has been given to these requirements in our dropdown centres.<br /><br />
                        
                        We also consolidate medical records for ease of understanding.
                    </div>
                    <div class="dropBoxTime">
                    	<div class="day">Every <br />TUESDAY</div>
                        <div class="time">11AM - 1 PM</div>
                    </div>
                    <div class="clear"></div>
                    <div class="space20"></div>
				</div>
                <div class="dropBox">
                    <p class="dropBoxTital">Lifestyle Management and Preventive Healthcare Services (age 18+)</p>
                    <div class="floatLeft marginR15 marginL20 dropboxImg">
                    	<img src="<?php echo get_template_directory_uri(); ?>/images/drop2.jpg" width="194" height="178" alt="" />
                        <p>Call: 8898 1199 22/33/55 </p>
                        <p>Email: <a href="mailto:help@snehcare.com">help@snehcare.com</a></p>
                    </div>
                    <div class="floatLeft width460 dropBoxCon">
                        Preventive Healthcare and proper Lifestyle Management are key to a healthy and happy life. At SNeH Dropdown Centres we provide best of advice and care for both.<br /><br />
                        Our doctors conduct detailed evaluation of current health status, and recommend tests based on that. Diet and lifestyle advice is provided according to health status and the activity levels.<br /><br />
                        The Dropdown Centres also facilitate lifestyle disease management like diabetes, blood pressure, obesity, Thyroid etc.
                    </div>
                    <div class="dropBoxTime">
                    	<div class="day">Every <br />Saturday</div>
                        <div class="time">11AM - 1 PM</div>
                    </div>
                    <div class="clear"></div>
                    <div class="space20"></div>
                    <div class="dropBlue">Location: Sneh Elder Care, Ground Floor, Madhuli, Panch Marg, Versova, Andheri West, Mumbai 400061. </div>
				</div>

			   <div class="clear marginB20"></div>
                <?php //get_contact_form();?> 
                 <?php echo do_shortcode('[contact-form-7 id="169" title="Contact form 1"]'); ?>
                <div class="clear"></div>
              
		  </div>
        </div>
        <!--<div class="blueBox">
        	<div class="width900">
				<div><h1 class="heading1">FAQS<span class="fold"></span></h1></div>
                <ul class="faqs">
					<li><a href="#">Geriatrics</a></li>
                    <li><a href="#">Sneh Eldercare Plans</a></li>
                    <li><a href="#">How it works</a></li>
                    <li><a href="#">Serivices</a></li>
                    <li><a href="#">Payments</a></li>
                
                </ul>
                <div class="clear"></div>
                
			</div>
        </div>-->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>