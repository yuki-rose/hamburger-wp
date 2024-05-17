<?php get_header(); //header.phpを読み込み ?> 

<?php get_sidebar(); //siderbar.phpを読み込み ?>

<main class="l-main">
<?php 
    $args = [ 'src' => 'images/page-title_arcive@2x.jpg', 'alt' => 'ハンバーガーの写真', 'figcap' => 'Search:' ]; //変数の設定
    get_template_part( 'parts/mainvisual', 'top', $args ); //mainvisual-top.phpを上記の配列で読み込み ?>
        <!--<figure class="c-mainvisual__archive">
            <img src="./images/page-title_arcive@2x.jpg" alt="ハンバーガーの写真">
            <div class="c-main__archive-ttlset">
            <figcaption class="c-main__archivettl">Search:</figcaption>
            <h3 class="c-main__archivettl-sub">チーズバーガー</h3>
            </div>
        </figure>-->

        <div class="c-archive">
            <h2 class="c-archive__ttl">小見出しが入ります</h2>
            <article class="c-archive__txt">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</article>
        </div>

        <div class="c-archive__wrapperGrid">
            <a href="./single.html">
            <div class="c-archive__wrapperGrid-item">
                <img class="c-archive__wrapperGrid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/humburger_by_the_window.png" alt="ハンバーガーの写真">
                <article class="c-archive__wrapperGrid-txtbox">
                    <h2 class="c-archive__wrapperGrid-ttl">見出しが入ります</h2>
                    <section class="c-archive__wrapperGrid-txt__ttl">小見出しが入ります</section>
                    <p class="c-archive__wrapperGrid-txt">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <button class="c-detail__btn">詳しく見る</button>
                </article>
            </div></a>
            <a href="./single.html">
            <div class="c-archive__wrapperGrid-item">
                <img class="c-archive__wrapperGrid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/humburger_by_the_window.png" alt="ハンバーガーの写真">
                <article class="c-archive__wrapperGrid-txtbox">
                    <h2 class="c-archive__wrapperGrid-ttl">見出しが入ります</h2>
                    <section class="c-archive__wrapperGrid-txt__ttl">小見出しが入ります</section>
                    <p class="c-archive__wrapperGrid-txt">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <button class="c-detail__btn">詳しく見る</button>
                </article>
            </div></a>
            <a href="./single.html">
            <div class="c-archive__wrapperGrid-item">
                <img class="c-archive__wrapperGrid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/humburger_by_the_window.png" alt="ハンバーガーの写真">
                <article class="c-archive__wrapperGrid-txtbox">
                    <h2 class="c-archive__wrapperGrid-ttl">見出しが入ります</h2>
                    <section class="c-archive__wrapperGrid-txt__ttl">小見出しが入ります</section>
                    <p class="c-archive__wrapperGrid-txt">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <button class="c-detail__btn">詳しく見る</button>
                </article>
            </div></a>
            <a href="./single.html">
            <div class="c-archive__wrapperGrid-item">
                <img class="c-archive__wrapperGrid-img" src="./images/humburger_by_the_window.png" alt="ハンバーガーの写真">
                <article class="c-archive__wrapperGrid-txtbox">
                    <h2 class="c-archive__wrapperGrid-ttl">見出しが入ります</h2>
                    <section class="c-archive__wrapperGrid-txt__ttl">小見出しが入ります</section>
                    <p class="c-archive__wrapperGrid-txt">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <button class="c-detail__btn">詳しく見る</button>
                </article>
            </div></a>
            <a href="./single.html">
            <div class="c-archive__wrapperGrid-item">
                <img class="c-archive__wrapperGrid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/humburger_by_the_window.png" alt="ハンバーガーの写真">
                <article class="c-archive__wrapperGrid-txtbox">
                    <h2 class="c-archive__wrapperGrid-ttl">見出しが入ります</h2>
                    <section class="c-archive__wrapperGrid-txt__ttl">小見出しが入ります</section>
                    <p class="c-archive__wrapperGrid-txt">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <button class="c-detail__btn">詳しく見る</button>
                </article>
            </div></a>
        </div>

        <div class="c-pagenation">
            <div class="c-pagenation__pageno">page 1/10</div>
            <button class="c-pagenation__btn prev-btn"><span class="prev-mark"></span>前へ</button>
            <ul class="c-pagenation__pagelist">
                <li class="c-pagenation__page">1</li>
                <li class="c-pagenation__page">2</li>
                <li class="c-pagenation__page">3</li>
                <li class="c-pagenation__page">4</li>
                <li class="c-pagenation__page">5</li>
                <li class="c-pagenation__page">6</li>
                <li class="c-pagenation__page">7</li>
                <li class="c-pagenation__page">8</li>
                <li class="c-pagenation__page">9</li>
            </ul>
            <button class="c-pagenation__btn next-btn">次へ<span class="next-mark"></span></button>
        </div>
    </main>

<?php get_footer(); //footer.phpを読み込むテンプレートタグ ?>