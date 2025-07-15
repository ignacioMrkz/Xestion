<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Flash;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administradors = \App\User::all();
        return view('administradors.index')->with('administradors', $administradors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administradors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $administrador = new \App\User;

        $administrador->name = $request->name;
        $administrador->email = $request->email;
        $administrador->password = bcrypt($request->password);
        $administrador->save();

        Flash::success('Administrador saved successfully.');

        return redirect(route('administradors.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $administrador = \App\User::findOrFail($id);
        
        if (empty($administrador)) {
            Flash::error('Administrador not found');

            return redirect(route('administradors.index'));
        }

        return view('administradors.show')->with('administrador', $administrador);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $administrador = \App\User::findOrFail($id);
        
        if (empty($administrador)) {
            Flash::error('Administrador not found');
            return redirect(route('administradors.index'));
        }

        return view('administradors.edit')->with('administrador', $administrador);
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
        $administrador = \App\User::findOrFail($id);

        if (empty($administrador)) {
            Flash::error('Administrador not found');
            return redirect(route('administradors.index'));
        }

        $administrador->update($request->except('password'));

        Flash::success('Administrador updated successfully.');

        return redirect(route('administradors.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $administrador = \App\User::findOrFail($id);

        if (empty($administrador)) {
            Flash::error('Administrador not found');
            return redirect(route('administradors.index'));
        }

        $administrador->delete();

        Flash::success('Administrador deleted successfully.');

        return redirect(route('administradors.index'));
    }

    public function cambiarContrasinal(Request $request)
    {
        $administrador = \App\User::findOrFail($request->administrador_id);
        $validatedData = $request->validate([
            'password' => 'required|min:6|confirmed',
        ]);
        $administrador->password = bcrypt($request->password);
        $administrador->save();

        Flash::success('Contrasinal gardada correctamente.');

        return redirect(route('administradors.index'));
    }
}
