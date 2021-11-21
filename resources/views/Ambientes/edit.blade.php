@extends('adminlte::page')

@section('title', 'Mosoj Chasqui')

@section('content_header')
    <h1>Editar Ambiente</h1>
@stop

@section('content')
   <form action="/Ambientes/{{$ambientes->id}}" method="POST">    
   @csrf
   @method('PUT')
   

  <div class="mb-3">
    <label for="" class="form-label">Id</label>
    <input id=id name="id" type="number" class="form-control" value="{{$ambientes->id}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Cuarto</label>
    <input id="cuarto" name="cuarto" type="text" class="form-control" value="{{$ambientes->cuarto}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Sala</label>
    <input id="sala" name="sala" type="text" class="form-control" value="{{$ambientes->sala}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Garaje</label>
    <input id="garaje" name="garaje" type="text" class="form-control" value="{{$ambientes->garaje}}">
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