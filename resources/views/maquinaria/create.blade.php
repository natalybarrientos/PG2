@extends('adminlte::page')

@section('title', 'Maquinarias Multiservicios M&G')

@section('content_header')
<font face="Copperplate">
<h1 class="text-dark text-center font-medium"> R E G I S T R O  D E  </h1>
<h1 class="text-dark text-center font-medium"> M A Q U I N A R I A</h1>
<br>
<br>
</font>  
@stop

@section('content')
<font face="Courier New">

    <form action="/maquinarias" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nombre Maquinaria</label>
            <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
        </div><br>
        <div class="mb-3">
            <label for="" class="form-label">Descripción</label>
            <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2">
        </div><br>
        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input id="precio" name="precio" type="text" class="form-control" tabindex="3">
        </div><br>
        <div class="mb-3">
            <label for="" class="form-label">Fecha de Adquisición</label>
            <input id="fechaadq" name="fechaadq" type="date" class="form-control" tabindex="4">
        </div><br>
        <div class="mb-3">
            <label for="" class="form-label">Fecha de Baja</label>
            <input id="fechabaja" name="fechabaja" type="date" class="form-control" tabindex="5">
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
            <option value="Activo" selected>Activo</option>
            <option value="Inactivo">Inactivo</option>
            </select>
            </div>
            
            <br><br>
       
        <a href="/maquinarias" class="btn btn-secundary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">

@section('js')
<script> console.log('Hi!');</script>

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
