@extends('adminlte::page')

@section('title', 'Empleados Multiservicios M&G')

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
    <form action="/empleados/{{$empleado->id}}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Nombre del Empleado</label>
            <input id="nombre" name="nombre" type="text" class="form-control" value="{{$empleado->nombre}}">
        </div><br>
        <div class="mb-3">
            <label for="" class="form-label">Documento de Identificación Personal</label>
            <input id="dpi" name="dpi" type="text" class="form-control" value="{{$empleado->dpi}}">
        </div><br>
        <div class="mb-3">
            <label for="" class="form-label">Fecha de Nacimiento</label>
            <input id="fecha" name="fecha" type="text" class="form-control" value="{{$empleado->fecha}}">
        </div><br>
        <div class="mb-3">
            <label for="" class="form-label">Número de Contacto</label>
            <input id="contacto" name="contacto" type="text" class="form-control" value="{{$empleado->contacto}}">
        </div><br>
        <div class="mb-3">
            <label for="" class="form-label">Dirección de Residencia</label>
            <input id="direccion" name="direccion" type="text" class="form-control" value="{{$empleado->direccion}}">
        </div><br>
        <div class="mb-3">
        <img src="/imagen/{{$empleado->imagen}}" width="20%">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Foto</label>
            <input id="imagen" name="imagen" type="file" class="form-control" value="{{$empleado->imagen}}">
        </div><br>

        <div class="mb-3>
            <label for="" class="form-label">Estado</label>
            <select name="estado" class="form-control">
            <option value="Activo" @if ($empleado->estado == 'Activo'  ) selected  @endif >Activo</option>
            <option value="Inactivo" @if ($empleado->estado == 'Inactivo'  ) selected  @endif >Inactivo</option>
            </select>
        </div><br><br>
       
        <div class="text-center">
        <a href="/empleados" class="btn btn-primary" tabindex="5"><i class="fa-solid fa-xmark"></i>   Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4"><i class="fa-solid fa-floppy-disk"></i>    Guardar</button>
        </div>
        <br><br>

    </form>

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