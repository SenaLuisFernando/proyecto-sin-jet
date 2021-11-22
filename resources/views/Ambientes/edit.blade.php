@extends('adminlte::page')

@section('title', 'Mosoj Chasqui')

@section('content_header')
    <h1>Editar Propiedad</h1>
@stop

@section('content')
   <form action="/Ambientes/{{$Ambientes->id}}" method="POST">    
   @csrf
   @method('PUT')
   <!--<div class="mb-3">
    <label for="" class="form-label">Código</label>
    <input id="codigo" name="codigo" type="text" class="form-control" value="{{$Ambientes->codigo}}">    
  </div>-->

  <div class="mb-3">
    <label for="" class="form-label">Id</label>
    <input id=id name="id" type="number" class="form-control" value="{{$Ambientes->id}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Cuarto</label>
    <input id="cuarto" name="cuarto" type="number" step="any"class="form-control" value="{{$Ambientes->cuarto}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Sala</label>
    <input id="sala" name="sala" type="number" step="any"class="form-control" value="{{$Ambientes->sala}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Garaje</label>
    <input id="garaje" name="garaje" type="number" step="any"class="form-control" value="{{$Ambientes->garaje}}">
  </div>
  <div class="mb-3">
    <labSel for="" class="form-label">Cocina</label>
    <input id="cocina" name="cocina" type="number" step="any"class="form-control" value="{{$Ambientes->cocina}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Baño</label>
    <input id="baño" name="baño" type="number" step="any"class="form-control" value="{{$Ambientes->baño}}">
  </div>
  
  <a href="/Ambientes" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop