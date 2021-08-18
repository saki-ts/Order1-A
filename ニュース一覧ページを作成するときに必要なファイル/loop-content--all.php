<article class="archive__card">
  <a href="<?php the_permalink(); ?>" class="archive__link">
    <div class="archive__img_wrap">
    <?php 
    // 画像を追加
    if( has_post_thumbnail() ): ?>
      <?php the_post_thumbnail('medium'); ?>
    <?php else: ?>
      <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.gif" alt="no-img"/>
    <?php endif; ?>
    <?php 
    // カテゴリ
    if (!is_category() && has_category()): ?>
      <span class="cat-data">
      <?php
        $postcat = get_the_category();
        echo $postcat[0]->name;
      ?>
      </span>
    <?php endif; ?>
    </div><!--end img-warp-->
    <div class="archive__cont">
      <!--投稿日を表示-->
      <time class="archive__date" datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
        <?php echo get_the_date(); ?>
      </time>
      <!--タイトル(本文)-->
      <p class="archive__text"><?php the_title(); ?></p>
      <!--抜粋-->
      <div class="archive__text">
        <?php the_excerpt(); ?>
      </div>
    </div><!--end text-->
  </a>
</article>