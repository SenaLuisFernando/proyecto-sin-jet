@extends('adminlte::page')

@section('title', 'Mosoj Chasqui')

@section('content_header')
   <h1>Nuevo Agente</h1>
@stop

@section('content')
    
<form action="/Agentes" method="POST">
  @csrf
 <!-- <div class="mb-3">
    <label for="" class="form-label">Id</label>
    <input id="Id" name="Id" type="number" class="form-control" tabindex="1">    
  </div>-->
   

    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Telefono</label>
    <input id="telefono" name="telefono" type="number" step="any" value="0.00" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Correo</label>
    <input id="correo" name="correo" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">

  <div class="mb-3">
    <label for="" class="form-label">Detalle</label>
    <input id="detalle" name="detalle" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Imagen</label>
    <input id="imagen" name="imagen" type="text" class="form-control" tabindex="2">
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