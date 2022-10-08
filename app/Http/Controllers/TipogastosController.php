<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipogastos;

class TipogastosController extends Controller
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
        $tipogastos = Tipogastos::all();
        return view('tipogastos.index')->with('tipogastos',$tipogastos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipogastos.create');
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
            'tipo' => 'required|max:40',
            'descripcion' => 'required|max:150',
      

        ];
        $mensaje = [
            'tipo.required' => 'El campo tipo de gasto es requerido',
            'tipo.max' => 'El Campo tipo de gasto no debe de ser mayor a :max caracteres',
            'descripcion.required' => 'El campo descripcion es requerido',
            'descripcion.max' => 'El Campo descripcion no debe de ser mayor a :max caracteres',
        ];

        $validated = $request->validate($reglas,$mensaje);


        $tipogastos = new Tipogastos();
        $tipogastos->id = $request->get('id');
        $tipogastos->tipo = $request->get('tipo');
        $tipogastos->descripcion = $request->get('descripcion');


        $tipogastos->save(); //Para Guardar todos los datos que queremos registrar.

        return redirect('/tipogastos'); //Para redirigir a index, despues de guardar.
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
        $tipogastos = Tipogastos::find($id);
        return view('tipogastos.edit')->with('tipogastos',$tipogastos);
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
            'tipo' => 'required|max:40',
            'descripcion' => 'required|max:150',
      

        ];
        $mensaje = [
            'tipo.required' => 'El campo tipo de gasto es requerido',
            'tipo.max' => 'El Campo tipo de gasto no debe de ser mayor a :max caracteres',
            'descripcion.required' => 'El campo descripcion es requerido',
            'descripcion.max' => 'El Campo descripcion no debe de ser mayor a :max caracteres',
        ];

        $validated = $request->validate($reglas,$mensaje);
        
        $tipogastos = Tipogastos::find($id);

        $tipogastos->tipo = $request->get('tipo');
        $tipogastos->descripcion = $request->get('descripcion');
     

        $tipogastos->save(); //Para Guardar todos los datos que queremos registrar.

        return redirect('/tipogastos'); //Para redirigir a index, despues de guardar.
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipogastos = Tipogastos::find($id);
        $tipogastos->delete();

        return redirect('/tipogastos');
    }
}
