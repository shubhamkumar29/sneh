<?php /* Template name: Ancillary Services*/ ?>
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
			<div class="lineHeight0 inHeadBan ancillaryPageTemp"></div>
		</div>
	  	<div id="content" role="main">
        <div class="blueWhtBox">
        	<div class="width900">
            	<div class="space20"></div>
				<div class="marginB20">
                	<h1 class="heading1">ANCILLARY SERVICES<span class="fold"></span></h1>
                	<!--<div class="floatRight fontSize13 marginT15">Lorem Ipsum is simply dummy text of the printing and typesetting industry</div>-->
                </div>
                <p class="fontSize14 line20 openSansLight marginB20 hide480">We at SNeH Eldercare recognise that senior citizens not only require preventive healthcare packages, but might also need other services to help them look after their health well. Hence, the need for ancillary service. We provide ancillary services in association with our trustworthy partners. Some of the ancillary services provided by us are:</p>
                <ul class="ancServices">
                	<li>
                    	<a href="#contact">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/nursing-service-icon.png" width="109" height="109" alt="Nursing Services" title="Nursing Services" />
                            <span class="asContent">
                                <span class="ancServicesHead">Nursing Services</span>
                                Nurses facilitated by our partners are well trained, experienced and thorough professionals. They provide tender care to elderly.
                            </span>
						</a>
                        <div class="clear"></div>
                    </li>
                    <li class="ancServicesSecond">
                    	<a href="#contact">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/caregivers_icon.png" width="109" height="109" alt="Caregivers Services" title="Caregivers Services" />
                            <span class="asContent">
                                <span class="ancServicesHead">Caregivers</span>
                                Caregivers play an important role in keeping elderly comfortable.  Caregivers provided by SNeH partners are kind, gentle and professionally trained.
                            </span>
						</a>
                        <div class="clear"></div>
                    </li>
                    <li>
                    	<a href="#contact">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/mobility_icon.png" width="109" height="109" alt="Delivery &amp; Setting Up of Mobility &amp; Medical Equipment" title="Delivery &amp; Setting Up of Mobility &amp; Medical Equipment" />
                            <span class="asContent">
                                <span class="ancServicesHead">Delivery &amp; Setting Up of Mobility &amp; Medical Equipment</span>
                                We facilitate supply of wheel chairs, hospital beds, oxygen cylinders and small medical equipment through our partners.
                            </span>
						</a>
                        <div class="clear"></div>
                    </li>
                    <li class="ancServicesSecond">
                    	<a href="#contact">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/home_delivery_icon.png" width="109" height="109" alt="Home Delivery of Medicines" title="Home Delivery of Medicines" />
                            <span class="asContent">
                                <span class="ancServicesHead">Home Delivery of Medicines</span>
                                SNeH facilitates home delivery of medicines in certain areas of Mumbai. However, this service is not available in all parts of the city.
                            </span>
						</a>
                        <div class="clear"></div>
                    </li>
                    <li>
                    	<a href="#contact">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/ambulance_icon.png" width="109" height="109" alt="Ambulance Service" title="Ambulance Service" />
                            <span class="asContent">
                                <span class="ancServicesHead">Ambulance Service</span>
                                SNeH would help you in getting an ambulance (subject to availability) and also provide you numbers which you can contact to avail of ambulance service.
                            </span>
						</a>
                        <div class="clear"></div>
                    </li>
                    <li class="ancServicesSecond">
                    	<a href="#contact">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/physiotherapists_icon.png" width="109" height="109" alt="Physiotherapists" title="Physiotherapists" />
                            <span class="asContent">
                                <span class="ancServicesHead">Physiotherapists</span>
                                Physiotherapy is one of the most critical services required by elderly. Our physiotherapists are efficient, well trained and understand elderly’s specific needs.
                            </span>
						</a><div class="clear"></div>
                    </li>
                    <li>
                    	<a href="#contact">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/rehabilitation_icon.png" width="109" height="109" alt="Specialised Rehabilitation Services" title="Specialised Rehabilitation Services" />
                            <span class="asContent">
                                <span class="ancServicesHead">Specialised Rehabilitation Services</span>
                                Elderly definitely need specialised nurses, caregivers and doctors post operation and post hospitalisation. Our effort is to provide you with the right people.
                            </span>
						</a><div class="clear"></div>
                    </li>
                    
                    <li class="ancServicesSecond">
                    	<a href="#contact">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/dietary_icon.png" width="109" height="109" alt="Dietary Services" title="Dietary Services" />
                            <span class="asContent">
                                <span class="ancServicesHead">Dietary Services</span>
                                After a particular age, food habits need to change as per the health and lifestyle. Our dieticians help you in a gradual transition to right kind of food.
                            </span>
						</a><div class="clear"></div>
                    </li>
                    <li class="ancServicesSecond">
                    	<a href="#contact">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/counsellors_icon.png" width="109" height="109" alt="Counsellors" title="Counsellors" />
                            <span class="asContent">
                                <span class="ancServicesHead">Counsellors</span>
                                Our counsellors are elderly friendly, patient and relate to elderlies' issues.
                            </span>
						</a><div class="clear"></div>
                    </li>
				</ul>
                <div class="clear"></div>
                <div id="contact" class="iPadHide" style="height:130px"></div>
                <!--<p class="fontSize15 marginB20">Please fill the form below, and our representative will contact you shortly.</p>-->
                <?php //get_contact_form('ancillary');?> 
                 <?php echo do_shortcode('[contact-form-7 id="169" title="Contact form 1"]'); ?>
                <div class="clear"></div>
		  </div>
        </div>
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>