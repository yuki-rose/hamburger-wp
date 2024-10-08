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
            'topnav'    => esc_html__( 'top navigation', 'Hamburger' ), //ローケーション名を登録
            'sidenav'   => esc_html__( 'side navigation', 'Hamburger' ),
            'footernav' => esc_html__( 'footer navigation', 'Hamburger' ),
        ));
        add_theme_support( 'title-tag' ); //管理画面からタイトルタグの登録可能に
        add_theme_support( 'post-thumbnails' ); //アイキャッチ画像の有効化
        add_theme_support( 'automatic-feed-links' ); //投稿とコメントのRSSフィードを有効にする
        add_theme_support( 'wp-block-styles' ); //エディターのスタイルをフロントに反映する
        add_theme_support( 'editor-styles' ); //エディタースタイル(編集画面にスタイルをあてる)を有効にする
        add_theme_support( "responsive-embeds" ); //埋め込みコンテンツのレスポンシブ化
        add_theme_support( "custom-logo"); //カスタムロゴ機能の有効化
        add_theme_support( "custom-header"); //カスタムヘッダーの有効化(キーヴィジュアルの設定)
        add_theme_support( "custom-background"); //カスタム背景の有効化
        add_theme_support( "align-wide" ); //幅広、全幅の有効化
        add_editor_style( array( 'css/hamburger.css', 'css/editor-style.css' ) ); //エディター用スタイルシート読み込み
    }
    add_action( 'after_setup_theme', 'custom_theme_support' );

    //ブロックスタイルの追加
    function custom_block_style() {
        register_block_style(
            'core/image', // スタイルを追加するコアブロックを指定
            array( //スタイルを指定する
                'name' => 'shadow', // スタイルのクラス名
                'label' => '影付き', //エディターに表示されるラベル名
                'inline_style' => '.is-style-shadow {
                                    box-shadow: 10px 5px 5px black;
                                    }', //CSS
            )
        );
    }
    add_action( 'init', 'custom_block_style');

    //ブロックパターン、カテゴリーの追加
    function custom_block_pattern() {
        register_block_pattern(
            'original-block/blue-button', //namespace/title
            array(
                'title' => 'blue-button', //表示されるタイトル
                'categories' => ["original"], //ブロックパターン用のカテゴリー、別途登録
                'description' => "ブルーボタン", //検索支援に使用
                'content' => '<!-- wp:buttons {"metadata":{"patternName":"original-block/blue-button","name":"blue-button"}} -->
                                <div class="wp-block-buttons">
                                    <!-- wp:button {"className":"blue-button"} -->
                                    <div class="wp-block-button blue-button">
                                        <a class="wp-block-button__link wp-element-button">
                                        ボタン
                                        </a>
                                    </div>
                                    <!-- /wp:button -->
                                </div>
                                <!-- /wp:buttons -->', //HTML
            )
        );

        register_block_pattern_category( //ブロックパターンのカテゴリー登録
            'original', // カテゴリーのスラッグ
            array( 'label' => 'オリジナル' ) // 表示名
        );
    }
    add_action( 'init', 'custom_block_pattern');

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
        wp_enqueue_style( 'hamburger', get_theme_file_uri('/css/hamburger.css' ), array(), '1.0.0' ); //スタイルシートの読み込み
        wp_enqueue_style( 'fontawesome', get_theme_file_uri('/css/all.min.css' ), array(), '6.6.0' ); //スタイルシートの読み込み
        wp_enqueue_script( 'jquery', get_theme_file_uri('/js/jquery-3.7.1.min.js' ), array(), true ); //jQuery本体読み込み
        wp_enqueue_script( 'mainjs', get_theme_file_uri( '/js/main.js' ), array( 'jquery' ), true ); //JavaScript読み込み
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

    //アーカイブの表示件数を変更する
    function change_posts_per_page($query) {
        if ( is_admin() || ! $query->is_main_query() )
            return;
     
        if ( $query->is_archive() ) {
            $query->set( 'posts_per_page', 3 );
        }
    }
    add_action( 'pre_get_posts', 'change_posts_per_page' );

    //記事からh2タグを抜き出す
    function get_h2() {
        global $post;
        $content = $post->post_content;

        preg_match('/<h2>.+<\/h2>/u', $content, $matches); //マッチングで<h2>タグを取得する
        $del = array('<h2>', '</h2>');
        $matches = str_replace($del, '', $matches);

        if(empty($matches)){ //<h2>タグがない場合
            '';
        } else { //<h>タグが存在する場合に<h>タグを出力
            $str = implode($matches);
            echo  $str;
        }     
    }

    //記事に抜粋の末尾を変更
    function change_excerpt_more($more) {
        return '...';
    }
    add_filter('excerpt_more', 'change_excerpt_more');

    //アーカイブでの現在のページ数の取得
    function show_page_number() {
        global $wp_query;
 
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        return $paged;  
    }
 
    //アーカイブでの総ページ数の取得
    function max_show_page_number() {
        global $wp_query;
 
        $max_page = $wp_query->max_num_pages;
        return $max_page;  
    }

    //検索は投稿ページのみ検索されるようにする
    function my_post_search($search) {
        if(is_search()) {
            $search .= " AND post_type = 'post'";
        }
        return $search;
    }
    add_filter('posts_search', 'my_post_search');

    //空で検索した場合はトップページにリダイレクト
    function empty_search_redirect( $wp_query ) {
        if ( $wp_query->is_main_query() && $wp_query->is_search && ! $wp_query->is_admin ) {
            $s = $wp_query->get( 's' );
            $s = trim( $s );
            if ( empty( $s ) ) {
                wp_safe_redirect( home_url('/') );
            exit;
            }
        }
    }
    add_action( 'parse_query', 'empty_search_redirect' );

    //カテゴリーに順番を指定するカスタムフィールドを追加
        //ターム追加時にフィールドを表示
    function add_taxonomy_fields($tag) {
        wp_nonce_field(basename(__FILE__), 'term_order_nonce'); //nonceの設定
        $default_nam = '';
        $html = '
            <div class="form-field term-order-wrap">
                <label for="term-order">表示順</label>
                <input type="number" name="term_order" id="term-order" value="' . $default_nam . '">
                <p class="description">数値が小さい順に並び替わります。</p>
            </div>';
        echo $html; //フィールドのhtmlを表示
    }
    add_action('category_add_form_fields', 'add_taxonomy_fields'); //カテゴリー追加時に表示
    add_action('post_tag_add_form_fields', 'add_taxonomy_fields'); //タグ追加時に表示
    
    //ターム編集時にフィールドを表示
    function edit_taxonomy_fields($tag) {
        wp_nonce_field(basename(__FILE__), 'term_order_nonce');
        $value = get_term_meta_text($tag->term_id); //保存した値を取得
    
        if (!$value) { //値がなかった場合
            $value = '';
        }
    
        $value = esc_attr($value); //属性値エスケープ

        $html = '
            <tr class="form-field term-order-wrap">
                <th><label for="term-order">表示順</label></th>
                <td><input type="number" name="term_order" id="term-order" value="' . $value . '">
                    <p class="description">数値が小さい順に並び替わります。</p>
                </td>
            </tr>';
        echo $html; //フィールドを表示
    }
    add_action('category_edit_form_fields', 'edit_taxonomy_fields'); //カテゴリー編集時に追加
    add_action('post_tag_edit_form_fields', 'edit_taxonomy_fields'); //タグ編集時に追加
    
    //保存した値を取得する
    function get_term_meta_text($term_id) {
        $value = get_term_meta($term_id, '_order', true);
        $value = sanitize_text_field($value); //値の文字列を無害化

        return $value;
    }
    
    //フィールドに入力した値を保存する
    function save_taxonomy_fileds($term_id) {
        if (!empty($_POST) && //ポストデータが空ではなく
            check_admin_referer(basename(__FILE__), 'term_order_nonce')) { //nonceを持っていて管理画面から参照されたものである場合
            // 既に保存されている値を取得
            $old_value = get_term_meta_text($term_id);
            // 新しい値を取得
            $new_value = isset($_POST['term_order']) ? //カスタムフィールドに値がセットされているか
                sanitize_text_field($_POST['term_order']) : //セットされていたらサニタイズする
                $new_value = NULL; //セットされていなければ処理しない
        
            if ($new_value === '') { //新しい値と等しい場合
                update_term_meta($term_id, '_order', NULL); //仮データを入力する
            } 
            elseif ($old_value !== $new_value) { //保存されていた値と新しい値が異なる場合
                update_term_meta($term_id, '_order', $new_value); //タームのメタ情報を更新する
            }
        }
    }
    add_action('create_term', 'save_taxonomy_fileds');
    add_action('edited_term', 'save_taxonomy_fileds');

    //カテゴリー一覧に表示順を表示する
    function add_category_columns($columns) { //管理画面の一覧にカラムを追加する
        $index = 4; // 追加位置

        return array_merge(
            array_slice($columns, 0, $index), //追加したい位置まで配列を取得
            array('term_order' => '表示順'), //追加したい配列
            array_slice($columns, $index) 
        );
    }
    add_filter( 'manage_edit-category_columns', 'add_category_columns' );

    function add_category_custom_fields($content, $column_name, $term_id) { //カラムにデータを表示
        if ($column_name == 'term_order') {
            $content = get_term_meta($term_id, '_order', true); //保存した値を取得
        
            if (!$content) { //値がなかった場合
                $content = '-';
            }
            
            $content = esc_attr($content); //属性値エスケープ

        }
        return $content;
    }
    add_action('manage_category_custom_column', 'add_category_custom_fields', 10, 3);

    //追加したカラムにソート機能を付ける
    function add_term_sortable_columns( $columns ) {
        $columns['term_order'] = 'term_order';
        return $columns;
    }
    add_filter( 'manage_edit-category_sortable_columns', 'add_term_sortable_columns' );
    add_filter( 'manage_edit-post_tag_sortable_columns', 'add_term_sortable_columns' );
    
    //追加したカラムで正しくソートさせる
    function sortable_column_rule_for_order(  $pieces, $taxonomies, $args ) {
        global $post_type;
        global $pagenow, $wpdb;
        $orderby = ( isset( $_GET['orderby'] ) ) ? trim( sanitize_text_field( $_GET['orderby'] ) ) : '';
        if ( empty( $orderby ) ) { return $pieces; }
    
            $taxonomy = $taxonomies[0];

            if ( is_admin()
                && $pagenow == 'edit-tags.php'
                && $taxonomy == 'category'
                && ( isset($_GET['orderby']) && $_GET['orderby'] == 'term_order' )
            ) {
                $pieces['join']     .= ' LEFT OUTER JOIN ' . $wpdb->termmeta . ' AS tm ON t.term_id = tm.term_id ';
                $pieces['where']    .= ' AND tm.meta_key = "_order"';
                $pieces['orderby']   = ' ORDER BY IFNULL(CAST(tm.meta_value AS SIGNED), NULL) '; 
                $pieces['order']     = isset($_GET['order']) ? $_GET['order'] : "DESC";
            }
        return $pieces;
    }
    add_filter( 'terms_clauses', 'sortable_column_rule_for_order', 10, 3 );
