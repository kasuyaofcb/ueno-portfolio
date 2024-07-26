<?php

function my_enqueue_styles() {
  wp_enqueue_style('reset', get_template_directory_uri(). '/css/reset.css', array(),  false, 'all');
  wp_enqueue_style( 'style', get_stylesheet_uri(), array('reset'), 'all' );
  wp_enqueue_script( 'my-script', get_template_directory_uri().'/script.js', array('jquery'), false, true );
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
// * <title>の区切り文字を変更する
//  */
add_filter('document_title_separator', 'my_document_title_separator');
function my_document_title_separator($separator)
{
  $separator = '|';
  return $separator;
}


//  * contact form 7の時は整形機能をOFF



add_filter('wpcf7_autop_or_not', 'my_wpcf7_autop');
function my_wpcf7_autop()
{
  return false;
}

add_theme_support('menus');
register_nav_menus( array(
  'global' => 'グローバルメニュー',
));

function post_has_archive( $args, $post_type){
  if('post' == $post_type){
    $args['rewrite'] = true;
    $args['has_archive'] = 'works';
  }
  return $args;
}
add_filter('register_post_type_args','post_has_archive', 10,2);

function my_static_breadcrumb_adder( $breadcrumb_trail ) {
  // front-page.php には反映させない
  if (!is_front_page() && (is_post_type_archive('post') || get_post_type() === 'post')) {
      // この条件文は、現在のページが front-page.php ではないことを確認し、
      // かつ、投稿アーカイブページまたは個別の投稿ページであることを確認しています。

      // 制作実績のブレッドクラムアイテムを作成
      // 'Works' というタイトルのブレッドクラムアイテムを作成しています。
      // このアイテムは投稿タイプの 'post' に関連付けられ、リンク先は home_url('works/') です。
      $item = new bcn_breadcrumb('Works', null, array('post'), home_url('works/'), null, true);

      // HOMEを一時的に取り除き
      // 現在のブレッドクラムから最後のアイテム (通常は HOME) を一時的に取り除きます。
      $stuck = array_pop( $breadcrumb_trail->breadcrumbs );

      // worksを追加
      // 新しく作成した 'Works' ブレッドクラムアイテムをブレッドクラムのリストに追加します。
      $breadcrumb_trail->breadcrumbs[] = $item;

      // HOMEを戻す
      // 取り除いた HOME ブレッドクラムアイテムをリストの最後に戻します。
      $breadcrumb_trail->breadcrumbs[] = $stuck;
  }
}
// 'bcn_after_fill' アクションフックに 'my_static_breadcrumb_adder' 関数を追加します。
// これにより、Breadcrumb NavXT プラグインがブレッドクラムを生成した後にこの関数が実行されます。
add_action('bcn_after_fill', 'my_static_breadcrumb_adder');
