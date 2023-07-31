<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <?php include_once( get_template_directory() . '/core/config-header.php'); ?>
    <?php wp_head(); ?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		.float{
			position:fixed;
			width:60px;
			height:60px;
			bottom:40px;
			right:40px;
			background-color:#25d366;
			color:#FFF;
			border-radius:50px;
			text-align:center;
			box-shadow: 2px 2px 3px #999;
		}

		.my-float{
			margin-top:20px;
		}
	</style>
</head>

<body <?php body_class(); ?>>

<div id="pre-header-2"></div>

<header id="header" class="position-fixed top-0 width-100%">
    <div name="top" class="container max-width-xl height-100%">

        <div class="grid items-center height-100%">
            
                    <div class="col-2@lg col-6">
                        <a class="height-100% header__logo header_img margin-right-md flex items-center" href="<?= esc_url(home_url()); ?>">
                            <img src="<?php midiaSrc('logo-oficial.png'); ?>" alt="Logo Telbit">
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
                                    <img src="<?php midiaSrc('logo-h-c.svg'); ?>" alt="Logo Telbit">
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
                
                            <div class="item-center header__show">
                                <!-- search modal -->
                    
                                <div class="modal modal--search modal--animate-fade flex flex-center padding-md js-modal" id="modal-search">
                                    <div class="modal__content width-100% max-width-sm max-height-100% overflow-auto" role="alertdialog" aria-labelledby="modal-search-title" aria-describedby="">
                                        <form role="search" action="<?= esc_url(home_url('/servicos')) ?>" class="full-screen-search">
                                            <label for="search-input-x" id="modal-search-title" class="sr-only">Search</label>
                                            <input class="reset full-screen-search__input" type="search" name="s" id="search-input-x" placeholder="Buscar...">
                                            <button class="reset full-screen-search__btn">
                                                <svg class="icon" viewBox="0 0 24 24">
                                                <title>Search</title>
                                                <g stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" stroke="currentColor" fill="none" stroke-miterlimit="10">
                                                    <line x1="22" y1="22" x2="15.656" y2="15.656"></line>
                                                    <circle cx="10" cy="10" r="8"></circle>
                                                </g>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                    
                                    <button class="reset modal__close-btn modal__close-btn--outer  js-modal__close js-tab-focus">
                                        <svg class="icon icon--sm" viewBox="0 0 24 24">
                                        <title>Close modal window</title>
                                        <g fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <line x1="3" y1="3" x2="21" y2="21" />
                                            <line x1="21" y1="3" x2="3" y2="21" />
                                        </g>
                                        </svg>
                                    </button>
                                </div>
                                <!-- search modal -->
                                <button id="botao-scroll" class="btn-hover-contato btn cot-btn">
                                <a href="https://leonardotozoni.com/social/" class="color-white">
                                        Contato
                                    </a>
                                </button>
                    
                                <div class="flex items-center header__sociais"> 
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
    <div class="modal modal--animate-scale flex flex-center bg-contrast-higher bg-opacity-90% padding-md js-modal" id="modal-pre-cotacao">
        <div class="modal__content width-100% max-width-md max-height-100% overflow-auto bg radius-md shadow-md" role="alertdialog" aria-labelledby="modal-title-1" aria-describedby="modal-description-1">

            <div>
                <div class="flex-column justify-center items-center padding-y-xl">
                    <p class="text-sm bg-light padding-y-xxs padding-x-xl radius-full margin-x-auto margin-bottom-lg" style="width:fit-content; color: #707070;">
                        Solicitar Cotação
                    </p>
                    <h4 class="color-primary text-70 text-center margin-bottom-xxs">
                        Vamos começar?
                    </h4>
                    <p class="color-primary font-bold color-opacity-40% text-base text-center margin-bottom-xl">
                        Para te atendermos melhor e enviarmos <br class="display@sm">
                        a melhor cotação, precisamos conhecer <br class="display@sm">
                        mais o seu perfil.
                        <img src="<?php midiaSrc('emoji.svg') ?>" alt="Emoji">
                    </p>
                
                    <div class="flex justify-center">
                        <button aria-controls="modal-cotacao" class="btn btn--primary btn--md" id="btn-modal-cotacao">
                            Vamos lá
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
    <!-- modal pré cotação -->

    <!-- Modal Cotação -->

    <div class="modal modal--animate-scale flex flex-center bg-contrast-higher bg-opacity-90% padding-md js-modal" id="modal-cotacao">
        <div class="modal__content width-100% max-width-md max-height-100% overflow-auto bg radius-md shadow-md" role="alertdialog" aria-labelledby="modal-title-1" aria-describedby="modal-description-1">

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
  
