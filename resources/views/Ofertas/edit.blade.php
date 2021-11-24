@extends('adminlte::page')

@section('title', 'Mosoj Chasqui')

@section('content_header')
    <h1>Editar Oferta</h1>
@stop

@section('content')
   <form action="/Ofertas/{{$Ofertas->id}}" method="POST">    
   @csrf
   @method('PUT')
   <!--<div class="mb-3">
    <label for="" class="form-label">Código</label>
    <input id="codigo" name="codigo" type="text" class="form-control" value="{{$Ofertas->codigo}}">    
  </div>-->

  <div class="mb-3">
    <label for="" class="form-label">Id</label>
    <input id=id name="id" type="number" class="form-control" value="{{$Ofertas->id}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Estado</label>
    <input id="estado" name="estado" type="text" class="form-control" value="{{$Ofertas->estado}}">
  </div>
  
  
  <a href="/Ofertas" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop