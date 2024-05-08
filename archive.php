<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="discription" content="Hamburger Site">
    <title>Hamburger Site</title>
    <link rel="icon" href="./images/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@100;300;400;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="../css/ress.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/811b940674.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="l-header">
        <div class="p-menu">
            <button class="p-menu__btn js-menu__btn">Menu</button>
        </div>
        <h1 class="l-header__ttl">Hamburger</h1>
        <form class="p-search" action="#" method="get">
            <input class="p-search__input" type="search" name="search" placeholder=" &#xf002;" style="font-family: FontAwesome; color: #505050;"/>
            <input class="p-search__set" type="submit" name="submit" value="検索">
        </form>
    </header>

    <aside class="l-side">
        <div class="l-side__bg"></div>
        <nav class="l-side__base">
            <button class="p-menu__btn p-menu__btn-pc">Menu</button>
            <button class="p-menu__closebtn"></button>
            <div class="menuList">
                <h3 class="mainMenu"><a href="./archive.html">バーガー</a></h3>
                <ul class="sideMemu">
                    <li class="menuItem"><a href="./single.html">ハンバーガー</a></li>
                    <li class="menuItem"><a href="./single.html">チーズバーガー</a></li>
                    <li class="menuItem"><a href="./single.html">テリヤキバーガー</a></li>
                    <li class="menuItem"><a href="./single.html">アボカドバーガー</a></li>
                    <li class="menuItem"><a href="./single.html">フィッシュバーガー</a></li>
                    <li class="menuItem"><a href="./single.html">ベーコンバーガー</a></li>
                    <li class="menuItem"><a href="./single.html">チキンバーガー</a></li>
                </ul>
                <h3 class="mainMenu"><a href="./archive.html">サイド</a></h3>
                <ul class="sideMemu">  
                    <li class="menuItem"><a href="./single.html">ポテト</a></li>
                    <li class="menuItem"><a href="./single.html">サラダ</a></li>
                    <li class="menuItem"><a href="./single.html">ナゲット</a></li>
                    <li class="menuItem"><a href="./single.html">コーン</a></li>
                </ul>
                <h3 class="mainMenu"><a href="./archive.html">ドリンク</a></h3>
                <ul class="sideMemu">
                    <li class="menuItem"><a href="./single.html">コーラ</a></li>
                    <li class="menuItem"><a href="./single.html">ファンタ</a></li>
                    <li class="menuItem"><a href="./single.html">オレンジ</a></li>
                    <li class="menuItem"><a href="./single.html">アップル</a></li>
                    <li class="menuItem"><a href="./single.html">紅茶（Ice/Hot）</a></li>
                    <li class="menuItem"><a href="./single.html">コーヒー（Ice/Hot）</a></li>
                </ul>
            </div>
        </nav>
    </aside>

    <main class="l-main">
        <figure class="c-mainvisual__archive">
            <img src="./images/page-title_arcive@2x.jpg" alt="ハンバーガーの写真">
            <div class="c-main__archive-ttlset">
            <figcaption class="c-main__archivettl">Menu:</figcaption>
            <h3 class="c-main__archivettl-sub">チーズバーガー</h3>
            </div>
        </figure>

        <div class="c-archive">
            <h2 class="c-archive__ttl">小見出しが入ります</h2>
            <article class="c-archive__txt">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</article>
        </div>

        <div class="c-archive__wrapperGrid">
            <a href="./single.html">
            <div class="c-archive__wrapperGrid-item">
                <img class="c-archive__wrapperGrid-img" src="./images/humburger_by_the_window.png" alt="ハンバーガーの写真">
                <article class="c-archive__wrapperGrid-txtbox">
                    <h2 class="c-archive__wrapperGrid-ttl">チーズバーガー</h2>
                    <section class="c-archive__wrapperGrid-txt__ttl">小見出しが入ります</section>
                    <p class="c-archive__wrapperGrid-txt">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <button class="c-detail__btn">詳しく見る</button>
                </article>
            </div></a>
            <a href="./single.html">
            <div class="c-archive__wrapperGrid-item">
                <img class="c-archive__wrapperGrid-img" src="./images/humburger_by_the_window.png" alt="ハンバーガーの写真">
                <article class="c-archive__wrapperGrid-txtbox">
                    <h2 class="c-archive__wrapperGrid-ttl">ダブルチーズバーガー</h2>
                    <section class="c-archive__wrapperGrid-txt__ttl">小見出しが入ります</section>
                    <p class="c-archive__wrapperGrid-txt">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <button class="c-detail__btn">詳しく見る</button>
                </article>
            </div></a>
            <a href="./single.html">
            <div class="c-archive__wrapperGrid-item">
                <img class="c-archive__wrapperGrid-img" src="./images/humburger_by_the_window.png" alt="ハンバーガーの写真">
                <article class="c-archive__wrapperGrid-txtbox">
                    <h2 class="c-archive__wrapperGrid-ttl">スペシャルチーズバーガー</h2>
                    <section class="c-archive__wrapperGrid-txt__ttl">小見出しが入ります</section>
                    <p class="c-archive__wrapperGrid-txt">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <button class="c-detail__btn">詳しく見る</button>
                </article>
            </div></a>
        </div>

        <div class="c-pagenation">
            <div class="c-pagenation__pageno">page 1/10</div>
            <button class="c-pagenation__btn prev-btn"><span class="prev-mark"></span>前へ</button>
            <ul class="c-pagenation__pagelist">
                <li class="c-pagenation__page">1</li>
                <li class="c-pagenation__page">2</li>
                <li class="c-pagenation__page">3</li>
                <li class="c-pagenation__page">4</li>
                <li class="c-pagenation__page">5</li>
                <li class="c-pagenation__page">6</li>
                <li class="c-pagenation__page">7</li>
                <li class="c-pagenation__page">8</li>
                <li class="c-pagenation__page">9</li>
            </ul>
            <button class="c-pagenation__btn next-btn">次へ<span class="next-mark"></span></button>
        </div>
    </main>

    <footer class="l-footer">
        <nav class="l-footer__menu">ショップ情報 | ヒストリー</nav>
        <small class="l-footer__copyright">Copyright: RaiseTech</small>
    </footer>
    
    <script src="./js/jquery-3.7.1.min.js"></script>
    <script src="./js/main.js" defer></script>
</body>

</html>