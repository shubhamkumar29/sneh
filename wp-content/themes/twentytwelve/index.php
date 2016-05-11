<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/animateSmothScroll.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript"
            src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript">
            $(document).ready(function() {
                        setupRotator();
            });
            function setupRotator() {
                        if ($('.textItem').length > 1) {
                                    $('.textItem:first').addClass('current').fadeIn(1000);
                                    setInterval('textRotate()', 7000);
                        }
            }
            function textRotate() {
                        var current = $('#quotes > .current');
                        if (current.next().length == 0) {
                                    current.removeClass('current').fadeOut(1000);
                                    $('.textItem:first').addClass('current').fadeIn(1000);
                        } else {
                                    current.removeClass('current').fadeOut(1000);
                                    current.next().addClass('current').fadeIn(1000);
                        }
            }
</script>
 <link href="<?php echo home_url();?>/wp-content/themes/twentytwelve/simple-popup-using-css-and-jquery/css/styles.css" rel="stylesheet" media="screen"  />
					<script  type="text/javascript" language="javascript">
						$(document).ready(function(){
							$(".QTPopup").css('display','none')
							$(".video").click(function(){
								$(".QTPopup").animate({width: 'show'}, 'slow');})
								$(".closeBtn").click(function(){			
									$(".QTPopup").css('display', 'none');
								})
						})
						</script>
    <div style="position: absolute;" class="hidden-pos-slide1" id="slide-1">&nbsp;</div>                            
	<div id="primary" class="site-content">
    	<section class="headBanHome homeSlide marginT114" id="homeBnr">
        <div id="quotes" class="hide480">
             <div class="textItem">Life, as the new saying goes, begins @ 40 – and surely does not end @ 60 </div>
             <div class="textItem">Elderly deserve love, attention and SNeH Care customised to their needs </div>
             <div class="textItem">We provide preventive home healthcare services under the guidance of able doctors</div>
             <div class="textItem">SNeH experts provide Health monitoring as well as post operation services</div>
             <div class="textItem">We facilitate nursing care, caregiver, physiotherapists dietitians & more</div>
             <div class="textItem">We also manage delivery & set up hospital beds, suction machines, wheelchairs etc.</div>
             <div class="textItem">Think Preventive Home Healthcare for elderly – Think SNeH</div>
             <div class="textItem">SNeH Preventive Home Healthcare delivered with compassion, excellence and reliability</div>
		</div>
			<!--<div class="lineHeight0"><img src="<?php echo get_template_directory_uri(); ?>/images/headBan.jpg" alt="Image" /></div>-->
            <div class="blueLine">
            	<div class="width960">
                	<div class="paddingL13 floatLeft topBlueLine">Preventive Healthcare and Proactive Health Monitoring for elderly in the comfort of their home</div>
					<a href="#" class="video"></a>
                   </div>
                <div class="clear"></div>
            </div><div class="clear"></div>
		</section><div class="clear"></div>
	  	<div id="content" role="main">
        <main>
			<section class="greyBox homeSlide" >
            	<div id="homeServices"></div>
               <!-- <div class="height110"></div> -->
				<div class="width900">
                	<div><h1 class="heading1"><div>SNEH SERVICES</div><span class="fold"></span></h1></div>
                    <div class="box">
                    	
                        <h2 class="boxTitle"><a href="services" style="text-decoration:none">SNeH Packages</a></h2>
                    	<img src="<?php echo get_template_directory_uri(); ?>/images/p1.jpg" alt="Image" />
                        <p>SNeH Preventive Home Healthcare packages are customised based on specific needs of the elderly. You can opt for a customised package or choose from our gold, silver and platinum packages. <span class="hide480">We strongly advise an initial evaluation to decide what package suits you the best.</span></p> <br />
                        <a href="#contact_us" class="blueBtn">Contact Now</a>
                    </div>
                    <div class="box marginLR30">
                    	<h2 class="boxTitle"><a href="ancillary-services" style="text-decoration:none">Ancillary Services</a></h2>
                    	<img src="<?php echo get_template_directory_uri(); ?>/images/p2.jpg" alt="Image" />
                       <p> SNeH facilitates professionally trained nurses, caregivers and physiotherapists through its trusted partners.  Also, a hospital bed, a wheel chair or any other medical equipment can be delivered to your residence. <span class="hide480">Contact us now for these ancillary services and many more.</span></p> <br /><br />
                        <a href="#contact_us" class="blueBtn">Request a service</a>
                    </div>
                    <div class="box">
                    	<h2 class="boxTitle"><a href="dropdown-centers" style="text-decoration:none">Dropdown Centre</a></h2>
                    	<img src="<?php echo get_template_directory_uri(); ?>/images/p3.jpg" alt="Image" />
                        <p>SNeH dropdown centre in Mumbai provides best of preventive healthcare and health monitoring services. Detailed doctor evaluation, geriatric counselling, consolidation of medical records and vaccination for elderly are just a few of them.</p> <br /><br />

                        <a href="#contact_us" class="blueBtn">Fix an appointment</a>
                    </div>
                    
                    <div class="clear"></div>
					
            </div>
			
        </section><!-- #content -->
		
        	<section class="whtBox homeSlide">
			<div style="position: absolute;" class="hidden-pos-slide2" id="slide-2">&nbsp;</div>  
            <div id="snehAndYou"></div>
			
			<!-- <div class="height110"></div> -->
        	<div class="width900">
				<div><h1 class="heading1">SNEH &amp; YOU!<span class="fold"></span></h1></div>
                
                <p class="marginT15 marginB15 fontSize18 line24 snehAndYouText">Think preventive home healthcare, think SNeH.
Our key strength is proactive health monitoring and preventive healthcare for elderly in the comfort of their home. SNeH Eldercare follows best global practices in Preventive Home Healthcare.  Led by senior doctors, our services focus on holistic evaluation and analysis, right advice and follow ups. </p>
                
                <div class="circle">
                <a href="sneh-philosophy" style="text-decoration:none">
                	<div class="SY1"></div>
					<p class="circleTitle">OUR  PHILOSOPHY</p>
                    To provide the best possible experience and care for the physical and mental wellbeing of people during their journey of life. 
                    </a>
                </div>
                <div class="circle marginLR68">
                <a href="our-doctors" style="text-decoration:none">
                    <div class="SY2"></div>
                    <p class="circleTitle">OUR DOCTORS</p>
                    SNeHhas a panel of senior doctors with experience and proficiency in elderly healthcare as well as a panel of consultants.
                    </a>
                </div>
                <div class="circle">
                <a href="why-sneh" style="text-decoration:none">
                    <div class="SY3"></div>
                    <p class="circleTitle">WHY SNEH</p>
                    It is only after the initial evaluation that an annual package is designed to fit your needs. Click here to register for Initial <br />evaluation.
                </a>
                </div>
                <div class="clear"></div>
			</div>    
        </section>
        	<section class="greyBox homeSlide">
			<div style="position: absolute;" class="hidden-pos-slide3" id="slide-3">&nbsp;</div>  
            <!-- <div class="height110"></div> -->
        	<div class="width900">
				<div><h1 class="heading1">TESTIMONIALS<span class="fold"></span></h1></div>
                <div class="testimonialsMoto">
                	Our biggest reward and inspiration is appreciation by Elderly and their kin
                </div>
                <div class="testi">
					<div class="testiBoxHome">
						<img src="<?php echo get_template_directory_uri(); ?>/images/savita_bhat.jpg" alt="Image" />
                        <div class="paddingB5"><strong>Savita Bhat</strong></div>
                        Thank you Sneh for being there for us.  After taking your annual package, I am not worried about my check-ups and tests. It is a breather for my daughter also...
                        <div class="clear"></div>
					</div>
                    <div class="testiBoxHome hide480">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/rakesh_mathur.jpg" alt="" />
                        <div class="paddingB5"><strong>Rakesh Mathur</strong></div>
                        Though I realised the importance of taking care of my health, I somehow could not bring myself to go for health check-ups. Thanks to my neighbour, I found out about Sneh...
                        <div class="clear"></div>
					</div>
                    <div class="testiBoxHome borderB0 marginB0 hide480">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/chintan_shah.jpg" alt="" />
                        <div class="paddingB5"><strong>Chintan Shah</strong></div>
                        Though my mother constantly complained of minor health problems – she would completely reject the idea of visiting a doctor or a lab. She found it tiring and waste...
                        <div class="clear"></div>
					</div>
					<a href="<?php echo home_url();?>/testimonials" class="fontSize15">More Testimonials</a>
                </div>
                <div class="clear"></div>
			</div>
        </section>
        </main>
        <div class="whtBox" id="contact_us">
        	<div class="width900">
				<div class="marginB20"><h1 class="heading1">CONTACT US<span class="fold"></span></h1></div>
             
                <div class="clear marginB20"></div>
                <!--<p class="fontSize15 marginB20">Please fill the form below, and our representative will contact you shortly.</p>-->
                <?php //get_contact_form();?> 
                 <?php echo do_shortcode('[contact-form-7 id="169" title="Contact form 1"]'); ?>
                <div class="clear"></div>
                <div class="clear"></div>
		  </div>
        </div>
        <section class="blueBox" id="div_faq">
        	<div class="faqHeight110"></div>
        	<div class="width900">
				<div><h1 class="heading1">FAQS<span class="fold"></span></h1></div>
                <ul class="faqs">
					<li><a href="faq/#section-1" class="geriatrics">Geriatrics</a></li>
                    <li><a href="faq/#section-2" class="eldercare">Sneh Plans</a></li>
                    <li><a href="faq/#section-3" class="how">How it works</a></li>
                </ul>
                <div class="clear"></div>
                
			</div>
        </section>
	</div><!-- #primary -->
<!--
<script src="< ?php echo get_template_directory_uri(); ?>/js/imagesloaded.js"></script>
<script src="< ?php echo get_template_directory_uri(); ?>/js/skrollr.js"></script>
<script src="< ?php echo get_template_directory_uri(); ?>/js/_main.js"></script>
-->
<div class="QTPopup" style="display:none;">
	<div class="popupGrayBg"></div>
	<div class="QTPopupCntnr">
		<div class="gpBdrLeftTop"></div>
		<div class="gpBdrRightTop"></div>
		<div class="gpBdrTop"></div>
		<div class="gpBdrLeft">
			<div class="gpBdrRight">
				<div class="caption">
					SNeH Preventive Home Healthcare
				</div>
				<a href="#" class="closeBtn" title="Close"></a>
				
				<div class="content">
					
					<iframe width="560" height="315" src="//www.youtube.com/embed/GoPVquZF7sA" frameborder="0" allowfullscreen></iframe>

					
				</div>
			</div>
		</div>
		<div class="gpBdrLeftBottom"></div>
		<div class="gpBdrRightBottom"></div>
		<div class="gpBdrBottom"></div>
</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>