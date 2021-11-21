@extends('adminlte::page')

@section('title', 'Mosoj Chasqui')

@section('content_header')
   <h1>Nueva Propiedad</h1>
@stop

@section('content')
    
<form action="/Propiedades" method="POST">
  @csrf
 <!-- <div class="mb-3">
    <label for="" class="form-label">Id</label>
    <input id="Id" name="Id" type="number" class="form-control" tabindex="1">    
  </div>-->
   

    <label for="" class="form-label">Descripción</label>
    <input id="descripcion" name="Descripcion" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tipo</label>
    <input id="tipo" name="tipo" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Detalle</label>
    <input id="detalle" name="detalle" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">

  <div class="mb-3">
    <label for="" class="form-label">Ubicacion</label>
    <input id="ubicacion" name="ubicacion" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Precio</label>
    <input id="precio" name="precio" type="number" step="any" value="0.00" class="form-control" tabindex="3">
  </div>
 
  <a href="/Propiedades" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop