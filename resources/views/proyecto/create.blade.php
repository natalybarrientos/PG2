@extends('adminlte::page')

@section('title', 'Proyectos Multiservicios M&G')

@section('content_header')
<font face="Copperplate">
<h1 class="text-dark text-center font-medium"> R E G I S T R O  D E  </h1>
<h1 class="text-dark text-center font-medium"> P R O Y E C T O </h1>
<br>
<br>
</font> 
@stop

<font face="Courier New">
@section('content')


    <form action="/proyectos" method="POST">
    @csrf
        <div class="mb-3">
            <label for="" class="form-label">Descripción </label>
            <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="1">
        </div><br>
        <div class="mb-3">
            <label for="" class="form-label">Costo </label>
            <input id="costo" name="costo" type="text" class="form-control" tabindex="2">
        </div><br>

        <div class="mb-3">
            <label for="" class="form-label">Cliente </label>
            <select name="cliente" class="form-control">
            @foreach ($clientes as $cliente)
            @if ($cliente->estado != 'Inactivo')
            <option value="{{$cliente->id}}">{{$cliente->nombre}}</option>
            @endif
          @endforeach
           </select>
        </div><br>

        <div class="mb-3">
            <label for="" class="form-label">Empleado </label>
            <select name="empleado" class="form-control">
            @foreach ($empleados as $empleado)
            @if ($empleado->estado != 'Inactivo')
            <option value="{{$empleado->id}}">{{$empleado->nombre}}</option>
                @endif
          @endforeach
           </select>
        </div><br>

        <div class="mb-3">
            <label for="" class="form-label">Fecha de Inicio del Proyecto </label>
            <input id="fechainicio" name="fechainicio" type="date" class="form-control" tabindex="5">
        </div><br>
        <div class="mb-3">
            <label for="" class="form-label">Fecha de Fin del Proyecto</label>
            <input id="fechafin" name="fechafin" type="date" class="form-control" tabindex="6">
        </div><br>

        <div class="form-group mb-3">
              <label for="select2Multiple">Maquinaria</label>
              <select class="maquinaria form-control" name="maquinaria[]" multiple="multiple"
                id="maquinaria">

                @foreach ($maquinarias as $maquinaria)
                @if ($maquinaria->estado != 'Inactivo')
            <option value="{{$maquinaria->id}}">{{$maquinaria->nombre}}</option>
            @endif
            @endforeach             
              </select>
        </div><br> 

        
         
        <br><br>


        <div class="text-center">
        <a href="/proyectos" class="btn btn-primary" tabindex="5"><i class="fa-solid fa-xmark"></i>   Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4"><i class="fa-solid fa-floppy-disk"></i>    Guardar</button>
        </div> <br><br>

    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@section('js')
<script> console.log('Hi!');</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
        <script>
            $(document).ready(function() {
                $('.maquinaria').select2();
            });
        </script>

 
</font>
@stop