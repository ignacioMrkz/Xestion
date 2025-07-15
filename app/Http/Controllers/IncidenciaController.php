<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateIncidenciaRequest;
use App\Http\Requests\UpdateIncidenciaRequest;
use App\Repositories\IncidenciaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class IncidenciaController extends AppBaseController
{
    /** @var  IncidenciaRepository */
    private $incidenciaRepository;

    public function __construct(IncidenciaRepository $incidenciaRepo)
    {
        $this->incidenciaRepository = $incidenciaRepo;
    }

    /**
     * Display a listing of the Incidencia.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->incidenciaRepository->pushCriteria(new RequestCriteria($request));
        $incidencias = $this->incidenciaRepository->all();

        return view('incidencias.index')
            ->with('incidencias', $incidencias);
    }

    /**
     * Show the form for creating a new Incidencia.
     *
     * @return Response
     */
    public function create()
    {
        $espazos = \App\Models\Espazo::all();
        $coordinadores = \App\Coordinador::all();
        return view('incidencias.create')->with('espazos', $espazos)->with('coordinadores', $coordinadores);
    }

    /**
     * Store a newly created Incidencia in storage.
     *
     * @param CreateIncidenciaRequest $request
     *
     * @return Response
     */
    public function store(CreateIncidenciaRequest $request)
    {
        $input = $request->all();

        $incidencia = $this->incidenciaRepository->create($input);

        Flash::success('Incidencia saved successfully.');

        return redirect(route('incidencias.index'));
    }

    /**
     * Display the specified Incidencia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $incidencia = $this->incidenciaRepository->findWithoutFail($id);

        if (empty($incidencia)) {
            Flash::error('Incidencia not found');

            return redirect(route('incidencias.index'));
        }

        return view('incidencias.show')->with('incidencia', $incidencia);
    }

    /**
     * Show the form for editing the specified Incidencia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $incidencia = $this->incidenciaRepository->findWithoutFail($id);

        if (empty($incidencia)) {
            Flash::error('Incidencia not found');

            return redirect(route('incidencias.index'));
        }

        $espazos = \App\Models\Espazo::all();
        $coordinadores = \App\Coordinador::all();
        return view('incidencias.edit')->with('incidencia', $incidencia)->with('espazos', $espazos)->with('coordinadores', $coordinadores);
    }

    /**
     * Update the specified Incidencia in storage.
     *
     * @param  int              $id
     * @param UpdateIncidenciaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateIncidenciaRequest $request)
    {
        $incidencia = $this->incidenciaRepository->findWithoutFail($id);

        if (empty($incidencia)) {
            Flash::error('Incidencia not found');

            return redirect(route('incidencias.index'));
        }

        $incidencia = $this->incidenciaRepository->update($request->all(), $id);

        Flash::success('Incidencia updated successfully.');

        return redirect(route('incidencias.index'));
    }

    /**
     * Remove the specified Incidencia from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $incidencia = $this->incidenciaRepository->findWithoutFail($id);

        if (empty($incidencia)) {
            Flash::error('Incidencia not found');

            return redirect(route('incidencias.index'));
        }

        $this->incidenciaRepository->delete($id);

        Flash::success('Incidencia deleted successfully.');

        return redirect(route('incidencias.index'));
    }
}
