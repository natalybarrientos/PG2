<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gasto;
use App\Models\Tipogastos;
use App\Models\Maquinaria;
use App\Models\Empleado;


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
        return view('gasto.index', compact('gastos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $maquinarias = Maquinaria::all();
        $tipogastos = Tipogastos::all();
        $empleados = Empleado::all();
        return view('gasto.create', compact('tipogastos','maquinarias','empleados') );
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
            
        ];
        $mensaje = [
            'descripcion.required' => 'El campo Descipción es requerido',
            'descripcion.max' => 'El campo Descipción no debe de ser mayor a :max caracteres',
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
        return view('gasto.index')->with('gastos',$gastos);
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
    {   $tipogastos = Tipogastos::all();
        $maquinarias = Maquinaria::all();
        $empleados = Empleado::all();
        $gasto = Gasto::find($id);
        return view('gasto.edit', compact('gasto','tipogastos', 'maquinarias', 'empleados') );

        
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
            
        ];
        $mensaje = [
            'descripcion.required' => 'El campo Descripción es requerido',
            'descripcion.max' => 'El campo Descripción no debe de ser mayor a :max caracteres',
      
            
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
