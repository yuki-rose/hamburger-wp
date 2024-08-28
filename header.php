<!DOCTYPE html>
<html lang="<?php language_attributes(); //言語設定を自動的に出力 ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="discription" content="<?php bloginfo( 'description' ); //管理画面の設定 ＞ 一般 にある「キャッチフレーズ」を取得して表示 ?>">
    <?php wp_head(); //WordPressのテーマに含める関数,</head>の前に必ず入れる ?>
</head>

<body <?php body_class(); //ページごとに自動的にタグが追加される,WordPressがクラス名を付けてくれる?>>
<?php if ( function_exists( 'wp_body_open' ) ) {
		    wp_body_open();
	    } //bodyが開いた後に実行する関数があれば実行する?>
    <div class="body-wrapper">
        <div class="l-contens_wrapper">
            <div class="l-main_contents">
                <header class="l-header">
                    <div class="p-menu">
                        <button class="p-menu__btn js-menu__btn">
                            Menu
                        </button>
                    </div>
                    <a class="l-header_link" href="<?php echo esc_url(home_url('/')); ?>">
                        <h1 class="l-header__ttl"><?php bloginfo( 'name' ); //管理画面の設定 ＞ 一般 にある「サイトのタイトル」を取得して表示 ?></h1>
                    </a>
                    <?php get_template_part( 'parts/searchform' ); //検索フォームを読み込む ?>
                </header>