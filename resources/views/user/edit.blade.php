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

        <div class="text-center">
        <a href="/users" class="btn btn-primary" tabindex="5"><i class="fa-solid fa-xmark"></i>   Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4"><i class="fa-solid fa-floppy-disk"></i>    Guardar</button>
        </div>
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