@extends('adminlte::page')

@section('title', 'Reporte Gasto Maquinaria')

@section('content_header')
<font face="Copperplate">
<h1 class="text-dark text-center font-medium"> G A S T O</h1>
<h1 class="text-dark text-center font-medium"> M A Q U I N A R I A</h1>
<br>
<br>
</font> 

@stop

<font face="Courier New">
@section('content')


<a href="/reportes" class="btn btn-warning border border-dark"><i class="fa-solid fa-house"></i> | Regresar a Menú</a>
<br>
<br>
    
        <form action="/reportes/gastomaquinaria/maquinaria" method="POST" autocomplete="off">
        @csrf


    <!-- Maquinaria -->
        <div class="container center col-md-5 col-md-offset-5">
            <label for="" class="form-label">Maquinaria</label>
            <select name="maquinaria_id" class="form-control">
             @foreach ($maquinarias as $maquinaria)
               <option value="{{$maquinaria->id}}">{{$maquinaria->nombre}}</option>
             @endforeach
            
            </select>
        </div><br>


    <!-- Tipo de gasto -->
        <div class="container center col-md-5 col-md-offset-5">
            <label for="" class="form-label">Tipo de Gasto</label>
            <select name="tipogastos_id" class="form-control">
            @foreach ($tipogastos as $tipogasto)
                 @if ( $tipogasto->tipo != "Planilla" && $tipogasto->tipo != "Compra")
                 <option value="{{$tipogasto->id}}">{{$tipogasto->tipo}}</option>
                 @endif
            @endforeach
           </select>
        </div><br>

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