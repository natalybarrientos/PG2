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

@section('content')
<font face="Courier New">

    <form action="/proyectos" method="POST">
    @csrf
        <div class="mb-3">
            <label for="" class="form-label">Descripción *</label>
            <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="1">
        </div><br>
        <div class="mb-3">
            <label for="" class="form-label">Costo *</label>
            <input id="costo" name="costo" type="text" class="form-control" tabindex="2">
        </div><br>


        <div class="mb-3">
            <label for="" class="form-label">Cliente *</label>
            <select name="cliente" class="form-control">
            @foreach ($clientes as $cliente)
            @if ($cliente->estado != 'Inactivo')
            <option value="{{$cliente->id}}">{{$cliente->nombre}}</option>
            @endif
          @endforeach
           </select>
        </div><br>



        <div class="mb-3">
            <label for="" class="form-label">Empleado *</label>
            <select name="empleado" class="form-control">
            @foreach ($empleados as $empleado)
            @if ($empleado->estado != 'Inactivo')
            <option value="{{$empleado->id}}">{{$empleado->nombre}}</option>
                @endif
          @endforeach
           </select>
        </div><br>



        <div class="mb-3">
            <label for="" class="form-label">Fecha de Inicio del Proyecto *</label>
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


        <a href="/proyectos" class="btn btn-secundary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
        <br><br><br><br>
    </form>
@stop

@section('css')
   
@section('js')

        <script>
            $(document).ready(function() {
                $('.maquinaria').select2();
            });
        </script>

 
</font>
@stop