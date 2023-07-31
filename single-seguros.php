<?php
/**
 * Template name: Single Servicos
 *
 * @package Alp Cody
 * @since 1.0
 */

if(rwmb_meta('seguros_link')){
  get_header('tertiary');
  $online = true;
}else{
  get_header('secondary');
  $online = false;
}

$terms = get_the_terms($post->ID, 'tipo-seguro');
// $slug = $terms[0]->slug;

?>

<!-- hero -->
<section class="padding-y-xl">
  <div class="container max-width-lg">
    <div class="grid">

      <div class="col-6@sm flex flex-column justify-center margin-bottom-xl margin-bottom-0@sm">
        <?php 
          $images = rwmb_meta( 'seguros_icone', array( 'limit' => 1, 'size' => 'full' ) );
          $image = reset( $images );
        ?>
        <img class="icone-servicos" src="<?= $image['url'] ?>" alt="Icone" class="margin-bottom-sm">
        <h1 class="color-primary font-bold text-60 text-center text-left@sm">
          <?= wordBreak(get_the_title()); ?>
        </h1>
        
        
        <p class="text-24 width-80%@md margin-top-sm margin-bottom-lg color-primary color-opacity-60% text-center text-left@sm">
          <?= rwmb_meta('seguros_texto-inicial'); ?>
        </p>
        
        <?php if(rwmb_meta('seguros_link')): ?>
          
        <?php else: ?>

        <?php endif; ?>
        
      </div>
      <div class="col-5@sm">
          <img src="<?php midiaSrc('servicos.png'); ?>" alt="Olhos com Brilho" class="resp-img-serv width-100%@sm width-80%@xs width-100% block margin-left-xxxl">
        </div>

    </div>
  </div>
</section>
<!-- hero -->
  
  <!-- sobre -->
  <div data-section="sobre" id="seguros" class="width-100% cat-section padding-top-md" style="background-color: rgba(108, 115, 119, 0.1);">
    <div class="flex justify-end container max-width-xl">
      <div class="container max-width-adaptive-sm margin-bottom-xl js-sticky-sharebar-target">
        <div class="text-component line-height-lg v-space-md single-post-content">
            <div class="insurance__about">
              <?= rwmb_meta('seguros_sobre'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- vantagens -->
  <?php if(rwmb_meta('seguros_vantagens')): ?>
    <div data-section="vantagens" id="vantagens" class="width-100% cat-section margin-bottom-xl">
      <div class="flex justify-end container max-width-xl">
        <div class="col-10@sm">
          <div class="grid gap-lg">
            <div class="col-6@md">
              <?php 
                $images = rwmb_meta( 'seguros_imagem-fundo-2', array( 'limit' => 1, 'size' => 'full' ) );
                $image = reset( $images );
              ?>
              <img class="width-100%" src="<?php echo $image['url']; ?>" alt="<?= get_the_title(); ?>">

            </div>
            <div class="col-6@md padding-top-lg">
              <h2 class="font-primary text-80 font-bold margin-bottom-sm text-center text-left@md">
                Vantagens
              </h2>

              <ul class="list-red">
                <div class="line-dotted"></div>
                <?php $values = rwmb_meta('seguros_vantagens' ); ?>
                <?php foreach ( $values as $value ): ?>
                  <li class="color-primary color-opacity-60% text-24 font-light font-secondary">
                    <img class="margin-right-sm" src="<?php midiaSrc('time-circle.svg'); ?>" alt="Ponto da lista">
                    <span>
                      <?= $value[0]; ?>
                    </span>
                  </li>
                <?php endforeach; ?>                    
              </ul>

            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <!-- coberturas -->
    
          <div class="col-6@md padding-top-xs">
            <?php 
              $content = false;
              $values = rwmb_meta('seguros_cobertura');
              foreach ( $values as $value ){
                if(isset($value['seguros_cobertura-sobre'])){
                  $content = true;
                }
              }               
            ?>
            <?php if($content): ?>

              <ul data-filter="seguro" style="display: flex;" class="filter-item accordion-v2 flex-column gap-md js-accordion" data-animation="on" data-multi-items="on" data-version="v2">
              
                <?php $values = rwmb_meta('seguros_cobertura'); ?>
                <?php foreach ( $values as $value ): ?>

                  <?php if(isset($value['seguros_cobertura-sobre'])): ?>
                
                    <li class="accordion-v2__item cover <?= $slug; ?>  radius-md  js-accordion__item">
                      <button class="reset accordion-v2__header padding-y-sm padding-x-md js-tab-focus" type="button">
                        <span class="text-24 flex items-center">
                          <img class="margin-right-xs" src="<?= wp_get_attachment_image_url( $value['seguros_cobertura-icone'][0], 'full' ) ?>" alt="<?= $value['seguros_cobertura-text']; ?>">
                          <?=$value['seguros_cobertura-text']; ?>
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
                          <p class="color-light color-opacity-60% font-light text-16 font-secondary">
                            <?= $value['seguros_cobertura-sobre']; ?>
                          </p>
                        </div>
                      </div>
                    </li>		
                    
                  <?php else: ?>
                    <div class="flex items-center margin-top-sm">
                      <img src="<?= wp_get_attachment_image_url( $value['seguros_cobertura-icone'][0], 'full' ) ?>" alt="<?= $value['seguros_cobertura-text']; ?>">
                      <p class="margin-left-xs color-light color-opacity-90% text-24 font-light font-secondary">
                        <?= $value['seguros_cobertura-text']; ?>
                      </p>
                    </div>
                  <?php endif; ?>

                <?php endforeach; ?>              
              </ul>

            <?php else: ?>
              
              <div class="grid gap-sm">
                <?php $values = rwmb_meta('seguros_cobertura'); ?>
                <?php foreach ( $values as $value ): ?>
                  <div class="col-6 flex items-center">
                    <img src="<?= wp_get_attachment_image_url( $value['seguros_cobertura-icone'][0], 'full' ) ?>" alt="<?= $value['seguros_cobertura-text']; ?>">
                    <p class="margin-left-xs color-light color-opacity-90% text-24 font-light font-secondary">
                      <?= $value['seguros_cobertura-text']; ?>
                    </p>
                  </div>
                <?php endforeach; ?>
              </div>

            <?php endif; ?>

            <!-- adicionais -->
            <?php if(rwmb_meta('seguros_adicionais')): ?>
              <ul class="accordion  js-accordion margin-top-lg" data-animation="on" data-multi-items="on">
                  <li class="accordion__item single js-accordion__item">
                    <button class="reset accordion__header padding-y-sm js-tab-focus" type="button">
                      <span class="text-24 font-light color-white">
                        Coberturas adicionais
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
                      
                        <?php $values = rwmb_meta('seguros_adicionais'); ?>
                        <?php foreach ( $values as $value ): ?>
                          <div class="grid gax-xxs items-start margin-bottom-md">
                            <div class="col-1">
                              <img src="<?= wp_get_attachment_image_url( $value['seguros_adicionais-icone'][0], 'full' ) ?>" alt="">
                            </div>
                            <div class="col-9">
                              <p class="color-light margin-top-xxxxs color-opacity-90% text-24 font-light font-secondary">
                                <?= $value['seguros_adicionais-text']; ?>
                              </p>

                              <?php if(isset($value['seguros_adicionais-sobre'])): ?>
                                <p class="color-light margin-top-xs color-opacity-80% text-24 font-light font-secondary">
                                  <?= $value['seguros_adicionais-sobre']; ?>
                                </p>
                              <?php endif; ?>

                            </div>
                          </div>
                        <?php endforeach; ?>
                      
                    </div>
                  </li>

              </ul>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- assistencia -->
  <?php if(rwmb_meta('seguros_assistencia')): ?>
  <div data-section="assistencia" id="assistencias" class="width-100% cat-section bg-primary padding-bottom-xxl">
    <div class="flex justify-end container max-width-xl">
      <div class="col-10@sm">
        <div class="grid gap-xs justify-start">
          <div class="col-5@md margin-bottom-lg margin-bottom-0@md">
            <h2 class="color-light text-80 font-bold text-center text-left@md">
              Assistências
            </h2>
          </div>
    
          <div class="col-6@md">

              <ul data-filter="seguro" style="display: flex;" class="filter-item accordion-v2 flex-column gap-md js-accordion" data-animation="on" data-multi-items="on" data-version="v2">
              
                <?php $values = rwmb_meta('seguros_assistencia'); ?>
                <?php foreach ( $values as $value ): ?>

                  <?php if(isset($value['seguros_assistencia-sobre'])): ?>
                
                    <li class="accordion-v2__item cover <?= $slug; ?>  radius-md  js-accordion__item">
                      <button class="reset accordion-v2__header padding-y-sm padding-x-md js-tab-focus" type="button">
                        <span class="text-24 flex items-center">
                          <img class="margin-right-xs" src="<?= wp_get_attachment_image_url( $value['seguros_assistencia-icone'][0], 'full' ) ?>" alt="<?= $value['seguros_assistencia-text']; ?>">
                          <?=$value['seguros_assistencia-text']; ?>
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
                          <p class="color-light color-opacity-60% font-light text-16 font-secondary">
                            <?= $value['seguros_assistencia-sobre']; ?>
                          </p>
                        </div>
                      </div>
                    </li>		
                    
                  <?php else: ?>
                    <div class="flex items-center margin-top-sm">
                      <img src="<?= wp_get_attachment_image_url( $value['seguros_assistencia-icone'][0], 'full' ) ?>" alt="<?= $value['seguros_assistencia-text']; ?>">
                      <p class="margin-left-xs color-light color-opacity-90% text-24 font-light font-secondary">
                        <?= $value['seguros_assistencia-text']; ?>
                      </p>
                    </div>
                  <?php endif; ?>

                <?php endforeach; ?>              
              </ul>

          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <!-- assistencia -->

  <!-- relacionados -->
  
  <!-- FAQ -->
  <?php if(rwmb_meta('seguros_faq')): ?>
    <div data-section="faq" id="faq" class="width-100% cat-section">
      <div class="flex justify-end container max-width-xl">
        <div class="col-10@sm">
          <div class="grid gap-xs justify-start">
            <div class="col-5@md margin-bottom-lg margin-bottom-0@md">
              <h2 class="font-primary text-80 font-bold text-center text-left@md">
                Perguntas <br> frequentes
              </h2>
            </div>
      
            <div class="col-6@md">
              <ul data-filter="seguro" style="display: flex;" class="filter-item accordion-v2 flex-column gap-md js-accordion" data-animation="on" data-multi-items="on" data-version="v2">
              
                <?php $values = rwmb_meta( 'seguros_faq' )?>
                <?php foreach ( $values as $value ): ?>
                
                  <li class="accordion-v2__item single <?= $slug; ?> bg-primary bg-opacity-10% radius-md  js-accordion__item">
                    <button class="reset accordion-v2__header padding-y-sm padding-x-md js-tab-focus" type="button">
                      <span class="text-24">
                        <?= $value[0]; ?>
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
                        <p class="color-primary color-opacity-60% font-light text-16 font-secondary">
                          <?= addBreak($value[1]); ?>
                        </p>
                      </div>
                    </div>
                  </li>			

                <?php endforeach; ?>              

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>

</section>
<!-- section -->

<!-- formulário -->
<?php get_template_part('template-parts/doubts-form'); ?>
<!-- formulário -->

<script>
  const openLink = document.querySelector('#open-link');
  const price = document.querySelector('#seguro-valor');

  if(openLink){
    openLink.setAttribute('href','<?= rwmb_meta('seguros_link'); ?>');
    price.textContent = 'R$' + '<?= rwmb_meta('seguros_preco'); ?>' + '/mês'
  };
</script>

<script>
  const catSections = document.querySelectorAll('.cat-section');
  const catLink  = document.querySelectorAll('.cat-link');
  var timeSet;

  function verifySection() {
    console.log('\n\nAbaixo:');
    catSections.forEach(section => {
      if((window.scrollY + 200) >= section.offsetTop && 
        (window.scrollY + 150) < (section.offsetTop + section.offsetHeight - 300))
      {

        // if(section.dataset.section == 'coberturas' ||
        //   section.dataset.section == 'assistencia' ||
        //   section.dataset.section == 'observacoes')
        // {
        //   catLink.forEach(link => {
        //     link.classList.add('white');
        //   });
        //   document.querySelector('.cat-title').style.color = 'var(--color-light)';
        // }else{
        //   catLink.forEach(link => {
        //     link.classList.remove('white');
        //   });
        //   document.querySelector('.cat-title').style.color = 'var(--color-primary)';
        // }

        catLink.forEach(link => {
          if(section.dataset.section == link.dataset.section){
            link.classList.add('selected');
          }else{
            link.classList.remove('selected');
          }
        });

        
      }
    })
  }

  window.addEventListener('scroll', () => {
    verifySection();
    // timeSet = setTimeout(verifySection, 50);
  });

  catLink.forEach(link => {
    catSections.forEach(section => {
      if(link.dataset.section == section.dataset.section){
        link.addEventListener('click', (e) => {
          e.preventDefault();
          window.scrollTo(0, (section.offsetTop-150));
        })
      }
    })
  })
</script>

<?php
get_footer();