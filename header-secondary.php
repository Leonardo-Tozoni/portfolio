<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <?php include_once( get_template_directory() . '/core/config-header.php'); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="pre-header" class="width-100%"></div>

<header id="header" class="position-fixed top-0 width-100% secondary">
    <div name="top" class="container max-width-xl height-100%">

        <div class="grid items-center height-100%">
            
                    <div class="col-2@lg col-6">
                        <a class="height-100% header__logo margin-right-md flex items-center" href="<?= esc_url(home_url()); ?>">
                            <img src="<?php midiaSrc('logo-oficial.png'); ?>" alt="Logo Mânica Seguros">
                        </a>
                    </div>
            
                    <div class="col-10@lg col-6 position-relative">
                        <div id="menu-btn">
                            <div class="line-1"></div>
                            <div class="line-2"></div>
                            <div class="line-3"></div>
                        </div>
                        <div id="menu">
                            <div class="menu__logo justify-start container max-width-xl">
                                <a href="<?= esc_url(home_url()); ?>">
                                    <img src="<?php midiaSrc('logo-h-c.svg'); ?>" alt="Logo Mânica Seguros">
                                </a>
                            </div>
                            
                            <div class="flex items-center">
                                <?php
                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'main-menu',
                                            'depth'          => 2,
                                            'container'      => false,
                                            'menu_class'     => 'header__navbar',
                                        )
                                    );
                                ?>
                            </div>
                
                            <div class="item-center flex secondary-div"> 
                                
                                <!-- search modal -->
                                <button id="botao-scroll-header" class="btn-hover-contato btn cot-btn">
                                <a href="https://leonardotozoni.com/social/" class="color-white">
                                        Contato
                                    </a>
                                </button>

                                <div class="flex items-center header__sociais header__show"> 
                                  <a href="https://www.facebook.com/leonardoluis.tozoni" target="_blank" rel="noopener noreferrer">
                                        <?php get_template_part('template-parts/facebook'); ?>
                                    </a>
                    
                                    <a href="https://www.instagram.com/leo_tozoni" target="_blank" rel="noopener noreferrer">
                                        <?php get_template_part('template-parts/instagram'); ?>
                                    </a>
                    
                                    <a href="https://www.linkedin.com/in/leonardo-tozoni/" target="_blank" rel="noopener noreferrer">
                                        <?php get_template_part('template-parts/linkedin'); ?>
                                    </a>
                                </div>
                    
                            </div>

                        </div>
                    </div>

        </div>

    </div>


    <!-- modal pré cotação -->

    <!-- Modal Cotação -->

    <div class="modal modal--animate-scale flex flex-center bg-contrast-higher bg-opacity-90% padding-md js-modal" id="modal-cotacao">
        <div class="modal__content width-100% max-width-lg max-height-100% overflow-auto bg radius-md shadow-md" role="alertdialog" aria-labelledby="modal-title-1" aria-describedby="modal-description-1">

            <div>
                <?= do_shortcode('[contact-form-7 id="36" title="Cotação"]'); ?>
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
    <!-- Modal Cotação -->
</header>
  
