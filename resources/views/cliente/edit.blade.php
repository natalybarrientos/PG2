@extends('adminlte::page')

@section('title', 'Clientes Multiservicios M&G')

@section('content_header')
<font face="Copperplate">
<h1 class="text-dark text-center font-medium"> E D I C I Ó N  D E  </h1>
<h1 class="text-dark text-center font-medium"> R E G I S T R O </h1>
<br><br>
</font> 
@stop

@section('content')
<font face="Courier New">


    <form action="/clientes/{{$cliente->id}}" method="POST">
    
    @csrf
    @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Nombre Cliente</label>
            <input id="nombre" name="nombre" type="text" class="form-control" value="{{$cliente->nombre}}">
        </div><br>
        <div class="mb-3">
            <label for="" class="form-label">NIT</label>
            <input id="nit" name="nit" type="text" class="form-control" value="{{$cliente->nit}}">
        </div><br>
        <div class="mb-3">
            <label for="" class="form-label">Número de Contacto</label>
            <input id="contacto" name="contacto" type="text" class="form-control" value="{{$cliente->contacto}}">
        </div><br>
        <div class="mb-3">
            <label for="" class="form-label">Dirección de Residencia</label>
            <input id="direccion" name="direccion" type="text" class="form-control" value="{{$cliente->direccion}}">
        </div><br>
        <div class="mb-3>
            <label for="" class="form-label">Estado</label>
            <select name="estado" class="form-control">
            <option value="Activo" @if ($cliente->estado == 'Activo'  ) selected  @endif >Activo</option>
            <option value="Inactivo" @if ($cliente->estado == 'Inactivo'  ) selected  @endif >Inactivo</option>
            </select>
        </div><br><br>
       
        <a href="/clientes" class="btn btn-secundary" tabindex="5">Cancelar</a>
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