<?php get_header(); //header.phpを読み込み ?> 

<main class="l-main">
    <?php if( have_posts() ): //メインループの記述
        while( have_posts() ): the_post(); ?>
        <div <?php post_class(); //自動で投稿情報のクラスを付ける?>>
            <figure class="c-mainvisual__news">
            <?php //メインビジュアル//
                if ( has_post_thumbnail()): //サムネイル画像があったら ?>
                    <?php the_post_thumbnail( 'full' ); //サムネイルを表示 ?>
                <?php else://なければ指定画像を表示 ?>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news-image.png" alt="news paper">
                <?php endif; ?>
                <figcaption class="c-main__newsTtl"><?php the_title(); ?>
                    <div class="c-main_ttlTerms">
                        <ul class="c-main_ttlCategories">
                            <?php $terms = get_terms('news_category'); //タクソノミーのスラッグ名を記載する
                                foreach ($terms as $term) {
                                    echo '<li><a href="' . get_term_link($term) . '">' . $term->name . '&nbsp(' . esc_html( $term->count ) . ')</a>
                                    </li>';
                                } ?>
                        </ul>
                        <ul class="c-main_ttlTags">
                            <?php $terms = get_terms('news_tag'); //タクソノミーのスラッグ名を記載する
                                foreach ($terms as $term) {
                                    echo '<li><a href="' . get_term_link($term) . '">' . $term->name . '&nbsp(' . esc_html( $term->count ) . ')</a>
                                    </li>';
                                } ?>
                        </ul>
                    </div>
                </figcaption>
                
            </figure>
                
            <div class="c-single_main_contents">
            <?php //記事の内容
                the_content();
            ?>
            </div>
            <?php $args = array(
                    'before' => '<div class="c-single_pagination">',
                    'after' => '</div>',
                    'pagelink' => '<span class="c-page_number">%</span>',
                );
                wp_link_pages($args); //記事分割の場合のページネーション?>
        </div>
        <?php endwhile;
            else :?>
            <p>表示する記事がありません</p>
    <?php endif; ?>
</main>
</div><!--l-main_contents-->

<?php get_sidebar(); //siderbar.phpを読み込み ?>
            
<?php get_footer(); //footer.phpを読み込むテンプレートタグ ?>