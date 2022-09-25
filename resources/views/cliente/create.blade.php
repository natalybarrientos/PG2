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

@section('content')
<font face="Courier New">

    <form action="/clientes" method="POST">
    @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nombre Cliente</label>
            <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
        </div><br>
        <div class="mb-3">
            <label for="" class="form-label">NIT</label>
            <input id="nit" name="nit" type="text" class="form-control" tabindex="2">
        </div><br>
        <div class="mb-3">
            <label for="" class="form-label">Número de Contacto</label>
            <input id="contacto" name="contacto" type="text" class="form-control" tabindex="3">
        </div><br>
        <div class="mb-3">
            <label for="" class="form-label">Dirección de Residencia</label>
            <input id="direccion" name="direccion" type="text" class="form-control" tabindex="4">
        </div><br>
        <div class="mb-3">
            <label for="" class="form-label">Estado</label>
            <select name="estado" class="form-control">
            <option value="Activo">Activo</option>
            <option value="Inactivo" selected>Inactivo</option>
            </select>
            </div>
            
            <br><br>
       
        <a href="/clientes" class="btn btn-secundary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">

@section('js')
<script> console.log('Hi!');</script>

<script> 
    Swal.fire(
    'Good job!',
    'You clicked the button!',
    'success'
    )
</script>
</font>    
@stop