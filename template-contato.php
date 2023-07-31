<?php
/**
 * Template name: Contato
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

      <div class="flex flex-column justify-center margin-bottom-xl margin-bottom-0@sm">
        <h1 class="color-primary font-bold text-80 text-center text-center@lg">
          Sobre <br>
          mim
        </h1>
        <p class="text-24 margin-top-sm margin-bottom-lg color-primary color-opacity-60% text-center text-center@lg">
          Vamos conversar?
        </p>

        <div class="flex justify-start justify-center">
          <a href="#formulario" class="hover-red">
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

<!-- formulário -->
<section class="position-relative overflow-hidden" id="formulario">


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
<!-- formulário -->
 

<?php
get_footer();