<?php
/**
 * @package Alp Cody
 * @since 1.0
 */
?>

<section id="post-<?php the_ID(); ?>" <?php post_class('content'); ?>>
	<article class="contentArticle">
		<?php
			the_content( __( 'Continue lendo <span class="meta-nav">&rarr;</span>', 'alp' ) );
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'alp' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>
	</article>
</section>