<div class="c-pagenation">
    <?php $check = max_show_page_number();
        if ($check >= 1) : ?>
    <div class="c-pagenation__pageno">page <?php echo show_page_number(''); //現在のページ?>/<?php echo max_show_page_number(''); //総ページ数?></div>
    <?php 
        $args = array(
            'mid_size' => 5,
            'prev_text' => '',
            'next_text' => '',
            'type' => 'list',
            'screen_reader_text' => 'Navigation',
        );

        the_posts_pagination($args); ?>  
        <?php endif; ?>  
</div>