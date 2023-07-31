<?php
/**
 * Template name: Projeto Social
 *
 * @package Alp Cody
 * @since 1.0
 */

get_header('secondary');
?>

<!-- hero -->
<section class="padding-top-xxl">
  <div class="container max-width-xl">
    <div class="grid justify-end">

      <div class="col-5@sm flex flex-column justify-center margin-bottom-xl margin-bottom-0@sm">
        <h1 class="color-primary font-bold text-80 text-center text-left@sm">
          Projeto Social
        </h1>
        <p class="text-24 margin-top-sm margin-bottom-lg color-primary color-opacity-60% text-center text-left@sm">
          Conheça o Natal Solidário Mânica <br class="display@lg">
          Corretora de Seguros
        </p>

        <div class="flex justify-start@sm justify-center">
          <a href="#natal-solidario" class="hover-red">
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
        <img src="<?php midiaSrc('holding-hands.png'); ?>" alt="Mãos dadas" class="width-100%@sm width-80@xs width-100%">
      </div>

    </div>
  </div>
</section>
<!-- hero -->

<!-- natal solidario -->
<section class="padding-top-xxl" id="natal-solidario">
  <section class="padding-top-xl padding-bottom-xxl" style="background-color: rgba(28, 28, 56, 0.02);">
    <div class="container max-width-lg">
      <div class="grid justify-between@md justify-center margin-bottom-xxl">
        <div class="col-6@md margin-bottom-xl margin-bottom-0@md">
  
          <h2 class="color-primary font-bold text-70 text-center text-left@md">
            Natal Solidário <br>
            Mânica Corretora <br>
            de Seguros
          </h2>
  
        </div>
  
        <div class="col-5@md col-9@sm">
          <p class="text-24 color-primary color-opacity-60% font-secondary text-center text-left@md">
            O projeto Natal Solidário teve início no ano de 2016 e suas ações são 
            promovidas pela coordenação e toda a equipe da Mânica Seguros, 
            motivando o espírito de solidariedade e garantindo um Natal mais 
            feliz às crianças e famílias em situação de vulnerabilidade social.
          </p>
        </div>
      </div>
    </div>
  
    <div class="container max-width-xxl projects-carousel">
      <!-- carousel -->
      <div class="slideshow-pm js-slideshow-pm" data-swipe="on" data-pm-nav="on">
        <p class="sr-only">Slideshow Items</p>
        
        <div class="slideshow-pm__content">
          <ul class="slideshow-pm__list js-slideshow-pm__list">
            <?php 
              $args = array(
                'post_type' => array( 'projetos' ),
                'showposts' => -1,
                'nopaging'  => true,
                'orderby' => 'title',
                'order' => 'ASC',
              );
              $projetos = new WP_Query ( $args );
            ?>
            <?php if ( $projetos->have_posts() ): while( $projetos->have_posts() ) : $projetos->the_post() ; ?> 
  
              <li class="slideshow-pm__item slideshow-pm__item--selected bg-light js-slideshow-pm__item radius-xxl padding-y-xl padding-x-xl@sm padding-x-sm height-100% natal-item">
                <div class="container max-width-100%">
                  <div class="text-component">
                    <h3 class="color-primary font-bold text-40">
                      <?= get_the_title(); ?>
                    </h3>
                    <p class="font-secondary padding-top-sm text-24-14 color-primary color-opacity-60%">
                      <?= rwmb_meta('projetos_resumo'); ?>
                    </p>
                  </div>
                </div>
              </li>
  
            <?php endwhile; endif; wp_reset_query(); ?>
          </ul>
  
          <ul>
            <li class="slideshow-pm__control js-slideshow-pm__control">
              <button class="reset js-tab-focus">
                <img style="margin-bottom: 2px;" src="<?php midiaSrc('left-arrow.png'); ?>" alt="Anterior">
              </button>
            </li>
  
            <li class="slideshow-pm__control js-slideshow-pm__control">
              <button class="reset js-tab-focus">
                <img style="margin-bottom: 2px;"  src="<?php midiaSrc('right-arrow.png'); ?>" alt="Próximo">
              </button>
            </li>
          </ul>
        </div>
      </div>
      <!-- carousel -->
    </div>
  </section>
</section>
<!-- natal solidario -->




<!-- formulario -->
<?php //get_template_part('template-parts/doubts-form'); ?>
<!-- formulario -->


<?php
get_footer();