@extends('adminlte::page')

@section('title', 'Mosoj Chasqui')

@section('content_header')
    <h1>Editar Agente</h1>
@stop

@section('content')
   <form action="/Agentes/{{$Agentes->id}}" method="POST">    
   @csrf
   @method('PUT')
   <!--<div class="mb-3">
    <label for="" class="form-label">Código</label>
    <input id="codigo" name="codigo" type="text" class="form-control" value="{{$Agentes->codigo}}">    
  </div>-->

  <div class="mb-3">
    <label for="" class="form-label">Id</label>
    <input id=id name="id" type="number" class="form-control" value="{{$Agentes->id}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$Agentes->nombre}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Telefono</label>
    <input id="telefono" name="telefono" type="number" step="any" value="{{$Agentes->correo}}" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Correo</label>
    <input id="correo" name="correo" type="text" class="form-control" value="{{$Agentes->correo}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Detalle</label>
    <input id="detalle" name="detalle" type="text" class="form-control" value="{{$Agentes->detalle}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Imagen</label>
    <input id="imagen" name="imagen" type="text" class="form-control" value="{{$Agentes->imagen}}">
  </div>
  
  <a href="/Agentes" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop