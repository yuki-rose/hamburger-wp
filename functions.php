<?php
    //テーマサポート
    function custom_theme_support() {
        add_theme_support( 'html5', array( //以下にHTML5のマークアップを適用
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script', //HTML5で不要な属性を出力しないようにする
            'style', //HTML5で不要な属性を出力しないようにする
        ));
        register_nav_menus( array( //メニュー機能の追加
            'topnav' => esc_html__( 'top navigation', 'Hamburger' ), //ローケーション名を登録
            'sidenav' => esc_html__( 'side navigation', 'Hamburger' ),
            'footernav' => esc_html__( 'footer navigation', 'Hamburger' ),
        ));
        add_theme_support( 'title-tag' ); //管理画面からタイトルタグの登録可能に
        add_theme_support( 'post-thumbnails' ); //アイキャッチ画像の有効化
    }
    add_action( 'after_setup_theme', 'custom_theme_support' );


    //スタイルシート,JavaScript読み込み
    function hamburger_script() {
        $locale = get_locale(); //ロケール情報(言語情報)取得
        $locale = apply_filters( 'theme_locale', $locale, 'hamburger' ); //取得した言語情報をjaやenのようなキーワードに変換
        if ( $locale == 'ja' ) { //日本語の場合は
            wp_enqueue_style( 'mplus1p', 'https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@100;300;400;700&display=swap', array() ); //日本語用GoogleFontsを読み込み
        }
        wp_enqueue_style( 'roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap', array() ); //GoogleFontsを読み込み
        wp_enqueue_style( 'resscss', get_theme_file_uri( '/css/ress.css' ), array(), '1.0.0' ); //スタイルシートの読み込み
        wp_enqueue_style( 'style', get_theme_file_uri('/style.css' ), array(), '1.0.0' ); //スタイルシートの読み込み
        wp_enqueue_script( 'jquery', get_theme_file_uri('/js/jquery-3.7.1.min.js' ), array(), true ); //jQuery本体読み込み
        wp_enqueue_script( 'mainjs', get_theme_file_uri( '/js/main.js' ), array( 'jquery' ), true ); //JavaScript読み込み
        wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/811b940674.js', array()); //Fontawesomeの読み込み
        //Fontawesomeのタグを書き換え
        function custom_script_loader_tag($tag, $handle) {
            if ($handle !== 'fontawesome') { //ハンドル名がfontawesomeなら
                return $tag;
            }
            return str_replace('></script>', 'crossorigin="anonymous"></script>', $tag); //文字列を置き換える
        }
        add_filter('script_loader_tag', 'custom_script_loader_tag', 10, 2); //script_loader_tagは<script>タグの変更ができるフィルターフック
    }
    add_action( 'wp_enqueue_scripts', 'hamburger_script' ); //wp_enqueue_scriptsはアクションフック

    //タイトル出力
    function hamburger_title( $title ) {
        if ( is_front_page() && is_home() ) { //トップページなら
            $title = get_bloginfo( 'name', 'display' ); //サイトのタイトルを表示、displayはテキストを自動変換する関数
        } elseif ( is_singular() ) { //シングルページなら
            $title = single_post_title( '', false ); 
        }
            return $title;
        }
    add_filter( 'pre_get_document_title', 'hamburger_title' ); 
        /*add_filterは既に定義された内容に変更を加えることができるWordPress関数
        pre_get_document_titleは""以外を返すとその文字列がタイトルとして返される*/
?>
