<!-- 
 /*
Template Name:お知らせトップページ
*/ 
-->

<?php get_header(); //header.phpを読み込み ?> 

<main class="l-main">
    <figure class="c-mainvisual__archiveNews">
        <picture>
            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/page-title_arcive@2x.jpg" media="(max-width:590px)">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/three-burgers-on-brown-wooden-tray-between-white-ceramic-1841108.png" alt="ハンバーガーの写真">
        </picture>
        <div class="c-main__archive-ttlset">
            <figcaption class="c-main__archiveNewsTtl">News:</figcaption>
            <?php $count_custom = wp_count_posts('news');
                    $custom_posts = $count_custom->publish;?>
            <h3 class="c-main__archivettl-sub">すべての記事（<?php echo $custom_posts;?>件）</h3>
        </div>
    </figure>

    <div class="c-archive">
        <h2 class="c-archive__ttl">小見出しが入ります</h2>
        <article class="c-archive__txt">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</article>
    </div>

    <?php get_template_part('parts/news_archive_grid'); ?>

    <?php get_template_part('parts/pagination');?>

    </div><!--l-main_contents-->
</main>

<?php get_sidebar(); //siderbar.phpを読み込み ?>

<?php get_footer(); //footer.phpを読み込むテンプレートタグ ?>