<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gasto;
use App\Models\Tipogastos;
use App\Models\Maquinaria;
use App\Models\Empleado;
use Carbon\Carbon;
use PDF;


class GastoController extends Controller
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
        $gastos = Gasto::all();
        $total= null;
        return view('gasto.index', compact('gastos','total'));
    }

    public function pdf($total,$fechaini,$fechafin,$tipogastos_id,$maquinaria_id)
    {
      
        $gastos = Gasto::where('tipogastos_id', '=', $tipogastos_id)->where('maquinaria_id','=',$maquinaria_id)->where('fecha','>=',$fechaini)->where('fecha','<=',$fechafin)->get();
        $total =  Gasto::where('tipogastos_id', '=', $tipogastos_id)->where('maquinaria_id','=',$maquinaria_id)->where('fecha','>=',$fechaini)->where('fecha','<=',$fechafin)->sum('costo');
    
       $pdf = PDF::loadView('gasto.pdf',['gastos'=>$gastos,'total'=>$total]);
       return $pdf->download('gastos.pdf');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        
        $fecha = Carbon::now()->format('Y-m-d');
        
        if($id==0){
        $maquinarias = Maquinaria::all();
        }else{
            $maquinarias = Maquinaria::where('id','=',$id)->get();  
        }  

        $tipogastos = Tipogastos::all();
        $empleados = Empleado::all();
        return view('gasto.create', compact('tipogastos','maquinarias','empleados', 'fecha') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 

        $reglas= [
            'descripcion' => 'required|max:80',
            'costo' => 'required|max:10',
            
        ];
        $mensaje = [
            'descripcion.required' => 'El campo Descripción es requerido',
            'descripcion.max' => 'El campo Descripción no debe de ser mayor a :max caracteres',
            'costo.required' => 'El campo Costo es requerido',
            'costo.max' => 'El campo Costo no debe ser mayor a :max dígitos',
            
            
        ];

        $validated = $request->validate($reglas,$mensaje);


        $gasto = new Gasto();
        $gasto->id = $request->get('id');
        $gasto->descripcion = $request->get('descripcion');
        $gasto->costo = $request->get('costo');
        $gasto->fecha = $request->get('fecha');
        $gasto->factura = $request->get('factura');
        $gasto->tipogastos_id = $request->get('tipogastos_id');
        $gasto->maquinaria_id = $request->get('maquinaria_id');
        $gasto->empleado_id = $request->get('empleado_id');

        $gasto->save(); //Para Guardar todos los datos que queremos registrar.
        //dd($gasto);
        $gastos = Gasto::all();
        return view('gasto.index', compact('gastos','total'));
      
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
        $fecha = Carbon::now()->format('Y-m-d');

        $tipogastos = Tipogastos::all();
        $maquinarias = Maquinaria::all();
        $empleados = Empleado::all();
        $gasto = Gasto::find($id);
        return view('gasto.edit', compact('gasto','tipogastos', 'maquinarias', 'empleados', 'fecha') );

        
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

       
        $reglas= [
            'descripcion' => 'required|max:80',
            'costo' => 'required|max:10',
            
        ];
        $mensaje = [
            'descripcion.required' => 'El campo Descripción es requerido',
            'descripcion.max' => 'El campo Descripción no debe de ser mayor a :max caracteres',
            'costo.required' => 'El campo Costo es requerido',
            'costo.max' => 'El campo Costo no debe ser mayor a :max dígitos',
          
            
        ];

        $validated = $request->validate($reglas,$mensaje);

        $gasto = Gasto::find($id);
        $gasto->descripcion = $request->get('descripcion');
        $gasto->costo = $request->get('costo');
        $gasto->fecha = $request->get('fecha');
        $gasto->factura = $request->get('factura');
        $gasto->tipogastos_id = $request->get('tipogastos_id');
        $gasto->maquinaria_id = $request->get('maquinaria_id');
        $gasto->empleado_id = $request->get('empleado_id');

        $gasto->save(); //Para Guardar todos los datos que queremos registrar.

        
        return redirect('/gastos'); //Para redirigir a index, despues de guardar.
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gasto = Gasto::find($id);
        $gasto->delete();

        return redirect('/gastos');
    }
}
