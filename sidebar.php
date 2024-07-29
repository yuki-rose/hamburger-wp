<aside class="l-side">
    <div class="l-side__bg"></div>
    <nav class="l-side__base">
        <button class="p-menu__btn p-menu__btn-pc">Menu</button>
        <button class="p-menu__closebtn"></button>
        <div class="menuList">
            <?php 
                $arr = array(
                    'slug' => ['hamburger','side','drink'],
                    'orderby' => 'meta_value_num', //どの順番で表示するか
                    'meta_key' => '_order', //↑の値を呼び出すキー
                ); //表示したいカテゴリーの条件
                $ham_categories = get_categories($arr); //カテゴリーを取得

                foreach ($ham_categories as $ham_category) { ?>
            <h3 class="mainMenu">
                <a href="<?php echo esc_url(get_category_link($ham_category->term_id)); ?>">
                    <?php echo $ham_category->name; ?>
                </a>
            </h3>
            <?php
                $my_query = new WP_Query(array('cat' => $ham_category->term_id)); //サブループ
                if ($my_query->have_posts()): ?>
                <ul class="sideMemu">
                    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
	                    <li class="menuItem"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    <?php endwhile; ?>
                </ul>
            <?php wp_reset_postdata(); //取得中の投稿情報をリセット ?>
            <?php else: ?>
            <?php endif; } ?>
        </div>
    </nav>
</aside>
</div><!--l-contents_wrapper-->
