<?php
/*
 * Template Name: Home
 */
get_header(); ?>

<?php get_template_part( 'partials/block', 'banner' ); ?>
<?php get_template_part( 'partials/block', 'about' ); ?>
<?php get_template_part( 'partials/block', 'stepper' ); ?>
<?php get_template_part( 'partials/block', 'slider' ); ?>
<?php get_template_part( 'partials/block', 'news' ); ?>

<?php get_footer(); ?>
