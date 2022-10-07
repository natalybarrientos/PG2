@extends('adminlte::page')

@section('title', 'Gastos Multiservicios M&G')

@section('content_header')
<font face="Copperplate">
<h1 class="text-dark text-center font-medium"> E D I C I Ó N  D E  </h1>
<h1 class="text-dark text-center font-medium"> R E G I S T R O </h1>
<br>
<br>
</font>      
@stop

<font face="Courier New">
@section('content')

<div class="container center col-md-5 col-md-offset-5">

    <form action="/gastoplanillas/{{$gasto->id}}" method="POST" autocomplete="off">


    @csrf
    @method('PUT')

    <!-- Descripción -->
        <div class="mb-3">
            <label for="" class="form-label">Descripción</label>
            <input id="descripcion" name="descripcion"  type="text" class="form-control" value="{{$gasto->descripcion}}">
        </div>
        @error('descripcion')
         <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

    <!-- Costo -->
        <div class="mb-3">
            <label for="" class="form-label">Costo</label>
            <input id="costo" name="costo" type="text" class="form-control" value="{{$gasto->costo}}">
        </div><br>

    <!-- Fecha de gasto -->
        <div class="mb-3">
            <label for="" class="form-label">Fecha de Gasto</label>
            <input id="fecha" name="fecha" type="date" class="form-control" value="{{$gasto->fecha}}">
        </div><br>
    
    <!-- Factura -->
        <div class="mb-3">
            <label for="" class="form-label">Número de Factura o Vale emitido</label>
            <input id="factura" name="factura" type="text" class="form-control" value="{{$gasto->factura}}">
        </div><br>

    <!-- Tipo de gasto -->
        <div class="mb-3">
            <label for="" class="form-label">Tipo de Gasto</label>
            <select name="tipogastos_id" class="form-control">
            @foreach ($tipogastos as $tipogasto)
                @if ( $tipogasto->tipo == "Planilla")
                <option value="{{$tipogasto->id}}" @if ($tipogasto->id == $gasto->tipogastos_id  ) selected  @endif >{{$tipogasto->tipo}}</option>
                @endif
            @endforeach
            </select>    
        </div><br>

    <!-- Empleado -->
        <div class="mb-3">
            <label for="" class="form-label">Empleado</label>
            <select name="empleado_id" class="form-control">
            @foreach ($empleados as $empleado)
                @if ($empleado->estado != 'Inactivo' || $empleado->id == $gasto->empleado_id )
                <option value="{{$empleado->id}}" @if ($empleado->id == $empleado->empleado_id  ) selected  @endif >{{$empleado->nombre}}</option>
                @endif
            @endforeach
           </select>    
        </div>

        <br><br>
    
    <!-- Botones -->
        <div class="text-center">
        <a href="/gastos" class="btn btn-primary" tabindex="5"><i class="fa-solid fa-xmark"></i>   Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4"><i class="fa-solid fa-floppy-disk"></i>    Guardar</button>
        </div><br><br>


    </form>
 
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@section('js')
    <script> console.log('Hi!');</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    </font>
@stop