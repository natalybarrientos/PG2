<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;
use App\Models\Cliente;
use App\Models\Empleado;
use App\Models\Maquinaria;
use PDF;

class ProyectoController extends Controller
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
        $total= null;
        $proyectos = Proyecto::all();
        return view('proyecto.index', compact ('proyectos','total'));
    }

    public function pdf($total,$fechaini,$fechafin)
    {
       $proyectos = Proyecto::where('created_at','>=', $fechaini.' 00:00:00')->where('created_at','<=',$fechafin.' 23:59:59')->get();
       $total =  Proyecto::where('created_at','>=',$fechaini.' 00:00:00')->where('created_at','<=',$fechafin.' 23:59:59')->sum('costo');
        
       $pdf = PDF::loadView('proyecto.pdf',['proyectos'=>$proyectos,'total'=>$total]);
       return $pdf->download('proyectos.pdf');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $clientes = Cliente::all();
        $maquinarias = Maquinaria::all();
        $empleados = Empleado::all();
        return view('proyecto.create', compact('clientes','maquinarias','empleados') );
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
            'descripcion' => 'required|max:150',
            'costo' => 'required|max:10',
            'fechainicio' => 'required',
      

        ];
        $mensaje = [
            'descripcion.required' => 'El campo Descripción es requerido',
            'descripcion.max' => 'El campo Descripción no debe de ser mayor a :max caracteres',
            'costo.required' => 'El campo Costo es requerido',
            'costo.max' => 'El campo Costo no debe de ser mayor a :max caracteres',
            'fechainicio.required' => 'El campo Fecha de Inicio es requerido',
            
        ];

        $validated = $request->validate($reglas,$mensaje);



        $proyectos = new Proyecto();
        //$proyectos->id = $request->get('id');
        $proyectos->descripcion = $request->get('descripcion');
        $proyectos->costo = $request->get('costo');
        $proyectos->cliente_id = $request->get('cliente');
        $proyectos->empleado_id = $request->get('empleado');
        $proyectos->fechainicio = $request->get('fechainicio');
        $proyectos->fechafin = $request->get('fechafin');
        
        
       

        $proyectos->save(); //Para Guardar todos los datos que queremos registrar.
        $proyectos->maquinarias()->attach($request->get('maquinaria'));//guarda la tabla pivote (relacion muchos a muchos)

        return redirect('/proyectos'); //Para redirigir a index, despues de guardar.
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
        $proyecto = Proyecto::find($id);
        $clientes = Cliente::all();
        $maquinarias = Maquinaria::all();
        $empleados = Empleado::all();
        return view('proyecto.edit', compact('proyecto','clientes','maquinarias','empleados') );
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
            'descripcion' => 'required|max:150',
            'costo' => 'required|max:10',
            'fechainicio' => 'required',
      

        ];
        $mensaje = [
            'descripcion.required' => 'El campo Descripción es requerido',
            'descripcion.max' => 'El campo Descripción no debe de ser mayor a :max caracteres',
            'costo.required' => 'El campo Costo es requerido',
            'costo.max' => 'El campo Costo no debe de ser mayor a :max caracteres',
            'fechainicio.required' => 'El campo Fecha de Inicio es requerido',
            
        ];

        $validated = $request->validate($reglas,$mensaje);

        
        $proyectos = Proyecto::find($id);
        $proyectos->descripcion = $request->get('descripcion');
        $proyectos->costo = $request->get('costo');
        $proyectos->cliente_id = $request->get('cliente');
        $proyectos->empleado_id = $request->get('empleado');
        $proyectos->fechainicio = $request->get('fechainicio');
        $proyectos->fechafin = $request->get('fechafin');
        $proyectos->estado = $request->get('estado');
        
        
       

        $proyectos->save(); //Para Guardar todos los datos que queremos registrar.
        $proyectos->maquinarias()->sync($request->get('maquinaria'));//guarda la tabla pivote (relacion muchos a muchos)

        return redirect('/proyectos'); //Para redirigir a index, despues de guardar.
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proyecto = Proyecto::find($id);
        $proyecto->delete();

        return redirect('/proyectos');
    }
}
