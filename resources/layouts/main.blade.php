<!DOCTYPE html>
<html>
<head lang="ru">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}"/>
    <meta name="description" content="Свадебный фотограф и видеооператор в Запорожье">
    <meta name="keywords"
          content="Фотограф, Запорожье, Видеосьёмка, Фотосьёмка,Свадьба,свадебные фото, Качественный фотограф, Низкие цены">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>

    <link rel="stylesheet" href="styles/app.css"/>

    @yield('head')
    <title>@yield('title')</title>
</head>
<body>
<nav class="nav">
    <ul>
        <li><a href="/">ГЛАВНАЯ</a></li>
        <li><a href="/photos">ФОТОГАЛЕРЕЯ</a></li>
        <li><a href="/video">ОБРАЗЦЫ ВИДЕО</a></li>
        <li><a href="/price">ЦЕНЫ И УСЛУГИ</a></li>
        <li><a href="/contacts">КОНТАКТЫ</a></li>
    </ul>
</nav>
@yield('content')
<footer class="footer">

    <div class="footer-left">

        <h3>nikos<span>.zp.ua</span></h3>

        <p class="footer-links">
            <a href="#">Главная</a>
            ·
            <a href="#">Фотогалерея</a>
            ·
            <a href="#">Цены и услуги</a>
            ·
            <a href="#">Контакты</a>
        </p>

        <p class="footer-company-name">Николай Костюк &copy; 2016</p>
    </div>

    <div class="footer-center">

        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>с. Тимошевка</span> Украина, Запорожская область</p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>+380970471609</p>
        </div>

        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:nikos0669@gmail.com">nikos0669@gmail.com</a></p>
        </div>

    </div>

    <div class="footer-right">

        <p class="footer-company-about">
            <span>NIKOS</span>
            Николай Костюк - Свадебное фото и видео, фото детей, виньетки, фото на документы, фото в студии
        </p>

        <div class="footer-icons">

            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-github"></i></a>

        </div>

    </div>

</footer>
{{--<script src="//cdnjs.cloudflare.com/ajax/libs/vue/0.12.8/vue.js"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>

<script src="/scripts/app.js" async></script>
@yield("js")

</body>
</html>