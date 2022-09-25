@extends('adminlte::page')

@section('title', 'Proyectos Multiservicios M&G')

@section('content_header')
<font face="Copperplate">
<h1 class="text-dark text-center font-medium"> E D I C I Ó N  D E  </h1>
<h1 class="text-dark text-center font-medium"> R E G I S T R O </h1>
<br><br>
</font>      
@stop

@section('content')
<font face="Courier New">


    <form action="/proyectos/{{$proyecto->id}}" method="POST">

    @csrf
    @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Descripción</label>
            <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$proyecto->descripcion}}">
        </div><br>
        <div class="mb-3">
            <label for="" class="form-label">Costo</label>
            <input id="costo" name="costo" type="text" class="form-control" value="{{$proyecto->costo}}">
        </div><br>
        <div class="mb-3">
            <label for="" class="form-label">Cliente</label>
            <select name="cliente" class="form-control">
           @foreach ($clientes as $cliente)
           @if ($cliente->estado!='Inactivo' || $cliente->id == $proyecto->cliente_id  )
            <option value="{{$cliente->id}}" @if ($cliente->id == $proyecto->cliente_id  ) selected  @endif >{{$cliente->nombre}}</option>
          @endif
          @endforeach 
           </select>    
        </div><br>
        <div class="mb-3">
            <label for="" class="form-label">Empleado Encargado</label>
            <select name="empleado" class="form-control">
           @foreach ($empleados as $empleado)
            @if ($empleado->estado != 'Inactivo' || $empleado->id == $proyecto->empleado_id )
            <option value="{{$empleado->id}}" @if ($empleado->id == $proyecto->empleado_id  ) selected  @endif >{{$empleado->nombre}}</option>
            @endif
          @endforeach
           </select>    
        </div><br>
        <div class="mb-3">
            <label for="" class="form-label">Fecha de Inicio del Proyecto</label>
            <input id="fechainicio" name="fechainicio" type="date" class="form-control" value="{{$proyecto->fechainicio}}">
        </div><br>
        <div class="mb-3">
            <label for="" class="form-label">Fecha de Finalización del Proyecto</label>
            <input id="fechafin" name="fechafin" type="date" class="form-control" value="{{$proyecto->fechafin}}">
        </div><br>
        <div class="form-group mb-3">
              <label for="select2Multiple">Maquinarias</label>
              <select class="maquinaria form-control" name="maquinaria[]" multiple="multiple"
                id="maquinaria">

        @foreach ($maquinarias as $maquinaria)
        <option {{ collect(old('maquinarias', $proyecto->maquinarias->pluck('id')))->contains($maquinaria->id) ? 'selected' : '' }} value="{{ $maquinaria -> id }}">{{ $maquinaria -> nombre }}</option>
        @endforeach
                               
              </select>
            </div><br>
        <div class="mb-3>
            <label for="" class="form-label">Estado</label>
            <select name="estado" class="form-control">
            <option value="Iniciado" @if ('Iniciado' == $proyecto->estado  ) selected  @endif>Iniciado</option>
            <option value="Pendiente" @if ('Pendiente' == $proyecto->estado  ) selected  @endif>Pendiente</option>
            <option value="Finalizado" @if ('Finalizado' == $proyecto->estado  ) selected  @endif>Finalizado</option>
            </select>
        </div><br><br>
       
        <a href="/proyectos" class="btn btn-secundary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">

@section('js')
    <script> console.log('Hi!');</script>
    <script>
            $(document).ready(function() {
                $('.maquinaria').select2();
            });
        </script>

</font>
@stop
