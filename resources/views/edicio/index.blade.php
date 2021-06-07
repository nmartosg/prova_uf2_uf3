<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(isset($misatge))
                    {{$misatge}}
                @endif
                   <form enctype="multipart/form-data" action="{{route('edicio.update')}}" method="post">
                    @csrf
                    @method('PUT')
                    nom:<input type="text" name="nom" id="" value="{{$usuari->name}}"><br>
                    cognoms:<input type="text" name="cognoms" id="" value="{{$usuari->cognoms}}"><br>
                    email:<input type="text" name="email" id=""value="{{$usuari->email}}"><br>
                    img:<input type="file" name="img" id="" accept="image/*" ><br><br>
                    contrasenya:<input type="password" name="contrasenya" id=""><br>
                    repetix contrasenya:<input type="password" name="contrasenya2" id=""><br>
                    <input type="submit" value="enviar">
                   </form>
                </div>
            </div>
        </div>
    </div>