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
            <h1>GASTOS DE EMPLEADO GENERADOS</h1>
          <h2>Total: Q. {{$total}}</h2>
        </td>
    </tr>
</table>
    <br>
    <br>

<table id="empleados"  border="1" style="width:100%">
    <thead class="bg-dark text-white text-center">
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Descripción</th>
        <th scope="col">Costo</th>
        <th scope="col">Factura o Vale</th>
        <th scope="col">Tipo de gasto</th>
        <th scope="col">Empleado</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($gastos as $gasto)
        <tr>
             <td>{{$gasto->id}}</td>
             <td>{{$gasto->descripcion}}</td>
             <td>{{$gasto->costo}}</td>
             <td>{{$gasto->fecha}}</td>
             <td>{{$gasto->tipogasto->tipo}}</td>
             <td>{{$gasto->empleados->nombre}}</td>
                     
        </tr>
        @endforeach
    </tbody>


</table>
</html>