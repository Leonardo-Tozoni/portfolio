
<section class="overflow-hidden padding-bottom-xxl margin-bottom-md position-relative">

  <div class="container max-width-xl">
    <p id="formulario" class="bg-primary bg-opacity-10% font-secondary fit-content radius-full color-primary-lighter text-sm font-medium padding-y-xxs padding-x-lg margin-bottom-sm margin-x-auto">
      Contato
    </p>

    <h2 id="scroll-home" class="color-primary texto-form-resp font-bold text-65 text-center">
      Tem alguma dúvida ou <br class="display@sm">
      interesse em nossos serviços?
    </h2>

    <p class="margin-top-sm text-p-form color-primary text-md text-center">
      Envie uma mensagem para nossa equipe e nós entraremos em contato com você.
    </p>

    <div class="container <?= wp_is_mobile() ? 'correct' : ''; ?> max-width-sm margin-top-xl margin-bottom-md">
      <?= do_shortcode('[contact-form-7 id="35" title="Cotação"]'); ?>
    </div>
  </div>
</section>