@extends('adminlte::page')

@section('title', 'Usuarios Multiservicios M&G')

@section('content_header')
<font face="Copperplate">
<h1 class="text-dark text-center font-medium"> E D I C I Ó N  D E  </h1>
<h1 class="text-dark text-center font-medium"> R E G I S T R O </h1>
<br><br>
</font>   
@stop

@section('content')
<font face="Courier New">


    <form action="/users/{{$user->id}}" method="POST">
    
    @csrf
    @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Nombre de Usuario</label>
            <input id="name" name="name" type="text" class="form-control" value="{{$user->name}}">
        </div><br>
        <div class="mb-3">
            <label for="" class="form-label">Correo Electrónico</label>
            <input id="email" name="email" type="text" class="form-control" value="{{$user->email}}">
        </div><br>
        <div class="mb-3">
            <label for="" class="form-label">Contraseña</label>
            <input id="password" name="password" type="password" class="form-control" >
        </div><br>
        <div class="mb-3">
            <label for="" class="form-label">Estado</label>
            <select name="estado" class="form-control"> 
            <option value="Activo" @if ($user->estado == 'Activo'  ) selected  @endif >Activo</option>
            <option value="Inactivo" @if ($user->estado == 'Inactivo'  ) selected  @endif>Inactivo</option>
            </select> 
        </div><br>
        <div class="mb-3">
            <label for="" class="form-label">Rol</label>
            <select name="rol" class="form-control">
            <option value="Administrador"  @if ($user->rol == 'Administrador'  ) selected  @endif >Administrador</option>
            <option value="Encargado"  @if ($user->rol == 'Encargado'  ) selected  @endif >Encargado</option>
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
    
   
</font>
@stop