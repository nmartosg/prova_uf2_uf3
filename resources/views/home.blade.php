<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/982045aa7f.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script id="functions" user-name='{{ $user_name}}' user-id="{{ $user_id }}" src="{{ asset('js/functions.js') }}" defer></script>
</head>
<body class="font-sans antialiased">

    <div class="sticky-top">
    @include('layouts.navigation')
    </div>
    <div class="min-h-screen bg-gray-100 m-0 p-0">
        <div class="row container-fluid">
            <div class="form-group col-6 offset-3 mt-3">
        
                <form action="{{route('enviar')}}" method="post" id="formulario">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="mensaje" id="mensaje" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" id="send" type="submit">Enviar</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>
</html>

