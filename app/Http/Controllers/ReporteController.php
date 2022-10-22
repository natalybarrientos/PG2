<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reporte;
use App\Models\Tipogastos;
use App\Models\Maquinaria;
use App\Models\Empleado;
use App\Models\Gasto;
use App\Models\Proyecto;
use PDF;
use Carbon\Carbon;
use ArielMejiaDev\LarapexCharts\LarapexChart;



class ReporteController extends Controller
{
   
   
 

    public function __construct(){
        $this->middleware('auth');
       
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reporte.index');
    }

    

 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function gastomaquinaria()
    {
        $fecha = Carbon::now()->format('Y-m-d');
        $maquinarias = Maquinaria::all();
        $tipogastos = Tipogastos::all();
 
        return view('reporte.gastomaquinaria', compact('tipogastos','maquinarias', 'fecha'));
    }
    public function mgastomaquinaria(Request $request){
        
        $reglas= [
            'fechaini' => 'required',
            'fechafin' => 'required',
        ];
        $mensaje = [
            'fechaini.required' => 'El campo Fecha Inicio es requerido',
            'fechafin.required' => 'El campo Fecha Fin es requerido',
        ];

        $validated = $request->validate($reglas,$mensaje);


        $gastos = Gasto::where('tipogastos_id', '=', $request->tipogastos_id)->where('maquinaria_id','=',$request->maquinaria_id)->where('fecha','>=',$request->fechaini)->where('fecha','<=',$request->fechafin)->get();
        $total =  Gasto::where('tipogastos_id', '=', $request->tipogastos_id)->where('maquinaria_id','=',$request->maquinaria_id)->where('fecha','>=',$request->fechaini)->where('fecha','<=',$request->fechafin)->sum('costo');
    
        return view('gasto.index', compact('gastos','total'));
    }
  



    public function gastopersonal()
    {
        $fecha = Carbon::now()->format('Y-m-d');
        $empleados = Empleado::all();

        return view('reporte.gastopersonal', compact('fecha','empleados'));
    }
    public function mgastopersonal(Request $request){

        $reglas= [
            'fechaini' => 'required',
            'fechafin' => 'required',
        ];
        $mensaje = [
            'fechaini.required' => 'El campo Fecha Inicio es requerido',
            'fechafin.required' => 'El campo Fecha Fin es requerido',
        ];

        $validated = $request->validate($reglas,$mensaje);

        $gastos = Gasto::where('tipogastos_id', '=', '1')->where('empleado_id','=',$request->empleado_id)->where('fecha','>=',$request->fechaini)->where('fecha','<=',$request->fechafin)->get();
        $total =  Gasto::where('tipogastos_id', '=', '1')->where('empleado_id','=',$request->empleado_id)->where('fecha','>=',$request->fechaini)->where('fecha','<=',$request->fechafin)->sum('costo');
    
        return view('gastoplanilla.index', compact('gastos', 'total'));
    }





    public function ganancia()
    {
        return view('reporte.ganancia');
    }

    public function mganancia(Request $request)
    { 
        $reglas= [
            'fechaini' => 'required',
            'fechafin' => 'required',
        ];
        $mensaje = [
            'fechaini.required' => 'El campo Fecha Inicio es requerido',
            'fechafin.required' => 'El campo Fecha Fin es requerido',
        ];

        $validated = $request->validate($reglas,$mensaje);
      
       
        $ingresos =  Proyecto::where('created_at','>=',$request->fechaini.' 00:00:00')->where('created_at','<=',$request->fechafin.' 23:59:59')->sum('costo');
        $gastos =  Gasto::where('fecha','>=',$request->fechaini)->where('fecha','<=',$request->fechafin)->sum('costo');
        $ganancias= $ingresos-$gastos;
       
        $chart2 = LarapexChart::horizontalBarChart()
        ->setTitle('GANANCIAS O PÉRDIDAS')
        ->setSubtitle('DEL '.$request->fechaini.' HASTA '.$request->fechafin)
        ->setColors(['#14a3e0', '#FFC107', '#D32F2F'])
        ->addData('INGRESOS', [$ingresos])
        ->addData('GASTOS', [$gastos])
        ->addData('GANANCIAS', [$ganancias])
        ->setXAxis(['INGRESOS', 'GASTOS', 'GANANCIAS']);
       
        return view('reporte.indexganancia', compact('ingresos','gastos','ganancias','chart2'));
    }



  
    public function reporteproyecto()
    {
        $fecha = Carbon::now()->format('Y-m-d');
       
        return view('reporte.reporteproyecto', compact('fecha'));
    }

    public function mreporteproyecto(Request $request){
       
        $reglas= [
            'fechaini' => 'required',
            'fechafin' => 'required',
        ];
        $mensaje = [
            'fechaini.required' => 'El campo Fecha Inicio es requerido',
            'fechafin.required' => 'El campo Fecha Fin es requerido',
        ];

        $validated = $request->validate($reglas,$mensaje);
       
        $proyectos = Proyecto::where('created_at','>=', $request->fechaini.' 00:00:00')->where('created_at','<=',$request->fechafin.' 23:59:59')->get();
        $total =  Proyecto::where('created_at','>=',$request->fechaini.' 00:00:00')->where('created_at','<=',$request->fechafin.' 23:59:59')->sum('costo');
        
        return view('proyecto.index', compact ('proyectos','total'));
    }





    public function create()
    {
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
    }
}
