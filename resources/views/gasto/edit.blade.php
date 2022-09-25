@extends('adminlte::page')

@section('title', 'Gastos Multiservicios M&G')

@section('content_header')
<font face="Copperplate">
<h1 class="text-dark text-center font-medium"> E D I C I Ó N  D E  </h1>
<h1 class="text-dark text-center font-medium"> R E G I S T R O </h1>
<br><br>
</font>      
@stop

@section('content')
<font face="Courier New">

    <form action="/gastos/{{$gasto->id}}" method="POST">


    @csrf
    @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Descripción</label>
            <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$gasto->descripcion}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Costo</label>
            <input id="costo" name="costo" type="text" class="form-control" value="{{$gasto->costo}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Fecha de Gasto</label>
            <input id="fecha" name="fecha" type="date" class="form-control" value="{{$gasto->fecha}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Número de Factura o Vale emitido</label>
            <input id="factura" name="factura" type="text" class="form-control" value="{{$gasto->factura}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Tipo de Gasto</label>
            <select name="tipogastos_id" class="form-control">
           @foreach ($tipogastos as $tipogasto)
            <option value="{{$tipogasto->id}}" @if ($tipogasto->id == $gasto->tipogastos_id  ) selected  @endif >{{$tipogasto->tipo}}</option>
          @endforeach
           </select>    
        </div>
        <br><br>
       
        <a href="/gastos" class="btn btn-secundary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">

@section('js')
    <script> console.log('Hi!');</script>
    
    </font>
@stop