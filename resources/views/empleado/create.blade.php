@extends('adminlte::page')

@section('title', 'Clientes Multiservicios M&G')

@section('content_header')
<font face="Copperplate">
<h1 class="text-dark text-center font-medium"> R E G I S T R O  D E  </h1>
<h1 class="text-dark text-center font-medium"> E M P L E A D O  </h1>
<br>
<br>
</font>   
@stop

@section('content')
<font face="Courier New">

    <form action="/empleados" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nombre Empleado</label>
            <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
        </div><br>
        <div class="mb-3">
            <label for="" class="form-label">Documento de Identificación Personal</label>
            <input id="dpi" name="dpi" type="text" class="form-control" tabindex="2">
        </div><br>
        <div class="mb-3">
            <label for="" class="form-label">Fecha de Nacimiento</label>
            <input id="fecha" name="fecha" type="date" class="form-control" tabindex="3">
        </div class="mb-3">
        <div><br>
            <label for="" class="form-label">Número de Contacto</label>
            <input id="contacto" name="contacto" type="text" class="form-control" tabindex="4">
        </div><br>
        <div class="mb-3">
            <label for="" class="form-label">Dirección de Residencia</label>
            <input id="direccion" name="direccion" type="text" class="form-control" tabindex="5">
        </div><br>
        <div class="mb-3">
            <img id="imagenSeleccionada" style="max-height: 300px;">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Foto</label>
            <input id="imagen" name="imagen" type="file" class="form-control" tabindex="6">
        </div><br>

        <div class="mb-3">
            <label for="" class="form-label">Estado</label>
            <select name="estado" class="form-control">
            <option value="Activo">Activo</option>
            <option value="Inactivo" selected>Inactivo</option>
            </select>
        </div>
        
        <br><br>


        <a href="/empleados" class="btn btn-secundary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">

@section('js')
<script> console.log('Hi!');</script>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function(e) {
        $('#imagen').change(function(){ 
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#imagenSeleccionada').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
                      
        });
    
    }); 
    </script>

</font>
@stop

