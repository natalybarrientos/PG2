@extends('adminlte::page')

@section('title', 'Maquinarias Multiservicios M&G')

@section('content_header')
<font face="Copperplate">
<h1 class="text-dark text-center font-medium"> M A Q U I N A R I A S </h1>
<h1 class="text-dark text-center font-medium"> R E G I S T R A D A S </h1>
</font>

@stop

@section('content')
<font face="Courier New">

<a href="maquinarias/create" class="btn btn-info mb-3">REGISTRAR</a>

<table id="maquinarias" class="table table-striped table-bordered shadow-lg text-center mt-4" style="width:100%">
    <thead class="bg-dark text-white text-center">
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre Maquinaria</th>
        <th scope="col">Descripción</th>
        <th scope="col">Precio</th>
        <th scope="col">Fecha de Adquisición</th>
        <th scope="col">Fecha de Baja</th>
        <th scope="col">Foto</th>
        <th scope="col">Estado</th>
        <th scope="col">Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($maquinarias as $maquinaria)
        <tr>
             <td>{{$maquinaria->id}}</td>
             <td>{{$maquinaria->nombre}}</td>
             <td>{{$maquinaria->descripcion}}</td>
             <td>{{$maquinaria->precio}}</td>
             <td>{{$maquinaria->fechaadq}}</td>
             <td>{{$maquinaria->fechabaja}}</td>
             <td>
             <img src="/imagen/{{$maquinaria->imagen}}" width="60%">
             </td>
             <td>{{$maquinaria->estado}}</td>
             <td>


             <form action="{{ route ('maquinarias.destroy',$maquinaria->id)}}" method="POST">
             <a href="/maquinarias/{{$maquinaria->id}}/edit"   class="btn btn-info">EDITAR</a>
             @csrf
             @method('DELETE')
             <button type="submit" class="btn btn-danger">ELIMINAR</button>
             </form>


             </td>
        </tr>
        @endforeach
    </tbody>


</table>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>
    
    <script>
    $(document).ready(function() {

        $('#maquinarias').DataTable ({
            language: {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando de Inicio a Fin el total de Información",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de MAX total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
        }
    },
            
        });
    
    });
    </script>
   
</font>
@stop
