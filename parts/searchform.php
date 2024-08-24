<form class="p-search" id="searchform" method="get" action="<?php echo esc_url(home_url('/')); //現在のブログのホームURLを取得。そのままだと '/' (スラッシュ)が付かないで、 `/` を付けて出力 ?>">
    <input class="p-search__input" name="s" id="s" type="search" placeholder=" &#xf002;" style="font-family: FontAwesome; color: #505050;"> <!--WordPressの検索は s というパラメータで渡される-->
    <input class="p-search__set" id="searchsubmit" type="submit" name="submit" value="検索">
</form>