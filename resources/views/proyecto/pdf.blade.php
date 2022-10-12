<font face="Copperplate">
<br>
<br>
<h1 class="text-dark text-center font-medium"> PROYECTOS REGISTRADOS </h1>
<br>
<br>
</font>

<table id="proyectos" class="table table-striped table-bordered shadow-lg text-center mt-4" style="width:100%">
    <thead class="bg-dark text-white text-center">
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Descripción</th>
        <th scope="col">Costo</th>
        <th scope="col">Cliente</th>
        <th scope="col">Empleado Encargado</th>
        <th scope="col">Fecha Inicio</th>
        <th scope="col">Fecha Fin</th>
        <th scope="col">Maquinaria</th>
        <th scope="col">Estado</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($proyectos as $proyecto) 
        <tr>
             <td>{{$proyecto->id}}</td>
             <td>{{$proyecto->descripcion}}</td>
             <td>{{$proyecto->costo}}</td>
             <td>{{$proyecto->clientes->nombre}}</td>
             <td>{{$proyecto->empleados->nombre}}</td>
             <td>{{$proyecto->fechainicio}}</td>
             <td>{{$proyecto->fechafin}}</td>
             <td>
             
              @foreach($proyecto->maquinarias as $maquinaria)
                {{$maquinaria->nombre}}
              @endforeach
             
             </td>
             <td>{{$proyecto->estado}}</td>

        </tr>
        @endforeach
    </tbody>


</table>