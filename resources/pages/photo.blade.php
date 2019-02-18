@extends("layouts.main")
@section('title','Nikos - Фотографии')
@section('content')
    <main id="photos">
        <p> </p>
        <p> </p>
        <h1 class="center">Все фотографии</h1>

<br>
        <br>
            <div class="fotorama"
                 data-nav="thumbs"
                 data-width="100%"
                 data-fit="contain"
                 data-thumbwidth="150"
                 data-thumbheight="100"
                 data-hash="true"
                 data-keyboard="true"
                 data-loop="true"
                 data-allowfullscreen="native"
                 data-nav="thumbs">
                @foreach($images as $image)
                    <img src="/gallery/all/{{$image}}">
                @endforeach
            </div>

    </main>

@stop

