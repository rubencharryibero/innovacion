@extends('layout.plantilla')
@section('title','Registro')
@section('content')

<div>
    <form action="#" method="POST">
        @csrf
    <div>
        <label for="Usuario">Usuario</label>
        <input type="text" name="usuario">
    </div>
    <div>
        <label for="Contraseña">Contraseña</label>
        <input type="text" name="contraseña">
    </div>
    <div>
        <input type="Submit" value="Ingresar" class="btn btn-primary">
    </div>
    </form>
</div>