<?php

// ************************************************
//  カスタムロゴ
// ************************************************

// カスタムロゴ有効化設定
add_theme_support('custom-logo');

// カスタムロゴクラス名設定
add_filter( 'get_custom_logo', 'change_custom_logo_class' );

function change_custom_logo_class( $html ) {
  $html = str_replace( 'custom-logo', 'h_logo__img', $html );
  $html = str_replace( 'custom-logo-link', 'h_logo__link', $html );
  return $html;
}

// // ************************************************
// //  ナビゲーション
// // ************************************************
// add_action( 'after_setup_theme', 'register_order1a_menus' );

// //ナビゲーションを登録する
// function register_order1a_menus() {
//   register_nav_menus( array(
//     //この中にカスタムメニューを定義 '場所' => '説明'
//     'header' => 'ヘッダーナビゲーション',
//     'footer' => 'フッターナビゲーション'
//   ));
// }