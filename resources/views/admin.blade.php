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
    <script id="functions" rol_user='{{Auth::user()->admin}}' user-name='{{ $user_name}}' user-id="{{ $user_id }}" src="{{ asset('js/functions.js') }}" defer></script>
</head>

<body>

    <div class="sticky-top">
    @include('layouts.navigation')
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white" style="border: 2px solid black;">
                <form action="{{route('enviar')}}" method="post" id="formulario">
                    @csrf
                        <h1>CLICA PER ENVIAR DOS NÚMEROS ALEATORIS A TOTS ELS USUARIS EN REAL-TIME PER TAL DE QUE ELS SUMIN.</h1><BR></BR>
                        <p>ET RETRONARA UN ALERT DIET SI AQUELL USUARI SAP SUMAR O NO.</p><BR></BR>
                        <button class="btn btn-outline-secondary p-4 bg-success" id="send" type="submit" style="color:white; font-size: 20px;">ENVIAR NUMEROS ALEATORIS</button>    
                </form>          
            </div> 
        </div>
    </div>

</body>
</html>


