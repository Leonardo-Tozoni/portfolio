<?php
/**
 * Template name: GC do Brasil
 *
 * @package Alp Cody
 * @since 1.0
 */

get_header('secondary');
?>

<!-- hero -->
<section class="padding-y-xxl">
  <div class="container max-width-xl">
    <div class="grid justify-end">

      <div class="col-5@lg col-6@sm flex flex-column justify-center margin-bottom-xl margin-bottom-0@sm">
        <h1 class="color-primary font-bold text-80 text-center text-left@sm">
          Grande <br class="display@lg"> Corretora <br class="display@lg"> do Brasil
        </h1>
        <p class="text-24 margin-top-sm margin-bottom-lg color-primary color-opacity-60% text-center text-left@sm">
         Somos sócios fundadores da GC do <br class="display@lg">
         Brasil (Grande Corretora do Brasil), <br class="display@lg">
         o maior grupo de corretores de seguros <br class="display@lg">
         do país com sede em São Paulo-SP
        </p>

        <div class="flex justify-start@sm justify-center">
          <a href="#o-que-e" class="hover-red">
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

      <div class="col-6@sm">
        <img src="<?php midiaSrc('eyes.png'); ?>" alt="Olhos com Brilho" class="width-100%@sm width-80%@xs width-100% margin-x-auto block">
      </div>

    </div>
  </div>
</section>
<!-- hero -->

<!-- o que e -->
<section id="o-que-e" class="padding-y-xxl" style="background-color: rgba(28, 28, 56, 0.02);">
  <div class="container max-width-xl">

    <div class="grid justify-between@md justify-center">
      <div class="col-5@md margin-bottom-xl margin-bottom-0@md">
        <h2 class="color-primary font-bold text-80 text-right@md text-center">
          O que é?
        </h2>
      </div>
  
      <div class="col-6@md col-9@sm col-10@xs">
        <p class="text-24 margin-bottom-sm font-secondary color-primary color-opacity-60%">
          A GC é um grupo de corretoras de seguros que por meio da amizade e 
          grandes parcerias se consolidou no mercado e vem fazendo negócios 
          de alcance nacional. 
        </p>
  
        <p class="text-24 margin-bottom-sm font-secondary color-primary color-opacity-60%">
          Buscando sempre gerar valor para nossos segurados por meio do 
          atendimento especializado, investindo em soluções inovadoras e 
          antecipando as tendências de um mercado em constante evolução. 
        </p>
  
        <p class="text-24 margin-bottom-sm font-secondary color-primary color-opacity-60%">
          A GC do Brasil foi fundada em 2010 e tem como objetivo principal ser
          <span class="font-bold">uma plataforma de conexão entre corretores de 
          todos o país, dando o suporte necessário em termos de estrutura, 
          sistemas, tecnologias, parcerias, contatos e ajudando na sua 
          consolidação e ascensão no ramo securitário.</span> Mais de 20 anos 
          de amizade se transformou nessa grande força empresarial. 
        </p>
  
        <p class="text-24 margin-bottom-sm font-secondary color-primary color-opacity-60%"> 
          O segredo para o sucesso são os anos de muito 
          <span class="font-bold">estudo, aperfeiçoamento, trabalho, dedicação e 
          prática,</span> que estão sendo transformados em prestação de serviço 
          de qualidade para nossos segurados. 
        </p>
  
        <p class="text-24 margin-bottom-sm font-secondary color-primary color-opacity-60%"> 
          No Grupo atual, há representantes de todas as regiões do País, 
          composto por cerca de mais de 1.000 colaboradores, com uma carteira 
          contendo mais de 325 mil segurados.
        </p>
      </div>
    </div>
  </div>
</section>
<!-- o que e -->

<!-- iniciativas -->
<section class="padding-bottom-xxl padding-top-md padding-top-0@md" style="background-color: rgba(28, 28, 56, 0.02);">
  <div class="container max-width-xl">
    <div class="grid justify-between">
      <div class="col-6@md margin-bottom-xl margin-bottom-0@md">
        <div class="margin-bottom-lg@md margin-bottom-xl">
          <h2 class="color-primary font-bold text-80 text-center text-left@md">
            Iniciativas
          </h2>
        </div>

        <ul class="accordion  js-accordion" data-animation="on" data-multi-items="on">

          <?php 
            $args = array(
              'post_type' => array( 'iniciativas' ),
              'showposts' => -1,
              'nopaging'  => true
            );
            $iniciativas = new WP_Query ( $args );
          ?>
          <?php $i = 0; if ( $iniciativas->have_posts() ): while( $iniciativas->have_posts() ) : $iniciativas->the_post() ; ?> 

            <li class="accordion__item <?php //if($i == 0) echo 'accordion__item--is-open' ?> js-accordion__item">
              <button class="reset accordion__header padding-y-sm padding-x-md js-tab-focus" type="button">
                <span class="text-24 font-bold">
                  <?= get_the_title(); ?>
                </span>

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
              </button>

              <div class="accordion__panel js-accordion__panel">
                <div class="text-component width-90%@md padding-top-xxxs padding-x-md padding-bottom-md">
                  <p class="text-18 color-light font-light font-secondary">
                    <?= rwmb_meta('iniciativas_resumo'); ?>
                  </p>
                </div>
              </div>
            </li>				 

          <?php $i++; endwhile; endif; wp_reset_query(); ?>

        </ul>
      </div>

      <div class="col-5@md">
        <img src="<?php midiaSrc('business-men-talking.png'); ?>" alt="Homens de negócio conversando" class="width-100%@md width-60%@sm width-70%@xs width-100% block margin-x-auto">
      </div>
    </div>
  </div>
</section>

<!-- iniciativas -->


<!-- formulario -->
<?php //get_template_part('template-parts/doubts-form'); ?>
<!-- formulario -->


<?php
get_footer();