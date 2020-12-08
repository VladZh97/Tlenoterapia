<?php
/* Template Name: Terapia */
?>

<?php get_header(); ?>
<main class="therapy__main">
  <section class="therapy">
    <div class="therapy__inner">
      <div class="therapy__container container">
        <h1 class="therapy__title" data-aos="fade-right" data-aos-duration="1000"><?php echo the_title(); ?></h1>
        <div class="therapy__text" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"><?php echo the_content(); ?></div>

        <div class="about__timeline-wrap">
          <div class="about__timeline-wrap-inner">
          <div class="container">

                  <h3 class="about__item-title timeline__title" data-aos="fade-right" data-aos-duration="1000"><?php the_field('about__timeline-title')?></h3>
            <div class="timeline">

                  <?php if( have_rows('timeline__items') ): ?>
                  <ul class="timeline__items">
                  <?php while( have_rows('timeline__items') ): the_row(); 

                      ?>
                      <li class="timeline__item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                      <div class='time'>
                          <span><?php the_sub_field('year')?></span>
                        </div>
                        <div class="content">
                          <p>
                            <?php the_sub_field('timeline__text')?>
                          </p>
                        </div>
                      </li>
                      <?php endwhile; ?>
                    </ul>
                  <?php endif; ?>
            </div>
                  </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php
get_footer();