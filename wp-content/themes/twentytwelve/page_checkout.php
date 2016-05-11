<?php /* Template name:  Checkout */ ?>
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
                	<h1 class="heading1">Checkout<span class="fold"></span></h1>
                </div>
                <div>
					<div class="floatLeft marginR25 fontSize13" style="width:48%">
                    	<p class="blueTitle">Billing Details</p>    
                        <p class="paddingT20B10">Country <span class="red">*</span> </p>
                        <select name="select" id="select" class="selectOpt marginB10" style="width:200px">
                            <option>India</option>
                            <option>US</option>
                        </select>
                        <div class="clear"></div>
                        <p class="paddingT20B10 floatLeft" style="width:189px;">First Name <span class="red">*</span> </p>
                        <p class="paddingT20B10 floatLeft">Last Name <span class="red">*</span> </p>
                        <div class="clear"></div>
                        <input type="text" name="textfield" id="textfield" class="txtName marginR10" />
                        <input type="text" name="textfield" id="textfield" class="txtName"  />
                        <div class="clear"></div>
                        <p class="paddingT20B10">Company Name</p>
                        <input type="text" name="textfield" id="textfield" class="emailInput margin0" placeholder="Street address" />
                        <input type="text" name="textfield" id="textfield" class="emailInput" placeholder="Appartment, Room No, Flat No. Unit #" />
						<p class="paddingT20B10 floatLeft">Town / City <span class="red">*</span> </p>
                        <select name="select" id="select" class="selectOpt">
                            <option>Mumbai</option>
                            <option>Nashik</option>
                        </select>
                        <p class="paddingT20B10 floatLeft" style="width:189px;">State / Provience <span class="red">*</span> </p>
                        <p class="paddingT20B10 floatLeft">Pin Code <span class="red">*</span> </p>
                        <div class="clear"></div>
                        <input type="text" name="textfield" id="textfield" class="txtName marginR10" />
                        <input type="text" name="textfield" id="textfield" class="txtName"  />
                        <div class="clear"></div>
                        <p class="paddingT20B10 floatLeft" style="width:189px;">Email Address <span class="red">*</span> </p>
                        <p class="paddingT20B10 floatLeft">Contact Phone <span class="red">*</span> </p>
                        <div class="clear"></div>
                        <input type="text" name="textfield" id="textfield" class="txtName marginR10" />
                        <input type="text" name="textfield" id="textfield" class="txtName" placeholder="+91"  />
                        <div class="clear"></div>
                        
                        
                        <div class="checkBoxWrap">Prefered Mode of Contact 
                          <input type="checkbox" name="checkbox" id="checkbox" class="marginL25" /> &nbsp;
                          <label for="checkbox2">Email</label>
                          <input type="checkbox" name="checkbox" id="checkbox" class="marginL25" /> &nbsp;
                          <label for="checkbox2">Phone</label>
                        </div>
                        <input type="submit" name="button" id="button" value="Submit" class="blueButton" />
                    </div>
                    <div class="floatLeft" style="width:48%">
                    	<p class="blueTitle">Shipping Details</p>                    
                        
                        
                    </div>
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