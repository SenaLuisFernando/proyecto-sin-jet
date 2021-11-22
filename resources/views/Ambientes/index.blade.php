@extends('adminlte::page')

@section('title', 'Mosoj Chasqui')

@section('content_header')
    <h1>Ambientes</h1>
@stop
@section('css')
<link href= "https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css"rel="stylesheet">
@endsection

@section('content')
   <a href="Ambientes/create" class="btn btn-primary mb-3">NUEVO AMBIENTE</a>

<table id="ambientes" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
           
           <!-- <th scope="col">Código</th>-->
           <th scope="col">ID</th>
            <th scope="col">Cuarto</th>
            <th scope="col">Sala</th>
            <th scope="col">Garaje</th>
            <th scope="col">Cocina</th>
            <th scope="col">Baño</th>
            <th scope="col">Acciones</th>
            
            
        </tr>
    </thead>
    <tbody>
        @foreach ($ambientes  as $ambiente)
        <tr>
            <td>{{$ambiente->id}}</td>
            <td>{{$ambiente->cuarto}}</td>
            <td>{{$ambiente->sala}}</td>
            <td>{{$ambiente->garaje}}</td>
            <td>{{$ambiente->cocina}}</td>
            <td>{{$ambiente->baño}}</td>
           
            
            <td>
                <form action="{{ route ('Ambientes.destroy',$ambiente->id)}}" method="POST">
                <a href="/Ambientes/{{ $ambiente->id}}/edit" class="btn btn-info">Editar</a>
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