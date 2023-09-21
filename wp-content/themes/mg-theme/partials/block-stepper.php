<section class="stepper">
  <div class="container">
    <h2><?php the_field('stepper_title'); ?></h2>
    <?php if( have_rows('stepper_list') ): ?>
    <div class="stepper__row">
      <?php while( have_rows('stepper_list') ): the_row(); ?>
      <div class="stepper__item">
        <img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title'); ?>">
        <h3><?php the_sub_field('title'); ?></h3>
        <p><?php the_sub_field('text'); ?></p>
      </div>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>
  </div>
</section>