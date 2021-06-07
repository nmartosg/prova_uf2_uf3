<x-app-layout>
    <x-slot name="header">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Benvingut/da {{ Auth::user()->name }} {{ Auth::user()->cognoms }}
            <br>
            @if (Auth::user()->imagen != null)
                <img src="../storage/app/{{Auth::user()->imagen}}" class="rounded d-block w-100" alt="..." style="max-width:400px;">
            @endif
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @if (Session::has('message'))
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="alert alert-success">{{ Session::get('message') }}</div>
                </div>
                @endif
                <div class="p-6 bg-white border-b border-gray-200">
                    <br>
                    EL TEU USUARI ÉS: &nbsp;&nbsp;<b>{{ Auth::user()->name }}</b>
                    <a class="float-right pr-3" href="{{ route('usuari.edit') }}">CLICA AQUI PER FER LA EDICIO DE L'USUARI</a>
                    <!-- REAL-TIME NOTIFICATION -->
                    <br><br>
                </div>
            </div>
        </div>
    </div>
    
    <!-- NOMES PODRA ACCEDIR L'ADMINISTRADOR -->
    @if (Auth::user()->admin == 1)
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h1>ETS L'ADMINISTRADOR</h1><BR></BR>
                        <a class="" href="{{ route('admin') }}">PANELL D'ADMINSTRACIÓ PER ENVIAR DOS NÚMEROS ALEATORIS EN REAL-TIME A LA RESTA D'USUARIS.</a>
                    </div> 
                </div>
            </div>
        </div> 
    @endif

    <!-- SI L'USUARI ES ADMINISTRADOR NO PODRA VEURE AQESUT BLOC, JA QUE ES PER RETURNAR ELS NUMEROS SUMATS -->
    

    @if (Auth::user()->admin != 1)
    <!-- MISSATGE DE SUMA PER PART DE L'ADMNISTRADOR -->
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <h1 class="flex justify-content-center mt-5">MISSATGE DE L'ADMINISTRADOR</h1> 
                    <p class="flex justify-content-center"> (SUMA ALEATORIA DE DOS NÚMEROS)</p>
                    <h1 id="MensajeAdmin" class="flex justify-content-center mt-2">...</h1><br>

                    <form action="{{route('enviar')}}" method="post" id="formularioResposta" class="">
                        @csrf
                        <div class="input-group mb-3 flex justify-content-center mt-2">
                            <div class="input-group-append">
                                <input type="text" id="respuesta" placeholder="Escriu la teva resposta..." class="form-control"><br></br>
                                <button class="btn btn-outline-secondary bg-success" id="sendrespuesta" type="submit" style="color:white;"> Enviar</button>
                            </div>
                        </div><br>
                    </form>
                </div>
            </div>
        </div>
    @endif

</x-app-layout>
