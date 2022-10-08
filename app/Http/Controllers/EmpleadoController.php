<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use Carbon\Carbon;


class EmpleadoController extends Controller
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
       $empleados = Empleado::all();
        return view('empleado.index')->with('empleados',$empleados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fecha = Carbon::now()->format('Y-m-d');
        return view("empleado.create")->with('fecha',$fecha);
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
            'dpi' => 'required|max:13',
            'fecha' => 'required',
            'contacto' => 'required|max:8',
            'direccion' => 'required|max:150',
            'imagen' => 'required',
        ];
        $mensaje = [
            'nombre.required' => 'El campo Nombre es requerido',
            'nombre.max' => 'El Campo nombre no debe de ser mayor a :max caracteres',
            'dpi.required' => 'El campo DPI es requerido',
            'dpi.max' => 'El Campo DPI no debe de ser mayor a :max dígitos',
            'fecha.required' => 'El campo fecha es requerido',
            'contacto.required' => 'El campo Contacto es requerido',
            'contacto.max' => 'El Campo Contacto no debe de ser mayor a :max dígitos',
            'direccion.required' => 'El campo Dirección es requerido',
            'direccion.max' => 'El Campo Dirección no debe de ser mayor a :max caracteres',
            'imagen.required' => 'El campo Imagen es requerido',
        ];

        $validated = $request->validate($reglas,$mensaje);



        $empleados = new Empleado();
        $empleados->id = $request->get('id');
        $empleados->nombre = $request->get('nombre');
        $empleados->dpi = $request->get('dpi');
        $empleados->fecha = $request->get('fecha');
        $empleados->contacto = $request->get('contacto');
        $empleados->direccion = $request->get('direccion');
        if($imagen =  $request->file('imagen')) {
            $rutaGuardarImg = "imagen/";
            $imagenEmpleado = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenEmpleado);
            $empleados['imagen'] = "$imagenEmpleado";
        }
        $empleados->estado = $request->get('estado');
        
        $empleados->save(); //Para Guardar todos los datos que queremos registrar.

        return redirect('/empleados'); //Para redirigir a index, despues de guardar.
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

        $empleado = Empleado::find($id);
        return view('empleado.edit', compact( 'empleado', 'fecha') );
      
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
            'dpi' => 'required|max:13',
            'fecha' => 'required',
            'contacto' => 'required|max:8',
            'direccion' => 'required|max:150',
            'imagen' => 'required',
        ];
        $mensaje = [
            'nombre.required' => 'El campo Nombre es requerido',
            'nombre.max' => 'El Campo nombre no debe de ser mayor a :max caracteres',
            'dpi.required' => 'El campo DPI es requerido',
            'dpi.max' => 'El Campo DPI no debe de ser mayor a :max dígitos',
            'fecha.required' => 'El campo fecha es requerido',
            'contacto.required' => 'El campo Contacto es requerido',
            'contacto.max' => 'El Campo Contacto no debe de ser mayor a :max dígitos',
            'direccion.required' => 'El campo Dirección es requerido',
            'direccion.max' => 'El Campo Dirección no debe de ser mayor a :max caracteres',
            'imagen.required' => 'El campo Imagen es requerido',
        ];

        $validated = $request->validate($reglas,$mensaje);

        

        $empleado = Empleado::find($id);
        $empleado->nombre = $request->get('nombre');
        $empleado->dpi = $request->get('dpi');
        $empleado->fecha = $request->get('fecha');
        $empleado->contacto = $request->get('contacto');
        $empleado->direccion = $request->get('direccion');
      
        if($imagen =  $request->file('imagen')) {
            $rutaGuardarImg = "imagen/";
            $imagenEmpleado = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenEmpleado);
            $empleado['imagen'] = "$imagenEmpleado";
        }else{
            unset($empleado['imagen']);
        }
        $empleado->estado = $request->get('estado');

        $empleado->save(); //Para Guardar todos los datos que queremos registrar.

        return redirect('/empleados'); //Para redirigir a index, despues de guardar.
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleado = Empleado::find($id);
        $empleado->delete();

        return redirect('/empleados');
    }
}
