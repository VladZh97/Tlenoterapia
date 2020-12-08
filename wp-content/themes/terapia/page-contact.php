<?php /*Template Name: Kontakt*/ 
get_header(); ?>
<main class="contact-page">
  <section class="contact">
    <div class="contact__inner">
      <div class="contact__container-page">
        <div class="container">


        <h1 class="contact__title" data-aos="fade-right" data-aos-duration="1000"><?php echo the_title(); ?></h1>
        <div class="contact__items row">
          <div class="contact__left col-md-6">
            <div class="contact__left-top" data-aos="fade-up" data-aos-duration="1000">
              <div class="contact__left-cont">
              <h2 class="contact-footer__title"><?php the_field('cont__title-first', 'option')?></h2>
              <p class="contact-footer__adress"><?php the_field('contact-footer__adress', 'option')?></p>
            </div>

              <div class="contact__left-cont" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
              <h2 class="contact-footer__title"><?php the_field('cont__title-second', 'option')?></h2>
              <p class="contact-footer__tel"><a href="tel:<?=get_field('contact-tel');?>"><?php the_field('contact-tel', 'option'); ?></a></p>
              <p class="contact-footer__mail"><a href="mailto:<?=get_field('contact-mail');?>"><?php the_field('contact-mail', 'option'); ?></a></p>
            </div>

              <div class="contact__left-cont"  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
              <h2 class="contact-footer__title"><?php the_field('cont__title-third', 'option')?></h2>
              <p class="contact-footer__text"><?php the_field('cont__text', 'option')?></p>
            </div>



              <div class="contact-footer__icons"  data-aos="fade-up" data-aos-duration="1000">
                <a href="<?php the_field('face', 'option')?>" class="contact-footer__face"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.png" alt=""></a>
                <a href="<?php the_field('insta', 'option')?>" class="contact-footer__insta"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.png" alt=""></a>
              </div>
            </div> 
          </div>


          <div class="contact__right col-md-6" data-aos-duration="1000" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300">
            <h3 class="contact-form__title"><?php the_field('contact-form__title')?></h3>
            <div class="contact-form__main">
              <?php echo do_shortcode('[contact-form-7 id="25" title="Formularz"]')?>

            </div>
          </div>
        </div>



        </div>
      </div>
      <div id="map"></div>
    </div>
  </section>

</main>
<?php
get_footer();
