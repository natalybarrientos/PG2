@extends('adminlte::page')

@section('title', 'Clientes Multiservicios M&G')

@section('content_header')

<font face="Copperplate">
<h1 class="text-dark text-center font-medium"> R E G I S T R O  D E  </h1>
<h1 class="text-dark text-center font-medium"> C L I E N T E </h1>
<br>
<br> 
</font> 

@stop
<font face="Courier New">
@section('content')

<div class="container center col-md-5 col-md-offset-5">

    <form action="/clientes" method="POST" autocomplete="off">
    @csrf

    <!-- Nombre de Cliente -->
        <div class="mb-3">
            <label for="" class="form-label">Nombre Cliente</label>
            <input id="nombre" name="nombre" placeholder="Ingresa Nombre Completo del Cliente" type="text" class="form-control" tabindex="1">
        </div>
        @error('nombre')
         <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

    <!-- NIT -->
        <div class="mb-3">
            <label for="" class="form-label">NIT</label>
            <input id="nit" name="nit" placeholder="Ingresa Número de Identificación Tributaria -NIT-" type="text" class="form-control" tabindex="2">
        </div>
        @error('nit')
         <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

    <!-- Contacto -->
        <div class="mb-3">
            <label for="" class="form-label">Número de Contacto</label>
            <input id="contacto" name="contacto" placeholder="Ingresa Número de Contacto" type="number" class="form-control" tabindex="3">
        </div>
        @error('contacto')
         <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

    <!-- Dirección -->
        <div class="mb-3">
            <label for="" class="form-label">Dirección de Residencia</label>
            <input id="direccion" name="direccion" placeholder="Ingresa Dirección de Residencia" type="text" class="form-control" tabindex="4">
        </div>
        @error('direccion')
         <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

    <!-- Estado -->
        <div class="mb-3">
            <label for="" class="form-label">Estado</label>
            <select name="estado" class="form-control">
            <option value="Activo" selected>Activo</option>
            <option value="Inactivo">Inactivo</option>
            </select>
            </div>             
            <br><br>
    
    <!-- Botones -->
            <div class="text-center">
            <a href="/clientes" class="btn btn-danger" tabindex="5"><i class="fa-solid fa-xmark"></i> | Cancelar</a>
            <button type="submit" class="btn btn-primary" tabindex="4"><i class="fa-solid fa-floppy-disk"></i> | Guardar</button>
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