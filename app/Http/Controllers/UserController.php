<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
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
        $users = User::all();
        return view('user.index')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
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
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',

        ];
        $mensaje = [
            'name.required' => 'El campo Nombre de usuario es requerido',
            'email.required' => 'El Campo Correo electrónico es requerido',
            'password.required' => 'El campo Contraseña es requerido',
            
        ];

        $validated = $request->validate($reglas,$mensaje);

        $users = new User();
        $users->id = $request->get('id');
        $users->name = $request->get('name');
        $users->email = $request->get('email');
        $users->password = bcrypt( $request->get('password'));
        $users->estado = $request->get('estado');
        $users->rol = $request->get('rol');

        $users->save(); //Para Guardar todos los datos que queremos registrar.

        return redirect('/users'); //Para redirigir a index, despues de guardar.
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
        $user = User::find($id);
        return view('user.edit')->with('user',$user);
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
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',

        ];
        $mensaje = [
            'name.required' => 'El campo Nombre de usuario es requerido',
            'email.required' => 'El Campo Correo electrónico es requerido',
            'password.required' => 'El campo Contraseña es requerido',
            
        ];

        $validated = $request->validate($reglas,$mensaje);

        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        if($request->get('password') != null){
        $user->password = bcrypt( $request->get('password'));
        }
        $user->estado = $request->get('estado');
        $user->rol = $request->get('rol');

        $user->save(); //Para Guardar todos los datos que queremos registrar.

        return redirect('/users'); //Para redirigir a index, despues de guardar.
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/users');
    }
}
