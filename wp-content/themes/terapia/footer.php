<section class="contact__bottom">
  <div class="container">
    <div class="contact__bottom__inner">

        <div class="contact__bottom__container">
          <div class="contact__bottom__left">
                    <div class="contact__bottom__left-cont">
                    <h2 class="contact__bottom__title"><?php the_field('cont__title-first', 'option')?></h2>
                    <p class="contact__bottom__adress"><?php the_field('contact-footer__adress', 'option')?></p>
                  </div>

                  <div class="contact__bottom__left-cont">
                    <h2 class="contact__bottom__title"><?php the_field('cont__title-second', 'option')?></h2>
                    <p class="contact__bottom__tel"><a href="tel:<?=get_field('contact-tel');?>"><?php the_field('contact-tel', 'option'); ?></a></p>
                    <p class="contact__bottom__mail"><a href="mailto:<?=get_field('contact-mail');?>"><?php the_field('contact-mail', 'option'); ?></a></p>
                    <div class="contact__bottom__icons">
                      <a href="<?php the_field('face', 'option')?>" class="contact__bottom__face"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.png" alt=""></a>
                      <a href="<?php the_field('insta', 'option')?>" class="contact__bottom__insta"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.png" alt=""></a>
                    </div>
                  </div>

                  <div class="contact__bottom__left-cont">
                    <h2 class="contact__bottom__title"><?php the_field('cont__title-third', 'option')?></h2>
                    <p class="contact__bottom__text"><?php the_field('cont__text', 'option')?></p>
                  </div>

            </div> 
          </div>
          <div class="contact__bottom__btn">
            <a href="<?php the_field('call__link', 'option')?>" class="use__call-link"><?php the_field('call__text', 'option')?></a>
          </div>

    </div>
  </div>
</section>

<footer class="footer">
  <div class="footer__container container">
    <p class="footer__copy">
    COPYRIGHT © 2020 TLENOTERAPIA.PL. ALL RIGHTS RESERVED.
  </p>
    <div class="footer__seo">
          <a class="tworzenie_stron_www" title="tworzenie stron www" href="https://origamisoftware.pl" target="_blank">projektowanie stron</a>
          <span class="tworzenie_stron_www2" style="cursor:pointer;" onclick="location.href = 'https://origamisoftware.pl/';">Origami Software</span>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
</body>
</html>