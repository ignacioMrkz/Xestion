<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Flash;

class MonitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $monitors = \App\Monitor::all();
        return view('monitors.index')->with('monitors', $monitors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $actividades = \App\Models\Actividade::all();
        return view('monitors.create')->with('actividades', $actividades);
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
            'email' => 'required|email|max:255|unique:monitors',
            'password' => 'required|min:6|confirmed',
        ]);

        $monitor = new \App\Monitor;

        $monitor->name = $request->name;
        $monitor->apelido1 = $request->apelido1;
        $monitor->apelido2 = $request->apelido2;
        $monitor->dni = $request->dni;
        $monitor->nacemento = $request->nacemento;
        $monitor->telefono = $request->telefono;
        $monitor->empresa = $request->empresa;
        $monitor->email = $request->email;
        $monitor->password = bcrypt($request->password);
        $monitor->save();

        $monitor->actividades->attach($request->actividades);
        Flash::success('Monitor saved successfully.');

        return redirect(route('monitors.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $monitor = \App\Monitor::findOrFail($id);
        
        if (empty($monitor)) {
            Flash::error('Monitor not found');

            return redirect(route('monitors.index'));
        }

        return view('monitors.show')->with('monitor', $monitor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $monitor = \App\Monitor::findOrFail($id);
        
        if (empty($monitor)) {
            Flash::error('Monitor not found');
            return redirect(route('monitors.index'));
        }

        $actividades = \App\Models\Actividade::all();
        return view('monitors.edit')->with('monitor', $monitor)->with('actividades', $actividades);
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
        $monitor = \App\Monitor::findOrFail($id);

        if (empty($monitor)) {
            Flash::error('Monitor not found');
            return redirect(route('monitors.index'));
        }

        $monitor->update($request->except('password'));
        if (count($request->actividades)) {
            $monitor->actividades()->sync($request->actividades);
        } else {
            $monitor->actividades()->detach();
        }
        Flash::success('Monitor updated successfully.');

        return redirect(route('monitors.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $monitor = \App\Monitor::findOrFail($id);

        if (empty($monitor)) {
            Flash::error('Monitor not found');
            return redirect(route('monitors.index'));
        }

        $monitor->delete();

        Flash::success('Monitor deleted successfully.');

        return redirect(route('monitors.index'));
    }
}
