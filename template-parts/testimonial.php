<?php 
  if(wp_is_mobile()){
    $referenceSize = 130;
  }else{
    $referenceSize = 250;
  }
?>


<section class="padding-bottom-lg">
  <div class="<?= !wp_is_mobile() ? 'container' : ''; ?> max-width-xl">
    <p class="bg-accent bg-opacity-10% fit-content radius-full color-accent text-sm font-light padding-y-xxs padding-x-lg margin-bottom-sm margin-x-auto">
      Depoimentos dos clientes
    </p>

    <h2 class="text-80 font-bold text-center color-primary">
      O que os clientes falam <br class="display@md"> sobre a Mânica
    </h2>

    <?php 
      $args = array(
        'post_type' => array( 'depoimentos' ),
        "posts_per_page" => 3,
        'nopaging'  => false
      );
      $depoimentos = new WP_Query ( $args );
    ?>
    <?php if(!wp_is_mobile( )): ?>
      <div class="grid gap-xs margin-top-xxl@md margin-top-xxxl">

        <?php if ( $depoimentos->have_posts() ): while( $depoimentos->have_posts() ) : $depoimentos->the_post() ; ?> 
          <?php 
            $stringSize = strlen(rwmb_meta('depoimentos_text'));
            if($stringSize > $referenceSize){
              $newText = '"' . substr(rwmb_meta('depoimentos_text'), 0, $referenceSize) . '...';
            }else{
              $newText = '"' . rwmb_meta('depoimentos_text') . '"';
            }

            $images = rwmb_meta( 'depoimentos_imagem', array( 'limit' => 1 ) );
            $image = reset( $images );
            
          ?>
        
          <div class="col-4@md margin-bottom-xxl margin-bottom-0@md testimonial__square padding-x-lg" <?php if($stringSize > $referenceSize) echo 'aria-controls="modal-testimonial-' . get_the_ID() . '" style="cursor: pointer;"';  ?> >
            
            <?php if($image['url']): ?>
                <img src="<?= $image['url']; ?>" alt="" class="testimonial__photo">
            <?php endif; ?>
            
            <?php if($stringSize > $referenceSize): ?>
                <img class="testimonial__arrow" src="<?php midiaSrc('up-right-arrow.svg') ?>" alt="">
            <?php endif; ?>
            
            <div class="testimonial__text-area">
              <p class="text-16 color-primary color-opacity-60% font-secondary">
                <?= $newText; ?>
              </p>
            </div>

            <div class="testimonial__footer flex items-center justify-between flex-row@md flex-column text-center text-left@md">
              <div class="margin-bottom-md margin-bottom-0@md">
                <h4 class="text-18 color-primary font-bold font-secondary testimonial__name">
                  <?= get_the_title(); ?>
                </h4>
                <h5 class="text-18 color-primary color-opacity-60% font-light font-secondary testimonial__job">
                  <?= rwmb_meta('depoimentos_profissao'); ?>
                </h5>
              </div>

              <div class="div flex items-center testimonial__stars">

                <?php $stars = (int)rwmb_meta('depoimentos_nota'); ?>

                <?php for($i = 1; $i < 6; $i++): ?>

                  <?php if($i <= $stars): ?>
                    <svg class="orange" xmlns="http://www.w3.org/2000/svg" width="20.093" height="19.16" viewBox="0 0 20.093 19.16">
                      <defs>
                        <style>
                          .cls-1 {
                            fill-rule: evenodd;
                          }
                        </style>
                      </defs>
                      <g id="ic-actions-star" transform="translate(-1.959 -2.435)">
                        <path id="Caminho_508" data-name="Caminho 508" class="cls-1" d="M11,3.19a1.08,1.08,0,0,1,2.06,0l1.86,5.72h6a1.09,1.09,0,0,1,.64,2l-4.87,3.53,1.86,5.73a1.08,1.08,0,0,1-1.67,1.21L12,17.81,7.13,21.35a1.08,1.08,0,0,1-1.67-1.21l1.86-5.73L2.45,10.88a1.09,1.09,0,0,1,.64-2h6Z"/>
                      </g>
                    </svg>
                  <?php else: ?>
                    <svg class="black" xmlns="http://www.w3.org/2000/svg" width="20.093" height="19.16" viewBox="0 0 20.093 19.16">
                      <defs>
                        <style>
                          .cls-1 {
                            fill-rule: evenodd;
                          }
                        </style>
                      </defs>
                      <g id="ic-actions-star" transform="translate(-1.959 -2.435)">
                        <path id="Caminho_508" data-name="Caminho 508" class="cls-1" d="M11,3.19a1.08,1.08,0,0,1,2.06,0l1.86,5.72h6a1.09,1.09,0,0,1,.64,2l-4.87,3.53,1.86,5.73a1.08,1.08,0,0,1-1.67,1.21L12,17.81,7.13,21.35a1.08,1.08,0,0,1-1.67-1.21l1.86-5.73L2.45,10.88a1.09,1.09,0,0,1,.64-2h6Z"/>
                      </g>
                    </svg>
                  <?php endif; ?>

                <?php endfor; ?>
              </div>
            </div>

          </div>

        <?php endwhile; endif;?>

      </div>

    <?php else: ?>
      <div class="overflow-hidden">
        <div class="carousel carousel-v3 flex flex-column container max-width-md js-carousel" data-drag="on" data-loop="off" data-overflow-items="on">
          <p class="sr-only">Carousel items</p>

          <div class="carousel__wrapper position-relative">

            <ol class="carousel__list padding-y-xxl">

              <?php if ( $depoimentos->have_posts() ): while( $depoimentos->have_posts() ) : $depoimentos->the_post() ; ?> 
                <?php 
                  $stringSize = strlen(rwmb_meta('depoimentos_text'));
                  if($stringSize > $referenceSize){
                    $newText = '"' . substr(rwmb_meta('depoimentos_text'), 0, $referenceSize) . '...';
                  }else{
                    $newText = '"' . rwmb_meta('depoimentos_text') . '"';
                  }

                  $images = rwmb_meta( 'depoimentos_imagem', array( 'limit' => 1 ) );
                  $image = reset( $images );
                  
                ?>
              
                <div class="width-90% shadow-lg block carousel__item testimonial__square padding-x-lg" <?php if($stringSize > $referenceSize) echo 'aria-controls="modal-testimonial-' . get_the_ID() . '" style="cursor: pointer;"';  ?> >
                  <img src="<?= $image['url']; ?>" alt="" class="testimonial__photo">
                  
                  <?php if($stringSize > $referenceSize): ?>
                      <img class="testimonial__arrow" src="<?php midiaSrc('up-right-arrow.svg') ?>" alt="">
                  <?php endif; ?>
                  
                  <div class="testimonial__text-area mobile text-center">
                    <p class="text-16 color-primary color-opacity-60% font-secondary margin-bottom-md">
                      <?= $newText; ?>
                    </p>
                    <p class="text-16 color-primary color-opacity-60% font-secondary">
                      Ver mais
                    </p>
                  </div>

                  <div class="testimonial__footer flex items-center justify-between flex-column text-center">
                    <div class="margin-bottom-md">
                      <h4 class="text-18 color-primary font-bold font-secondary testimonial__name">
                        <?= get_the_title(); ?>
                      </h4>
                      <h5 class="text-18 color-primary color-opacity-60% font-light font-secondary testimonial__job">
                        <?= rwmb_meta('depoimentos_profissao'); ?>
                      </h5>
                    </div>

                    <div class="div flex items-center testimonial__stars">

                      <?php $stars = (int)rwmb_meta('depoimentos_nota'); ?>

                      <?php for($i = 1; $i < 6; $i++): ?>

                        <?php if($i <= $stars): ?>
                          <svg class="orange" xmlns="http://www.w3.org/2000/svg" width="20.093" height="19.16" viewBox="0 0 20.093 19.16">
                            <defs>
                              <style>
                                .cls-1 {
                                  fill-rule: evenodd;
                                }
                              </style>
                            </defs>
                            <g id="ic-actions-star" transform="translate(-1.959 -2.435)">
                              <path id="Caminho_508" data-name="Caminho 508" class="cls-1" d="M11,3.19a1.08,1.08,0,0,1,2.06,0l1.86,5.72h6a1.09,1.09,0,0,1,.64,2l-4.87,3.53,1.86,5.73a1.08,1.08,0,0,1-1.67,1.21L12,17.81,7.13,21.35a1.08,1.08,0,0,1-1.67-1.21l1.86-5.73L2.45,10.88a1.09,1.09,0,0,1,.64-2h6Z"/>
                            </g>
                          </svg>
                        <?php else: ?>
                          <svg class="black" xmlns="http://www.w3.org/2000/svg" width="20.093" height="19.16" viewBox="0 0 20.093 19.16">
                            <defs>
                              <style>
                                .cls-1 {
                                  fill-rule: evenodd;
                                }
                              </style>
                            </defs>
                            <g id="ic-actions-star" transform="translate(-1.959 -2.435)">
                              <path id="Caminho_508" data-name="Caminho 508" class="cls-1" d="M11,3.19a1.08,1.08,0,0,1,2.06,0l1.86,5.72h6a1.09,1.09,0,0,1,.64,2l-4.87,3.53,1.86,5.73a1.08,1.08,0,0,1-1.67,1.21L12,17.81,7.13,21.35a1.08,1.08,0,0,1-1.67-1.21l1.86-5.73L2.45,10.88a1.09,1.09,0,0,1,.64-2h6Z"/>
                            </g>
                          </svg>
                        <?php endif; ?>

                      <?php endfor; ?>
                    </div>
                  </div>

                </div>

              <?php endwhile; endif;?>

              
            </ol>

            
          </div>
        </div>
      </div>
      
    <?php endif; ?>
  </div>
</section>

<!-- modal -->
<?php if ( $depoimentos->have_posts() ): while( $depoimentos->have_posts() ) : $depoimentos->the_post() ; ?> 
  <?php 
    $stringSize = strlen(rwmb_meta('depoimentos_text'));
    $images = rwmb_meta( 'depoimentos_imagem', array( 'limit' => 1 ) );
    $image = reset( $images );    
  ?>

  <?php if($stringSize > $referenceSize): ?>
    <div class="modal modal--animate-scale flex flex-center bg-contrast-higher bg-opacity-90% padding-md js-modal" id="modal-testimonial-<?=get_the_ID(); ?>">
      <div class="modal__content width-100% max-width-xs max-height-100vh overflow-auto bg radius-md shadow-md" role="alertdialog" aria-labelledby="modal-title-1" aria-describedby="modal-description-1">
        
        <div class="padding-top-lg">
          <div class="testimonial__square padding-x-lg">
            
            <?php if($image['url']): ?>
                <img src="<?= $image['url']; ?>" alt="" class="testimonial__photo">
            <?php endif; ?>
            
            <div class="testimonial__text-area on-modal">
              <p class="text-16 color-primary color-opacity-60% font-secondary">
                <?= '"' . rwmb_meta('depoimentos_text') . '"'; ?>
              </p>
            </div>

            <div class="testimonial__footer flex items-center justify-between">
              <div>
                <h4 class="text-sm color-primary font-bold font-secondary testimonial__name">
                  <?= get_the_title(); ?>
                </h4>
                <h5 class="text-sm color-primary color-opacity-60% font-light font-secondary testimonial__job">
                  <?= rwmb_meta('depoimentos_profissao'); ?>
                </h5>
              </div>

              <div class="div flex items-center testimonial__stars">

                <?php $stars = (int)rwmb_meta('depoimentos_nota'); ?>

                <?php for($i = 1; $i < 6; $i++): ?>

                  <?php if($i <= $stars): ?>
                    <svg class="orange" xmlns="http://www.w3.org/2000/svg" width="20.093" height="19.16" viewBox="0 0 20.093 19.16">
                      <defs>
                        <style>
                          .cls-1 {
                            fill-rule: evenodd;
                          }
                        </style>
                      </defs>
                      <g id="ic-actions-star" transform="translate(-1.959 -2.435)">
                        <path id="Caminho_508" data-name="Caminho 508" class="cls-1" d="M11,3.19a1.08,1.08,0,0,1,2.06,0l1.86,5.72h6a1.09,1.09,0,0,1,.64,2l-4.87,3.53,1.86,5.73a1.08,1.08,0,0,1-1.67,1.21L12,17.81,7.13,21.35a1.08,1.08,0,0,1-1.67-1.21l1.86-5.73L2.45,10.88a1.09,1.09,0,0,1,.64-2h6Z"/>
                      </g>
                    </svg>
                  <?php else: ?>
                    <svg class="black" xmlns="http://www.w3.org/2000/svg" width="20.093" height="19.16" viewBox="0 0 20.093 19.16">
                      <defs>
                        <style>
                          .cls-1 {
                            fill-rule: evenodd;
                          }
                        </style>
                      </defs>
                      <g id="ic-actions-star" transform="translate(-1.959 -2.435)">
                        <path id="Caminho_508" data-name="Caminho 508" class="cls-1" d="M11,3.19a1.08,1.08,0,0,1,2.06,0l1.86,5.72h6a1.09,1.09,0,0,1,.64,2l-4.87,3.53,1.86,5.73a1.08,1.08,0,0,1-1.67,1.21L12,17.81,7.13,21.35a1.08,1.08,0,0,1-1.67-1.21l1.86-5.73L2.45,10.88a1.09,1.09,0,0,1,.64-2h6Z"/>
                      </g>
                    </svg>
                  <?php endif; ?>

                <?php endfor; ?>
              </div>
            </div>

          </div>
        </div>

      </div>

      <button class="reset modal__close-btn modal__close-btn--outer display@md js-modal__close js-tab-focus">
        <svg class="icon icon--sm" viewBox="0 0 24 24">
          <title>Close modal window</title>
          <g fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="3" y1="3" x2="21" y2="21" />
            <line x1="21" y1="3" x2="3" y2="21" />
          </g>
        </svg>
      </button>
    </div>
  <?php endif; ?>
<?php endwhile; endif; wp_reset_query( ); ?>
<!-- modal -->

<!-- enviar depoimento -->
<section class="padding-bottom-xxl flex justify-center">
  <button class="btn btn--accent" aria-controls="modal-send-testimonial">
    Enviar depoimento
  </button>
  
  <div class="modal modal--animate-scale flex flex-center bg-contrast-higher bg-opacity-90% padding-md js-modal" id="modal-send-testimonial">
    <div class="modal__content width-100% max-width-xl padding-x-sm max-height-100% overflow-auto bg radius-md shadow-md" role="alertdialog" aria-labelledby="modal-title-1" aria-describedby="modal-description-1">
      
      <div class="padding-y-lg max-width-sm margin-x-auto">
        <h3 class="color-primary font-bold text-50 text-center margin-bottom-xs">
          Envie o seu depoimento
        </h3>
        <?= do_shortcode('[contact-form-7 id="105" title="Depoimento"]'); ?>
      </div>

      
    </div>

    <button class="reset modal__close-btn modal__close-btn--outer display@md js-modal__close js-tab-focus">
      <svg class="icon icon--sm" viewBox="0 0 24 24">
        <title>Close modal window</title>
        <g fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="3" y1="3" x2="21" y2="21" />
          <line x1="21" y1="3" x2="3" y2="21" />
        </g>
      </svg>
    </button>
  </div>

  <!-- feedback depoimento -->
  <button style="display: none;" id="btn-feedback-testimonial" aria-controls="modal-feedback-depoimento"></button>
  <div class="modal modal--animate-scale flex flex-center bg-contrast-higher bg-opacity-90% padding-md js-modal" id="modal-feedback-depoimento">
    <div class="modal__content width-100% max-width-md max-height-100% overflow-auto bg radius-md shadow-md" role="alertdialog" aria-labelledby="modal-title-1" aria-describedby="modal-description-1">

      <div>
        <div class="flex-column justify-center items-center padding-y-xxl">
          <h4 class="color-primary text-70 text-center margin-bottom-xxs">
            Enviado!
          </h4>
          <p class="color-primary font-bold color-opacity-40% text-base text-center margin-bottom-xl">
            Obrigada pelo seu depoimento!
            <img src="<?php midiaSrc('emoji.svg') ?>" alt="Emoji">
          </p>
      
          <!-- <div class="flex justify-center">
            <a href="<?= esc_url(home_url('/servicos')) ?>" class="btn btn--primary btn--md">
              Ver seguros
            </a>
          </div>  -->
          <div class="flex justify-center">
            <button class="js-modal__close js-tab-focus btn btn--primary btn--md">
              Voltar
            </button>    
          </div>                   
        
        </div>

      </div>

    </div>

    <button class="reset modal__close-btn modal__close-btn--outer display@md js-modal__close js-tab-focus">
      <svg class="icon icon--sm" viewBox="0 0 24 24">
      <title>Close modal window</title>
      <g fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="3" y1="3" x2="21" y2="21" />
          <line x1="21" y1="3" x2="3" y2="21" />
      </g>
      </svg>
    </button>
  </div>
  <!-- feedback depoimento -->
  <!-- testimonial validation -->
  <button style="display: none;" id="btn-testimonial-validation-feedback" aria-controls="modal-testimonial-validation"></button>
  <div class="modal modal--animate-scale flex flex-center bg-contrast-higher bg-opacity-90% padding-md js-modal" id="modal-testimonial-validation">
    <div class="modal__content width-100% max-width-md max-height-100% overflow-auto bg radius-md shadow-md" role="alertdialog" aria-labelledby="modal-title-1" aria-describedby="modal-description-1">

      <div>
        <div class="flex-column justify-center items-center padding-y-xxl">
          <h4 class="color-primary text-70 text-center margin-bottom-xxs">
            Ops!
          </h4>
          <p class="color-primary font-bold color-opacity-40% text-base text-center margin-bottom-xl">
            Preencha corretamente todos os campos!
          </p>

          <div class="flex justify-center">
            <button class="js-modal__close js-tab-focus btn btn--primary btn--md">
              Voltar
            </button>    
          </div>                   
        
        </div>

      </div>

    </div>

    <button class="reset modal__close-btn modal__close-btn--outer display@md js-modal__close js-tab-focus">
      <svg class="icon icon--sm" viewBox="0 0 24 24">
      <title>Close modal window</title>
      <g fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="3" y1="3" x2="21" y2="21" />
          <line x1="21" y1="3" x2="3" y2="21" />
      </g>
      </svg>
    </button>
  </div>
  <!-- testimonial validation -->
</section>
