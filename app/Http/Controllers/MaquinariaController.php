<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maquinaria;
use Carbon\Carbon;
use PDF;

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

    public function pdf()
    {
       $maquinarias = Maquinaria::all();
       $pdf = PDF::loadView('maquinaria.pdf',['maquinarias'=>$maquinarias]);
       return $pdf->download('maquinarias.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fecha = Carbon::now()->format('Y-m-d');
        return view("maquinaria.create")->with('fecha',$fecha);

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
            'nombre' => 'required|max:80',
            'descripcion' => 'required|max:150',
            'precio' => 'required|max:10',
            'fechaadq' => 'required',
            'imagen' => 'required',
      

        ];
        $mensaje = [
            'nombre.required' => 'El campo Nombre es requerido',
            'nombre.max' => 'El campo Nombre no debe de ser mayor a :max caracteres',
            'descripcion.required' => 'El campo Descripción es requerido',
            'descripcion.max' => 'El campo Descripción no debe de ser mayor a :max caracteres',
            'precio.required' => 'El campo Precio es requerido',
            'precio.max' => 'El campo Precio no debe de ser mayor a :max caracteres',
            'fechaadq.required' => 'El campo Fecha de Adquisición es requerido',
            'fechaadq.max' => 'El Campo Fecha de Adquisición  no debe de ser mayor a :max caracteres',
            'imagen.required' => 'El campo Imagen es requerido',
        ];

        $validated = $request->validate($reglas,$mensaje);


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
        $fecha = Carbon::now()->format('Y-m-d');

        $maquinaria = Maquinaria::find($id);
        return view('maquinaria.edit', compact( 'maquinaria', 'fecha') );
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
            'nombre' => 'required|max:80',
            'descripcion' => 'required|max:150',
            'precio' => 'required|max:10',
            'fechaadq' => 'required',
            
      

        ];
        $mensaje = [
            'nombre.required' => 'El campo Nombre es requerido',
            'nombre.max' => 'El campo Nombre no debe de ser mayor a :max caracteres',
            'descripcion.required' => 'El campo Descripción es requerido',
            'descripcion.max' => 'El campo Descripción no debe de ser mayor a :max caracteres',
            'precio.required' => 'El campo Precio es requerido',
            'precio.max' => 'El campo Precio no debe de ser mayor a :max caracteres',
            'fechaadq.required' => 'El campo Fecha de Adquisición es requerido',
            'fechaadq.max' => 'El Campo Fecha de Adquisición  no debe de ser mayor a :max caracteres',
            
        ];

        $validated = $request->validate($reglas,$mensaje);

        

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
