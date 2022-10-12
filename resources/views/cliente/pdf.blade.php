<font face="Copperplate">
<br>
<br>
<h1 class="text-dark text-center font-medium"> CLIENTES REGISTRADOS </h1>
<br>
<br> 
</font>


<table id="clientes" class="table table-striped table-bordered shadow-lg text-center mt-4" style="width:100%">
    <thead class="bg-dark text-white text-center">
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre Cliente</th>
        <th scope="col">NIT</th>
        <th scope="col">Número de Contacto</th>
        <th scope="col">Dirección de Residencia</th>
        <th scope="col">Estado</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($clientes as $cliente)
        <tr>
             <td>{{$cliente->id}}</td>
             <td>{{$cliente->nombre}}</td>
             <td>{{$cliente->nit}}</td>
             <td>{{$cliente->contacto}}</td>
             <td>{{$cliente->direccion}}</td>
             <td>{{$cliente->estado}}</td>
            
        </tr>
        @endforeach
    </tbody>


</table>

