@extends('layouts.layout')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

@section('contingut')
<a style="color:blue;" href="{{ route('dashboard') }}">ENRERE</a>
<br><br><hr></br>
    <h1 class="text-center" style="font-size:20px;"><b>EDITA EL TEU USUARI: </b></h1>

@endsection

@section('contingut2')

    @if (count($errors) > 0)
    <div class="p-6 bg-white border-b border-gray-200"> 
        <div class="alert alert-danger">
            <p>ERROR EN GUARDAR ELS CANIVS.</p>
            <br>
            <ul>
                @foreach ($errors->all() as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif

    <div class="p-6 bg-white border-b border-gray-200"> 
        <form enctype= "multipart/form-data" method="POST" action="{{ route('usuari.update') }}">
            @csrf
            <div class="form-group">
                <label><b>NOM:</b></label><br>
                <input type="text" class="form-control" name="name"  value="{{ $user->name }}">
            </div>
            <br>
            <div class="form-group">
                <label><b>COGNOM:</b></label><br>
                <input type="text" class="form-control" name="cognoms"  value="{{ $user->cognoms }}">
            </div>
            <br>
            <div class="form-group">
                <label><b>EMAIL:</b></label><br>
                <input type="email" class="form-control" name="email" value="{{ $user->email }}">
            </div>
            <br>
            <div class="form-group">
                <label><b>CONTRASENYA:</b></label><br>
                <input type="password" class="form-control" name="password" placeholder="Introdueix la contrasenya" >
            </div>
            <br>
            <div class="form-group">
                <label><b>CONFIRMAR CONTRASENYA:</b></label><br>
                <input type="password" class="form-control" name="rpassword"placeholder="Confirma la contrasenya" >
            </div>

            <br>
            <div class="form-group">
                <label><b>IMATGE:</b></label><br>
                <input type="file" name="image"><br><br>
            </div>
           
            <button type="submit"  class="btn btn-success">GUARDAR CANVIS</button>
        </form>
    </div>

@endsection
