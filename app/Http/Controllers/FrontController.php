<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSocioRequest;
use App\Http\Requests\UpdateSocioRequest;
use App\Repositories\SocioRepository;
use App\Http\Requests\CreateIncidenciaRequest;
use App\Repositories\IncidenciaRepository;
use App\Http\Requests\CreateAvaliacionsatisfacionRequest;
use App\Repositories\AvaliacionsatisfacionRepository;
use App\Http\Requests\CreateAvaliacionmonitorRequest;
use App\Http\Requests\UpdateAvaliacionmonitorRequest;
use App\Repositories\AvaliacionmonitorRepository;
use Illuminate\Http\Request;
use Storage;

class FrontController extends Controller
{
    private $socioRepository;
    private $incidenciaRepository;
    private $avaliacionsatisfacionRepository;
    private $avaliacionmonitorRepository;

    public function __construct(SocioRepository $socioRepo, IncidenciaRepository $incidenciaRepo, AvaliacionsatisfacionRepository $avaliacionsatisfacionRepo, AvaliacionmonitorRepository $avaliacionmonitorRepo)
    {
        $this->socioRepository = $socioRepo;
        $this->incidenciaRepository = $incidenciaRepo;
        $this->avaliacionsatisfacionRepository = $avaliacionsatisfacionRepo;
        $this->avaliacionmonitorRepository = $avaliacionmonitorRepo;
    }

    public function coordinadorHome()
    {
        $coordinador = \Auth::guard('coordinador')->user();
        $ahora = \Carbon\Carbon::now();
        //$eventos = \App\Models\Evento::where('inicio', '>', $antes)->where('inicio', '<', $despues)->get();
        $actividades = \App\Models\Actividade::whereHas('eventos', function($query) {
            $query->where('inicio', '>', \Carbon\Carbon::now()->subDays(3))->where('inicio', '<', \Carbon\Carbon::now()->addDays(5));
        })
        ->get();
        return view('coordinador.home')->with('coordinador', $coordinador)->with('actividades', $actividades);
    }

    public function sorteoParticipantes()
    {
        return view('coordinador.sorteo-participantes');
    }

    public function postSorteoParticipantes(Request $request)
    {
        $grupos = range(1, $request->grupos);
        shuffle($grupos);
        $ganadores = array_slice($grupos, 0, $request->ganadores);
        sort($ganadores);
        return view('coordinador.resultado-sorteo')->with('ganadores', $ganadores);
    }

    public function incidencias()
    {
        $espazos = \App\Models\Espazo::orderBy('nome')->get();
        return view('coordinador.incidencias')->with('espazos', $espazos);
    }

    public function postIncidencias(Request $request)
    {
        $validatedData = $request->validate([
            'espazo_id' => 'required',
        ]);
        $coordinador = \Auth::guard('coordinador')->user();
        $input = $request->all();
        $input['coordinador_id'] = $coordinador->id;
        $incidencia = $this->incidenciaRepository->create($input);
        if ($request->hasFile('imaxe')) {
            $input['imaxe'] = $request->imaxe->getClientOriginalName();
            Storage::disk('imaxes')->put($incidencia->id.'/'.$request->imaxe->getClientOriginalName(), file_get_contents($request->imaxe));
        }
        //$avaliacionmonitor->monitors()->attach($request->monitors);
        return view('coordinador.incidencia-correcta')->with('coordinador', $coordinador);
        return view('coordinador.enquisa-correcta')->with('coordinador', $coordinador);
        return view('coordinador.resultado-sorteo')->with('ganadores', $ganadores);
    }

    public function novoSocio()
    {
        return view('coordinador.novo-socio');
    }

    public function coordinadorAvaliacion()
    {
        $coordinador = \Auth::guard('coordinador')->user();
        $actividades = \App\Models\Actividade::all();
        $pontevedra = pontevedra();
        return view('coordinador.avaliacion')->with('coordinador', $coordinador)->with('actividades', $actividades)->with('pontevedra', $pontevedra);
    }

    public function verSocios()
    {
        $coordinador = \Auth::guard('coordinador')->user();
        $socios = \App\Models\Socio::orderBy('numero')->get();
        return view('coordinador.ver-socios')->with('coordinador', $coordinador)->with('socios', $socios);
    }

    public function editarSocio($id)
    {
        $coordinador = \Auth::guard('coordinador')->user();
        $socio = \App\Models\Socio::find($id);
        return view('coordinador.editar-socio')->with('coordinador', $coordinador)->with('socio', $socio);
    }

    public function postEditarSocio(Request $request)
    {
        $coordinador = \Auth::guard('coordinador')->user();
        $socio = \App\Models\Socio::find($request->socio_id);
        $socio = $this->socioRepository->update($request->all(), $socio->id);
        $socios = \App\Models\Socio::all();
        return view('coordinador.ver-socios')->with('coordinador', $coordinador)->with('socios', $socios)->with('mensajeActualizar', true);
    }

    public function eliminarSocio($id)
    {
        $coordinador = \Auth::guard('coordinador')->user();
        $socio = \App\Models\Socio::find($id);
        $socio->delete();
        $socios = \App\Models\Socio::all();
        return view('coordinador.ver-socios')->with('coordinador', $coordinador)->with('socios', $socios)->with('mensajeBorrar', true);
    }

    public function coordinadorAvaliacionMonitors($id)
    {
        $coordinador = \Auth::guard('coordinador')->user();
        $actividade = \App\Models\Actividade::findOrFail($id);
        $espazos = \App\Models\Espazo::orderBy('nome')->get();
        $pontevedra = pontevedra();
        return view('coordinador.avaliacion-monitors')->with('coordinador', $coordinador)->with('actividade', $actividade)->with('pontevedra', $pontevedra)->with('espazos', $espazos);
    }

    public function coordinadorAvaliacionSatisfaccion($id)
    {
        $coordinador = \Auth::guard('coordinador')->user();
        $actividade = \App\Models\Actividade::findOrFail($id);
        $pontevedra = pontevedra();
        return view('coordinador.avaliacion-satisfaccion')->with('coordinador', $coordinador)->with('actividade', $actividade)->with('pontevedra', $pontevedra);
    }

    public function postNovoSocio(CreateSocioRequest $request)
    {
        $coordinador = \Auth::guard('coordinador')->user();
        $input = $request->all();
        $socio = $this->socioRepository->create($input);
        //$avaliacionmonitor->monitors()->attach($request->monitors);
        return view('coordinador.enquisa-correcta')->with('coordinador', $coordinador);
    }

    public function postCoordinadorAvaliacionMonitors(CreateAvaliacionmonitorRequest $request)
    {
        $coordinador = \Auth::guard('coordinador')->user();
        $input = $request->all();
        $input['data'] = \Carbon\Carbon::createFromFormat('d/m/y', $request->data);
        $input['coordinador_id'] = $coordinador->id;
        $input['revisada'] = 0;
        $avaliacionmonitor = $this->avaliacionmonitorRepository->create($input);
        //$avaliacionmonitor->monitors()->attach($request->monitors);
        $coordinador = \Auth::guard('coordinador')->user();
        return view('coordinador.enquisa-correcta')->with('coordinador', $coordinador);
    }

    public function postCoordinadorAvaliacionMonitorsModificar(UpdateAvaliacionmonitorRequest $request)
    {
        $coordinador = \Auth::guard('coordinador')->user();
        $avaliacionmonitor = \App\Models\Avaliacionmonitor::findOrFail($request->avaliacion_id);
        $input = $request->all();
        $input['data'] = \Carbon\Carbon::createFromFormat('d/m/y', $request->data);
        $input['coordinador_id'] = $coordinador->id;
        $input['revisada'] = 1;
        $this->avaliacionmonitorRepository->update($input, $avaliacionmonitor->id);
        //$avaliacionmonitor->monitors()->attach($request->monitors);
        $coordinador = \Auth::guard('coordinador')->user();
        return view('coordinador.enquisa-correcta')->with('coordinador', $coordinador);
    }

    public function postCoordinadorAvaliacionSatisfaccion(CreateAvaliacionsatisfacionRequest $request)
    {
        $coordinador = \Auth::guard('coordinador')->user();
        $input = $request->all();
        $input['estado'] = implode("|",$request->estado);
        if ($request->estadoOutro) {
            $input['estado'] .= "|".$request->estadoOutro;
        }
        $input['motivacion'] = implode("|",$request->motivacion);
        if ($request->motivacionOutro) {
            $input['motivacion'] .= "|".$request->motivacionOutro;
        }
        $input['encontrou'] = implode("|",$request->encontrou);
        if ($request->encontrouOutro) {
            $input['encontrou'] .= "|".$request->encontrouOutro;
        }
        $input['coordinador_id'] = $coordinador->id;

        $avaliacionsatisfacion = $this->avaliacionsatisfacionRepository->create($input);
        $coordinador = \Auth::guard('coordinador')->user();
        return view('coordinador.enquisa-correcta')->with('coordinador', $coordinador);
    }

    public function revisarAvaliacions()
    {
        $coordinador = \Auth::guard('coordinador')->user();
        $avaliacionsPendientes = $coordinador->avaliacionmonitors->where('revisada', 0);

        return view('coordinador.revisar-avaliacions')->with('coordinador', $coordinador)->with('avaliacions', $avaliacionsPendientes);
    }

    public function revisarAvaliacion($id)
    {
        $coordinador = \Auth::guard('coordinador')->user();
        $avaliacionmonitor = \App\Models\Avaliacionmonitor::findOrFail($id);
        if ($avaliacionmonitor->coordinador_id === $coordinador->id) {
            $actividades = \App\Models\Actividade::all();
            $espazos = \App\Models\Espazo::orderBy('nome')->get();
            $pontevedra = pontevedra();
            return view('coordinador.revisar-avaliacion')->with('coordinador', $coordinador)->with('avaliacion', $avaliacionmonitor)->with('actividades', $actividades)->with('pontevedra', $pontevedra)->with('espazos', $espazos);
        } else {
            return 'incorrecto';
        }
    }

    public function validarAvaliacion($id)
    {
        $coordinador = \Auth::guard('coordinador')->user();
        $avaliacionmonitor = \App\Models\Avaliacionmonitor::findOrFail($id);
        if ($avaliacionmonitor->coordinador_id === $coordinador->id) {
            $avaliacionmonitor->revisada = 1;
            $avaliacionmonitor->save();

            return redirect()->back();
        } else {
            return 'incorrecto';
        }
    }

    public function datosEdicionActividades($edicion)
    {
        $actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
        $edicion = \App\Models\Actividade::first()->edicion;

        return view('datos.datos-edicion-actividades')->with('actividades', $actividades)->with('edicion', $edicion);
    }

    public function datosEdicionMonitors($edicion)
    {
        $actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
        $edicion = \App\Models\Actividade::first()->edicion;

        return view('datos.datos-edicion-monitors')->with('actividades', $actividades)->with('edicion', $edicion);
    }

    public function datosEdicionSatisfaccion($edicion)
    {
        $actividades = \App\Models\Actividade::where('edicion', $edicion)->get();
        $edicion = \App\Models\Actividade::first()->edicion;

        return view('datos.datos-edicion-satisfaccion')->with('actividades', $actividades)->with('edicion', $edicion);
    }

    public function datosSegmentados()
    {
        return view('datos.datos-segmentados');
    }

    public function postDatosSegmentados(Request $request)
    {
        $avaliacionmonitors = \App\Models\Avaliacionmonitor::where('data', '>=', $request->inicio)->where('data', '<=', $request->fin)->get();
        $espazos = \App\Models\Espazo::orderBy('nome')->get();
        return view('datos.post-datos-segmentados')
            ->with('avaliacionmonitors', $avaliacionmonitors)
            ->with('espazos', $espazos)
            ->with('inicio', $request->inicio)
            ->with('fin', $request->fin);
    }

    public function verEnquisas()
    {
        $coordinador = \Auth::guard('coordinador')->user();
        $avaliacions = \App\Models\Avaliacionsatisfacion::where('created_at', '>', \Carbon\Carbon::now()->subDays(3))->where('created_at', '<', \Carbon\Carbon::now()->addDays(5))->get();
        foreach ($avaliacions as $avaliacion) {
            $avaliacion->espazoNome = $avaliacion->actividade->espazos->first()->nome;
        }
        return view('coordinador.ver-enquisas')->with('coordinador', $coordinador)->with('avaliacions', $avaliacions);
    }

    public function revisarAvaliacionSatisfacion($id)
    {
        $coordinador = \Auth::guard('coordinador')->user();
        $avaliacionsatisfacion = \App\Models\Avaliacionsatisfacion::findOrFail($id);
        if ($avaliacionsatisfacion->coordinador_id === $coordinador->id) {
            $actividades = \App\Models\Actividade::all();
            $espazos = \App\Models\Espazo::orderBy('nome')->get();
            $pontevedra = pontevedra();
            return view('coordinador.revisar-avaliacion-satisfacion')->with('coordinador', $coordinador)->with('avaliacion', $avaliacionsatisfacion)->with('actividades', $actividades)->with('pontevedra', $pontevedra)->with('espazos', $espazos);
        } else {
            return 'incorrecto';
        }
    }
}
