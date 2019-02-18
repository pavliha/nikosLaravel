@extends("layouts.main")

@section('title','Nikos - &#1057;&#1074;&#1072;&#1076;&#1077;&#1073;&#1085;&#1086;&#1077; &#1092;&#1086;&#1090;&#1086; &#1080; &#1074;&#1080;&#1076;&#1077;&#1086;, &#1092;&#1086;&#1090;&#1086; &#1076;&#1077;&#1090;&#1077;&#1081;, &#1074;&#1080;&#1085;&#1100;&#1077;&#1090;&#1082;&#1080;, &#1092;&#1086;&#1090;&#1086; &#1085;&#1072; &#1076;&#1086;&#1082;&#1091;&#1084;&#1077;&#1085;&#1090;&#1099;, &#1092;&#1086;&#1090;&#1086; &#1074; &#1089;&#1090;&#1091;&#1076;&#1080;&#1080;')

@section('content')
    <main id="index">

        <header class="header">
            <div class="header-image">
                <img src="/images/bg-mountain.png">
            </div>
            <img class="me" src="/images/iam-1.png" width="400px">

            <div class="h-group">
                <h3>Костюк</h3>

                <h2>Николай</h2>
                <h4>Фотограф и видеооператор</h4>
            </div>

        </header>
        <div class="fotorama-wrapper">
            <div class="fotorama"
                 data-nav="thumbs"
                 data-width="100%"
                 data-thumbwidth="150"
                 data-thumbheight="100">
                @foreach($images as $image)
                    <img src="/gallery/main/{{$image}}">
                @endforeach
            </div>
        </div>
        <div class="center"><a href="/photos">
                <button class="btn btn-medium">СМОТРЕТЬ ВСЕ ФОТОГРАФИИ</button>
            </a>
        </div>
        <section class="box video">
            <iframe src="https://www.youtube.com/embed/PLG-S2eZcTE?showinfo=0"
                    frameborder="0"
                    allowfullscreen>
            </iframe>
            <article>
                Видеосъемкой занимаюсь давно и с увлечением. Здесь реализуются творческие замыслы,
                здесь безграничное поле для экспериментов, здесь можно проявить полет фантазии,
                постоянно находить новые решения и совершенствовать мастерство.
                При этом очень важно учитывать и пожелания клиентов, понимать их видение того или иного эпизода.
                <br>
                <br>
                <br>
                <br>
                <a href="/video">
                    <button class="btn btn-medium">СМОТРЕТЬ ВСЕ ВИДЕО</button>
                </a>
            </article>

        </section>

    </main>
@stop