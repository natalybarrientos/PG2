@extends('adminlte::page')

@section('title', 'Gastos Multiservicios M&G')

@section('content_header')

<font face="Copperplate">
<h1 class="text-dark text-center font-medium"> R E G I S T R O  D E  </h1>
<h1 class="text-dark text-center font-medium"> G A S T O - P L A N I L L A </h1>
<br>
<br>
</font>   
@stop

<font face="Courier New">
@section('content')

<div class="container center col-md-5 col-md-offset-5">

    <form action="/gastoplanillas" method="POST" autocomplete="off">
    @csrf

    <!-- Descripción -->
        <div class="mb-3">
            <label for="" class="form-label">Descripción</label>
            <input id="descripcion" name="descripcion" placeholder="Ingresa una breve descripción del gasto." type="text" class="form-control" tabindex="1">
        </div>
        @error('descripcion')
         <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

    <!-- Costo -->
        <div class="mb-3">
            <label for="" class="form-label">Monto del Pago</label>
            <input id="costo" name="costo" placeholder="Ingresa el costo total del gasto."  type="number" step="0.01" min="0" class="form-control" tabindex="2">
        </div>
        @error('costo')
         <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

    <!-- Fecha de gasto-->
        <div class="mb-3">
            <label for="" class="form-label">Fecha del Pago</label>
            <input id="fecha" name="fecha" type="date" max="{{$fecha}}" class="form-control" tabindex="3">
        <div><br>

    
    <!-- Tipo de gasto -->
        <div class="mb-3">
            <label for="" class="form-label">Tipo de Gasto</label>
            <select name="tipogastos_id" class="form-control">
            @foreach ($tipogastos as $tipogasto)
                 @if ( $tipogasto->tipo == "Planilla")
                 <option value="{{$tipogasto->id}}">{{$tipogasto->tipo}}</option>
                 @endif
            @endforeach
           </select>
        </div><br>

    <!-- Empleado -->
        <div class="mb-3">
            <label for="" class="form-label">Empleado</label>
            <select name="empleado_id" class="form-control">
            @foreach ($empleados as $empleado)
                 @if($empleado->estado== "Activo" )
                <option value="{{$empleado->id}}">{{$empleado->nombre}}</option>
                @endif
            @endforeach
           </select>
        </div>
        <br><br>
    
    <!-- Botones -->
        <div class="text-center">
        <a href="/gastoplanillas" class="btn btn-primary" tabindex="5"><i class="fa-solid fa-xmark"></i>   Cancelar</a>
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

