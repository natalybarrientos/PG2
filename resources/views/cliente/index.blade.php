@extends('adminlte::page')

@section('title', 'Clientes Multiservicios M&G')


@section('content_header')

<font face="Copperplate">
<h1 class="text-dark text-center font-medium"> C L I E N T E S </h1>
<h1 class="text-dark text-center font-medium"> R E G I S T R A D O S </h1>
<br>
<br> 
</font>

@stop
<font face="Courier New">
@section('content')


<a href="clientes/create" class="btn btn-info mb-3"><i class="fa-solid fa-file-circle-plus"></i>   REGISTRAR</a>

<a href="clientes/pdf" class="btn btn-info mb-3"><i class="fa-solid fa-file-pdf"></i>   PDF</a>

<div class="table-responsive">

<table id="clientes" class="table table-striped table-bordered shadow-lg text-center mt-4" style="width:100%">
    <thead class="bg-dark text-white text-center">
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre Cliente</th>
        <th scope="col">NIT</th>
        <th scope="col">Número de Contacto</th>
        <th scope="col">Dirección de Residencia</th>
        <th scope="col">Estado</th>
        <th scope="col">Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($clientes as $cliente)
        <tr>
             <td>{{$cliente->id}}</td>
             <td>{{$cliente->nombre}}</td>
             <td>{{$cliente->nit}}</td>
             <td>{{$cliente->contacto}}</td>
             <td>{{$cliente->direccion}}</td>
             <td>{{$cliente->estado}}</td>
             <td>

             <a href="/clientes/{{$cliente->id}}/edit"   class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i>   EDITAR</a>

             </td>
        </tr>
        @endforeach
    </tbody>


</table>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.datatables.net/buttons-1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables/buttons-1.6.5/js/buttons.html5.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/datatables-buttons-excel-styles@1.1.1/js/buttons.html5.styles.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/datatables-buttons-excel-styles@1.1.1/js/buttons.html5.styles.templates.min.js"></script>

    <script>
    $(document).ready(function() {

        $('#clientes').DataTable ({
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