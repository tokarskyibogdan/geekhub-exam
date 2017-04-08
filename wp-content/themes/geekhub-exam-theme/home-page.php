<?php /** Template Name: Homepage Themplate */ get_header(); ?>
<div id="content" class="main-content-inner col-sm-12 col-md-8">
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'content', 'page' ); ?>
<?php endwhile; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>