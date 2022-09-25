@extends('adminlte::page')

@section('title', 'Usuarios Multiservicios M&G')

@section('content_header')
<font face="Copperplate">
<h1 class="text-dark text-center font-medium"> R E G I S T R O  D E  </h1>
<h1 class="text-dark text-center font-medium"> U S U A R I O  </h1>
<br>
<br>   
   
@stop

@section('content')
<font face="Courier New">

    <form action="/users" method="POST">
    @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nombre de Usuario</label>
            <input id="name" name="name" type="text" class="form-control" tabindex="1">
        </div><br>
        <div class="mb-3">
            <label for="" class="form-label">Correo Electrónico</label>
            <input id="email" name="email" type="text" class="form-control" tabindex="2">
        </div><br>
        <div class="mb-3">
            <label for="" class="form-label">Contraseña</label>
            <input id="password" name="password" type="password" class="form-control" tabindex="3">
        </div><br>
        <div class="mb-3">
            <label for="" class="form-label">Estado</label>
            <select name="estado" class="form-control">
            <option value="Activo" selected>Activo</option>
            <option value="Inactivo" >Inactivo</option>
            </select>
        </div><br>
        <div class="mb-3">
            <label for="" class="form-label">Rol</label>
            <select name="rol" class="form-control">
            <option value="Administrador">Administrador</option>
            <option value="Encargado" selected>Encargado</option>
            </select>
        </div>
            
            <br><br>
       
        <a href="/users" class="btn btn-secundary" tabindex="5">Cancelar</a>
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
    'Completa tu formulario!',
    'Haz Click en el botón!',
    'success'
    )
</script>

</font>
@stop