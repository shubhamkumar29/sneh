<?php /* Template name:  Cart */ ?>
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
   	    	<div class="lineHeight0"><img src="<?php echo get_template_directory_uri(); ?>/images/innerBan.jpg" alt="Image" /></div>
		</div>
	  	<div id="content" role="main">
        <div class="blueWhtBox">
        	<div class="width900">
            	<div class="space20"></div>
				<div class="marginB20">
                	<h1 class="heading1">Buying Services<span class="fold"></span></h1>
                </div>
                <div class="">
					<p class="fontSize14 line20 openSansLight marginB20">We at SNeH Eldercare recognise that senior citizens not only require preventive healthcare packages, but might also need other services to help them look after their health well. Hence, the need for ancillary service. We provide ancillary services in association with our trustworthy partners. Some of the ancillary services provided by us are:</p>
                	<div class="cartPack">
                    	<div class="cartPackWrap">
                            <ul class="cartPackTitle">
                                <li class="cartServicePack"><p style="padding-left:44px">Service Package</p></li>
                                <li class="cartPackagePrice">Package Price</li>
                                <li class="cartTerm">Term</li>
                                <li class="cartTotal">Total</li>
                                <li class="cartDetails">Details</li>
                            </ul>
						</div>
                        <div class="cartPackInfo">
                            <ul>
                                <li class="cartServicePack"><p class="mainPack">Initial Evaluation Package</p></li>
                                <li class="cartPackagePrice"><p class="paddingTB10"><span class="rupee">`</span> 1,990.00 / <span class="openSansLight">Annual</span></p></li>
                                <li class="cartTerm">
                                	<select style="width:110px">
                                    	<option>1 Year</option>
                                        <option>2 Year</option>
                                        <option>3 Year</option>
                                        <option>4 Year</option>
                                        <option>5 Year</option>
                                    </select>
                                </li>
                                <li class="cartTotal"><p class="paddingTB10"><span class="rupee">`</span> 1,990.00</p></li>
                                <li class="cartDetails"><div class="showHideArrow"></div></li>
                            </ul>
							<div class="cartDetail">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/cartImg.gif" width="278" height="278" alt="" /> 
                                <div class="cartDetailContent">
                                    <p>Frequent doctor evaluation, comprehensive annual lab check-up package, regular physiotherapist and dietician consultations, and complete access to your records digitally.</p>
                                </div>    
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="cartPackInfo borderTop">
                            <ul>
                                <li class="cartServicePack"><p class="mainPack">Gold Package</p></li>
                                <li class="cartPackagePrice"><p class="paddingTB10"><span class="rupee">`</span> 6,990.00 / <span class="openSansLight">Annual</span></p></li>
                                <li class="cartTerm">
                                	<select style="width:110px">
                                    	<option>1 Year</option>
                                        <option>2 Year</option>
                                        <option>3 Year</option>
                                        <option>4 Year</option>
                                        <option>5 Year</option>
                                    </select>
                                </li>
                                <li class="cartTotal"><p class="paddingTB10"><span class="rupee">`</span> 6,990.00</p></li>
                                <li class="cartDetails"><div class="showHideArrow"></div></li>
                            </ul>
                            <div class="cartDetail">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/cartImg.gif" width="278" height="278" alt="" /> 
                                <div class="cartDetailContent">
                                    <p>Frequent doctor evaluation, comprehensive annual lab check-up package, regular physiotherapist and dietician consultations, and complete access to your records digitally.</p>
                                </div>    
                                <div class="clear"></div>
                            </div>
						</div>
                    </div>
                	<div class="paddingTB15">
                    	<input type="text" size="15" placeholder="Coupon Code" class="floatLeft"  />
                        <a href="#" class="blueBtn2">APPLY COUPON</a>
                        <a href="#" class="blueBtn2 floatRight">UPDATE CART</a>
                        <a href="#" class="blueBtn2 floatRight">BACK TO PACKAGES</a>
                        <div class="clear"></div>
                    </div>
                    <div class="allPackages">
                    	<p class="allPackagesTitle">ALL PACKAGES TOTAL</p>
                        <div class="colLeft">Cart Sub-Total</div>
                        <div class="colRight"><span class="rupee">`</span> 8980.00</div>
                        <div class="colLeft">Taxes</div>
                        <div class="colRight"><span class="rupee">`</span> 1,110.00</div>
                        <div class="colLeft">Shipping and Handling</div>
                        <div class="colRight"><span class="rupee">`</span> 0.00</div>
                        <div class="colLeft marginT15">Order Total</div>
                        <div class="colRight marginT15"><span class="rupee">`</span> 925.00</div>
                    </div>
                    <div class="clear"></div>
                    <div class="space30"></div>
                    <a href="#" class="blueBtn2 floatRight">PROCEED TO CHECKOUT</a>
                	<div class="clear"></div>
				</div>
              <!-- <div class="clear marginB20"></div>
                <p class="fontSize15 marginB20">Please fill the form below, and our representative will contact you shortly.</p>
                <?php get_contact_form();?> 
                <div class="clear"></div>-->
              
		  </div>
        </div>
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>