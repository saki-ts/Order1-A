<?php
  $themePath = get_template_directory_uri().'/dist/';
  $postId = get_the_ID();
  $pageClass = get_post_meta($postId, 'page-class', true);
?>
<!DOCTYPE html>
<html lang="ja">
<?php get_template_part( 'parts/head' ); ?>
<body class='<?php echo $pageClass; ?>'>
  <div class="allwrapper">
    <header class="h js-sticky">
      <div class="h_container">
        <p class="h_logo">
          the_custom_logo();
          if (!has_custom_logo()) {
            bloginfo('name');
          }
        </p>
        <button class="h_nav__hamburger sp_show"><span class="h_nav__hamburger_icon"></span></button>
        <nav class="h_nav">
          <?php wp_nav_menu(
            array (
              //カスタムメニュー名
              'theme_location' => 'h_nav',
              //コンテナを表示しない
              'container' => false,
              //カスタムメニューを設定しない際に固定ページでメニューを作成しない
              'fallback_cb' => false,
              // 出力される要素の中のulにメニュークラスを付ける
              'menu_class' => 'h_nav__list',
            )
          ); ?>
          <ul class="h_nav__list">
            <li class="h_nav__item"><a class="h_nav__link" href="<?php bloginfo('url');?>#service"><span class="h_nav__text">事業内容</span></a></li>
            <li class="h_nav__item"><a class="h_nav__link" href="<?php bloginfo('url');?>#news"><span class="h_nav__text">ニュース</span></a></li>
            <li class="h_nav__item"><a class="h_nav__link" href="<?php bloginfo('url');?>/about"><span class="h_nav__text">会社情報</span></a></li>
            <li class="h_nav__item"><a class="h_nav__link" href="<?php bloginfo('url');?>/contact"><span class="h_nav__text"> お問い合わせ</span></a></li>
          </ul>
        </nav>
      </div>
    </header>

    <main class="m">