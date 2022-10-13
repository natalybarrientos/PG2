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
            <h1>CLIENTES REGISTRADOS</h1>
          
        </td>
    </tr>
  </table>
            <br>
            <br>
<table id="clientes" border="1" style="width:100%">
    <thead class="bg-dark text-white text-center">
        <tr>
        <th scope="col">ID</th>
        <th scope="col">CLIENTE</th>
        <th scope="col">NIT</th>
        <th scope="col">CONTACTO</th>
        <th scope="col">DIRECCIÓN DE RESIDENCIA</th>
        <th scope="col">ESTADO</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($clientes as $cliente)
        <tr class="text-center">
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

</html>