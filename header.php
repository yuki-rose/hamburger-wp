<!DOCTYPE html>
<html lang="<?php language_attributes(); //言語設定を自動的に出力 ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="discription" content="<?php bloginfo( 'description' ); //管理画面の設定 ＞ 一般 にある「キャッチフレーズ」を取得して表示 ?>">
    <?php wp_head(); //WordPressのテーマに含める関数,</head>の前に必ず入れる ?>
</head>

<body <?php body_class(); //ページごとに自動的にタグが追加される,WordPressがクラス名を付けてくれる?>>
    <div class="body-wrapper">
    <header class="l-header">
        <div class="p-menu">
            <button class="p-menu__btn js-menu__btn">
                <?php wp_nav_menu( array( 'theme_location' => 'topnav' )); //管理画面の外観 ＞ メニュー を表示 ?>
            </button>
        </div>
        <h1 class="l-header__ttl"><?php bloginfo( 'name' ); //管理画面の設定 ＞ 一般 にある「サイトのタイトル」を取得して表示 ?></h1>
        <?php get_template_part( 'parts/searchform' ); //検索フォームを読み込む ?>
    </header>