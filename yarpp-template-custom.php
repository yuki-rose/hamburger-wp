<?php 
/* 
YARPP Template Custom
*/
?>
<div class="c-recommendMenus">
    <h2 class="p-recommendMenu_ttl">&#9733;おすすめ商品</h2>
        <?php if( have_posts()): ?>
        <ul class="c-recommend__wrapperGrid">
            <?php while (have_posts()): the_post(); ?>
            <li>
                <div class="c-recommend__wrapperGrid-item">
                    <?php if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail('thumbnail'); ?>
                    <?php else: ?>
                        <img class="c-recommend__wrapperGrid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/humburger_by_the_window.png" alt="ハンバーガーの写真">
                    <?php endif; ?>
                    <article class="c-recommend__wrapperGrid-txtbox">
                        <h2 class="c-recommend__wrapperGrid-ttl"><?php the_title(); ?></h2>
                        <h3 class="c-recommend__wrapperGrid-txt__ttl"><?php get_h2(); ?></h3>
                        <?php the_excerpt(); ?>
                        <a class="c-detail__btn_recommend" href="<?php the_permalink(); ?>">詳しく見る</a>
                    </article>
                </div>
            </li>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>
</div>