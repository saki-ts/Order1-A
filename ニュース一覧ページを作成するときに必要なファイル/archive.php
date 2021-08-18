<?php
/*
 * Template Name: アーカイブ（一覧）
 */
get_header();
?>
<section class="bg_white archive__header">
  <header class="container wrapper">
    <h1 class="branch_main_title">News<span class="branch_main_title--sub">ニュース</span></h1>
  </header>
</section>
<section class="archive__topics">
  <div class="container wrapper">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php get_template_part('loop-content'); ?>
  <?php endwhile; ?>
  <?php 
  $pagination = get_the_posts_pagination();
  the_posts_pagination( array(
    'prev_text' => __( '<', 'textdomain' ),
    'next_text' => __( '>', 'textdomain' ),
    'class'     => 'archive__pager',
  )); ?>
  <?php else : ?>
    <p>まだ投稿された記事がないようです。</p>
  </div>
</section>
  <?php endif; ?>
<?php get_footer(); ?>
