<?php get_header(); //header.phpを読み込み ?> 

<main class="l-main">
    <figure class="c-mainvisual__archive">
        <picture>
            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/page-title_arcive@2x.jpg" media="(max-width:590px)">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/three-burgers-on-brown-wooden-tray-between-white-ceramic-1841108.png" alt="ハンバーガーの写真">
        </picture>
        <div class="c-main__archive-ttlset">
            <figcaption class="c-main__archivettl">News:</figcaption>
            <?php   
                    $term_now = get_term_by('slug', $term, 'news_category');
                    if ($term_now) {
                        $post_count = $term_now->count;
                    } else {
                        $post_count = '0';
                    } ?>
            <h3 class="c-main__archivettl-sub">お知らせ<?php single_term_title();?>（<?php echo $post_count;?>件）</h3>
        </div>
    </figure>

    <div class="c-archive">
        <h2 class="c-archive__ttl">小見出しが入ります</h2>
        <article class="c-archive__txt">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</article>
    </div>

    <?php get_template_part('parts/news_taxonomy_grid'); ?>

    <?php get_template_part('parts/pagination');?>

    </div><!--l-main_contents-->
</main>

<?php get_sidebar(); //siderbar.phpを読み込み ?>

<?php get_footer(); //footer.phpを読み込むテンプレートタグ ?>