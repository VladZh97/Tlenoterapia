<?php
/* Template Name: Cennik */
?>

<?php get_header(); ?>
<main class="price__main">
  <section class="price">
    <div class="price__container container">
      <h1 class="price__title" data-aos="fade-right" data-aos-duration="1000"><?php echo the_title();?></h1>
      <div class="price__promo" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
        <div class="price__promo-text"><?php the_field('promo')?></div>
      </div>
      <div class="price__table">
        <div class="price__list-container" data-aos-duration="1000" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300">
        <?php if( have_rows('price__table') ): ?>
          <?php while( have_rows('price__table') ): the_row(); ?>
          <div class="price__list">
            <div class="price__left">
              <p class="price__name"><?php the_sub_field("price__name")?></p>
            </div>
            <div class="price__right">
              <p class="price__time"><?php the_sub_field('price__time')?></p>
              <p class="price__value"><?php the_sub_field('price__value')?></p>
              <p class="price__save"><?php the_sub_field('price__save')?></p>
            </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
      </div>
      <div class="price__contact">
      <a href="<?php the_field('price__pay-link', 'option')?>" class="use__call-link"><?php the_field('price__pay', 'option')?></a>
      </div>
    </div>
  </section>
</main>
<?php
get_footer();