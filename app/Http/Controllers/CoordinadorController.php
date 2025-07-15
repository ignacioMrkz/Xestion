<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Flash;

class CoordinadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coordinadors = \App\Coordinador::all();
        return view('coordinadors.index')->with('coordinadors', $coordinadors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coordinadors.create');
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
            'email' => 'required|email|max:255|unique:coordinadors',
            'password' => 'required|min:6|confirmed',
        ]);

        $coordinador = new \App\Coordinador;

        $coordinador->name = $request->name;
        $coordinador->apelido1 = $request->apelido1;
        $coordinador->apelido2 = $request->apelido2;
        $coordinador->dni = $request->dni;
        $coordinador->nacemento = $request->nacemento;
        $coordinador->telefono = $request->telefono;
        $coordinador->empresa = $request->empresa;
        $coordinador->email = $request->email;
        $coordinador->password = bcrypt($request->password);
        $coordinador->save();

        Flash::success('Coordinador saved successfully.');

        return redirect(route('coordinadors.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $coordinador = \App\Coordinador::findOrFail($id);
        
        if (empty($coordinador)) {
            Flash::error('Coordinador not found');

            return redirect(route('coordinadors.index'));
        }

        return view('coordinadors.show')->with('coordinador', $coordinador);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coordinador = \App\Coordinador::findOrFail($id);
        
        if (empty($coordinador)) {
            Flash::error('Coordinador not found');
            return redirect(route('coordinadors.index'));
        }

        return view('coordinadors.edit')->with('coordinador', $coordinador);
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
        $coordinador = \App\Coordinador::findOrFail($id);

        if (empty($coordinador)) {
            Flash::error('Coordinador not found');
            return redirect(route('coordinadors.index'));
        }

        $coordinador->update($request->except('password'));

        Flash::success('Coordinador updated successfully.');

        return redirect(route('coordinadors.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coordinador = \App\Coordinador::findOrFail($id);

        if (empty($coordinador)) {
            Flash::error('Coordinador not found');
            return redirect(route('coordinadors.index'));
        }

        $coordinador->delete();

        Flash::success('Coordinador deleted successfully.');

        return redirect(route('coordinadors.index'));
    }

    public function cambiarContrasinal(Request $request)
    {
        $coordinador = \App\Coordinador::findOrFail($request->coordinador_id);
        $validatedData = $request->validate([
            'password' => 'required|min:6|confirmed',
        ]);
        $coordinador->password = bcrypt($request->password);
        $coordinador->save();

        Flash::success('Contrasinal gardada correctamente.');

        return redirect(route('coordinadors.index'));
    }
}
