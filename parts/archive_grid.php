<?php if( have_posts()): ?>
<ul class="c-archive__wrapperGrid">
<?php while (have_posts()): the_post(); ?>
<li>
    <div class="c-archive__wrapperGrid-item">
        <?php if (has_post_thumbnail()): ?>
            <?php the_post_thumbnail('thumbnail'); ?>
        <?php else: ?>
            <img class="c-archive__wrapperGrid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/humburger_by_the_window.png" alt="ハンバーガーの写真">
        <?php endif; ?>
        <article class="c-archive__wrapperGrid-txtbox">
            <h2 class="c-archive__wrapperGrid-ttl"><?php the_title(); ?></h2>
            <h3 class="c-archive__wrapperGrid-txt__ttl"><?php get_h2(); ?></h3>
            <?php the_excerpt(); ?>
            <a class="c-detail__btn" href="<?php the_permalink(); ?>">詳しく見る</a>
        </article>
    </div>
</li>
<?php endwhile; ?>
</ul>
<?php else: ?> 
<P class="c-archive__txt">検索結果はありません。</p>
<?php endif; ?>
