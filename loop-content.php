<article class="archive__card">
  <div class="archive__cont">
    <!--投稿日を表示-->
    <time class="archive__date" datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
      <?php echo get_the_date(); ?>
    </time>
    <!--タイトル(本文)-->
    <p class="archive__text"><?php the_title(); ?></p>
    <!--抜粋-->
    <!-- <div class="archive__text"> -->
      <?php // the_excerpt(); ?>
    <!-- </div> -->
  </div><!--end text-->
</article>