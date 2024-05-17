<?php get_header(); //header.phpを読み込み ?> 

<?php get_sidebar(); //siderbar.phpを読み込み ?>

<main class="l-main">
<?php 
    $args = [ 'src' => '/images/ham-burger-with-vegetables-1639557.jpg', 'alt' => 'ハンバーガーの写真', 'figcap' => 'h1 チーズバーガー' ]; //変数の設定
    get_template_part( 'parts/mainvisual', 'single', $args ); //mainvisual-top.phpを上記の配列で読み込み ?>
        <!--<figure class="c-mainvisual__single">
            <img src="./images/ham-burger-with-vegetables-1639557.jpg" alt="ハンバーガーの写真">
            <figcaption class="c-main__singlettl">h1 チーズバーガー</figcaption>
        </figure>-->

        <div class="c-single__txtset">
            <h2 class="c-single__mainttl">見出しh2</h2>
            <p class="c-single__txt">Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。</p>
            <div class="c-single__ttlset">
                <h2 class="c-single__ttl">見出しh3</h2>
                <h2 class="c-single__ttl">見出しh4</h2>
                <h2 class="c-single__ttl">見出しh5</h2>
                <h2 class="c-single__ttl">見出しh6</h2>
            </div>
        </div>

        <blockquote class="c-blockquotebox">
            <q class="c-blockquotetxt" cite="○○○○○○○○○○○○">Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ</q>
            <p>出典元：<cite class="source"><a href="#">○○○○○○○○○○○○</a></cite></p>
        </blockquote>

        <div class="c-single__visual">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cooked-foods-750073.jpg" alt="ハンバーガーの写真">
        </div>

        <article class="c-single__caption">
            <figure class="c-single__captionset">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cooked-foods-750073.jpg" alt="ハンバーガーの写真">
                <figcaption class="c-single__captiontxt">  テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入りますテキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります </figcaption>
            </figure>
            <figure class="c-single__captionset">
                <figcaption class="c-single__captiontxt">  テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入りますテキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</figcaption>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cooked-foods-750073.jpg" alt="ハンバーガーの写真">
            </figure>
        </article>

        <div class="c-single__visual-mid">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cooked-foods-750073.jpg" alt="ハンバーガーの写真">
        </div>

        <div class="c-single__wrapperGrid">
            <div class="c-single__wrapperGrid-item">
                <img class="c-single__wrapperGrid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/cooked-foods-750073.jpg" alt="ハンバーガーの写真">
            </div>
            <div class="c-single__wrapperGrid-item">
                <img class="c-single__wrapperGrid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/cooked-foods-750073.jpg" alt="ハンバーガーの写真">
            </div>
            <div class="c-single__wrapperGrid-item">
                <img class="c-single__wrapperGrid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/cooked-foods-750073.jpg" alt="ハンバーガーの写真">
            </div>
            <div class="c-single__wrapperGrid-item">
                <img class="c-single__wrapperGrid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/cooked-foods-750073.jpg" alt="ハンバーガーの写真">
            </div>
            <div class="c-single__wrapperGrid-item">
                <img class="c-single__wrapperGrid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/cooked-foods-750073.jpg" alt="ハンバーガーの写真">
            </div>
            <div class="c-single__wrapperGrid-item">
                <img class="c-single__wrapperGrid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/cooked-foods-750073.jpg" alt="ハンバーガーの写真">
            </div>
            <div class="c-single__wrapperGrid-item">
                <img class="c-single__wrapperGrid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/cooked-foods-750073.jpg" alt="ハンバーガーの写真">
            </div>
            <div class="c-single__wrapperGrid-item">
                <img class="c-single__wrapperGrid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/cooked-foods-750073.jpg" alt="ハンバーガーの写真">
            </div>
            <div class="c-single__wrapperGrid-item">
                <img class="c-single__wrapperGrid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/cooked-foods-750073.jpg" alt="ハンバーガーの写真">
            </div>
        </div>

        <div class="c-single__libox">
            <ul class="c-single__lino">
                <li style="list-style-type: decimal;">リストリストリスト</li>
                <li style="list-style-type: decimal;">リストリストリスト</li>
            </ul>
            <ul class="c-single__lino">
                <li style="list-style-type: decimal;">リスト2リスト2リスト2</li>
                <li style="list-style-type: decimal;">リスト2リスト2リスト2</li>
            </ul>
            <ul class="c-single__lino">
                <li style="list-style-type: decimal;">リストリストリスト</li>
                <li style="list-style-type: decimal;">リストリストリスト</li>
            </ul>
        </div>
        <div class="c-single__libox">
            <ul class="c-single__li">
                <li>リストリストリスト</li>
                <li>リストリストリスト</li>
            </ul>
            <ul class="c-single__li">
                <li>リスト2リスト2リスト2</li>
                <li>リスト2リスト2リスト2</li>
            </ul>
            <ul class="c-single__li">
                <li>リストリストリスト</li>
                <li>リストリストリスト</li>
            </ul>
        </div>

        <div class="c-code">
            <pre><code>
        &lt;html>
            &lt;head>
            &lt;/head>
            &lt;body>
            &lt;/body>
        &lt;/html>
            </code></pre>
        </div>

        <table>
            <tr>
                <td class="td-l">テーブル</td>
                <td class="td r">テーブル</td>
            </tr>
            <tr>
                <td>テーブル</td>
                <td>テーブル</td>
            </tr>
            <tr>
                <td>テーブル</td>
                <td>テーブル</td>
            </tr>
            <tr>
                <td>テーブル</td>
                <td>テーブル</td>
            </tr>
            <tr>
                <td>テーブル</td>
                <td>テーブル</td>
            </tr>
        </table>

        <button class="c-single__btn">ボタン</button>
        <div class="c-single__note">
        <strong>boldboldboldboldboldboldbold</strong>
        </div>
    </main>

    <?php get_footer(); //footer.phpを読み込むテンプレートタグ ?>