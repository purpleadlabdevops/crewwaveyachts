<section class="about">
  <div class="container">
    <div class="about__left">
      <?php if( have_rows('about_adv') ): ?>
      <div class="about__list">
        <?php while( have_rows('about_adv') ): the_row(); ?>
        <div class="about__item">
          <?php the_sub_field('icon'); ?>
          <div>
            <span><?php the_sub_field('number'); ?></span>
            <?php the_sub_field('text'); ?>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
      <?php endif; ?>
      <div class="about__row">
        <div class="about__info">
          <?php the_field('about_text'); ?>
          <button class="goToForm">Відправити заявку</button>
        </div>
        <img src="<?php the_field('about_img_1'); ?>" alt="<?php echo get_bloginfo('name'); ?>">
      </div>
    </div>
    <div class="about__right">
      <img src="<?php the_field('about_img_2'); ?>" alt="<?php echo get_bloginfo('name'); ?>">
    </div>


  </div>
</section>