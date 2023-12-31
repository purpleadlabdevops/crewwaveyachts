<header class="header">
  <div class="container">
    <a href="<?php echo home_url(); ?>" class="header__logo">
      <img src="<?php the_field('logo', 'options'); ?>" alt="<?php echo get_bloginfo('name'); ?>">
    </a>
    <button class="header__burger">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <?php wp_nav_menu( [ 'menu' => 'header' ] ); ?>
    <button class="header__btn goToForm">
      Відправити заявку
      <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
    </button>
  </div>
</header>