@extends('adminlte::page')

@section('title', 'Maquinarias Multiservicios M&G')

@section('content_header')
<font face="Copperplate">
<h1 class="text-dark text-center font-medium"> E D I C I Ó N  D E  </h1>
<h1 class="text-dark text-center font-medium"> R E G I S T R O </h1>
<br><br>
</font>       
@stop

@section('content')
<font face="Courier New">

    <form action="/maquinarias/{{$maquinaria->id}}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Nombre Maquinaria</label>
            <input id="nombre" name="nombre" type="text" class="form-control" value="{{$maquinaria->nombre}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Descripción</label>
            <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$maquinaria->descripcion}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input id="precio" name="precio" type="text" class="form-control" value="{{$maquinaria->precio}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Fecha de Adquisición</label>
            <input id="fechaadq" name="fechaadq" type="date" class="form-control" value="{{$maquinaria->fechaadq}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Fecha de Baja</label>
            <input id="fechabaja" name="fechabaja" type="date" class="form-control" value="{{$maquinaria->fechabaja}}">
        </div>
        <div class="mb-3">
        <img src="/imagen/{{$maquinaria->imagen}}" width="20%">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Foto</label>
            <input id="imagen" name="imagen" type="file" class="form-control" value="{{$maquinaria->imagen}}">
        </div><br>

        <div class="mb-3>
            <label for="" class="form-label">Estado</label>
            <select name="estado" class="form-control">
            <option value="Activo" @if ($maquinaria->estado == 'Activo'  ) selected  @endif >Activo</option>
            <option value="Inactivo" @if ($maquinaria->estado == 'Inactivo'  ) selected  @endif >Inactivo</option>
            </select>
        </div><br><br>
       
        <a href="/maquinarias" class="btn btn-secundary" tabindex="5">Cancelar</a>
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