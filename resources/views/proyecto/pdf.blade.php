<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title></title>

<style type="text/css">
    * {
        font-family: "Times New Roman", Times, serif;
        font-size: 15px;
    }
    table{
        font-size: x-small;

    }

    h1 { font-size: 250% }

    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    .gray {
        background-color: lightgray;
    }
    .information {
        margin: 0px;
        }
        .information .logo {
            margin: 5px;
        }
        
</style>

<table width="100%">
    <tr>
        <td valign="top"><img data-imagetype="External" src="./vendor/adminlte/dist/img/LOGOMULTI.png" 
            width="150px" height="150px" style="border-top-width:0; border-right-width:0; border-bottom-width:0; border-left-width:0"></td>
        <td align="right">
            <h1>PROYECTOS REGISTRADOS</h1>
          
        </td>
    </tr>
  </table>
<br>
<br>

<table id="proyectos"  border="1" style="width:100%">
    <thead class="bg-dark text-white text-center">
        <tr>
        <th scope="col">ID</th>
        <th scope="col">DESCRIPCIÓN</th>
        <th scope="col">COSTO</th>
        <th scope="col">CLIENTE</th>
        <th scope="col">EMPLEADO ENCARGADO</th>
        <th scope="col">FECHA DE INICIO</th>
        <th scope="col">FECHA FIN</th>
        <th scope="col">MAQUINARIA</th>
        <th scope="col">ESTADO</th>
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


</html>