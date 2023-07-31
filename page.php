<?php
/**
 * @package Alp Cody
 * @since 1.0
 */

get_header(); ?>

	<section class="container max-width-xl padding_150 margin-top-xxl">
	<div class="container max-width-adaptive-sm margin-bottom-xl js-sticky-sharebar-target">
    <div class="text-component line-height-lg v-space-md single-post-content">
      <!-- <div class="drop-cap"> -->
			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				// Include the page content template.
				get_template_part( 'content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			endwhile;
			?>
			<div class="clearfix margin-bottom-xl"></div>
		</div>
	</section>
	
<?php
get_footer();
