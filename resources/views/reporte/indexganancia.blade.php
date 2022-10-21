@extends('adminlte::page')

@section('title', 'Empleados Multiservicios M&G')

@section('content_header')

@stop

<font face="Courier New">
@section('content')

<div class="text-center"> 
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h1 class="text-dark text-center font-medium"> GANANCIAS GENERADAS </h1>
<br>
<br>


<a href="#" class="btn btn-warning border border-dark p-5 text-center" style="font-size: large" ><i class="fa-solid fa-tractor"></i> | INGRESOS {{$ingresos}} </a>

<a href="#" class="btn btn-warning border border-dark p-5 text-center" style="font-size: large"><i class="fa-solid fa-clipboard"></i> | GASTOS {{$gastos}}</a>
<a href="#" class="btn btn-warning border border-dark p-5 text-center" style="font-size: large"><i class="fa-solid fa-clipboard"></i> | GANANCIAS {{$ganancias}}</a>

<br>
<br>
<br>
<br>

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



    </font>
@stop