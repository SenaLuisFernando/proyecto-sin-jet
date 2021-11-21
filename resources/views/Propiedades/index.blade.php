@extends('adminlte::page')

@section('title', 'Mosoj Chasqui')

@section('content_header')
    <h1>Propiedades ofertadas</h1>
@stop
@section('css')
<link href= "https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css"rel="stylesheet">
@endsection

@section('content')
   <a href="Propiedades/create" class="btn btn-primary mb-3">NUEVA PROPIEDAD</a>

<table id="propiedades" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
           
           <!-- <th scope="col">Código</th>-->
           <th scope="col">ID</th>
            <th scope="col">Descripción</th>
            <th scope="col">Tipo</th>
            <th scope="col">Detalle</th>
            <th scope="col">Ubicacion</th>
            <th scope="col">Precio</th>
            
            
        </tr>
    </thead>
    <tbody>
        @foreach ($propiedades as $propiedad)
        <tr>
            <td>{{$propiedad->id}}</td>
            <td>{{$propiedad->Descripcion}}</td>
            <td>{{$propiedad->tipo}}</td>
            <td>{{$propiedad->detalle}}</td>
            <td>{{$propiedad->ubicacion}}</td>
            <td>{{$propiedad->precio}}</td>
           
            
            <td>
                <form action="{{ route ('Propiedades.destroy',$propiedad->id)}}" method="POST">
                <a href="/Propiedades/{{ $propiedad->id}}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>



@stop