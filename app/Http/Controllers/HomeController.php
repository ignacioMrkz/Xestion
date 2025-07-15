<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $edicions = \App\Models\Actividade::all()->pluck('edicion')->unique();
        $avaliacions = \App\Models\Avaliacionmonitor::whereNotNull('obsevacions')->orderBy('created_at', 'desc')->get();
        return view('home')->with('edicions', $edicions)->with('avaliacions', $avaliacions);
    }
}
