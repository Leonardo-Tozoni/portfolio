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

      <div class="col-5@sm flex flex-column justify-center margin-bottom-xl margin-bottom-0@sm">
        <h1 class="color-primary font-bold text-80 text-center text-left@sm">
          Trabalhe <br class="display@md"> Conosco
        </h1>
        <p class="text-24 margin-top-sm margin-bottom-lg color-primary color-opacity-60% text-center text-left@sm">
          Junte-se à equipe Mânica Seguros
        </p>

        <div class="flex justify-center justify-start@sm">
          <a href="#vagas-abertas" class="hover-red">
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

      <div class="col-6@sm padding-left-md">
        <img src="<?php midiaSrc('business-woman.png'); ?>" alt="Mulher de negócios" class="width-100%@sm width-80%@xs width-100% block margin-x-auto">
      </div>

    </div>
  </div>
</section>
<!-- hero -->

<!-- vagas -->
<section class="padding-y-xl">
  <section class="feature-v8 padding-bottom-sm">
    <div class="feature-v8__main-content bg-primary padding-top-xl">
      <div class="container max-width-adaptive-lg">
        <div class="grid gap-lg justify-between@md">
          <div class="text-component col-6@md">
            <h2 class="color-light font-bold text-80 text-center text-left@md">
              Vagas Abertas
            </h2>
          </div>

          <div class="text-component col-6@md">
            <p class="color-light color-opacity-60% text-24 font-secondary text-center text-left@md">
              Confira as oportunidades disponíveis 
              para fazer parte do nosso time:
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="container max-width-adaptive-lg">
      <ul class="feature-v8__sub-content grid gap-lg">
        
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


          <li class="col-4@sm">

            <a href="#0" onclick="setJobInfo(this)" data-local="<?= rwmb_meta('vagas_local'); ?>" data-job="<?= get_the_title(); ?>"  aria-controls="modal-jobs"  class="height-100% card-v8 bg radius-xxl">
              <figure>
                <?php
                  $images = rwmb_meta( 'vagas_imagem', array( 'limit' => 1, 'size' => 'full' ) );
                  $image = reset( $images );
                ?>
                <img class="object-cover" src="<?= $image['url']; ?>" alt="<?= get_the_title(); ?>">
              </figure>

              <footer class="padding-sm padding-bottom-lg">
                <p class="bg-accent bg-opacity-10% fit-content radius-full color-accent text-16 font-light padding-y-xxs padding-x-lg margin-bottom-sm margin-x-auto margin-x-0@sm">
                  <?= rwmb_meta('vagas_local'); ?>
                </p>
                <div class="text-component width-80%@sm">
                  <h4 class="text-center text-left@sm">
                    <span class="card-v8__title color-primary text-24">
                      <?= get_the_title(); ?>
                    </span>
                  </h4>
                </div>
              </footer>
            </a>
          </li>
        
        <?php endwhile; endif; wp_reset_query(); ?>
        
      </ul>
    </div>
  </section>
</section>

<!-- MODAL -->
<div class="modal modal--animate-translate-up flex flex-center bg-contrast-higher bg-opacity-90% padding-md js-modal" id="modal-jobs">
  <div class="modal__content width-100% max-width-lg height-90%@sm height-100% overflow-auto bg shadow-md" role="alertdialog" aria-labelledby="modal-title-2" aria-describedby="modal-description-2">
    
    <button class="reset position-absolute height-xs width-xs btn padding-0 js-modal__close js-tab-focus" style="box-shadow: none;top: 36px; right: 36px">
      <img src="<?php midiaSrc('close.svg'); ?>" alt="Fechar Modal" class="hover-op">
    </button>

    <div class="flex justify-center flex-column height-100% max-width-sm margin-x-auto padding-left-xl@xs padding-left-sm padding-right-sm padding-right-0@sm padding-y-lg@sm padding-y-sm">
      <h3 class="font-bold color-primary text-60 text-center">
        Entre em <br> contato
      </h3>
      <div class="width-100% margin-top-lg">
        <?= do_shortcode('[contact-form-7 id="203" title="Vagas"]');  ?>
      </div>
    </div>

  </div>
</div>
<!-- MODAL -->

<!-- vagas -->



<!-- formulario -->
<?php //get_template_part('template-parts/doubts-form'); ?>
<!-- formulario -->


<?php
get_footer();