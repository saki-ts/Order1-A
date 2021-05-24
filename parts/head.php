<?php
  $themePath = get_template_directory_uri().'/dist/';
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="キーワード1,キーワード2,キーワード3">
  <meta name="description" content="<?php bloginfo('description');?>">
  <meta name="format-detection" content="telephone=no">
  <?php if(is_front_page()) : ?>
    <title><?php bloginfo('name');?>｜TOP</title>
  <?php elseif(is_page('about')) : ?>
    <title><?php bloginfo('name');?>｜会社情報</title>
  <?php elseif(is_page('contact')) : ?>
    <title><?php bloginfo('name');?>｜お問い合わせ</title>
  <?php elseif(is_page('privacy')) : ?>
    <title><?php bloginfo('name');?>｜プライバシーポリシー</title>
  <?php endif; ?>
  <link rel="canonical" href="<?php bloginfo('url');?>">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap">
  <link rel="stylesheet" href="<?php echo $themePath; ?>css/reset.css">
  <link rel="stylesheet" href="<?php echo $themePath; ?>css/style.css">
  <link rel="shortcut icon" href="<?php echo bloginfo('template_directory'); ?>/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo bloginfo('template_directory'); ?>/apple-touch-icon.png">
  <!-- OGP -->
  <meta property="og:title" content="<?php bloginfo('description');?>">
  <meta property="og:description" content="<?php bloginfo('description');?>">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="ja_JP">
  <meta property="og:url" content="<?php bloginfo('url');?>">
  <meta property="og:image" content="<?php echo bloginfo('template_directory'); ?>/ogp.jpg">
  <meta property="og:image:width" content="1200px">
  <meta property="og:image:height" content="630px">
  <meta property="fb:app_id" content="">
  <!-- / OGP -->
  <?php if(is_page('contact')): ?>
    <script>
    // お問い合わせ iosで拡大防止
    var ua = navigator.userAgent.toLowerCase();
    var isiOS = (ua.indexOf('iphone') > -1) || (ua.indexOf('ipad') > -1);
    if(isiOS) {
      var viewport = document.querySelector('meta[name="viewport"]');
      if(viewport) {
        var viewportContent = viewport.getAttribute('content');
        viewport.setAttribute('content', viewportContent + ', user-scalable=no');
      }
    }
    </script>
  <?php endif;?>
  <?php wp_head(); ?>
</head>