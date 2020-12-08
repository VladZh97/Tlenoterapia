<?php
/*
*
* Template Name: Strona glowna
*
*/
?>

<?php get_header(); ?>
<main class="front">


<section class="slider">
<!-- <div class="slider__bg"></div> -->

  <?php if( have_rows('slide') ): ?>
    <ul class="slide owl-carousel">
      <?php while( have_rows('slide') ): the_row(); 
                ?>
        <li class="slide__item" style="background-image: url(<?php the_sub_field('slide__image')?>)">
          <div class="container">
            <div class="slide__container">

              <h1 class="slide__title" data-aos="fade-up" data-aos-duration="1000">
                <?php the_sub_field('slide__title')?>
              </h1>
              <p class="slide__subtitle" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <?php the_sub_field('slide__subtitle')?>
              </p>
              <p class="slide__des" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500"><?php the_sub_field('slide__des')?></p>

              <button class="slide__btn btn" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
                <a href="<?php the_sub_field('slide-btn-link')?>" class="btn-link">
                  <?php the_sub_field('slide__btn-more');?>
                </a>
              </button>
            </div>
                    
          </div>
        </li>
      <?php endwhile; ?>
    </ul>
  <?php endif; ?>
</section>


<!-- ABOUT MAIN PAGE SECTION -->
<section class="about-page">
  <div class="container">
    <div class="about-page__inner">
      <h2 class="about-page__title section__title" data-aos="fade-right" data-aos-duration="1000">
        <?php the_field('about-page__title')?>
      </h2>

      <div class="about-page__content row">
        <div class="about-page__text col-md-6">
          <div class="about-page__des">
            <?php the_field('about-page__des');?>
          </div>
          <button class="about-page__btn btn">
            <a href="<?php the_field('about-btn-link')?>" class="btn-link">
            <?php the_field('about-page__btn')?>
            </a>
          </button>
        </div>
        
        <div class="about-page__image col-md-6">
          <img src="<?php the_field('about-page__image')?>" alt="O Nas">
        </div>
      </div>
    </div>
  </div>
</section>


<!-- NEWS MAIN PAGE SECTION -->
<section class="news-page">
  <div class="container">
    <div class="news-page__inner">
      <h2 class="news-page__title section__title" data-aos="fade-right" data-aos-duration="1000">
      <?php the_field('news-page__title')?>
      </h2>

      <div class="news-page__contener">
        <?php if( have_rows('news-page__content') ): ?>
          <ul id="news-page__content" class="news-page__content owl-carousel">
          <?php while( have_rows('news-page__content') ): the_row(); 
              ?>
              <li class="news-page__item">
              <div class="news-page__item-image">
                  <img src="<?php the_sub_field('news-page__item-image')?>" alt="">
                </div>
                <h3 class="news-page__item-title">
                  <?php the_sub_field('news__item-title')?>
                </h3>

              </li>
          <?php endwhile; ?>
          </ul>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>


<!-- SPECIALIZATIONS MAIN PAGE SECTION -->
<section class="spec-page">
  <div class="container">
    <div class="spec-page__inner">
      <h2 class="spec-page__title section__title" data-aos="fade-right" data-aos-duration="1000">
      <?php the_field('spec-page__title')?>
      </h2>

      <div class="spec-page__contener">
        <?php if( have_rows('spec-page__content') ): ?>
          <ul class="spec-page__content" data-aos="fade-up" data-aos-duration="1000"  data-aos-delay="300">
          <?php while( have_rows('spec-page__content') ): the_row(); 
              ?>
              <li class="spec-page__item">
              <div class="spec-page__item-image">
                  <img src="<?php the_sub_field('spec-page__item-image')?>" alt="">
                </div>
                <h3 class="spec-page__item-title">
                  <?php the_sub_field('spec__item-title')?>
                </h3>
              </li>
          <?php endwhile; ?>
          </ul>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>



<section class="faq">
    <div class="container">
      <div class="faq__inner">
      <h2 class="faq__title"  data-aos="fade-up" data-aos-duration="1000"><?php the_field("faq__title")?></h2>
  <?php if( have_rows('faq__items') ): ?>
    <ul class="faq__items">
    <?php while( have_rows('faq__items') ): the_row(); 

        ?>
        <li class="faq__item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
        <div class="accordion">
        <div class="accordion-item">
          <div class="accordion-trigger"><h3 class="accordion-trigger-title"><?php the_sub_field('accordion-trigger')?></h3><i class="fas fa-chevron-right"></i></div>
          <div class="accordion-collapse"><?php the_sub_field('accordion-collapse')?></div>
        </div>
        </li>
      <?php endwhile; ?>
      </ul>
  <?php endif; ?>

      </div>
    </div>
  </section>


</main>
<?php
get_footer();
