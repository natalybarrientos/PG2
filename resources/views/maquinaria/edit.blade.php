@extends('adminlte::page')

@section('title', 'Maquinarias Multiservicios M&G')

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

    <form action="/maquinarias/{{$maquinaria->id}}" method="POST" enctype="multipart/form-data" autocomplete="off">

    @csrf
    @method('PUT')

    <!-- Maquinaria -->
        <div class="mb-3">
            <label for="" class="form-label">Nombre Maquinaria</label>
            <input id="nombre" name="nombre" type="text" class="form-control" value="{{$maquinaria->nombre}}">
        </div>
        @error('nombre')
         <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

    <!-- Descripción -->
        <div class="mb-3">
            <label for="" class="form-label">Descripción</label>
            <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$maquinaria->descripcion}}">
        </div>
        @error('descripcion')
         <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

    <!-- Precio -->
        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input id="precio" name="precio" type="number" step="0.01" min="0" class="form-control" value="{{$maquinaria->precio}}">
        </div>
        @error('precio')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

    <!-- Fecha de Adquisición -->
        <div class="mb-3">
            <label for="" class="form-label">Fecha de Adquisición</label>
            <input id="fechaadq" name="fechaadq" type="date" max="{{$fecha}}" class="form-control" value="{{$maquinaria->fechaadq}}">
        </div>
        @error('fechaadq')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

    <!-- Fecha de baja -->
        <div class="mb-3">
            <label for="" class="form-label">Fecha de Baja</label>
            <input id="fechabaja" name="fechabaja" type="date" class="form-control" value="{{$maquinaria->fechabaja}}">
        </div><br>
    
    <!-- Fotografía -->
        <div>
        <label for="" class="form-label">Fotografía</label>
            <div class="mb-3">
            <img src="/imagen/{{$maquinaria->imagen}}" width="300px">
            </div>
                <div class="mb-3">
                <label for="imagen" class="btn btn-success"><i class="fa-solid fa-arrow-up-from-bracket"></i>
                <span> | Cambiar Imagen</span>
                <input id="imagen" name="imagen" type="file" class="sr-only" value="{{$maquinaria->imagen}}">
                </div><br>
        </div>
        <br>
        
    <!-- Estado -->
        <div class="mb-3">
            <label for="" class="form-label">Estado</label>
            <select name="estado" class="form-control">
            <option value="Activo" @if ($maquinaria->estado == 'Activo'  ) selected  @endif >Activo</option>
            <option value="Inactivo" @if ($maquinaria->estado == 'Inactivo'  ) selected  @endif >Inactivo</option>
            </select>
        </div>
        <br><br>
    
    <!-- Botones -->
        <div class="text-center">
        <a href="/maquinarias" class="btn btn-primary" tabindex="5"><i class="fa-solid fa-xmark"></i>   Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4"><i class="fa-solid fa-floppy-disk"></i>    Guardar</button>
        </div>
        <br><br>

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