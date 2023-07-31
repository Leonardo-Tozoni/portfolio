<?php
/**
 * Template name: Home
 *
 * @package Alp Cody
 * @since 1.0
 */

get_header();
?>

<!-- hero -->
<section class="height-home-img height-home-img-mob overflow-hidden">  

  <div class="container max-width-lg height-100%@md">
    <div class="grid height-100%">
      <div class="col-6@md padding-y-xxl@md padding-y-lg bg-white height-100% flex justify-center flex-column">
        <p class="bg-primary bg-opacity-10% fit-content radius-full color-primary-lighter text-sm margin-x-auto margin-x-0@md font-semibold padding-y-xxs padding-x-lg margin-bottom-lg">
          Olá! Eu sou o Leonardo!
        </p> 

        <h1 class="responsivo-home size-resp text-65 color-primary font-bold text-center text-left@md margin-bottom-xxs">
          Sou desenvolvedor Front-End em formação, <span class="font-chamativa bg-opacity-10%"> apaixonado por tecnologia</span> e este é meu portfólio.<br class="display@sm">
        </h1>

        <p class="text-home-p resp-home-p text-md color-primary color-opacity-60% max-width-sm text-center text-left@md font-medium margin-x-auto margin-x-0@md margin-bottom-xl@md margin-bottom-lg">
        Em caso de dúvidas e/ou indicações, pode clicar no botão do WhatsApp flutuante 
        </p>

        <div class="flex items-center justify-center justify-start@md flex-row@md flex-column">
          <button id="botao-scroll-header" class="btn-resp btn btn--primary btn--lg margin-right-lg@md margin-bottom-sm margin-bottom-0@md">
            <a href="https://api.whatsapp.com/send?phone=5519999656872" class="color-white"> Entre em contato</a>
          </button>

          <a href="<?= esc_url(home_url('/servicos/#filter')); ?>" class="color-primary text-base font-bold hover-op-1 hover-underline resp-tablet">
            Conheça meu trabalho
          </a>
        </div>
      </div>
    </div>
  </div> 

  <img class="home-banner" src="<?php midiaSrc('banner-home.png'); ?>" alt="Home Banner">
</section>

<!-- hero -->

<!-- seguros carousel -->
<section class="overflow-hidden padding-bottom-xxl@lg padding-bottom-xxxxl padding-bottom-xxl@md">

  <section class="bg-primary padding-top-xl padding-bottom-xl@lg margin-bottom-xl@sm margin-bottom-0@md padding-bottom-xxxxl">
    <div class="container max-width-xl">
      <div class="grid gap-xs">
        <div class="col-5@lg flex flex-column items-start@lg items-center">
          <h2 class="color-white text-center text-left@lg text-50 font-light margin-bottom-md">
            <span class="font-bold">
              Experiência <br> Profissional:
            </span>
          </h2>

          <a href="<?= esc_url(home_url('/servicos')); ?>" class="btn btn--light btn--md btn--sm@lg btn--lg">
            Ver tudo
          </a>
        </div>
        <div class="col-7@lg position-relative">

          
          <div class="position-absolute" style="top: 30px;">
            
            <div class="overflow-hidden padding-bottom-lg padding-top-sm@sm padding-top-0@md">
              <p class="color-white hide display@sm color-opacity-70% margin-bottom-lg text-md font-bold padding-left-md">
                Destaques:
              </p>
              <div class="carousel carousel-v3 flex flex-column container js-carousel max-width-carousel" data-drag="on" data-loop="off" data-overflow-items="on">
                <p class="sr-only">Carousel items</p>
    
                <div class="carousel__wrapper position-relative">
                  <ol class="carousel__list">
                    <?php 
                      $args = array(
                        'post_type' => array( 'seguros' ),
                        'showposts' => -1,
                        'nopaging'  => true,
                      );
                      $seguros = new WP_Query ( $args );
                    ?>
                    <?php if ( $seguros->have_posts() ): while( $seguros->have_posts() ) : $seguros->the_post() ; ?> 

                      <li class="carousel__item">
                        <a href="<?= get_permalink(); ?>">
                          <div class="seguros-square bg-white padding-x-md padding-top-lg radius-lg">
                            <?php 
                              $images = rwmb_meta( 'seguros_icone', array( 'limit' => 1, 'size' => 'full' ) );
                              $image = reset( $images );
                            ?>
                            <img src="<?= $image['url'] ?>" alt="Icone" class="margin-bottom-sm">
                            <h3 class="color-primary text-24 font-bold margin-bottom-xs">
                              <?= get_the_title(); ?>
                            </h3>

                            <p class="color-primary color-opacity-70% text-18 font-light saiba-mais hover-underline">
                              Saiba mais >
                            </p>

                            <p class="color-primary color-opacity-70% text-18 font-light" style="display: none;">
                              <?php 
                                if(strlen(rwmb_meta('seguros_resumo')) > 126){
                                  $newString = substr(rwmb_meta('seguros_resumo'),0, 126);
                                  $newString = $newString . '...';
                                }else{
                                  $newString = rwmb_meta('seguros_resumo');
                                }
                                echo $newString ; 
                              ?>
                            </p>
                          </div>
                        </a>
                      </li>
         

                    <?php endwhile; endif; wp_reset_query(); ?>                  

                    
                  </ol>
    
                  <nav class="no-js:is-hidden">
                    <ul class="seguro-carousel position-absolute pointer-events-none flex items-center">
                      <li>
                        <button class="reset margin-right-md carousel-v3__control carousel-v3__control--prev js-carousel__control js-tab-focus">
                          <img src="<?php midiaSrc('left-arrow.png'); ?>" alt="Anterior">
                        </button>
                      </li>
    
                      <li>
                        <button class="reset carousel-v3__control carousel-v3__control--next js-carousel__control js-tab-focus">
                          <img src="<?php midiaSrc('right-arrow.png'); ?>" alt="Próximo">
                        </button>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
  
          </div>     
  
  
        </div>
      </div>
    </div>
  </section>
</section>


<section>
  <div class="container max-width-adaptive-lg margin-top-lg">
  <div class="padding-bottom-md padding-top-xs">
      <div class="container max-width-adaptive-lg">
        <div class="grid gap-lg justify-between@md">
          <div class="text-component">
            <h2 class="color-primary  text-65 responsivo-h2-home text-center">
            Últimas certificações <span class="font-bold"> em destaque </span>
            </h2>
          </div>
        </div>
      </div>
    </div>
</section>

<main class="cards">
  <section class="card contact bg-one">
    <div class="icon">
      <img src="<?php midiaSrc('css-flexbox.svg'); ?>" alt="vmware logo">
    </div>
      <!-- <h3>1</h3> -->
      <span>Curso na plataforma da Origamid, de CSS como FlexBox, onde são passados todos os conceitos de como se deve utilizá-lo e aprendemos na prática como o fazer.</span>
  </section>
  <section class="card shop bg-two">
    <div class="icon">
      <img src="<?php midiaSrc('web-design.svg'); ?>" alt="Sophos logo.">
    </div>
      <!-- <h3>2</h3> -->
    <span>Curso na plataforma da Origamid, onde é ensinado desde o início de um projeto no Figma/Adobe XD até a implementação na programação web.</span>
  </section>
  <section class="card about bg-three">
    <div class="icon">
      <img src="<?php midiaSrc('wp-cms.svg'); ?>" alt="Veemam logo">
    </div>
      <!-- <h3>3</h3> -->
      <span>Curso na plataforma da Origamid, com todos os conceitos e conteúdos para utilizar o WP como CMS e dinalizar o conteúdo através do painel administrativo.</span>
  </section>
</main>
<!-- seguros carousel -->


<!-- porque a telbit -->
<section class="position-relative margin-top-xxl margin-bottom-xxl overflow-hidden">
  
  <div class="container max-width-xl">
    <div class="grid flex-row@md flex-column-reverse">
      <div class="col-6@md position-relative resp-img-home">
        <img class="responsivo-img" src="<?php midiaSrc('foto-leonardo.png'); ?>" alt="">
        
        <div class="height-60%@md height-70% width-90%@md width-100% position-absolute" style="bottom: 0; left: 0;">

        </div>

      </div>

      <div class="col-6@md margin-titulo padding-top-xl margin-bottom-lg@md margin-bottom-xxxxl@sm margin-bottom-0@md">
        <h2 class="color-primary text-65 resp-text-home width-titulo font-bold">
          Sobre mim
        </h2>

        <div class="margin-top-xl">
          <ul class="list-red">
            <div class="line-dotted"></div>
            <li class="color-primary color-opacity-40% text-24-18 font-secondary font-light">
              <img class="margin-right-sm" src="<?php midiaSrc('time-circle.svg'); ?>" alt="Ponto da lista">
              <span class="text-20">
                Me chamo <span class="font-bold">Leonardo Luis Tozoni.</span> Atualmente possuo <span class="font-bold"> 24 anos de idade</span>
              </span>
            </li>
            <li class="color-primary color-opacity-40% text-24-18 font-secondary font-light">
              <img class="margin-right-sm" src="<?php midiaSrc('time-circle.svg'); ?>" alt="Ponto da lista">
              <span class="text-20">
                Curso <span class="font-bold"> Análise e Desenvolvimento de Sistemas </span>
              </span>
            </li>
            <li class="color-primary color-opacity-40% text-24-18 font-secondary font-light">
              <img class="margin-right-sm" src="<?php midiaSrc('time-circle.svg'); ?>" alt="Ponto da lista">
              <span class="text-20">
                Trabalho desde <span class="font-bold">2020 </span> na área de <span class="font-bold">Tecnologia da Informação.</span>
              </span>
            </li>
            <li class="color-primary color-opacity-40% text-24-18 font-secondary font-light">
              <img class="margin-right-sm" src="<?php midiaSrc('time-circle.svg'); ?>" alt="Ponto da lista">
              <span class="text-20">
              <span class="font-bold">Apaixonado </span> por <span class="font-bold">Front-end</span> e busco ser o melhor de mim todos os dias
              </span>
            </li>
            
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();