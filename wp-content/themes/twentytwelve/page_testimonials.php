<?php /* Template name:  Testimonials */ ?>
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
			<div class="lineHeight0 inHeadBan testimonialsPageTemp"></div>
		</div>
	  	<div id="content" role="main">
        <div class="blueWhtBox">
            <div class="width900">
                <div class="space20"></div>
                <div class="marginB20">
                    <h1 class="heading1">TESTIMONIALS<span class="fold"></span></h1>
                </div>
                <div class="testiBox">
                	<div class="testiBoxImg"><img src="<?php echo get_template_directory_uri(); ?>/images/savita_bhat.jpg" alt="" /></div>
                    <div class="testContent">"Thank you Sneh for being there for us.  After taking your annual package, I am not worried about my check-ups and tests. It is a breather for my daughter also, who had to find time from her busy schedule every now and then to take me to the doctors. I am really happy with the quality of your service." </div>
                    <div class="testiName"> Savita Bhat, <br />Mumbai </div>
                    <div class="clear"></div>
                </div>
                <div class="testiBox">
                	<div class="testiBoxImg"><img src="<?php echo get_template_directory_uri(); ?>/images/rakesh_mathur.jpg" alt="" /></div>
                    <div class="testContent">"Though I realised the importance of taking care of my health, I somehow could not bring myself to go for health check-ups. Thanks to my neighbour, I found out about Sneh eldercare. To start with, they did a basic check-up, and now that they have identified areas in which I need special care – I have decided to go for a customized package according to my needs." </div>
                    <div class="testiName"> Rakesh Mathur, <br /> Mumbai </div>
                    <div class="clear"></div>
                </div>
                <div class="testiBox">
                	<div class="testiBoxImg"><img src="<?php echo get_template_directory_uri(); ?>/images/chintan_shah.jpg" alt="" /></div>
                    <div class="testContent">"Though my mother constantly complained of minor health problems – she would completely reject the idea of visiting a doctor or a lab. She found it tiring and waste of money. Now no more. Once the Sneh Eldercare visiting doctor visited us, things have changed. She is happy that most of the tests can be done at home, and we would not need to go to a number of doctors to understand what they meant. Best part is she is now asking my father too to try Sneh services." </div>
                    <div class="testiName"> Chintan Shah, <br />Mumbai </div>
                    <div class="clear"></div>
                </div>
                <div class="testiBox">
                	<div class="testiBoxImg"><img src="<?php echo get_template_directory_uri(); ?>/images/sunita_soman.jpg" alt="" /></div>
                    <div class="testContent">"When Sneh Eldercare approached me for the first time, I did not see any value in their services. But only till the time my aunt complained of feeling uneasy and restless. After trying to figure out which doctor to consult for three-four days, I called Sneh Eldercare. They took charge, a check-up was done in the house itself, and a few blood tests also. Soon things were in control." </div>
                    <div class="testiName">  Sunita Soman, <br /> Mumbai </div>
                    <div class="clear"></div>
                </div>
                <div class="testiBox">
                	<div class="testiBoxImg"><img src="<?php echo get_template_directory_uri(); ?>/images/sujata_kapoor.jpg" alt="" /></div>
                    <div class="testContent">"I knew I was not well. I was stressed and felt weak and sleepy all the time. At 55, it felt as if I was 65. My family doctor mentioned that I should take help of someone who specialises in geriatric care.   Hesitant to go to a hospital, I chose Sneh Eldercare. Their regular tests and monitoring have helped me a lot. I am following the routine and diet recommended by them, and feeling better in just one month." </div>
                    <div class="testiName"> Sujata Kapoor, <br />Mumbai</div>
                    <div class="clear"></div>
                </div>              
           <!--   <div class="clear marginB20"></div>
                <p class="fontSize15 marginB20">Please fill the form below, and our representative will contact you shortly.</p>
                <?php //get_contact_form();?> 
                <div class="clear"></div>
              -->
		  </div>
        </div>
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>