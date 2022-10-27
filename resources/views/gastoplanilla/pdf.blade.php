<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Reporte</title>

<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
      
	border-color: black;
    height: 100%;
	text-align: left;
	color:#246355;
	width: 100%;
  margin-top: -1px;
}

tr:nth-child(even){
	border:1px solid #000;
}
tr:hover td{
  
	color: black;
}
.div{
  
  width: 47%;
  height: 100px;
  border-radius: 25px;
  border: 2px solid #246355;
	color: white;
  margin: 2px;
  
}
.div2{
  
  width: 100%;
  height: 110px;
  border-radius: 25px;
  border: 2px solid #246355;
	color: white;
  margin-top: 120px;
  
}

.div3{
  
  width: 100%;
  height: 70px;
  border-radius: 25px;
  border: 2px solid #246355;
  color: white;
  margin-top: 10px;
  
}
.divp{
  margin-left: 10px;
  font-size: 12px;
  color: #246355;
  margin: 5px;
  padding-left: 5px;
}
   
    
    .gray {
        background-color: lightgray;
    }
    .information {
             
            color: rgb(250, 250, 250);
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

 
    <div class="div" style="float: left">
      <div style="width: 100%; background-color:#246355; text-align:center; border-top-left-radius: 25px; border-top-right-radius: 25px;">DATOS DE LA EMPRESA</div>
      <p class="divp" >MULTISERVICIOS M&G</p>
      <p class="divp" >NIT: 90864220</p>
      <p class="divp" >TELÉFONO: 5864-4769</p>
    </div>

     
     <div class="div" style="float: right">
      <div style="width: 100%; background-color:#246355; text-align:center; border-top-left-radius: 25px; border-top-right-radius: 25px;">DATOS DEL COMPROBANTE</div>
      <p class="divp" >FECHA: {{$gasto->fecha}}</p>
      <p class="divp" >COMPROBANTE No. 00{{ $gasto->id}}</p>
      <p class="divp" >TIPO DE PAGO: Planilla</p>
     
     </div>

     <div class="div2">
      <div style="width: 100%; background-color:#246355; text-align:center; border-top-left-radius: 25px; border-top-right-radius: 25px;">DATOS DEL EMPLEADO</div>
      <p class="divp" >NOMBRE: {{$gasto->empleados->nombre}}</p>
      <p class="divp" >DPI: {{$gasto->empleados->dpi}}</p>
      <p class="divp" >TELEFONO: {{$gasto->empleados->contacto}}</p>
      <p class="divp" >DIRECCION: {{$gasto->empleados->direccion}}</p>
     </div>

     <div class="div3">
      <div style="width: 100%; background-color:#246355; text-align:center; border-top-left-radius: 25px; border-top-right-radius: 25px;">DETALLE DEL COMPROBANTE</div>
    
     <table width="100%">
    <thead>
      <tr >
        
       
        <th style="border-bottom:1px solid #000; margin-top:1px;" >DESCRIPCIÓN</th>
        <th style="border-left:1px solid #000; border-bottom:1px solid #000;" width="80px">TOTAL</th> 
      </tr>
    </thead>
    <tbody >

      <tr>
        <td style="text-align: center">{{$gasto->descripcion}}</td>
        <td style="text-align: center; border-left: 1px solid #000;">{{$gasto->costo}} </td>    
      </tr>
      
    </tbody>
  </table>
     </div>
<h6 style="margin-top:10px; color:#246355;">Copia de Empleado</h6>
<br>
<br>
<br>
<h6 style="color:#246355;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </h6>

<br>
<br>
<br>


<br> 

<div class="div" style="float: left">
      <div style="width: 100%; background-color:#246355; text-align:center; border-top-left-radius: 25px; border-top-right-radius: 25px;">DATOS DE EMPRESA</div>
      <p class="divp" >MULTISERVICIOS M&G</p>
      <p class="divp" >NIT: 90864220</p>
      <p class="divp" >TELÉFONO: 5864-4769</p>
    </div>

     
     <div class="div" style="float: right">
      <div style="width: 100%; background-color:#246355; text-align:center; border-top-left-radius: 25px; border-top-right-radius: 25px;">DATOS DE COMPROBANTE</div>
      <p class="divp" >FECHA: {{$gasto->fecha}}</p>
      <p class="divp" >COMPROBANTE No. 00{{ $gasto->id}}</p>
      <p class="divp" >TIPO DE PAGO: Planilla</p>
     
     </div>

     <div class="div2">
      <div style="width: 100%; background-color:#246355; text-align:center; border-top-left-radius: 25px; border-top-right-radius: 25px;">DATOS DE EMPLEADO</div>
      <p class="divp" >NOMBRE: {{$gasto->empleados->nombre}}</p>
      <p class="divp" >DPI: {{$gasto->empleados->dpi}}</p>
      <p class="divp" >TELEFONO: {{$gasto->empleados->contacto}}</p>
      <p class="divp" >DIRECCION: {{$gasto->empleados->direccion}}</p>
     </div>

     <div class="div3">
      <div style="width: 100%; background-color:#246355; text-align:center; border-top-left-radius: 25px; border-top-right-radius: 25px;">DETALLE DE COMPROBANTE</div>
    
     <table width="100%">
    <thead>
      <tr >
        
       
        <th style="border-bottom:1px solid #000; margin-top:1px;" >DESCRIPCIÓN</th>
        <th style="border-left:1px solid #000; border-bottom:1px solid #000;" width="80px">TOTAL</th> 
      </tr>
    </thead>
    <tbody >

      <tr>
        <td style="text-align: center">{{$gasto->descripcion}}</td>
        <td style="text-align: center; border-left: 1px solid #000;">{{$gasto->costo}} </td>    
      </tr>
      
    </tbody>
  </table>
     </div>
     <h6 style="margin-top:10px; color:#246355;">Copia de Archivo</h6>
</body>
</html>