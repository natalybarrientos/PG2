@extends('adminlte::page')

@section('title', 'Reporte Gasto Total')

@section('content_header')
<font face="Copperplate">
<h1 class="text-dark text-center font-medium"> G A S T O S </h1>
<h1 class="text-dark text-center font-medium"> R E G I S T R A D O S </h1>
<br>
<br>
</font>

@stop

<font face="Courier New">
@section('content')


<a href="#" class="btn btn-danger mb-3"><i class="fa-solid fa-hand-holding-dollar"></i> | Total de Gasto generado: {{$total}}</a>


<div class="table-responsive">

<table id="gastos" class="table table-striped table-bordered shadow-lg text-center mt-4" style="width:100%">
    <thead class="bg-dark text-white text-center">
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Descripción</th>
        <th scope="col">Costo</th>
        <th scope="col">Fecha de Factura o Vale</th>
        <th scope="col">Factura o Vale</th>
        <th scope="col">Tipo de gasto</th>
        <th scope="col">Maquinaria</th>
        <th scope="col">Empleado</th>
   
        </tr>
    </thead>
   
    <tbody>
        @foreach ($gastos as $gasto)
       
        <tr>
             <td>{{$gasto->id}}</td>
             <td>{{$gasto->descripcion}}</td>
             <td>{{$gasto->costo}}</td>
             <td>{{$gasto->fecha}}</td>
             <td>{{$gasto->factura}}</td>
             <td>{{$gasto->tipogasto->tipo}}</td>

             @if ($gasto->tipogasto->tipo != "Planilla")
             <td>{{$gasto->maquinarias->nombre}}</td>
             @else
             <td>Sin datos</td>
             @endif
             
             <td>{{$gasto->empleados->nombre}}</td>
             
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

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
    $(document).ready(function() {

        $('#gastos').DataTable ({
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