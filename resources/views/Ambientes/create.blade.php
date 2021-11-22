@extends('adminlte::page')

@section('title', 'Mosoj Chasqui')

@section('content_header')
   <h1>Nuevo Ambiente</h1>
@stop

@section('content')
    
<form action="/Ambientes" method="POST">
  @csrf
 <!-- hola eh camnbiado el codigo deberias ver esto  se esta modificando algo uno dos </div>-->
   

    <label for="" class="form-label">Cuarto</label>
    <input id="cuarto" name="cuarto" type="number" step="any" value="0.00" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Sala</label>
    <input id="sala" name="sala" type="number" step="any" value="0.00" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Garaje</label>
    <input id="garaje" name="garaje" type="number" step="any" value="0.00" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">

  <div class="mb-3">
    <label for="" class="form-label">Cocina</label>
    <input id="cocina" name="cocina" type="number" step="any" value="0.00" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Baño</label>
    <input id="baño" name="baño" type="number" step="any" value="0.00" class="form-control" tabindex="3">
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