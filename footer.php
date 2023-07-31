	
	<footer id="footer" class="bg-primary padding-y-md position-relative">

		<div class="container max-width-xxl flex justify-end">
			<a href="#top" class="text-16 color-white color-opacity-70% font-bold flex items-center hover-op">
				<span class="margin-right-sm">
					Voltar para o topo
				</span>
				<img src="<?php midiaSrc('top-arrow.svg'); ?>" alt="Seta para o topo">
			</a>
		</div>

		<div class="container max-width-xl padding-top-lg">
			<div class="grid gap-md">

				<div class="col-10@lg">
					<div class="grid">

						<div class="col-3@md color-white margin-left-xl@sm margin-bottom-xl margin-bottom-0@md text-footer-contato">
							<h3 class="font-bold text-18 margin-bottom-md color-white color-opacity-70% line-height-lg">
								Contato
							</h3>
	
							<a href="tel:+54-99971-0704" class="hover-op text-18 color-white flex items-center font-bold margin-bottom-xs line-height-lg">
							<img class="hight-md margin-right-xs" src="<?php midiaSrc('cell-icon.svg') ?>" alt="Telefone Telbit">
								(19) 99965-6872
							</a>

							<a href="e-mail:contato@telbit.com.br" class="hover-op text-18 color-white flex items-center font-bold margin-bottom-xs line-height-lg">
								<img class="hight-md margin-right-xs" src="<?php midiaSrc('mail-icon.svg') ?>" alt="E-mail Telbit">
								leotozoni@leonardotozoni.com
							</a>
	
							<div class="flex items-center footer__sociais padding-top-xs">
								<a href="https://www.facebook.com/leonardoluis.tozoni" target="_blank" rel="noopener noreferrer">
									<img src="<?php midiaSrc('facebook.svg') ?>" alt="Facebook">
								</a>
	
								<a href="https://www.instagram.com/leo_tozoni" target="_blank" rel="noopener noreferrer">
									<img src="<?php midiaSrc('instagram.svg') ?>" alt="Instagram">
								</a>
	
								<a href="https://www.linkedin.com/in/leonardo-tozoni/" target="_blank" rel="noopener noreferrer">
									<img src="<?php midiaSrc('linkedin.svg') ?>" alt="Linkedin">
								</a>
							</div>
						</div>
	
						<div class="col-3@md margin-left-xl@sm margin-bottom-xl margin-bottom-0@md">
							<h3 class="font-bold text-18 margin-bottom-md color-white color-opacity-70% line-height-lg">
								Localização
							</h3>
	
							<h4 class="font-bold text-18 color-white line-height-lg">
								Rua Márcio Frezzatto, 411 - Sehac | Mogi Mirim - SP 
							</h4>
	
							<p class="text-18 color-white line-height-lg margin-bottom-lg">
								13802-666
							</p>
	
							<button aria-controls="modal-map" class="btn btn--light btn--lg z-index-1">
								<?php get_template_part('template-parts/map'); ?>
								Ver no mapa
							</button>
	
						</div>
						<div class="col-3@md margin-left-xl@sm flex justify-center@lg justify-start margin-bottom-xl margin-bottom-0@md">
							<div>
								<h3 class="font-bold text-18 margin-bottom-md color-white color-opacity-70% line-height-lg">
									Acesso Rápido
								</h3>
			
								<nav class="color-white">
									<?php
										wp_nav_menu(
												array(
														'theme_location' => 'footer-menu',
														'depth'          => 2,
														'container'      => false,
														'menu_class'     => 'footer__navbar',
												)
										);
									?>
								</nav>
							</div>
						</div>

						<!-- <div class="col-2@lg flex justify-start@lg justify-center items-start margin-bottom-xl margin-bottom-0@lg">
							<p>
								Especialistas em segurança da <br> informação, infraestrutura de TI <br> e redes avançadas.
							</p> -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal -->

		<div class="modal modal--animate-scale flex flex-center bg-contrast-higher bg-opacity-90% padding-md js-modal" id="modal-map" style="z-index: 1000;">
			<div class="modal__content width-37% max-width-md max-height-100% overflow-auto bg radius-md shadow-md" role="alertdialog" aria-labelledby="modal-title-1" aria-describedby="modal-description-1">
				<header class="bg-contrast-lower padding-y-sm padding-x-md flex items-center justify-between">
					<h4 class="text-truncate color-primary" id="modal-title-1">
						Mapa
					</h4>

					<button class="reset modal__close-btn modal__close-btn--inner hide@md js-modal__close js-tab-focus">
						<svg class="icon" viewBox="0 0 20 20">
							<title>Close modal window</title>
							<g fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								<line x1="3" y1="3" x2="17" y2="17" />
								<line x1="17" y1="3" x2="3" y2="17" />
							</g>
						</svg>
					</button>
				</header>

				<div class="padding-y-sm padding-x-md">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3687.728118183353!2d-46.9333175!3d-22.4392568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8f90fb5044d87%3A0xb6630c08e594a684!2sRua%20M%C3%A1rcio%20Frezzato%2C%20411%20-%20Conj.%20Res.%20Anselmo%20Lopes%20Bueno%2C%20Mogi%20Mirim%20-%20SP%2C%2013802-666!5e0!3m2!1spt-BR!2sbr!4v1681182326721!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
		<!-- Modal -->
		<!-- WhatsApp -->
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
				margin-top:22px;
			}
		</style> -->
		<a href="https://api.whatsapp.com/send?phone=5519999656872" class="float" target="_blank">
			<i class="fa fa-whatsapp my-float"></i>
		</a>

	</footer>
	
	<?php wp_footer(); ?>
	<!-- jquery -->
	<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

	<script src="<?php echo esc_url(get_template_directory_uri()); ?>/main/assets/js/util.js"></script> <!-- JS utility classes of the framework -->
	<!-- your JS script goes here -->
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

	<script>
		// Header scroll
		const Header = document.querySelector('#header');
		const Logo = document.querySelector('.header__logo img');

		if(scrollY > 15){
			Header.classList.add('scroll');
			Logo.setAttribute('src', '<?php midiaSrc('logo-oficial.png'); ?>');
		}

		document.addEventListener('scroll', () => {
			if(scrollY > 15){
				Header.classList.add('scroll');
				Logo.setAttribute('src', '<?php midiaSrc('logo-oficial.png'); ?>');
			}else{
				Header.classList.remove('scroll');
				Logo.setAttribute('src', '<?php midiaSrc('logo-oficial.png'); ?>');
			}
		})
	</script>


	<script>
		// premios carousel
		$('.premios-carousel').slick({
			infinite: false,
			slidesToShow: 5,
			slidesToScroll: 4,
			draggable: false,
			responsive: [
				{
					breakpoint: 1400,
					settings: {
						slidesToShow: 4,
						slidesToScroll: 3,
						infinite: false,
						dots: false
					}
				},
				{
					breakpoint: 900,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 2,
						infinite: false,
						dots: false
					}
				},
				{
					breakpoint: 680,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1,
						infinite: false,
						dots: false,
						draggable: true,
					}
				},
				{
					breakpoint: 512,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						infinite: false,
						dots: false,
						draggable: true,
					}
				},
			]
		});

		// testimonials carousel
		$('.carousel-testimonials').slick({
			infinite: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			draggable: true,
		});
	</script>
	<script>
		var swiper = new Swiper(".js-slider-home", {
      slidesPerView: 3,
      spaceBetween: 10,
      centeredSlides: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
	</script>

<!-- Scroll botão de contato  -->
	<script>
		document.getElementById("botao-scroll").addEventListener("click", function() {
		document.getElementById("scroll-home").scrollIntoView();
	});
	</script>

	<script>
		document.getElementById("botao-scroll-header").addEventListener("click", function() {
		document.getElementById("scroll-home").scrollIntoView();
	});
	</script>

</body>
</html>