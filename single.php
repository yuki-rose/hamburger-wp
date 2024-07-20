<?php get_header(); //header.phpを読み込み ?> 

<main class="l-main">
    <?php if( have_posts() ): //メインループの記述
        while( have_posts() ): the_post(); ?>

            <figure class="c-mainvisual__single">
            <?php //メインビジュアル//
                if ( has_post_thumbnail()): //サムネイル画像があったら ?>
                    <?php the_post_thumbnail( 'full' ); //サムネイルを表示 ?>
                    <figcaption class="c-main__singlettl"><?php the_title(); ?></figcaption>
                <?php else://なければ指定画像を表示 ?>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ham-burger-with-vegetables-pc1639557.jpg" alt="ハンバーガーの写真">
                    <figcaption class="c-main__singlettl"><?php the_title(); ?></figcaption>
                <?php endif; ?>
            </figure>
                
            <div class="c-single_main_contents">
            <?php //記事の内容
                the_content();
            ?>
            </div>
        
        <?php endwhile;
            else :?>
            <p>表示する記事がありません</p>
    <?php endif; ?>
</main>
</div><!--l-main_contents-->

<?php get_sidebar(); //siderbar.phpを読み込み ?>

<?php get_footer(); //footer.phpを読み込むテンプレートタグ ?>