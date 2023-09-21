<section class="subfooter">
  <div class="container">
    <p>© <?php echo (new DateTime)->format("Y"); ?> <?php echo get_bloginfo('name'); ?>. All Rights Reserved</p>
    <img src="<?php the_field('footer_logo', 'options'); ?>" alt="<?php echo get_bloginfo('name'); ?>">
  </div>
</section>