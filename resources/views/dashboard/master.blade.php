<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>Modulo admin</title>
</head>
<body>
    <div id="app">
        @include('dashboard.partials.nav-header-main')
        <div class="container">
            {{-- Alerta session flash --}}
            @include('dashboard.partials.session-status')
            @yield('content')
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
    <script src="{{asset("js/app.js")}}"></script>
    <script>
        $(document).ready(function(){
            $(document).on('click','.modal_delete', function(){
                let id = $(this).attr('data-id');
                $('#deleteModalLabel').html('Eliminar el USUARIO: '+id);
                let action = $('#form_delete').attr('data-action').slice(0,-1);
                $('#form_delete').attr('action', action + id)
            });
            ClassicEditor
                .create( document.querySelector( '#contenido' ) )
                .then( editor => {
                        console.log( editor );
                } )
                .catch( error => {
                        console.log( '' );
            } );
        });

    </script>
</body>
</html>
