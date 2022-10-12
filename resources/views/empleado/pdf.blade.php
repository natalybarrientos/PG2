<link href="{{public_path('css/app.css') }}" rel="stylesheet" type="text/css">

<font face="Copperplate">
<br>
<br>
<h1 class="text-dark text-center font-medium"> EMPLEADOS REGISTRADOS </h1>
<br>
<br>
</font> 



<table id="empleados" class="table table-striped table-bordered shadow-lg text-center mt-4" style="width:100%">
    <thead class="bg-dark text-white text-center">
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre Empleado</th>
        <th scope="col">Documento de Identificación Personal</th>
        <th scope="col">Fecha de Nacimiento</th>
        <th scope="col">Número de Contacto</th>
        <th scope="col">Dirección de Residencia</th>
        <th scope="col">Estado</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($empleados as $empleado)
        <tr>
             <td>{{$empleado->id}}</td>
             <td>{{$empleado->nombre}}</td>
             <td>{{$empleado->dpi}}</td>
             <td>{{$empleado->fecha}}</td>
             <td>{{$empleado->contacto}}</td>
             <td>{{$empleado->direccion}}</td>
             <td>{{$empleado->estado}}</td>

                     
        </tr>
        @endforeach
    </tbody>


</table>