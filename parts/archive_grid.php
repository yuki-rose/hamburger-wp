<li>
    <a href="<?php the_permalink(); ?>">
        <div class="c-archive__wrapperGrid-item">
            <?php if (has_post_thumbnail()); ?>
                <?php the_post_thumbnail('thumbnail'); ?>
            <?php else: ?>
                <img class="c-archive__wrapperGrid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/humburger_by_the_window.png" alt="ハンバーガーの写真">
            <?php endif; ?>
            <article class="c-archive__wrapperGrid-txtbox">
                <h2 class="c-archive__wrapperGrid-ttl"><?php the_title(); ?></h2>
                    <section class="c-archive__wrapperGrid-txt__ttl">
                        <?php $content = $post->post_content;
                            preg_match_all('/<h2>.+<\/h2>/u', $post->post_content, $matches); ?>
                        小見出しが入ります
                    </section>
                    <?php the_excerpt('詳しく見る'); ?>
                    <p class="c-archive__wrapperGrid-txt">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <button class="c-detail__btn">詳しく見る</button>
                </article>
            </div></a>