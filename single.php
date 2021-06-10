<?php
/*
 * Template Name: 記事詳細ページ
 */
get_header();
?>
  <?php if(have_posts()): while(have_posts()):the_post(); ?>
  <section class="about__header bg_white">
    <header class="container wrapper">
      <h1 class="branch_main_title">News<span class="branch_main_title--sub">ニュース</span></h1>
    </header>
  </section>
  <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <?php endwhile; // End the loop.
  endif;
  ?>
<?php get_footer(); ?>
