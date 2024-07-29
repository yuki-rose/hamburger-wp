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
        wp_enqueue_style( 'hamburger', get_theme_file_uri('/css/hamburger.css' ), array(), '1.0.0' ); //スタイルシートの読み込み
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

    //カテゴリーに順番を指定するカスタムフィールドを追加
        //ターム追加時にフィールドを表示
    function add_taxonomy_fields($tag) {
        wp_nonce_field(basename(__FILE__), 'term_order_nonce'); //nonceの設定
        $default_nam = null;
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
            $value = null;
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
                ''; //セットされていなければ処理しない
        
            if ($old_value && '' //保存されていた値がなく
                === $new_value) { //新しい値と等しい場合
                delete_term_meta($term_id, '_order'); //タームのメタ情報を削除する
            } elseif ($old_value !== $new_value) { //保存されていた値と新しい値が異なる場合
                update_term_meta($term_id, '_order', $new_value); //タームのメタ情報を更新する
            }
        }
    }
    add_action('create_term', 'save_taxonomy_fileds');
    add_action('edited_term', 'save_taxonomy_fileds');

    //カテゴリー一覧に表示順を表示する
        //管理画面の一覧にカラムを追加する
    function add_category_columns($columns) {
        $index = 4; // 追加位置

        return array_merge(
            array_slice($columns, 0, $index), //追加したい位置まで配列を取得
            array('term_order' => '表示順'), //追加したい配列
            array_slice($columns, $index) 
        );
    }
    add_filter('manage_edit-category_columns', 'add_category_columns');

        //カラムにデータを表示
    function add_category_custom_fields($content, $column_name, $term_id) {
        if ($column_name == 'term_order') {
            $content = get_term_meta($term_id, '_order', true); //保存した値を取得
        
            if (!$content) { //値がなかった場合
                $content = null;
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

    function column_custom_sort_param( $columns ) {
        if ( isset( $columns['orderby'] ) && 'term_order' === $columns['orderby'] ) {
            $columns = array_merge( 
                $columns, 
                array(
                    'meta_key' => '_order',
                    'orderby' => 'meta_value_num',
                )
            );
        }
        return $columns;
    }
    add_filter( 'request', 'column_custom_sort_param' );
    ?>
