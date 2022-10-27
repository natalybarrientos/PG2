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

    th { background-color:#FF8F19}

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
            <h1>MAQUINARIAS REGISTRADAS</h1>
          
        </td>
    </tr>
  </table>
<br>
<br>


<table id="maquinarias"  border="1" style="width:100%">
    <thead class="bg-dark text-white text-center">
        <tr>
        <th scope="col">ID</th>
        <th scope="col">MAQUINARIA</th>
        <th scope="col">DESCRIPCIÓN</th>
        <th scope="col">PRECIO</th>
        <th scope="col">FECHA DE ADQUISICIÓN</th>
        <th scope="col">FECHA DE BAJA</th>
        <th scope="col">ESTADO</th>
       
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
</html>