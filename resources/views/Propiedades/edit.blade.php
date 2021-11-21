@extends('adminlte::page')

@section('title', 'Mosoj Chasqui')

@section('content_header')
    <h1>Editar Propiedad</h1>
@stop

@section('content')
   <form action="/Propiedades/{{$Propiedades->id}}" method="POST">    
   @csrf
   @method('PUT')
   <!--<div class="mb-3">
    <label for="" class="form-label">Código</label>
    <input id="codigo" name="codigo" type="text" class="form-control" value="{{$Propiedades->codigo}}">    
  </div>-->

  <div class="mb-3">
    <label for="" class="form-label">Id</label>
    <input id=id name="id" type="number" class="form-control" value="{{$Propiedades->id}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="descripcion" name="Descripcion" type="text" class="form-control" value="{{$Propiedades->Descripcion}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tipo</label>
    <input id="tipo" name="tipo" type="text" class="form-control" value="{{$Propiedades->tipo}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Detalle</label>
    <input id="detalle" name="detalle" type="text" class="form-control" value="{{$Propiedades->detalle}}">
  </div>
  <div class="mb-3">
    <labSel for="" class="form-label">Ubicacion</label>
    <input id="ubicacion" name="ubicacion" type="text" class="form-control" value="{{$Propiedades->ubicacion}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Precio</label>
    <input id="precio" name="precio" type="number" step="any"class="form-control" value="{{$Propiedades->precio}}">
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