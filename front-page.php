<!-- 
 /*
Template Name:フロントページ
*/ 
-->

<?php get_header(); //header.phpを読み込み ?> 

<main class="l-main">
    <figure class="c-mainvisual">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mainvisual-pc@2x.jpg" alt="ハンバーガーの写真">
        <figcaption class="c-main__sitettl">ダミーサイト</figcaption>
        <?php if ( switch_date("2024-10-03 02:00:00", "2024-10-04 00:00:00", "") === true ) { ?>
            <p>ネコ</p>
        <?php } ?>
    </figure>
    

        <div class="p-main__wrapperGrid">
            <div class="p-main__wrapperGrid-item takeout-bg">
                <?php $cat_takeout = get_category_by_slug('takeout');?>
                <a href="<?php echo esc_url(get_category_link($cat_takeout->term_id));?>">
                <h2 class="p-main__wrapperGrid-ttl"><?php echo $cat_takeout->name; ?></h2>
                <div class="p-main__wrapperGrid-txtboxset">
                    <article class="p-main__wrapperGrid-txtbox">
                        <section class="p-main__wrapperGrid-txt__ttl">Take OUT</section>
                        <p class="p-main__wrapperGrid-txt">当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウト
                            で利用できる商品を掲載しています当店のテイクアウトで利用できる商品を
                            掲載しています当店のテイクアウトで利用できる商品を掲載しています当店
                            のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウト
                            で利用できる商品を掲載しています当店のテイクアウトで利用できる商品を
                            掲載しています当店のテイクアウトで利用できる商品を掲載しています当店
                            のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウト
                            で利用できる商品を掲載しています当店のテイクアウトで利用できる商品を
                            掲載しています当店のテイクアウトで利用できる商品を掲載しています当店
                            のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウト
                            で利用できる商品を掲載しています当店のテイクアウトで利用できる商品を
                            掲載しています当店のテイクアウトで利用できる商品を掲載しています当店
                            のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウト
                            で利用できる商品を掲載しています</p>
                    </article>
                    <article class="p-main__wrapperGrid-txtbox">
                        <section class="p-main__wrapperGrid-txt__ttl">Take OUT</section>
                        <p class="p-main__wrapperGrid-txt">当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウト
                            で利用できる商品を掲載しています当店のテイクアウトで利用できる商品を
                            掲載しています当店のテイクアウトで利用できる商品を掲載しています当店
                            のテイクアウトで利用できる商品を掲載しています</p>
                    </article>
                </div></a>
            </div>
            <div class="p-main__wrapperGrid-item eatin-bg">
            <?php $cat_eatin = get_category_by_slug('eatin');?>
                <a href="<?php echo esc_url(get_category_link($cat_eatin->term_id));?>">
                <h2 class="p-main__wrapperGrid-ttl"><?php echo $cat_eatin->name; ?></h2>
                <div class="p-main__wrapperGrid-txtboxset">
                    <article class="p-main__wrapperGrid-txtbox">
                        <section class="p-main__wrapperGrid-txt__ttl">Eat In</section>
                        <p class="p-main__wrapperGrid-txt">店内でお食事いただけるメニューです店内でお食事いただけるメニューです
                            店内でお食事いただけるメニューです店内でお食事いただけるメニューです
                            店内でお食事いただけるメニューです店内でお食事いただけるメニューです
                            店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです
                            店内でお食事いただけるメニューです店内でお食事いただけるメニューです
                            店内でお食事いただけるメニューです</p>
                    </article>
                    <article class="p-main__wrapperGrid-txtbox">
                        <section class="p-main__wrapperGrid-txt__ttl">Eat In</section>
                        <p class="p-main__wrapperGrid-txt">店内でお食事いただけるメニューです店内でお食事いただけるメニューです
                            店内でお食事いただけるメニューです店内でお食事いただけるメニューです
                            店内でお食事いただけるメニューです店内でお食事いただけるメニューです
                            店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです
                            店内でお食事いただけるメニューです店内でお食事いただけるメニューです
                            店内でお食事いただけるメニューです店内でお食事いただけるメニューです
                            店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです
                            店内でお食事いただけるメニューです店内でお食事いただけるメニューです
                            店内でお食事いただけるメニューです店内でお食事いただけるメニューです
                            店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです
                            店内でお食事いただけるメニューです店内でお食事いただけるメニューです
                            店内でお食事いただけるメニューです店内でお食事いただけるメニューです
                            店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです
                            店内でお食事いただけるメニューです店内でお食事いただけるメニューです
                            店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです
                            店内でお食事いただけるメニューです店内でお食事いただけるメニューです
                            店内でお食事いただけるメニューです店内でお食事いただけるメニューです
                            店内でお食事いただけるメニューです店内でお食事いただけるメニューです</p>
                    </article>
                </div></a>
            </div>
        </div>

        <div class="p-map">
            <div class="p-map-txtset">
                <h2 class="p-map-ttl">見出しが入ります</h2>
                <p class="p-map-txt">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入りま</p>
            </div>
        </div>

        </div><!--l-main_contents-->
    </main>

    <?php get_sidebar(); //siderbar.phpを読み込み ?>

    <?php get_footer(); //footer.phpを読み込むテンプレートタグ ?>