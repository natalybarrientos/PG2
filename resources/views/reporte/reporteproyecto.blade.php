@extends('adminlte::page')

@section('title', 'Reporte Proyectos')

@section('content_header')
<font face="Copperplate">
<h1 class="text-dark text-center font-medium"> P R O Y E C T O S </h1>

<br>
<br>
</font> 

@stop

<font face="Courier New">
@section('content')


<a href="/reportes" class="btn btn-warning border border-dark"><i class="fa-solid fa-house"></i> | Regresar a Menú</a>
<br>
<br>

        <form action="/reportes/reporteproyecto/proyecto" method="POST" autocomplete="off">
        @csrf

    <!-- Fecha de inicio -->
        <div class="container center col-md-5 col-md-offset-5" >
            <label for="" class="form-label">Fecha de Inicio</label>
            <input id="fechabaja" name="fechaini" type="date" class="form-control" tabindex="5">
        </div><br>

    <!-- Fecha de fin -->
        <div class="container center col-md-5 col-md-offset-5" >
            <label for="" class="form-label">Fecha de Fin</label>
            <input id="fechabaja" name="fechafin" type="date" class="form-control" tabindex="5">
        </div><br>

        <div class="text-center">
        <button type="submit" class=" btn btn-primary" tabindex="4"><i class="fa-solid fa-person-circle-question"></i> | Consultar</button>
        </div><br><br>
        </form>
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

</font>
@stop