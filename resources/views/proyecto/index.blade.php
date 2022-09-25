@extends('adminlte::page')

@section('title', 'Empleados Multiservicios M&G')

@section('content_header')
<font face="Copperplate">
<h1 class="text-dark text-center font-medium"> P R O Y E C T O S </h1>
<h1 class="text-dark text-center font-medium"> R E G I S T R A D O S </h1>
</font>

@stop

@section('content')
<font face="Courier New">

<a href="proyectos/create" class="btn btn-info mb-3">REGISTRAR</a>

<table id="proyectos" class="table table-striped table-bordered shadow-lg text-center mt-4" style="width:100%">
    <thead class="bg-dark text-white text-center">
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Descripción</th>
        <th scope="col">Costo</th>
        <th scope="col">Cliente</th>
        <th scope="col">Empleado Encargado</th>
        <th scope="col">Fecha Inicio</th>
        <th scope="col">Fecha Fin</th>
        <th scope="col">Maquinaria</th>
        <th scope="col">Estado</th>
        <th scope="col">Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($proyectos as $proyecto) 
        <tr>
             <td>{{$proyecto->id}}</td>
             <td>{{$proyecto->descripcion}}</td>
             <td>{{$proyecto->costo}}</td>
             <td>{{$proyecto->clientes->nombre}}</td>
             <td>{{$proyecto->empleados->nombre}}</td>
             <td>{{$proyecto->fechainicio}}</td>
             <td>{{$proyecto->fechafin}}</td>
             <td>
             
              @foreach($proyecto->maquinarias as $maquinaria)
                {{$maquinaria->nombre}}
              @endforeach
             
             </td>
             <td>{{$proyecto->estado}}</td>

             <td>
             <form action="{{ route ('proyectos.destroy',$proyecto->id)}}" method="POST">
             <a href="/proyectos/{{$proyecto->id}}/edit"   class="btn btn-info">EDITAR</a>
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

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>
    
    <script>
    $(document).ready(function() {

        $('#proyectos').DataTable ({
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
