<?php
/**
 * Template name: Eventos Mânica
 *
 * @package Alp Cody
 * @since 1.0
 */

get_header('secondary');
?>

<!-- hero -->
<section class="padding-top-xxl">
  <div class="container max-width-lg">
    <div class="grid">

      <div class="col-5@md col-6@sm flex flex-column justify-center margin-bottom-xl margin-bottom-0@sm">
        <h1 class="color-primary font-bold text-80 text-center text-left@sm">
          Eventos <br> Mânica
        </h1>
        <p class="text-24 margin-top-sm margin-bottom-lg color-primary color-opacity-60% text-center text-left@sm">
         Confira os eventos internos e externos
        </p>

        <div class="flex justify-start@sm justify-center">
          <a href="#eventos" class="hover-red">
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

      <div class="col-7@md col-6@sm">
        <img src="<?php midiaSrc('happy-family.png'); ?>" alt="Família Feliz" class="width-100%@sm width-80@xs width-100% block margin-x-auto">
      </div>

    </div>
  </div>
</section>
<!-- hero -->

<!-- eventos -->
<section class="padding-top-xxl" id="eventos">
  <section class="padding-top-xl padding-bottom-xxl" style="background-color: rgba(28, 28, 56, 0.02);">
    <div class="container max-width-xl">
      <div class="fit-content margin-bottom-xl margin-x-auto radius-lg flex items-center flex-row@xs flex-column bg-primary padding-xxxs bg-opacity-10%">
        
        <button id="btn-interno" class="btn btn--subtle-full pointer-none margin-right-xxxs@xs margin-bottom-xxs margin-bottom-0@xs" onclick="eventShow('interno')">
          Eventos internos
        </button>
  
        <button id="btn-externo" class="btn btn--fake" onclick="eventShow('externo')">
          Eventos externos
        </button>
  
      </div>
  
      <!-- slide -->
      <div id="evento-interno" class=" event-carousel slideshow js-slideshow slideshow--transition-prx padding-bottom-lg" data-swipe="on">
        <p class="sr-only">Slideshow Items</p>
        
        <ul class="slideshow__content">
          <?php 
            $args = array(
              'post_type' => array( 'eventos' ),
              'showposts' => -1,
              'nopaging'  => true,
              'tax_query' => array(
                array(
                  'taxonomy' => 'tipo-evento', // slug da taxonomia 
                  'field'    => 'slug',
                  'terms'    => 'evento-interno', // slug da categoria
                ),
              ),
            );
            $eventos = new WP_Query ( $args );
          ?>
          <?php if ( $eventos->have_posts() ): while( $eventos->have_posts() ) : $eventos->the_post() ; ?> 
            <li class="slideshow__item bg-transparent js-slideshow__item position-relative radius-xxl slide-event">
              <?php
                $images = rwmb_meta( 'eventos_imagem', array( 'limit' => 1, 'size' => 'full' ) );
                $image = reset( $images );
              ?>
              <img class="width-90%@sm height-100% object-cover radius-xxl" src="<?= $image['url']; ?>" alt="<?= get_the_title(); ?>">
              <div class="event__filter"></div>
              <div class="event__text width-60%@md width-80%@xs width-90% position-absolute">
                <h3 class="font-bold text-24 color-light margin-bottom-sm">
                  <?= get_the_title(); ?>
                </h3>
  
                <p class="color-light color-opacity-60% text-18 font-secondary">
                  <?= rwmb_meta('eventos_resumo'); ?>
                </p>
              </div>
            </li>
  
          <?php endwhile; endif; wp_reset_query(); ?>
          
        </ul>
      
        <ul>
          <li class="slideshow__control js-slideshow__control prev">
            <button class="reset slideshow__btn js-tab-focus">
              <img style="margin-bottom: 2px;" src="<?php midiaSrc('left-arrow.png'); ?>" alt="Anterior">
            </button>
          </li>
      
          <li class="slideshow__control js-slideshow__control next">
            <button class="reset slideshow__btn js-tab-focus">
              <img style="margin-bottom: 2px;" src="<?php midiaSrc('right-arrow.png'); ?>" alt="Próximo">
            </button>
          </li>
        </ul>
      </div>
      <!-- slide -->
  
  
      <!-- slide -->
      <div id="evento-externo" class="event-carousel slideshow js-slideshow slideshow--transition-prx padding-bottom-lg" data-swipe="on" hidden>
        <p class="sr-only">Slideshow Items</p>
        
        <ul class="slideshow__content">
          <?php 
            $args = array(
              'post_type' => array( 'eventos' ),
              'showposts' => -1,
              'nopaging'  => true,
              'tax_query' => array(
                array(
                  'taxonomy' => 'tipo-evento', // slug da taxonomia 
                  'field'    => 'slug',
                  'terms'    => 'evento-externo', // slug da categoria
                ),
              ),
            );
            $eventos = new WP_Query ( $args );
          ?>
          <?php if ( $eventos->have_posts() ): while( $eventos->have_posts() ) : $eventos->the_post() ; ?> 
            <li class="slideshow__item bg-transparent js-slideshow__item position-relative radius-xxl slide-event">
              
              <?php
                $images = rwmb_meta( 'eventos_imagem', array( 'limit' => 1, 'size' => 'full' ) );
                $image = reset( $images );
              ?>
              <img class="width-90%@sm height-100% object-cover radius-xxl" src="<?= $image['url']; ?>" alt="<?= get_the_title(); ?>">
              <div class="event__filter"></div>
              <div class="event__text width-60%@md width-80%@xs width-90% position-absolute">
                <h3 class="font-bold text-24 color-light margin-bottom-sm">
                  <?= get_the_title(); ?>
                </h3>
  
                <p class="color-light color-opacity-60% text-base font-secondary">
                  <?= rwmb_meta('eventos_resumo'); ?>
                </p>
              </div>
  
            </li>
  
          <?php endwhile; endif; wp_reset_query(); ?>
          
        </ul>
      
        <ul>
          <li class="slideshow__control js-slideshow__control prev">
            <button class="reset slideshow__btn js-tab-focus">
              <img style="margin-bottom: 2px;" src="<?php midiaSrc('left-arrow.png'); ?>" alt="Anterior">
            </button>
          </li>
      
          <li class="slideshow__control js-slideshow__control next">
            <button class="reset slideshow__btn js-tab-focus">
              <img style="margin-bottom: 2px;" src="<?php midiaSrc('right-arrow.png'); ?>" alt="Próximo">
            </button>
          </li>
        </ul>
      </div>
      <!-- slide -->
    </div>           
  </section>
</section>
<!-- eventos -->


<!-- formulario -->
<?php //get_template_part('template-parts/doubts-form'); ?>
<!-- formulario -->


<?php
get_footer();