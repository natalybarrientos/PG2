<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gasto;
use App\Models\Tipogastos;
use App\Models\Empleado;


class GastoplanillaController extends Controller
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
        return view('gastoplanilla.index', compact('gastos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $tipogastos = Tipogastos::all();
        $empleados = Empleado::all();
        return view('gastoplanilla.create', compact('tipogastos','empleados') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $gasto = new Gasto();
        $gasto->id = $request->get('id');
        $gasto->descripcion = $request->get('descripcion');
        $gasto->costo = $request->get('costo');
        $gasto->fecha = $request->get('fecha');
        $gasto->factura = $request->get('factura');
        $gasto->tipogastos_id = $request->get('tipogastos_id');
        $gasto->empleado_id = $request->get('empleado_id');

        $gasto->save(); //Para Guardar todos los datos que queremos registrar.
        //dd($gasto);
        $gastos = Gasto::all();
        return view('gastoplanilla.index')->with('gastos',$gastos);
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
       
        $empleados = Empleado::all();
        $gasto = Gasto::find($id);
        return view('gastoplanilla.edit', compact('gasto','tipogastos', 'empleados') );

        
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
        $gasto = Gasto::find($id);

        $gasto->descripcion = $request->get('descripcion');
        $gasto->costo = $request->get('costo');
        $gasto->fecha = $request->get('fecha');
        $gasto->factura = $request->get('factura');
        $gasto->tipogastos_id = $request->get('tipogastos_id');
      
        $gasto->empleado_id = $request->get('empleado_id');

        $gasto->save(); //Para Guardar todos los datos que queremos registrar.

        
        return redirect('/gastoplanillas'); //Para redirigir a index, despues de guardar.
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
