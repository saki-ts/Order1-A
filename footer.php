<?php
  $themePath = get_template_directory_uri().'/dist/';
?>
</div>
</main>

<!-- footer -->
<footer class="f">
  <div class="container wrapper f_container">
    <div class="f_head">
      <div class="f_head__info">
        <div class="f_head__logo"><img class="f_head__logo_image" src="<?php echo $themePath; ?>image/logo.jpg" alt="LOGO(画像)"></div>
        <div class="f_address">
          <p class="f_address__text"><span class="f_address__text--postal_code">〒123-4567</span>東京都渋谷区渋谷1-1-1オーダービル1F</p><a class="f_address__link" href="#">Google map</a>
        </div>
      </div>
      <nav class="f_nav">
        <ul class="f_nav__list">
          <li class="f_nav__item"><a class="f_nav__link" href="<?php bloginfo('url');?>#service"><span class="f_nav__text">事業内容</span></a></li>
          <li class="f_nav__item"><a class="f_nav__link" href="<?php bloginfo('url');?>#news"><span class="f_nav__text">ニュース</span></a></li>
          <li class="f_nav__item"><a class="f_nav__link" href="<?php bloginfo('url');?>/about"><span class="f_nav__text">会社情報</span></a></li>
          <li class="f_nav__item"><a class="f_nav__link" href="<?php bloginfo('url');?>/contact"><span class="f_nav__text">お問い合わせ</span></a></li>
        </ul>
      </nav>
    </div>
    <div class="f_bottom"><small class="f_copy">© <?php echo date('Y');?> <?php bloginfo('name');?> All Rights Reserved.</small>
      <p class="f_privacy"><a class="f_privacy__link" href="<?php bloginfo('url');?>/privacy">プライバシーポリシー</a></p>
    </div>
  </div>
</footer>
<!-- / footer -->
<?php
  get_template_part( 'parts/scripts' );
  wp_footer();
?>

</body>

</html>