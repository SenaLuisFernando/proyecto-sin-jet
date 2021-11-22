@extends('adminlte::page')

@section('title', 'Mosoj Chasqui')

@section('content_header')
   <h1>Nuevo Tipo de Propiedad</h1>
@stop

@section('content')
    
<form action="/Tipos" method="POST">
  @csrf
 <!-- <div class="mb-3">
    <label for="" class="form-label">Id</label>
    <input id="Id" name="Id" type="number" class="form-control" tabindex="1">    
  </div>-->
   

    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="Nombre" type="text" class="form-control" tabindex="2">
  </div>
 
  <a href="/Tipos" class="btn btn-secondary" tabindex="3">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop