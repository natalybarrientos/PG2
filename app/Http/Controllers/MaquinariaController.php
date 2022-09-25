<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maquinaria;

class MaquinariaController extends Controller
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
        $maquinarias = Maquinaria::all();
        return view('maquinaria.index')->with('maquinarias',$maquinarias); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('maquinaria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $maquinarias = new Maquinaria();

        $maquinarias->id = $request->get('id');
        $maquinarias->nombre = $request->get('nombre');
        $maquinarias->descripcion = $request->get('descripcion');
        $maquinarias->precio = $request->get('precio');
        $maquinarias->fechaadq = $request->get('fechaadq');
        $maquinarias->fechabaja = $request->get('fechabaja');
        if($imagen =  $request->file('imagen')) {
            $rutaGuardarImg = "imagen/";
            $imagenMaquinaria = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenMaquinaria);
            $maquinarias['imagen'] = "$imagenMaquinaria";
        }
        $maquinarias->estado = $request->get('estado');

        $maquinarias->save(); //Para Guardar todos los datos que queremos registrar.

        return redirect('/maquinarias'); //Para redirigir a index, despues de guardar.
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
        $maquinaria = Maquinaria::find($id);
        return view('maquinaria.edit')->with('maquinaria',$maquinaria);
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
        $maquinaria = Maquinaria::find($id);

        $maquinaria->nombre = $request->get('nombre');
        $maquinaria->descripcion = $request->get('descripcion');
        $maquinaria->precio = $request->get('precio');
        $maquinaria->fechaadq = $request->get('fechaadq');
        $maquinaria->fechabaja = $request->get('fechabaja');
        if($imagen =  $request->file('imagen')) {
            $rutaGuardarImg = "imagen/";
            $imagenMaquinaria = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenMaquinaria);
            $maquinaria['imagen'] = "$imagenMaquinaria";
        }else{
            unset($maquinaria['imagen']);
        }
        $maquinaria->estado = $request->get('estado');

        $maquinaria->save(); //Para Guardar todos los datos que queremos registrar.

        return redirect('/maquinarias'); //Para redirigir a index, despues de guardar.
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $maquinaria = Maquinaria::find($id);
        $maquinaria->delete();

        return redirect('/maquinarias');
    }
}
