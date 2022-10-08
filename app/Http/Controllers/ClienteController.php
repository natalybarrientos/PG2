<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
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
        $clientes = Cliente::all();
        return view('cliente.index')->with('clientes',$clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
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
            'nit' => 'required|max:8',
            'contacto' => 'required|max:8',
            'direccion' => 'required|max:150',

        ];
        $mensaje = [
            'nombre.required' => 'El campo Nombre es requerido',
            'nombre.max' => 'El campo Nombre no debe de ser mayor a :max caracteres',
            'nit.required' => 'El campo NIT es requerido',
            'nit.max' => 'El campo NIT no debe de ser mayor a :max dígitos',
            'contacto.required' => 'El campo Contacto es requerido',
            'contacto.max' => 'El campo Contacto no debe de ser mayor a :max dígitos',
            'direccion.required' => 'El campo Dirección es requerido',
            'direccion.max' => 'El campo Dirección no debe de ser mayor a :max caracteres',
        ];

        $validated = $request->validate($reglas,$mensaje);

        $clientes = new Cliente();
        $clientes->id = $request->get('id');
        $clientes->nombre = $request->get('nombre');
        $clientes->nit = $request->get('nit');
        $clientes->contacto = $request->get('contacto');
        $clientes->direccion = $request->get('direccion');
        $clientes->estado = $request->get('estado');

        $clientes->save(); //Para Guardar todos los datos que queremos registrar.

        return redirect('/clientes'); //Para redirigir a index, despues de guardar.
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
        $cliente = Cliente::find($id);
        return view('cliente.edit')->with('cliente',$cliente);
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
            'nit' => 'required|max:8',
            'contacto' => 'required|max:8',
            'direccion' => 'required|max:150',

        ];
        $mensaje = [
            'nombre.required' => 'El campo Nombre es requerido',
            'nombre.max' => 'El campo Nombre no debe de ser mayor a :max caracteres',
            'nit.required' => 'El campo NIT es requerido',
            'nit.max' => 'El campo NIT no debe de ser mayor a :max dígitos',
            'contacto.required' => 'El campo Contacto es requerido',
            'contacto.max' => 'El campo Contacto no debe de ser mayor a :max dígitos',
            'direccion.required' => 'El campo Dirección es requerido',
            'direccion.max' => 'El campo Dirección no debe de ser mayor a :max caracteres',
        ];


        $validated = $request->validate($reglas,$mensaje);


        $cliente = Cliente::find($id);

        $cliente->nombre = $request->get('nombre');
        $cliente->nit = $request->get('nit');
        $cliente->contacto = $request->get('contacto');
        $cliente->direccion = $request->get('direccion');
        $cliente->estado = $request->get('estado');

        $cliente->save(); //Para Guardar todos los datos que queremos registrar.

        return redirect('/clientes'); //Para redirigir a index, despues de guardar.
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();

        return redirect('/clientes');
    }
}
