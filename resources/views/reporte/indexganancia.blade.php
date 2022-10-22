@extends('adminlte::page')

@section('title', 'Empleados Multiservicios M&G')

@section('content_header')

@stop

<font face="Courier New">
@section('content')

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="h-screen bg-gray-100">
<div class="text-center"> 
<br>
<br>
<h1 class="text-dark text-center font-medium"> GANANCIAS GENERADAS </h1>
<br>
<br>

<a href="#" class="btn btn-warning border border-dark p-5 text-center" style="font-size: large" ><i class="fa-solid fa-tractor"></i> | INGRESOS {{$ingresos}} </a>
<a href="#" class="btn btn-warning border border-dark p-5 text-center" style="font-size: large"><i class="fa-solid fa-clipboard"></i> | GASTOS {{$gastos}}</a>
<a href="#" class="btn btn-warning border border-dark p-5 text-center" style="font-size: large"><i class="fa-solid fa-clipboard"></i> | GANANCIAS {{$ganancias}}</a>
</div> 


<div class="container px-4 mx-auto">

    <div class="p-6 m-20 bg-white rounded shadow">
        {!! $chart2->container() !!}
    </div>

</div>


</body>
</html>






@stop


@section('css')
  
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ $chart2->cdn() }}"></script>

{{ $chart2->script() }}


    </font>
@stop
