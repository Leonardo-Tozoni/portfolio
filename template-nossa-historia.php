<?php
/**
 * Template name: Nossa História
 *
 * @package Alp Cody
 * @since 1.0
 */

get_header('secondary');
?>

<!-- hero -->
<section class="padding-top-xl">
  <div class="container max-width-lg">
    <div class="grid justify-between">

      <div class="col-6@md col-7@sm margin-bottom-lg margin-bottom-0@sm">
        <h1 class="color-primary font-bold text-80-55 text-center text-left@sm">
          Conheça a <br class="display@lg"> <br class="hide@sm">
          nossa história:
        </h1>
        <p class="text-24 margin-top-sm margin-bottom-lg color-primary color-opacity-60% padding-right-md text-center text-left@sm">
          Há quase três décadas nos preocupamos <br class="display@lg"> <br class="hide@sm">
          com a segurança dos nossos clientes.
        </p>

        <div class="grid items-center justify-between margin-bottom-lg max-width-xs margin-x-auto margin-x-0@sm">
          <div class="col-7@lg col-8@md col-9@sm flex justify-between items-center">
            <img style="filter: grayscale(100%);" src="<?php midiaSrc('top-of-business.png'); ?>" alt="Top of business">
            <img style="filter: grayscale(100%);" src="<?php midiaSrc('melhor-do-sul.png'); ?>" alt="Melhores do Sul">
            <img style="filter: grayscale(100%);" src="<?php midiaSrc('premio.png'); ?>" alt="Prêmios">
          </div>

          <div class="col-5@lg col-4@md col-3@sm margin-top-lg margin-top-0@sm flex justify-center items-center">
            <a href="#0" aria-controls="modal-premios" class="invert-op hover-underline color-primary text-18 font-bold">
              Ver todos as premiações
            </a>
          </div>

        </div>

        <div class="flex justify-start@sm justify-center">
          <a href="#timeline" class="hover-red">
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

      <div class="col-5@sm">
        <img class="block margin-x-auto width-100%@sm width-80%@xs width-100%" src="<?php midiaSrc('man-with-glasses.png'); ?>" alt="Homem de óculos">
      </div>

    </div>
  </div>
</section>

<!-- MODAL -->
<div class="modal modal--animate-translate-up flex flex-center bg-contrast-higher bg-opacity-90% padding-md js-modal" id="modal-premios">
  <div class="modal__content width-100% max-width-xxl height-90% overflow-auto bg shadow-md" role="alertdialog" aria-labelledby="modal-title-2" aria-describedby="modal-description-2">
    
    <button class="reset position-absolute height-xs width-xs btn padding-0 js-modal__close js-tab-focus" style="box-shadow: none;top: 36px; right: 36px">
      <img src="<?php midiaSrc('close.svg'); ?>" alt="Fechar Modal" class="hover-op">
    </button>

    <div class="flex justify-center flex-column overflow-hidden height-100% padding-left-xl@sm padding-x-sm padding-y-lg">
      <h2 class="color-primary font-bold text-60">
        Prêmios <br> e conquistas
      </h2>
      <p class="color-primary color-opacity-60% text-24 margin-top-sm margin-bottom-xl">
        Nosso trabalho reconhecido nacionalmente: 
      </p>

      <!-- carousel -->      
      <div class="premios-carousel">
        <?php 
          $args = array(
            'post_type' => array( 'premios' ),
            'showposts' => -1,
            'nopaging'  => true,
            'orderby' => 'title',
            'order' => 'DESC',
          );
          $premios = new WP_Query ( $args );
        ?>
        <?php if ( $premios->have_posts() ): while( $premios->have_posts() ) : $premios->the_post() ; ?>
            <div class="padding-right-xs">
              <div  class="block height-100% radius-lg width-100% padding-sm bg-light premio-carousel-square">
                <h3 class="color-primary font-bold text-md margin-bottom-xs padding-bottom-xs">
                  <?= get_the_title(); ?>
                </h3>
  
                <ul class="premios-ul">
                  <?php $values = rwmb_meta('premios_items');?>
                  <?php foreach ( $values as $value ): ?>
                    <li class="text-16 color-primary color-opacity-60% font-light">
                      <?= $value[0]; ?>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
        <?php endwhile; endif; wp_reset_query(); ?>
        <div class="padding-right-xs"></div>
      </div>
      <!-- carousel -->
    </div>
  </div>

</div>
<!-- MODAL -->
<!-- hero -->

<!-- timeline -->
<section class="padding-top-xxl padding-bottom-xl" id="timeline">
  <div class="container max-width-lg">
    <div class="position-relative z-index-1 overflow-hidden">
      <div class="margin-bottom-lg">
        <h1 class="text-center font-bold color-primary text-80">
          Linha do tempo
        </h1>
      </div>

      <div class="container padding-bottom-xl width-90%@lg">
        <div class="v-timeline v-timeline--icons js-v-timeline" data-animation="on">
          <!-- 1 -->
          <section class="v-timeline__section js-v-timeline__section">
            <div class="v-timeline__marker" aria-hidden="true">
              <img src="<?php midiaSrc('time-circle.svg'); ?>" alt="">
            </div>
      
            <div class="v-timeline__items-group">
              <div class="v-timeline__item bg-light padding-lg radius-md shadow-xs">
                <div class="v-timeline__date margin-bottom-sm">
                  <time class="v-timeline__date-value text-base color-primary color-opacity-60% font-bold" datetime="1984-01-01T00:00">1984 a 1992</time>
                </div>
      
                <div class="text-component">        
                  <p class="text-16 color-primary color-opacity-60%">
                    Leonir Mânica trabalhou na área de seguros da 
                    <span class="font-bold">Bamerindus Seguros e na HSBC Cia de 
                    Seguros</span> com residência em Passo Fundo/RS, onde se 
                    deu início ao aprendizado em seguros e posteriormente 
                    <span class="font-bold">a vontade de ter sua própria 
                    corretora.</span>
                  </p>
                </div>
              </div>
            </div>
          </section>

          <!-- 2 -->
          <section class="v-timeline__section js-v-timeline__section">
            <div class="v-timeline__marker" aria-hidden="true">
              <img src="<?php midiaSrc('time-circle.svg'); ?>" alt="">
            </div>
      
            <div class="v-timeline__items-group">
              <div class="v-timeline__item bg-light padding-lg radius-md shadow-xs">
                <div class="v-timeline__date margin-bottom-sm">
                  <time class="v-timeline__date-value text-base color-primary color-opacity-60% font-bold" datetime="1992-01-01T00:00">1992</time>
                </div>
      
                <div class="text-component">        
                  <p class="text-16 color-primary color-opacity-60%">
                    <span class="font-bold">Em dezembro de 1992,</span> a Mânica 
                    Corretora de Seguros foi fundada pelo casal Leonir e 
                    Elaine Mânica.
                  </p>
                </div>
              </div>
            </div>
          </section>

          <!-- 3 -->
          <section class="v-timeline__section js-v-timeline__section">
            <div class="v-timeline__marker" aria-hidden="true">
              <img src="<?php midiaSrc('time-circle.svg'); ?>" alt="">
            </div>
      
            <div class="v-timeline__items-group">
              <div class="v-timeline__item bg-light padding-lg radius-md shadow-xs">
                <div class="v-timeline__date margin-bottom-sm">
                  <time class="v-timeline__date-value text-base color-primary color-opacity-60% font-bold" datetime="1995-01-01T00:00">1995</time>
                </div>
      
                <div class="text-component">        
                  <p class="text-16 color-primary color-opacity-60%">
                    Com os trabalhos aumentando, foi necessário 
                    <span class="font-bold">contratar mais pessoas para o time,</span> 
                    assim foi contratada mais uma colaboradora. E também dois 
                    vendedores parceiros que <span class="font-bold">estão até 
                    hoje na empresa.</span>
                  </p>
                </div>
              </div>
            </div>
          </section>

          <!-- 4 -->
          <section class="v-timeline__section js-v-timeline__section">
            <div class="v-timeline__marker" aria-hidden="true">
              <img src="<?php midiaSrc('time-circle.svg'); ?>" alt="">
            </div>
      
            <div class="v-timeline__items-group">
              <div class="v-timeline__item bg-light padding-lg radius-md shadow-xs">
                <div class="v-timeline__date margin-bottom-sm">
                  <time class="v-timeline__date-value text-base color-primary color-opacity-60% font-bold" datetime="1996-01-01T00:00">1996</time>
                </div>
      
                <div class="text-component">        
                  <p class="text-16 color-primary color-opacity-60%">
                    Com o crescimento da empresa, o casal buscou um local para 
                    a construção da <span class="font-bold">sede própria da 
                    empresa.</span>
                  </p>
                </div>
              </div>
            </div>
          </section>

          <!-- 5 -->
          <section class="v-timeline__section js-v-timeline__section">
            <div class="v-timeline__marker" aria-hidden="true">
              <img src="<?php midiaSrc('time-circle.svg'); ?>" alt="">
            </div>
      
            <div class="v-timeline__items-group">
              <div class="v-timeline__item bg-light padding-lg radius-md shadow-xs">
                <div class="v-timeline__date margin-bottom-sm">
                  <time class="v-timeline__date-value text-base color-primary color-opacity-60% font-bold" datetime="1998-01-01T00:00">1998</time>
                </div>
      
                <div class="text-component">        
                  <p class="text-16 color-primary color-opacity-60%">
                    Inaugurada a nova sede da empresa, localizada na
                    <span class="font-bold">Avenida Flores da Cunha, 3455.</span>
                  </p>
                </div>
              </div>
            </div>
          </section>

          <!-- 6 -->
          <section class="v-timeline__section js-v-timeline__section">
            <div class="v-timeline__marker" aria-hidden="true">
              <img src="<?php midiaSrc('time-circle.svg'); ?>" alt="">
            </div>
      
            <div class="v-timeline__items-group">
              <div class="v-timeline__item bg-light padding-lg radius-md shadow-xs">
                <div class="v-timeline__date margin-bottom-sm">
                  <time class="v-timeline__date-value text-base color-primary color-opacity-60% font-bold" datetime="2008-01-01T00:00">2008</time>
                </div>
      
                <div class="text-component">        
                  <p class="text-16 color-primary color-opacity-60%">
                    Expansão da empresa com a abertura da filial em
                    <span class="font-bold">Não-Me-Toque.</span>
                  </p>
                </div>
              </div>
            </div>
          </section>

          <!-- 7 -->
          <section class="v-timeline__section js-v-timeline__section" style="display: none;" >
            <div class="v-timeline__marker" aria-hidden="true">
              <img src="<?php midiaSrc('time-circle.svg'); ?>" alt="">
            </div>
      
            <div class="v-timeline__items-group">
              <div class="v-timeline__item bg-light padding-lg radius-md shadow-xs">
                <div class="v-timeline__date margin-bottom-sm">
                  <time class="v-timeline__date-value text-base color-primary color-opacity-60% font-bold" datetime="2010-01-01T00:00">2010</time>
                </div>
      
                <div class="text-component">        
                  <p class="text-16 color-primary color-opacity-60%">
                    Buscando trazer melhores soluções aos clientes, Leonir 
                    torna-se sócio fundador da GC do Brasil 
                    (Grande Corretora do Brasil). Localizada na Rua Domingos de 
                    Morais, 388 - 2º Andar - Vila Mariana, São Paulo - SP, 
                    04010-000.
                  </p>
                </div>
              </div>
            </div>
          </section>

          <!-- 8 -->
          <section class="v-timeline__section js-v-timeline__section" style="display: none;" >
            <div class="v-timeline__marker" aria-hidden="true">
              <img src="<?php midiaSrc('time-circle.svg'); ?>" alt="">
            </div>
      
            <div class="v-timeline__items-group">
              <div class="v-timeline__item bg-light padding-lg radius-md shadow-xs">
                <div class="v-timeline__date margin-bottom-sm">
                  <time class="v-timeline__date-value text-base color-primary color-opacity-60% font-bold" datetime="2012-01-01T00:00">2012</time>
                </div>
      
                <div class="text-component">        
                  <p class="text-16 color-primary color-opacity-60%">
                    Buscando novos mercados, iniciou-se o canal 
                    específico de Seguro Agrícola.
                  </p>
                </div>
              </div>
            </div>
          </section>

          <!-- 9 -->
          <section class="v-timeline__section js-v-timeline__section" style="display: none;" >
            <div class="v-timeline__marker" aria-hidden="true">
              <img src="<?php midiaSrc('time-circle.svg'); ?>" alt="">
            </div>
      
            <div class="v-timeline__items-group">
              <div class="v-timeline__item bg-light padding-lg radius-md shadow-xs">
                <div class="v-timeline__date margin-bottom-sm">
                  <time class="v-timeline__date-value text-base color-primary color-opacity-60% font-bold" datetime="2017-01-01T00:00">2017</time>
                </div>
      
                <div class="text-component">        
                  <p class="text-16 color-primary color-opacity-60%">
                    25 anos de Mânica Seguros, um momento que deve ser 
                    festejado. E nada mais justo do que comemorar com as pessoas 
                    que fizeram parte desta trajetória. Em dezembro deste ano 
                    foi realizado um evento com colaboradores, clientes, amigos 
                    e com a comunidade para celebrar os 25 anos de corretora. 
                  </p>
                </div>
              </div>
            </div>
          </section>

          <!-- 9 -->
          <section class="v-timeline__section js-v-timeline__section" style="display: none;" >
            <div class="v-timeline__marker" aria-hidden="true">
              <img src="<?php midiaSrc('time-circle.svg'); ?>" alt="">
            </div>
      
            <div class="v-timeline__items-group">
              <div class="v-timeline__item bg-light padding-lg radius-md shadow-xs">
                <div class="v-timeline__date margin-bottom-sm">
                  <time class="v-timeline__date-value text-base color-primary color-opacity-60% font-bold" datetime="2020-01-01T00:00">2020</time>
                </div>
      
                <div class="text-component">        
                  <p class="text-16 color-primary color-opacity-60%">
                    8 anos após iniciar no ramo do Seguro Agrícola, a corretora 
                    se tornou referência na região. Conquistando grandes nomes 
                    do agronegócio como clientes.
                  </p>
                  
                  <p class="text-16 color-primary color-opacity-60%">
                    Também com as mudanças no cenário mundial, a empresa 
                    entendeu que precisava se adaptar e investir mais em 
                    tecnologia, inovação e na experiência do usuário. 
                    Por isso, reformulou a sua marca, o seu site, aderiu 
                    plataformas digitais para proporcionar um serviço melhor 
                    aos seus segurados e buscou treinamentos em metodologias 
                    ágeis. Conseguindo assim, se estruturar para uma realidade 
                    mais digital e volátil.
                  </p>

                </div>
              </div>
            </div>
          </section>


        </div>
      </div>
      
      <div class="flex justify-center padding-bottom-lg">
        <button class="btn btn--accent" id="timelime-show-btn">
          Ver linha do tempo completa
        </button>
      </div>


    </div>

  </div>
</section>
<!-- timeline -->


<!-- principios -->
<section class="padding-y-xl bg-primary">
  <div class="container max-width-xl">
    <h2 class="color-light font-bold text-80 text-center">
      Nossos <br> princípios
    </h2>

    <div class="grid gap-md flex-column-reverse flex-row@md margin-top-xl">
      <div class="col-5@md">
        <img src="<?php midiaSrc('hug.png') ?>" alt="Abraço" class="width-100% block margin-x-auto max-width-xs">
      </div>

      <div class="col-7@md flex flex-column justify-center">

        <div class="grid justify-between margin-bottom-xl">
          <div class="col-5@sm grid items-start padding-bottom-lg padding-bottom-0@sm">
            <div class="col-1 flex items-start">
              <img style="width: 20px" src="<?php midiaSrc('shield.svg'); ?>" alt="Compromisso e Seriedade">
            </div>   
            <div class="padding-left-xs col-11">
              <h4 class="color-light text-16 font-bold margin-bottom-sm">
                Compromisso e Seriedade
              </h4>

              <p class="color-light color-opacity-80% text-16">
                Acreditamos que o compromisso está nas pequenas coisas, no 
                nosso cotidiano, nas nossas escolhas e ações. E é por isso que 
                nós <span class="font-bold">cuidamos de você</span> e buscamos 
                estar <span class="font-bold">atentos a cada detalhe</span> 
                durante um processo de seguro.
              </p>

            </div>       
          </div>

          <div class="col-5@sm grid items-start padding-bottom-lg padding-bottom-0@sm">
            <div class="col-1 flex items-start">
              <img style="width: 20px; max-height: 16px;" src="<?php midiaSrc('thumbs-up.svg'); ?>" alt="Acessibilidade">
            </div>   
            <div class="padding-left-xs col-11">
              <h4 class="color-light text-16 font-bold margin-bottom-sm">
                Flexibilidade e acessibilidade
              </h4>

              <p class="color-light color-opacity-80% text-16">
                Entendemos que <span class="font-bold">cada caso é único</span> 
                e buscamos atender cada segurado de forma exclusiva e 
                personalizada, no seu ritmo e no canal mais adequado.
              </p>

            </div>       
          </div>
        </div>

        <div class="grid justify-between margin-bottom-xl">
          <div class="col-5@sm grid items-start padding-bottom-lg padding-bottom-0@sm">
            <div class="col-1 flex">
              <img style="width: 20px" src="<?php midiaSrc('eye.svg'); ?>" alt="Compromisso e Seriedade">
            </div>   
            <div class="padding-left-xs col-11">
              <h4 class="color-light text-16 font-bold margin-bottom-sm">
                Transparência
              </h4>

              <p class="color-light color-opacity-80% text-16">
                <span class="font-bold">Nós acreditamos em confiança mútua e 
                para isso</span>, buscamos trabalhar e nos relacionar com o 
                máximo de transparência possível, internamente e para com nossos 
                segurados.
              </p>

            </div>       
          </div>

          <div class="col-5@sm grid items-start padding-bottom-lg padding-bottom-0@sm">
            <div class="col-1 flex">
              <img style="width: 20px" src="<?php midiaSrc('heart.svg'); ?>" alt="Acessibilidade">
            </div>   
            <div class="padding-left-xs col-11">
              <h4 class="color-light text-16 font-bold margin-bottom-sm">
                Humana, Empática e Gentil
              </h4>

              <p class="color-light color-opacity-80% text-16">
                <span class="font-bold">Nos preocupamos com nossos 
                segurados</span> e buscamos fortalecer nossos relacionamentos. 
                Entendemos que a empatia deve ser base de qualquer relação e que 
                entender o contexto do outro é fundamental para entregar 
                <span class="font-bold">serviços mais significativos,</span> 
                que atendam às necessidades <span class="font-bold">reais nas 
                vidas de nossos clientes e parceiros.</span>
              </p>

            </div>       
          </div>
        </div>

        <div class="grid justify-between margin-bottom-xl">
          <div class="col-5@sm grid items-start padding-bottom-lg padding-bottom-0@sm">
            <div class="col-1 flex items-start">
              <img style="width: 20px; max-height: 20px;" src="<?php midiaSrc('cellphone.svg'); ?>" alt="Compromisso e Seriedade">
            </div>   
            <div class="padding-left-xs col-11">
              <h4 class="color-light text-16 font-bold margin-bottom-sm">
                Digital
              </h4>

              <p class="color-light color-opacity-80% text-16">
                Investimos em <span class="font-bold">ferramentas</span> que 
                trazem mais leveza para os processos de seguro, desde a 
                contratação, à utilização dos serviços, até a renovação do 
                seguro.
              </p>

            </div>       
          </div>

          <div class="col-5@sm flex items-start justify-center justify-start@sm padding-bottom-lg padding-bottom-0@sm">
                 
          </div>
        </div>        


      </div>

    </div>
  </div>
</section>
<!-- principios -->


<!-- referencia -->
<section class="padding-top-xxl padding-top-lg">
  <div class="container max-width-xl">
    <div class="grid margin-bottom-xxl">
      <div class="col-6@md padding-x-lg@md">
        <h2 class="color-primary color-opacity-90% text-80 font-bold text-center text-left@md">
          Nos tornamos <br class="display@lg"> <br class="hide@md"> referência
        </h2>

        <p class="color-primary color-opacity-60% text-md width-80%@lg margin-top-lg margin-bottom-xl@md margin-bottom-md">
          Com a liderança de Leonir e Elaine, nos desenvolvemos e tornamo-nos 
          uma <span class="font-bold">referência</span>. A nossa preocupação 
          genuína com os clientes, fez com 
          que a empresa enxergasse além do 
          <span class="font-bold">negócio.</span>
        </p>

        <a href="<?= esc_url(home_url('/servicos')); ?>" class="width-50% max-width-50% btn btn--accent display@md">
          Ver serviços
        </a>

      </div>

      <div class="col-6@md">
        <p class="color-primary color-opacity-60% text-md margin-bottom-md">
          A Mânica Corretora de Seguros procura aconselhar os clientes os 
          melhores produtos e serviços do mercado, buscando sempre entregar um 
          serviço personalizado e focado no segurado.
        </p>
        
        <p class="color-primary color-opacity-60% text-md margin-bottom-md">          
          Temos a felicidade de contar com uma equipe altamente qualificada para 
          atender nossos segurados da melhor forma possível. 
        </p>
        
        <p class="color-primary color-opacity-60% text-md margin-bottom-md">
          Ao longo dos anos, a empresa se expandiu e agora possui alcance 
          nacional. Sendo hoje uma das corretoras sócias fundadoras da GC do 
          Brasil - Grande Corretora do Brasil, empresa que conta com mais de 
          325 mil segurados. 
        </p>
        
        <p class="color-primary color-opacity-60% text-md margin-bottom-sm">
          Ao longo desses 29 anos de história, desenvolvemos departamentos 
          especializados em todos os ramos, e há 8 anos entramos no mercado do 
          seguro agrícola, no qual já somos referência no estado.
        </p>
      </div>

    </div>

    <div class="grid">
      <div class="col-6@md padding-right-lg@md margin-bottom-lg margin-bottom-0@md">
        <img style="height: 353px;" src="<?php midiaSrc('startse.png') ?>" alt="Start Se" class="width-100%@md width-60%@sm width-100% object-cover margin-bottom-lg radius-xxl">
        <img style="height: 255px;" src="<?php midiaSrc('time.png') ?>" alt="Time Mânica" class="width-80%@md width-60%@sm width-100% block margin-left-auto object-cover radius-xxl">
      </div>

      <div class="col-6@md">
        <img src="<?php midiaSrc('manica.png') ?>" alt="Start Se" class="width-100%@md img-587 width-60%@sm width-100% object-cover radius-xxl">      
      </div>
    </div>

    <div class="flex justify-center padding-y-lg hide@md">
      <a href="<?= esc_url(home_url('/servicos')); ?>" class="btn btn--accent btn--lg min-width-50%">
        Ver serviços
      </a>
    </div>
  </div>
</section>
<!-- referencia -->


<!-- nosso time -->
<section class="padding-top-xl padding-bottom-xxl overflow-hidden">
  <div class="container max-width-xxl">
    <p class="bg-accent bg-opacity-10% fit-content radius-full color-accent text-16 font-light padding-y-xxs padding-x-lg margin-bottom-sm margin-x-auto">
      Conheça o nosso time
    </p>

    <h2 class="color-primary text-80 font-bold text-center">
      Quem faz parte <br> da Mânica
    </h2>

    <!-- carousel -->

    <div class="overflow-hidden padding-top-xl width-100vw@lg">
      <div class="carousel carousel-v3 flex flex-column container max-width-md js-carousel" data-drag="on" data-loop="off" data-overflow-items="on">
        <p class="sr-only">Carousel items</p>

        <div class="carousel__wrapper position-relative">
          <ol class="carousel__list">
            <?php 
              $args = array(
                'post_type' => array( 'time' ),
                'showposts' => -1,
                'nopaging'  => true
              );
              $people = new WP_Query ( $args );
            ?>
            <?php if ( $people->have_posts() ): while( $people->have_posts() ) : $people->the_post() ; ?> 

              <li class="carousel__item">
                <div class="position-relative team__square">
                  <?php 
                    $images = rwmb_meta( 'time_imagem', array( 'limit' => 1, 'size' => 'full' ) );
                    $image = reset( $images );
                  ?>

                  <img class="block width-100%" src="<?php echo $image['url']; ?>" alt="<?= get_the_title(); ?>">
                  <div class="team__filter"></div>
                  <div class="team__text-area">
                    <h5 class="team__title color-light font-light text-16">
                      <?= get_the_title(); ?>
                    </h5>
                    <p class="team__text color-light font-bold text-16">
                      <?= rwmb_meta('time_cargo') ?>
                    </p>
                  </div>
                </div>
              </li>
              

            <?php endwhile; endif; wp_reset_query(); ?>

            
          </ol>

          <nav class="no-js:is-hidden">
            <ul class="position-absolute team-carousel top-0 left-0 bottom-0 right-0 pointer-events-none flex items-center justify-between">
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
    <!-- carousel -->

  </div>
</section>

<!-- nosso time -->


<!-- formulario -->
<?php //get_template_part('template-parts/doubts-form'); ?>
<!-- formulario -->


<?php
get_footer();