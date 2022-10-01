@extends('adminlte::page')

@section('title', 'Usuarios Multiservicios M&G')

@section('content_header')
<font face="Copperplate">
<h1 class="text-dark text-center font-medium"> U S U A R I O S </h1>
<h1 class="text-dark text-center font-medium"> R E G I S T R A D O S </h1>
</font>


@stop

@section('content')
<font face="Courier New">

<a href="users/create" class="btn btn-info mb-3"><i class="fa-solid fa-file-circle-plus"></i>   REGISTRAR</a>

<table id="users" class="table table-striped table-bordered shadow-lg text-center mt-4" style="width:100%">
    <thead class="bg-dark text-white text-center">
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre de Usuario</th>
        <th scope="col">Correo electrónico</th>
        <th scope="col">Estado</th>
        <th scope="col">Rol</th>
        <th scope="col">Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($users as $user)
        <tr>
             <td>{{$user->id}}</td>
             <td>{{$user->name}}</td>
             <td>{{$user->email}}</td>
             <td>{{$user->estado}}</td>
             <td>{{$user->rol}}</td>
             <td>


             <a href="/users/{{$user->id}}/edit" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i>   EDITAR</a>

             </td>
        </tr>
        @endforeach
    </tbody>


</table>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script>
    $(document).ready(function() {

        $('#users').DataTable ({
            language: {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando de Inicio a Fin el total de Información",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de MAX total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
        }
    },
            
        });
    
    });
    </script>
  
</font>
@stop