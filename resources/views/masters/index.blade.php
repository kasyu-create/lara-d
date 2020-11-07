<!doctype html>
<html lang="ja">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>名人列伝</title>
    <!-- <link rel="stylesheet" media="all" href="css/ress.min.css" /> -->
    <link rel="stylesheet" href="{{ asset('css/ress.min.css') }}">
    <!-- <link rel="stylesheet" media="all" href="css/style.css" /> -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/style.js"></script>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/favicon.png">
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col span-12">
                        <div class="head">
                            <h1><a href="index.html">名人列伝</a></h1>
                            <div class="snsbox">
                                <img src="img/in-icon.png" alt="Instagram">
                                <img src="img/fb-icon.png" alt="Facebook">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-12">
                        <nav>
                            <div id="open"><img src="img/button.png"></div>
                            <div id="close"><img src="img/button2.png"></div>
                            <div id="navi">
                                <ul>
                                <li><a href="/">野球</a></li>
                                <li><a href="/">その他アスリート</a></li>
                                <li><a href="/">軍人</a></li>
                                <li><a href="/">偉人</a></li>
                                <li><a href="/">歴史人物</a></li>
                                <li><a href="/">芸能人</a></li>
                                <li><a href="/">実業家</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <div class="mainimg">
        <img src="img/mainimg.jpg" alt="メイン画像">
        </div>
        <main>
            <section>
                <div class="container">
                    <h2 class="catch">名人</h2>
                <div class="row">
                    @foreach($masters as $master)
                        <div class="col span-4">
                        <figure>
                            <figcaption>{{ $master->name }}</figcaption>
                            </figure>
                            <a href="">{{ $master->career }}</a>
                        </div>
                    @endforeach
                </div>
            </section>
        </main>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col span-4">
                        <h5>フッター１</h5>
                        <p>ここにSNSやテキストなどが入ります。SNSやテキストなどが入ります。</p>
                    </div>
                    <div class="col span-4">
                        <h5>フッター２</h5>
                        <p>ここにSNSやテキストなどが入ります。SNSやテキストなどが入ります。</p>
                    </div>
                    <div class="col span-4">
                        <h5>フッター３</h5>
                        <p>ここにSNSやテキストなどが入ります。SNSやテキストなどが入ります。</p>
                    </div>
                </div>
            </div>
        </footer>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col"><hr>
                        Copyright © <a href="https://popo-design.net" target="_blank">popodesign. </a>
                    </div>
                </div>
            </div>
        </div>
        <p id="pagetop"><a href="#">TOP</a></p>
    </body>
</html>