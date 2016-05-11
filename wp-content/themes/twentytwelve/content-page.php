<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	<div class="headBan">
    	<div class="lineHeight0 inHeadBan commonInnerPageTemp"></div>
    </div>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="blueWhtBox">
        	<div class="width900">
            	<div class="space20"></div>
				<div class="marginB20">
                	<header class="entry-header">
						<?php if ( ! is_page_template( 'page-templates/front-page.php' ) ) : ?>
                        <?php the_post_thumbnail(); ?>
                        <?php endif; ?>
                        <h1 class="heading1"><?php the_title(); ?><span class="fold"></span></h1>
                    </header>
                </div>		
                <div class="entry-content">
                    <?php the_content(); ?>
                    <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
                </div><!-- .entry-content -->
	        </div>
        </div>
        <!--
		<footer class="entry-meta">
			< ?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
