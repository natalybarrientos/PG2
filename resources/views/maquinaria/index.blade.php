@extends('adminlte::page')

@section('title', 'Maquinarias Multiservicios M&G')

@section('content_header')
<font face="Copperplate">
<h1 class="text-dark text-center font-medium"> M A Q U I N A R I A S </h1>
<h1 class="text-dark text-center font-medium"> R E G I S T R A D A S </h1>
<br>
<br>
</font>
@stop


<font face="Courier New">
@section('content')


<a href="maquinarias/create" class="btn btn-info mb-3"><i class="fa-solid fa-file-circle-plus"></i> | REGISTRAR</a>
<a href="maquinarias/pdf" class="btn btn-danger mb-3"><i class="fa-solid fa-file-pdf"></i> | PDF</a>


<div class="table-responsive">

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

             <a href="/maquinarias/{{$maquinaria->id}}/edit" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i> </a>
             <a href="/gastos/create/{{$maquinaria->id}}" class="btn btn-info"><i class="fa-solid fa-file-invoice-dollar"></i> </a>

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

    <script>
    $(document).ready(function() {

        $('#maquinarias').DataTable ({
            language: {
                "decimal": "",
                "emptyTable": "No se encontro Resultados",
                "info": "Mostrando del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de un total de _MAX_ registros)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "No se encontro Resultados",
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
