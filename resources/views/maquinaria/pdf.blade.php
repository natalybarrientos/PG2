<font face="Copperplate">
<br>
<br>
<h1 class="text-dark text-center font-medium"> MAQUINARIAS REGISTRADAS </h1>
<br>
<br> 
</font>


<table id="maquinarias" class="table table-striped table-bordered shadow-lg text-center mt-4" style="width:100%">
    <thead class="bg-dark text-white text-center">
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre Maquinaria</th>
        <th scope="col">Descripción</th>
        <th scope="col">Precio</th>
        <th scope="col">Fecha de Adquisición</th>
        <th scope="col">Fecha de Baja</th>
        <th scope="col">Estado</th>
       
        </tr>
    </thead>

    <tbody>
        @foreach ($maquinarias as $maquinaria)
        <tr>
             <td>{{$maquinaria->id}}</td>
             <td>{{$maquinaria->nombre}}</td>
             <td>{{$maquinaria->descripcion}}</td>
             <td>{{$maquinaria->precio}}</td>
             <td>{{$maquinaria->fechaadq}}</td>
             <td>{{$maquinaria->fechabaja}}</td>
             <td>{{$maquinaria->estado}}</td>
            
        </tr>
        @endforeach
    </tbody>


</table>