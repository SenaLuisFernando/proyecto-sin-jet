@extends('adminlte::page')

@section('title', 'Mosoj Chasqui')

@section('content_header')
    <h1>Editar Propiedad</h1>
@stop

@section('content')
   <form action="/Tipos/{{$Tipos->id}}" method="POST">    
   @csrf
   @method('PUT')
   <!--<div class="mb-3">
    <label for="" class="form-label">Código</label>
    <input id="codigo" name="codigo" type="text" class="form-control" value="{{$Tipos->codigo}}">    
  </div>-->

  <div class="mb-3">
    <label for="" class="form-label">Id</label>
    <input id=id name="id" type="number" class="form-control" value="{{$Tipos->id}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$Tipos->nombre}}">
  </div>
  
  
  <a href="/Tipos" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop