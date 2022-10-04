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

<font face="Courier New">
@section('content')

<div class="container" style="max-width: 80%">
    <form action="/empleados" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nombre Empleado</label>
            <input id="nombre" name="nombre" placeholder="Ingresa Nombre Completo del Empleado" type="text" class="form-control" style="max-width: 50%;" tabindex="1">
        </div><br>
        <div class="mb-3">
            <label for="" class="form-label">Documento de Identificación Personal</label>
            <input id="dpi" name="dpi" type="text" placeholder="Ingresa número de DPI sin espacios" class="form-control" style="max-width: 50%;" tabindex="2">
        </div><br>
        <div class="mb-3">
            <label for="" class="form-label">Fecha de Nacimiento</label>
            <input id="fecha" name="fecha"  type="date" class="form-control" style="max-width: 50%;" tabindex="3">
        </div class="mb-3">
        <div><br>
            <label for="" class="form-label">Número de Contacto</label>
            <input id="contacto" name="contacto" placeholder="Ingresa número de contacto" type="text" class="form-control"  style="max-width: 50%;" tabindex="4">
        </div><br>
        <div class="mb-3">
            <label for="" class="form-label">Dirección de Residencia</label>
            <input id="direccion" name="direccion" placeholder="Ingresa la Dirección de Residencia" type="text" class="form-control" style="max-width: 50%;" tabindex="5">
        </div><br>
        <div class="mb-3">
            <img id="imagenSeleccionada" style="max-height: 300px;">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Foto</label>
            <input id="imagen" name="imagen" type="file" class="form-control" style="max-width: 50%;" tabindex="6">
        </div><br>

        <div class="mb-3">
            <label for="" class="form-label">Estado</label>
            <select name="estado" class="form-control" style="max-width: 50%;">
            <option value="Activo">Activo</option>
            <option value="Inactivo" selected>Inactivo</option>
            </select>
        </div>
        
        <br><br>


        <div class="text-center">
        <a href="/empleados" class="btn btn-primary" tabindex="5"><i class="fa-solid fa-xmark"></i>   Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4"><i class="fa-solid fa-floppy-disk"></i>    Guardar</button>
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

