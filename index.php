<?php
/**
 * Template name: Notícias
 *
 * @package Alp Cody
 * @since 1.0
 */

get_header('quartiary');
?>

	<!-- lista dos posts -->
	<?php 
		$colList = [
			'col-8@md', 'col-4@md', 'col-4@md', 'col-4@md', 
			'col-4@md', 'col-4@md', 'col-4@md','col-8@md', 'col-4@md'
		] 
	?>

	<div class="container max-width-adaptive-xl">
    <div class="grid gap-sm justify-center margin-bottom-lg">

			<?php $i = 0; if( have_posts() ): while( have_posts() ): the_post(); ?> 
				<a href="<?= get_permalink(); ?>" class="card-v9 radius-md col-6@sm <?= $colList[$i]; ?>" aria-labelledby="card-title-1" style="background-image: linear-gradient(rgba(28, 28, 56, 0.3), rgba(28, 28, 56, 0.9)), url('<?= the_post_thumbnail_url( 'full' ); ?>');">
					<div class="card-v9__content padding-md">
						<div class="padding-top-xxxl max-width-xxs">
							<p class="text-sm color-white color-opacity-60% margin-bottom-xxs">
								<?= get_the_category()[0]->name; ?>
							</p>
							<h1 id="card-title-1" class="text-xl color-white">
								<?= get_the_title(); ?>
							</h1>
						</div>
					</div>
				</a>
			<?php $i++; endwhile; endif; ?>

    </div>

  </div>
  <!-- pagination -->
  <div class="container max-width-xs margin-x-auto margin-top-lg">
    <nav class="insurance__pagination">
      <?php the_posts_pagination( array(
        'mid_size' => 2,
        'prev_text' => __( 'Anterior', 'textdomain' ),
        'next_text' => __( 'Próxima', 'textdomain' ),
      ) ); ?>
    </nav>
  </div>
  <!-- pagination -->

</section>

<?php
get_footer();