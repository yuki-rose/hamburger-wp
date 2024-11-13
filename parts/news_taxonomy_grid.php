<?php if( have_posts()): ?>
<ul class="c-news_archive__wrapperGrid">
<?php while ( have_posts()):
     the_post(); ?>
<li>
    <div class="c-news_archive__wrapperGrid-item">
        <div class="c-news_archive__wrapperGrid-img">
            <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('thumbnail'); ?>
            <?php else: ?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mattias-diesel-3M2cqBRQmjA-unsplash 4.png" alt="news paper">
            <?php endif; ?>
        </div>
        <article class="c-news_archive__wrapperGrid-txtbox">
            <span class="u-new_mark">
                <?php
                    $day  = 14; // NEWマークを表示させる期間
                    $today = wp_date('U');
                    $post_day = get_the_time('U');
                    $term = ($today - $post_day) / 86400;
                    if( $day > $term ): ?>
                        <img class="u-newMark" src="<?php echo get_stylesheet_directory_uri(); ?>/images/new_pc.png" alt="new mark">
                    <?php endif; ?>
                </span>
            <h2 class="c-news_archive__wrapperGrid-ttl"><?php the_title(); ?></h2>
            <div class="c-main_ttlTerms">
                <ul class="c-main_ttlCategories">
                    <?php $terms_cat = get_the_terms('','news_category'); //タクソノミーのスラッグ名を記載する
                        if (!empty($terms_cat)) {
                            foreach ($terms_cat as $term) {
                                echo '<li><a href="' . get_term_link($term) . '">' . $term->name .'</a></li>';
                            } 
                        } ?>
                </ul>
                <ul class="c-main_ttlTags">
                    <?php $terms_tag = get_the_terms('','news_tag'); //タクソノミーのスラッグ名を記載する
                        if (!empty($terms_tag)) {
                            foreach ($terms_tag as $tag) {
                                echo '<li><a href="' . get_term_link($tag) . '">' . $tag->name .'</a></li>';
                            }
                        } ?>
                        </ul>
                    </div>
            <?php the_excerpt(); ?>
            <a class="c-detail__btn_news" href="<?php the_permalink(); ?>">詳しく見る</a>
        </article>
    </div>
</li>
<?php endwhile; ?>
</ul>
<?php else: ?> 
<P class="c-archive__txt">検索結果はありません。</p>
<?php endif; 
    wp_reset_postdata();?>
