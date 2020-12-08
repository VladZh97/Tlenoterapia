<?php
/* Template Name: Zastosowanie */
?>

<?php get_header(); ?>
<main class="use__main">
  <section class="use">
    <div class="use__inner">
      <div class="use__container-main container">
        <h1 class="use__title" data-aos="fade-right" data-aos-duration="1000"><?php echo the_title();?></h1>
          <div class="use__nav" data-aos="fade-up" data-aos-duration="1000">
            <?php if( have_rows('use__nav') ): ?>
              <?php while( have_rows('use__nav') ): the_row(); ?>
                  <a href="#<?php the_sub_field("use__nav-link")?>" class="use__nav-item"><?php the_sub_field('use__nav-text')?></a>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        <div class="use__row">
          <?php if( have_rows('use__list') ): ?>
            <?php while( have_rows('use__list') ): the_row(); ?>
            <div class="use__container row">
            <div class="use__id" id="<?php the_sub_field('use__id')?>"></div>
              <div class="use__image col-md-6" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1500">
                <img src="<?php the_sub_field('use__image')?>" alt="" class="use__img">
              </div>
              <div class="use__description col-md-6" data-aos="fade-up" data-aos-duration="1000">
                <h3 class="use__prob"><?php the_sub_field('use__prob')?></h3>
                <h2 class="use__des-title"><?php the_sub_field('use__des-title')?></h2>
                <div class="use__text"><?php the_sub_field('use__text')?></div>
                <a href="<?php the_field('call__link', 'option')?>" class="use__call-link"><?php the_field('call__text', 'option')?></a>
              </div>
            </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

</main>
<?php
get_footer();