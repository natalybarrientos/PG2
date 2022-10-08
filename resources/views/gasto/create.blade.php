@extends('adminlte::page')

@section('title', 'Gastos Multiservicios M&G')

@section('content_header')

<font face="Copperplate">
<h1 class="text-dark text-center font-medium"> R E G I S T R O  D E  </h1>
<h1 class="text-dark text-center font-medium"> G A S T O - M A Q U I N A R I A </h1>
<br>
<br>
</font>   
@stop

<font face="Courier New">
@section('content')

<div class="container center col-md-5 col-md-offset-5">

    <form action="/gastos" method="POST" autocomplete="off">
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
            <label for="" class="form-label">Costo</label>
            <input id="costo" name="costo" type="number" step="0.01" min="0" placeholder="Ingresa el costo total del gasto." class="form-control" tabindex="2">
        </div>
        @error('costo')
         <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

    <!-- Fecha Gasto -->
        <div class="mb-3">
            <label for="" class="form-label">Fecha de Gasto</label>
            <input id="fecha" name="fecha" type="date" max="{{$fecha}}" class="form-control" tabindex="3">
        </div><br>

    <!-- Factura -->
        <div class="mb-3">
            <label for="" class="form-label">Número de Factura o Vale emitido</label>
            <input id="factura" name="factura" placeholder="Ingresa el número de Factura o Vale emitido." type="text" class="form-control" tabindex="4">
        </div><br>
    
    <!-- Tipo de gasto -->
        <div class="mb-3">
            <label for="" class="form-label">Tipo de Gasto</label>
            <select name="tipogastos_id" class="form-control">
            @foreach ($tipogastos as $tipogasto)
                 <option value="{{$tipogasto->id}}">{{$tipogasto->tipo}}</option>
            @endforeach
           </select>
        </div><br>

    <!-- Maquinaria -->
        <div class="mb-3">
            <label for="" class="form-label">Maquinaria</label>
            <select name="maquinaria_id" class="form-control">
             @foreach ($maquinarias as $maquinaria)
                <option value="{{$maquinaria->id}}">{{$maquinaria->nombre}}</option>
             @endforeach
            </select>
        </div><br>

    <!-- Empleado -->
        <div class="mb-3">
            <label for="" class="form-label">Empleado</label>
            <select name="empleado_id" class="form-control">
            @foreach ($empleados as $empleado)
                <option value="{{$empleado->id}}">{{$empleado->nombre}}</option>
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

