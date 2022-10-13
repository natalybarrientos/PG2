<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Comprobante</title>

<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: x-small;
    }
   
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    .gray {
        background-color: lightgray;
    }
    .information {
            background-color: #47bac1;
            color: #000;
            margin: 0px;
        }
        .information .logo {
            margin: 5px;
        }
        .information table {
            padding: 10px;
        }
</style>

</head>
<body>


  <table width="100%">
    <tr>
        <td valign="top"><img data-imagetype="External" src="./vendor/adminlte/dist/img/LOGOMULTI.png" 
            width="204px" height="150px" style="border-top-width:0; border-right-width:0; border-bottom-width:0; border-left-width:0"></td>
        <td align="right">
        <h1>Comprobante No. {{ $gasto->id}}</h1>
            
        </td>
    </tr>

  </table>

  <table width="100%" border="1">
      <thead>
          <tr style="background-color:#FF8F19">
              <th colspan="2">NOMBRE DE EMPLEADO</th>
              <th>MONTO DE PAGO</th>
              <th>FECHA</th>
          </tr>
     </thead>
     <tbody>
          <tr>
              <td colspan="2"> {{$gasto->empleados->nombre}} </td>
              <td> {{$gasto->costo}} </td>
              <td> {{$gasto->fecha}} </td>
          </tr>

          <tr style="background-color:#FF8F19 ">
              <th colspan="3">DESCRIPCIÓN</th>
              <th>TIPO</th>
              
          </tr>

          <tr>
              <td colspan="3">{{$gasto->descripcion}}</td>
              <td> {{$gasto->tipogasto->tipo}}</td>
              
          </tr>

      </tbody>  

  </table>

  <h6>Copia de Empleado</h6>
  <h6>- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </h6>


<table width="100%">
    <tr>
        <td valign="top"><img data-imagetype="External" src="./vendor/adminlte/dist/img/LOGOMULTI.png" 
            width="204px" height="150px" style="border-top-width:0; border-right-width:0; border-bottom-width:0; border-left-width:0"></td>
        <td align="right">
        <h1>Comprobante No. {{ $gasto->id}}</h1>
            
        </td>
    </tr>

  </table>

  <table width="100%" border="1">
      <thead>
          <tr style="background-color:#FF8F19">
              <th colspan="2">NOMBRE DE EMPLEADO</th>
              <th>MONTO DE PAGO</th>
              <th>FECHA</th>
          </tr>
     </thead>
     <tbody>
          <tr>
              <td colspan="2"> {{$gasto->empleados->nombre}} </td>
              <td> {{$gasto->costo}} </td>
              <td> {{$gasto->fecha}} </td>
          </tr>

          <tr style="background-color:#FF8F19 ">
              <th colspan="3">DESCRIPCIÓN</th>
              <th>TIPO</th>
              
          </tr>

          <tr>
              <td colspan="3">{{$gasto->descripcion}}</td>
              <td> {{$gasto->tipogasto->tipo}}</td>
              
          </tr>

      </tbody>  

  </table>

  <h6>Copia de Contabilidad</h6>
<h6>- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </h6>

<table width="100%">
    <tr>
        <td valign="top"><img data-imagetype="External" src="./vendor/adminlte/dist/img/LOGOMULTI.png" 
            width="204px" height="150px" style="border-top-width:0; border-right-width:0; border-bottom-width:0; border-left-width:0"></td>
        <td align="right">
        <h1>Comprobante No. {{ $gasto->id}}</h1>
            
        </td>
    </tr>

  </table>

  <table width="100%" border="1">
      <thead>
          <tr style="background-color:#FF8F19">
              <th colspan="2">NOMBRE DE EMPLEADO</th>
              <th>MONTO DE PAGO</th>
              <th>FECHA</th>
          </tr>
     </thead>
     <tbody>
          <tr>
              <td colspan="2"> {{$gasto->empleados->nombre}} </td>
              <td> {{$gasto->costo}} </td>
              <td> {{$gasto->fecha}} </td>
          </tr>

          <tr style="background-color:#FF8F19 ">
              <th colspan="3">DESCRIPCIÓN</th>
              <th>TIPO</th>
              
          </tr>

          <tr>
              <td colspan="3">{{$gasto->descripcion}}</td>
              <td> {{$gasto->tipogasto->tipo}}</td>
              
          </tr>

      </tbody>  

  </table>

  <h6>Copia de Archivo</h6>

</body>
</html>