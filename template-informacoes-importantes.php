<?php
/**
 * Template name: Informações Importantes
 *
 * @package Alp Cody
 * @since 1.0
 */

get_header('secondary');
?>

<!-- hero -->
<section class="padding-top-xl">
  <div class="container max-width-lg">
    <div class="grid justify-star">

      <div class="col-6@sm flex flex-column justify-center">
        <h1 class="color-primary font-bold text-80 text-center text-left@sm">
          Informações <br> importantes
        </h1>
        <p class="text-24 text-center text-left@sm margin-top-sm margin-bottom-lg color-primary color-opacity-60%">
         Como podemos te ajudar?
        </p>

        <div class="flex justify-center justify-start@sm margin-bottom-lg margin-bottom-0@sm">
  
          <a href="#faq" class="hover-red">
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

      <div class="col-4@md col-5@sm">
        <img src="<?php midiaSrc('women-business.png'); ?>" alt="Mulher de Negócios" class="width-100%@sm width-80%@xs width-100% block margin-x-auto">
      </div>

    </div>
  </div>
</section>
<!-- hero -->

<!-- o que e -->
<section id="faq" class="padding-top-xl">
  <section class="padding-top-xl padding-bottom-xxl" style="background-color: rgba(28, 28, 56, 0.02);">
    <div class="container max-width-lg">
      <h2 class="color-primary font-bold text-80 text-left margin-bottom-sm">
        Filtre por
      </h2>
  
      <div class="bg-primary bg-opacity-10% padding-y-xxs radius-lg flex flex-wrap justify-center flex-row@md flex-column">
        <a href="#0" data-filter="seguro" class="filter-button text-center selected" aria-selected="true">Seguro</a>
        <a href="#0" data-filter="sinistro" class="filter-button text-center">Sinistro</a>
        <a href="#0" data-filter="pagamentos" class="filter-button text-center">Pagamentos</a>
        <a href="#0" data-filter="seguro-automovel" class="filter-button text-center">Seguro Automóvel</a>
        <a href="#0" data-filter="seguro-vida" class="filter-button text-center">Seguro de Vida</a>
        <a href="#0" data-filter="seguro-residencial" class="filter-button text-center">Seguro Residencial</a>
      </div>
  
      <div class="grid justify-between gap-xs padding-top-xl">
        <div class="col-4@md">
          <h3 class="color-primary font-bold text-80 text-center margin-bottom-sm">
            Perguntas <br> frequentes
          </h3>
        </div>
  
        <div class="col-7@md"> 
  
          <ul data-filter="seguro" style="display: flex;" class="filter-item accordion-v2 flex-column gap-md js-accordion" data-animation="on" data-multi-items="on" data-version="v2">
  
            <?php 
              $args = array(
                'post_type' => array( 'informacoes' ),
                'showposts' => -1,
                'nopaging'  => true,
                'tax_query' => array(
                  array(
                    'taxonomy' => 'tipo', // slug da taxonomia 
                    'field'    => 'slug',
                    'terms'    => 'seguro', // slug da categoria
                  ),
                ),
              );
              $duvidas = new WP_Query ( $args );
            ?>
            <?php if ( $duvidas->have_posts() ): while( $duvidas->have_posts() ) : $duvidas->the_post() ; ?> 
              <li class="accordion-v2__item bg-primary bg-opacity-10% radius-md  js-accordion__item">
                <button class="reset accordion-v2__header padding-y-sm padding-x-md js-tab-focus" type="button">
                  <span class="text-24">
                    <?= get_the_title(); ?>
                  </span>
  
                  <svg class="icon accordion-v2__icon-arrow no-js:is-hidden" viewBox="0 0 16 16" aria-hidden="true">
                    <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10">
                      <path d="M2 2l12 12" />
                      <path d="M14 2L2 14" />
                    </g>
                  </svg>
                </button>
  
                <div class="accordion-v2__panel js-accordion__panel">
                  <div class="text-component padding-top-xxxs padding-x-md padding-bottom-md">
                    <p class="color-light font-light text-16 font-secondary">
                      <?= rwmb_meta('informacoes_resposta'); ?>
                    </p>
                  </div>
                </div>
              </li>				 
  
            <?php endwhile; endif; wp_reset_query(); ?>
          </ul>
          
          <!-- sinistro -->
          <ul data-filter="sinistro" style="display: none;" class="filter-item accordion-v2 flex-column gap-md js-accordion" data-animation="on" data-multi-items="on" data-version="v2">
  
            <?php 
              $args = array(
                'post_type' => array( 'informacoes' ),
                'showposts' => -1,
                'nopaging'  => true,
                'tax_query' => array(
                  array(
                    'taxonomy' => 'tipo', // slug da taxonomia 
                    'field'    => 'slug',
                    'terms'    => 'sinistro', // slug da categoria
                  ),
                ),
              );
              $duvidas = new WP_Query ( $args );
            ?>
            <?php if ( $duvidas->have_posts() ): while( $duvidas->have_posts() ) : $duvidas->the_post() ; ?> 
              <li class="accordion-v2__item bg-primary bg-opacity-10% radius-md  js-accordion__item">
                <button class="reset accordion-v2__header padding-y-sm padding-x-md js-tab-focus" type="button">
                  <span class="text-24">
                    <?= get_the_title(); ?>
                  </span>
  
                  <svg class="icon accordion-v2__icon-arrow no-js:is-hidden" viewBox="0 0 16 16" aria-hidden="true">
                    <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10">
                      <path d="M2 2l12 12" />
                      <path d="M14 2L2 14" />
                    </g>
                  </svg>
                </button>
  
                <div class="accordion-v2__panel js-accordion__panel">
                  <div class="text-component padding-top-xxxs padding-x-md padding-bottom-md">
                    <p class="color-light font-light text-16 font-secondary">
                      <?= rwmb_meta('informacoes_resposta'); ?>
                    </p>
                  </div>
                </div>
              </li>				 
  
            <?php endwhile; endif; wp_reset_query(); ?>
          </ul>
  
          <!-- pagamentos -->
          <ul data-filter="pagamentos" style="display: none;" class="filter-item accordion-v2 flex-column gap-md js-accordion" data-animation="on" data-multi-items="on" data-version="v2">
  
            <?php 
              $args = array(
                'post_type' => array( 'informacoes' ),
                'showposts' => -1,
                'nopaging'  => true,
                'tax_query' => array(
                  array(
                    'taxonomy' => 'tipo', // slug da taxonomia 
                    'field'    => 'slug',
                    'terms'    => 'pagamentos', // slug da categoria
                  ),
                ),
              );
              $duvidas = new WP_Query ( $args );
            ?>
            <?php if ( $duvidas->have_posts() ): while( $duvidas->have_posts() ) : $duvidas->the_post() ; ?> 
              <li class="accordion-v2__item bg-primary bg-opacity-10% radius-md  js-accordion__item">
                <button class="reset accordion-v2__header padding-y-sm padding-x-md js-tab-focus" type="button">
                  <span class="text-24">
                    <?= get_the_title(); ?>
                  </span>
  
                  <svg class="icon accordion-v2__icon-arrow no-js:is-hidden" viewBox="0 0 16 16" aria-hidden="true">
                    <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10">
                      <path d="M2 2l12 12" />
                      <path d="M14 2L2 14" />
                    </g>
                  </svg>
                </button>
  
                <div class="accordion-v2__panel js-accordion__panel">
                  <div class="text-component padding-top-xxxs padding-x-md padding-bottom-md">
                    <p class="color-light font-light text-16 font-secondary">
                      <?= rwmb_meta('informacoes_resposta'); ?>
                    </p>
                  </div>
                </div>
              </li>				 
  
            <?php endwhile; endif; wp_reset_query(); ?>
          </ul>
  
          <!-- seguro-automovel -->
          <ul data-filter="seguro-automovel" style="display: none;" class="filter-item accordion-v2 flex-column gap-md js-accordion" data-animation="on" data-multi-items="on" data-version="v2">
  
            <?php 
              $args = array(
                'post_type' => array( 'informacoes' ),
                'showposts' => -1,
                'nopaging'  => true,
                'tax_query' => array(
                  array(
                    'taxonomy' => 'tipo', // slug da taxonomia 
                    'field'    => 'slug',
                    'terms'    => 'seguro-automovel', // slug da categoria
                  ),
                ),
              );
              $duvidas = new WP_Query ( $args );
            ?>
            <?php if ( $duvidas->have_posts() ): while( $duvidas->have_posts() ) : $duvidas->the_post() ; ?> 
              <li class="accordion-v2__item bg-primary bg-opacity-10% radius-md  js-accordion__item">
                <button class="reset accordion-v2__header padding-y-sm padding-x-md js-tab-focus" type="button">
                  <span class="text-24">
                    <?= get_the_title(); ?>
                  </span>
  
                  <svg class="icon accordion-v2__icon-arrow no-js:is-hidden" viewBox="0 0 16 16" aria-hidden="true">
                    <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10">
                      <path d="M2 2l12 12" />
                      <path d="M14 2L2 14" />
                    </g>
                  </svg>
                </button>
  
                <div class="accordion-v2__panel js-accordion__panel">
                  <div class="text-component padding-top-xxxs padding-x-md padding-bottom-md">
                    <p class="color-light font-light text-16 font-secondary">
                      <?= rwmb_meta('informacoes_resposta'); ?>
                    </p>
                  </div>
                </div>
              </li>				 
  
            <?php endwhile; endif; wp_reset_query(); ?>
          </ul>
  
          <!-- seguro de vida -->
          <ul data-filter="seguro-vida" style="display: none;" class="filter-item accordion-v2 flex-column gap-md js-accordion" data-animation="on" data-multi-items="on" data-version="v2">
  
            <?php 
              $args = array(
                'post_type' => array( 'informacoes' ),
                'showposts' => -1,
                'nopaging'  => true,
                'tax_query' => array(
                  array(
                    'taxonomy' => 'tipo', // slug da taxonomia 
                    'field'    => 'slug',
                    'terms'    => 'seguro-de-vida', // slug da categoria
                  ),
                ),
              );
              $duvidas = new WP_Query ( $args );
            ?>
            <?php if ( $duvidas->have_posts() ): while( $duvidas->have_posts() ) : $duvidas->the_post() ; ?> 
              <li class="accordion-v2__item bg-primary bg-opacity-10% radius-md  js-accordion__item">
                <button class="reset accordion-v2__header padding-y-sm padding-x-md js-tab-focus" type="button">
                  <span class="text-24">
                    <?= get_the_title(); ?>
                  </span>
  
                  <svg class="icon accordion-v2__icon-arrow no-js:is-hidden" viewBox="0 0 16 16" aria-hidden="true">
                    <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10">
                      <path d="M2 2l12 12" />
                      <path d="M14 2L2 14" />
                    </g>
                  </svg>
                </button>
  
                <div class="accordion-v2__panel js-accordion__panel">
                  <div class="text-component padding-top-xxxs padding-x-md padding-bottom-md">
                    <p class="color-light font-light text-16 font-secondary">
                      <?= rwmb_meta('informacoes_resposta'); ?>
                    </p>
                  </div>
                </div>
              </li>				 
  
            <?php endwhile; endif; wp_reset_query(); ?>
          </ul>
  
          <!-- seguro residencial -->
          <ul data-filter="seguro-residencial" style="display: none;" class="filter-item accordion-v2 flex-column gap-md js-accordion" data-animation="on" data-multi-items="on" data-version="v2">
  
            <?php 
              $args = array(
                'post_type' => array( 'informacoes' ),
                'showposts' => -1,
                'nopaging'  => true,
                'tax_query' => array(
                  array(
                    'taxonomy' => 'tipo', // slug da taxonomia 
                    'field'    => 'slug',
                    'terms'    => 'seguro-residencial', // slug da categoria
                  ),
                ),
              );
              $duvidas = new WP_Query ( $args );
            ?>
            <?php if ( $duvidas->have_posts() ): while( $duvidas->have_posts() ) : $duvidas->the_post() ; ?> 
              <li class="accordion-v2__item bg-primary bg-opacity-10% radius-md  js-accordion__item">
                <button class="reset accordion-v2__header padding-y-sm padding-x-md js-tab-focus" type="button">
                  <span class="text-24">
                    <?= get_the_title(); ?>
                  </span>
  
                  <svg class="icon accordion-v2__icon-arrow no-js:is-hidden" viewBox="0 0 16 16" aria-hidden="true">
                    <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10">
                      <path d="M2 2l12 12" />
                      <path d="M14 2L2 14" />
                    </g>
                  </svg>
                </button>
  
                <div class="accordion-v2__panel js-accordion__panel">
                  <div class="text-component padding-top-xxxs padding-x-md padding-bottom-md">
                    <p class="color-light font-light text-16 font-secondary">
                      <?= rwmb_meta('informacoes_resposta'); ?>
                    </p>
                  </div>
                </div>
              </li>				 
  
            <?php endwhile; endif; wp_reset_query(); ?>
          </ul>
  
  
        </div>
        
      </div>
  
    </div>
  </section>
</section>
<!-- o que e -->


<!-- formulario -->
<?php //get_template_part('template-parts/doubts-form'); ?>
<!-- formulario -->


<?php
get_footer();