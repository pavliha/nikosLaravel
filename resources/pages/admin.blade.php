@extends("layouts.main")
@section("head")
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css"/>
@stop

@section("js")
    <script src='https://cdn.firebase.com/js/client/2.2.1/firebase.js'></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/vue/1.0.13/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.js"></script>
    <script src="scripts/admin.js"></script>
@stop

@section("header")

@stop

@section("content")
    <section id="photoPanel">
        <div id="addPhotos">

            <div id="uploadPhotos">
                <form action="/admin/photo" method="post" class="dropzone" id="dropzone">
                    {{csrf_field()}}
                    <input type="file" name="image" />
                </form>

            </div>

        </div>
        <table id="photoTable">
            <thead>
            <tr>
                <th>id</th>
                <th>Изображение</th>
                <th>Имя</th>
                <th>Размер</th>
                <th>Дата изменения</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr v-repeat="photo in photos | sortBy photo.id desc">
                <td class="id"> @{{ photo.id }}</td>

                <td class="image"><img src="@{{ photo.thumbnail }}"/></td>

                <td class="name">@{{ photo.name }}</td>

                <td class="size">@{{ photo.size }}</td>

                <td class="date">@{{ photo.updated_at }}</td>

                <td class="control">
                    <button class="delete" v-on="click: del($index,photo)"><i class="fa fa-times"></i></button>
                </td>
            </tr>

            </tbody>
        </table>

    </section>
@stop