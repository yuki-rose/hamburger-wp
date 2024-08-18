<?php get_header(); //header.phpを読み込み ?> 

<main class="l-main">
    <figure class="c-mainvisual__archive">
        <picture>
            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/page-title_arcive@2x.jpg" media="(max-width:590px)">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/three-burgers-on-brown-wooden-tray-between-white-ceramic-1841108.png" alt="ハンバーガーの写真">
        </picture>
        <div class="c-main__archive-ttlset">
            <figcaption class="c-main__archivettl">Not Found:</figcaption>
            <?php   global $wp_query;
                    $search_query = get_search_query(); ?>
            <h3 class="c-main__archivettl-sub">ページが見つかりません。</h3>
        </div>
    </figure>

    <div class="c-archive">
        <h2 class="c-archive__ttl">ページが見つかりません。</h2>
        <article class="c-archive__txt notfound">お探しのページは、削除されたか、名前が変更された可能性があります。<br>
            直接アドレスを入力された場合は、アドレスが正しく入力されているかもう一度ご確認下さい。<br>
            ブラウザの再読み込みを行ってもこのページが表示される場合は、
            <a href="<?php echo esc_url(home_url('/')); ?>">トップページ</a>から目的のページをお探しください。
        </article>
    </div>

    </div><!--l-main_contents-->
</main>

<?php get_sidebar(); //siderbar.phpを読み込み ?>

<?php get_footer(); //footer.phpを読み込むテンプレートタグ ?>
