<form class="p-search" action="#" method="get" action="<?php echo home_url('/'); //現在のブログのホームURLを取得します。そのままですると '/' (スラッシュ)が付かないで、 `/` を付けて出力 ?>">
    <input class="p-search__input" type="search" name="search" placeholder=" &#xf002;" style="font-family: FontAwesome; color: #505050;" name="s" id="s"> <!--WordPressの検索は s というパラメータで渡される-->
    <input class="p-search__set" type="submit" name="submit" value="検索">
</form>