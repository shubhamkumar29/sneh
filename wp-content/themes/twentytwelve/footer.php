<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
    <footer id="colophon" role="contentinfo">
    	<div class="site-info wrap">
			<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_class' => 'footerMenu' ) ); ?>
			<div class="clear"></div>
            <div class="copyRights" align="center">&copy;2014 Sneh Elder Care People. All Rights Reserved.</div>
			<?php //wp_nav_menu( array( 'theme_location' => 'termsMenu', 'menu_class' => 'termsPolicy' ) ); ?>
        <!--<div class="menu-terms-and-policy-container"><ul class="termsPolicy" id="menu-terms-and-policy-1"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-58"><a href="http://www.jaalsystems.com/sneh/terms/">Terms of Use</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-59"><a href="http://www.jaalsystems.com/sneh/privacy-policy">Privacy Policy</a></li>
</ul></div>-->
			 <div class="clear"></div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>