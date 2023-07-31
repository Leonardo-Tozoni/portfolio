<?php
/**
 * Template name: Serviços
 *
 * @package Alp Cody
 * @since 1.0
 */

 if(isset($_GET['s'])){
   if(empty($_GET['s']) || $_GET['s'] == ' '){
     $location = 'location: ' . esc_url(home_url('/servicos'));
     header($location);
   }
 }

get_header('secondary');
?>

<!-- hero -->
<section class="padding-y-xl">
  <div class="container max-width-xl">
    <div class="grid justify-start">

      <div class="col-6@sm flex flex-column justify-center margin-bottom-xl margin-bottom-0@sm">
        <h1 class="color-primary font-bold text-80 text-center text-left@sm margin-bottom-xs">
          Experiências Profissionais <br class="display@md">
      </h1>

      <p class="text-md color-primary color-opacity-60% max-width-sm text-center text-left@md margin-x-auto margin-x-0@md margin-bottom-xl@md margin-bottom-lg">
      Nesta página, constam todas as experiências  que tive,<br class="display@lg"> desde o estágio de TI e até meu último trabalho remunerado como <br class="display@lg"> Web Developer.
      </p>
        
      </div>

      <div class="col-5@sm">
        <img src="<?php midiaSrc('experiencia.png'); ?>" alt="Olhos com Brilho" class="resp-img-serv width-100%@sm width-80%@xs width-100% block margin-left-xxxl">
      </div>

    </div>
  </div>
</section>
<!-- hero -->

<!-- filtro -->

<section id="filter" class="padding-y-xl" style="background-color: rgba(108, 115, 119, 0.1);">
  <div class="container max-width-xl">
    <?php if(isset($_GET['s'])): ?>
      <h2 class="color-primary font-bold text-60 text-center margin-bottom-sm">
        Busca por: 
        <span class="font-normal">
          <?= $_GET['s'] ?>
        </span>
      </h2>
    <?php else: ?>
      <section>
  <section class="feature-v8">
    <div class="padding-bottom-xl">
      <div class="container max-width-adaptive-lg">
        <div class="grid gap-lg justify-between@md">
          <div class="text-component">
          <h2 class="color-primary font-bold text-40 text-center ">
            Principais experiências profissionais:
          </h2>
          </div>
          <div>

          </div>
        </div>
      </div>
    </div>
      <?php
        $terms = get_terms([
          'taxonomy' => 'tipo-seguro',
          'hide_empty' => true
        ])
      ?>
  
        <?php foreach($terms as $term): ?>
        <?php endforeach; ?>  
    <?php endif; ?>


    <div class="grid gap-xs justify-center">
      <?php if( have_posts() ): while( have_posts() ): the_post(); ?> 
        <?php
          $images = rwmb_meta( 'seguros_icone', array( 'limit' => 1, 'size' => 'full' ) );
          $image = reset( $images );
        ?>

        <a href="<?= get_permalink(); ?>" class="col-4@sm col-6@xs">
          <div class="insurance__square">
          
            <div class="insurance__text-area">
              <img src="<?= $image['url']; ?>" alt="<?= get_the_title(); ?>" class="insurance__icon">
              <h3 class="text-md font-bold insurance__title">
                <?= get_the_title(); ?>
              </h3>
              <p class="insurance__text text-16 font-light color-primary">
                <?= rwmb_meta('seguros_resumo'); ?>
              </p>
              
            </div>

            <div class="insurance__footer flex flex-wrap gap-xxxs">
              <?php if(rwmb_meta('seguros_link')): ?>
              <?php else: ?> 
              <?php endif; ?>

              <?php $values = rwmb_meta('seguros_cobertura'); ?>
              <?php $values = rwmb_meta('seguros_cobertura'); ?>
              <?php $j = 0; foreach ( $values as $value ): ?>
                <div class="bg-primary bg-opacity-10% padding-x-xxs padding-y-xxxxs radius-full">
                  <p class="font-light color-primary color-opacity-60% font-secondary text-16">
                    <?= $value['seguros_cobertura-text']; ?>
                  </p>
                </div>
                <?php if($j == 2) break; ?>
              <?php $j++; endforeach; ?>
            </div>
            <p class="color-primary color-opacity-70% text-18 font-light saiba-mais-seguros hover-underline">
              Saiba mais >
            </p>
          </div>
        </a>

      <?php endwhile; endif; ?>
    </div>

    <!-- pagination -->
    <div class="container max-width-xs margin-x-auto">
      <nav class="insurance__pagination">
        <?php the_posts_pagination( array(
          'mid_size' => 2,
          'prev_text' => __( 'Anterior', 'textdomain' ),
          'next_text' => __( 'Próxima', 'textdomain' ),
        ) ); ?>
      </nav>
    </div>
  <!-- pagination -->

  <?php if(isset($_GET['s'])): ?>
    <div class="flex justify-center padding-top-lg">
      <a class="btn btn--subtle" href="<?= esc_url(home_url('/servicos')); ?>">
        Ver todos
      </a>
    </div>
  <?php endif; ?>

  </div>
</section>
<!-- filtro -->

<?php
get_footer();