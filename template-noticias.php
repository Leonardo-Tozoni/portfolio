<?php
/**
 * Template name: Notícias
 *
 * @package Alp Cody
 * @since 1.0
 */

get_header('secondary');
?>

<!-- hero -->
<section class="padding-y-xl">
  <div class="container max-width-lg">
    <div class="grid justify-center">

      <div class="col-6@sm flex flex-column justify-center">
        <h1 class="color-primary font-bold text-80 text-center text-center@sm">
          Notícias
        </h1>
        <p class="text-md text-center text-center@sm margin-top-sm margin-bottom-md color-primary color-opacity-60%">
          Leia nossas notícias:
        </p>

        <div class="flex justify-center justify-center@sm margin-bottom-lg margin-bottom-0@sm">
          <a href="#posts" class="hover-red">
            <svg xmlns="http://www.w3.org/2000/svg" width="11.641" height="17.745" viewBox="0 0 11.641 17.745">
              <defs>
                <style>
                  .cls-1 {
                    fill: none;
                    stroke: #1c1c38;
                    stroke-linecap: round;
                    stroke-linejoin: bevel;
                    stroke-width: 1.5px;
                  }
                </style>
              </defs>
              <g id="ic-arrows-bottom" transform="translate(-6.159 -3.18)">
                <line id="Linha_1312" data-name="Linha 1312" class="cls-1" y2="16.14" transform="translate(12 3.93)"/>
                <path id="Caminho_1090" data-name="Caminho 1090" class="cls-1" d="M7.22,15.67l4.11,4.11a1,1,0,0,0,1.41,0l4-4"/>
              </g>
            </svg>
          </a>
        </div>

      </div>

    </div>
  </div>
</section>
<!-- hero -->

<!-- Posts -->
<section id="posts" class="padding-top-xl padding-bottom-xxl" style="background-color: rgba(28, 28, 56, 0.02);">
  <div class="container max-width-xl">
    <h2 class="color-primary font-bold text-60 text-center margin-bottom-xxs">
      Categorias
    </h2>
    <img class="position-absolute contact-lemon" style="top: 63%; left: -113px;" src="<?php midiaSrc('purple-lemon.svg') ?>" alt="Semicirculo Roxo">
    <?php
      $terms = get_terms([
        'taxonomy' => 'category',
        'hide_empty' => true
			]);
    ?>

    <div class="bg-accent bg-opacity-10% padding-y-xxs radius-lg flex flex-row@md flex-column justify-center fit-content margin-x-auto margin-bottom-lg">
			<a 
        href="<?= esc_url(home_url('/blog')); ?>" 
        class="filter-button-seguro selected"
			>Todos</a>
      <?php foreach($terms as $term): ?>
        <a 
          href="<?= esc_url(home_url('/blog')) . '/categoria' . '/' . $term->slug; ?>" 
          class="filter-button-seguro btn"
        ><?= $term->name; ?></a>
      <?php endforeach; ?>
    </div>
	</div>

	<!-- lista dos posts -->
	<?php 
		$colList = [
			'col-8@md', 'col-4@md', 'col-4@md', 'col-8@md', 
			'col-4@md', 'col-4@md', 'col-4@md','col-8@md', 'col-4@md'
		] 
	?>

	<div class="container max-width-adaptive-lg">
    <div class="grid gap-sm justify-center margin-bottom-lg">

			<?php $i = 0; if( have_posts() ): while( have_posts() ): the_post(); ?> 
				<a href="<?= get_permalink(); ?>" class="card-v9 radius-md col-6@sm <?= $colList[$i]; ?>" aria-labelledby="card-title-1" style="background-image: linear-gradient(rgba(28, 28, 56, 0.9), rgba(28, 28, 56, 0.3)), url('<?= the_post_thumbnail_url( 'full' ); ?>');">
					<div class="card-v9__content padding-md">
						<div class="padding-bottom-xxxl max-width-xxs">
							<p class="text-sm color-white color-opacity-60% margin-bottom-xxs">
								<?= get_the_category()[0]->name; ?>
							</p>
							<h1 id="card-title-1" class="text-xl color-white">
								<?= get_the_title(); ?>
							</h1>
						</div>
			
						<div class="margin-top-auto">
							<span class="card-v9__btn">
								<i>Ler mais</i>
							</span>
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