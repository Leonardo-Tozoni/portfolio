<?php
/**
 * Template name: Trabalhe conosco
 *
 * @package Alp Cody
 * @since 1.0
 */

get_header('secondary');
?>

<!-- hero -->
<section class="padding-y-xl">
  <div class="container max-width-lg">
    <div class="grid justify-between">

      <div class="col-5@sm flex flex-column justify-center margin-bottom-xl margin-bottom-0@sm margin-esquerda-parceiros">
        <h1 class="color-primary font-bold text-80 text-center text-left@sm">
          Tecnologias
        </h1>
        <p class="text-24 margin-top-sm margin-bottom-lg color-primary color-opacity-60% text-center text-left@sm">
        Nesta página, contém as principais tecnologias que eu utilizo e/ou estou estudando.
        </p>
      </div>

      <div class="col-6@sm padding-left-md">
        <img src="<?php midiaSrc('tecnologias.png'); ?>" alt="Mulher de negócios" class="width-100%@sm width-80%@xs width-100% block margin-left-xxl centro-parceiros-img">
      </div>

    </div>
  </div>
</section>
<!-- hero -->

<!-- vagas -->
<section class="feature-v8 padding-bottom-xl">
  <div class="padding-bottom-xxl bg-primary padding-top-xl">
    <div class="container max-width-adaptive-lg">
      <div class="grid gap-lg justify-between@md">
        <div class="text-component">
          <h2 class="color-white font-bold text-40 text-center">
          Tecnologias mais conhecidas:
          </h2>
        </div>
      </div>
    </div>
  </div>

  <div class="container max-width-adaptive-xl">
    <ul class="feature-v8__sub-content flex flex-wrap gap-sm justify-center">

      <?php 
        $args = array(
          'post_type' => array( 'vagas' ),
          'showposts' => -1,
          'nopaging'  => true,
          'orderby' => 'title',
          'order' => 'ASC',
        );
        $vagas = new WP_Query ( $args );
      ?>
      <?php if ( $vagas->have_posts() ): while( $vagas->have_posts() ) : $vagas->the_post() ; ?> 

        <li>
          <a class="height-100% card-v8 bg radius-personalizado">
            <figure>
              <?php
                $images = rwmb_meta( 'vagas_imagem', array( 'limit' => 1, 'size' => 'full' ) );
                $image = reset( $images );
              ?>
              <img class="object-cover" src="<?= $image['url']; ?>" alt="<?= get_the_title(); ?>">
            </figure>
          </a>
        </li>

      <?php endwhile; endif; wp_reset_query(); ?>

    </ul>
  </div>
</section>


<!-- MODAL -->
<div class="modal modal--animate-translate-up flex flex-center bg-contrast-higher bg-opacity-90% padding-md js-modal" id="modal-jobs">
  <div class="modal__content width-100% max-width-lg height-90%@sm height-100% overflow-auto bg shadow-md" role="alertdialog" aria-labelledby="modal-title-2" aria-describedby="modal-description-2">
    
    <button class="reset position-absolute height-xs width-xs btn padding-0 js-modal__close js-tab-focus" style="box-shadow: none;top: 36px; right: 36px">
      <img src="<?php midiaSrc('close.svg'); ?>" alt="Fechar Modal" class="hover-op">
    </button>

    <!-- <div class="flex justify-center flex-column height-100% max-width-sm margin-x-auto padding-left-xl@xs padding-left-sm padding-right-sm padding-right-0@sm padding-y-lg@sm padding-y-sm">
      <h3 class="font-bold color-primary text-60 text-center">
        Entre em <br> contato
      </h3>
      <div class="width-100% margin-top-lg">
        <?= do_shortcode('[contact-form-7 id="203" title="Vagas"]');  ?>
      </div>
    </div> -->

  </div>
</div>
<!-- MODAL -->

<?php
get_footer();