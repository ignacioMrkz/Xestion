<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateActividadeRequest;
use App\Http\Requests\UpdateActividadeRequest;
use App\Repositories\ActividadeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ActividadeController extends AppBaseController
{
    /** @var  ActividadeRepository */
    private $actividadeRepository;

    public function __construct(ActividadeRepository $actividadeRepo)
    {
        $this->actividadeRepository = $actividadeRepo;
    }

    /**
     * Display a listing of the Actividade.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->actividadeRepository->pushCriteria(new RequestCriteria($request));
        $actividades = $this->actividadeRepository->all();

        return view('actividades.index')
            ->with('actividades', $actividades);
    }

    /**
     * Show the form for creating a new Actividade.
     *
     * @return Response
     */
    public function create()
    {
        $espazos = \App\Models\Espazo::all();
        return view('actividades.create')
            ->with('espazos', $espazos);
    }

    /**
     * Store a newly created Actividade in storage.
     *
     * @param CreateActividadeRequest $request
 
     *
     * @return Response
     */
    public function store(CreateActividadeRequest $request)
    {
        $input = $request->all();

        $actividade = $this->actividadeRepository->create($input);
        //$actividade->espazos->attach($request->espazos);

        Flash::success('Actividade saved successfully.');

        return redirect(route('actividades.index'));
    }

    /**
     * Display the specified Actividade.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $actividade = $this->actividadeRepository->findWithoutFail($id);

        if (empty($actividade)) {
            Flash::error('Actividade not found');

            return redirect(route('actividades.index'));
        }

        return view('actividades.show')->with('actividade', $actividade);
    }

    /**
     * Show the form for editing the specified Actividade.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $actividade = $this->actividadeRepository->findWithoutFail($id);

        if (empty($actividade)) {
            Flash::error('Actividade not found');

            return redirect(route('actividades.index'));
        }

        $espazos = \App\Models\Espazo::all();
        return view('actividades.edit')->with('actividade', $actividade)->with('espazos', $espazos);
    }

    /**
     * Update the specified Actividade in storage.
     *
     * @param  int              $id
     * @param UpdateActividadeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateActividadeRequest $request)
    {
        $actividade = $this->actividadeRepository->findWithoutFail($id);

        if (empty($actividade)) {
            Flash::error('Actividade not found');

            return redirect(route('actividades.index'));
        }

        $actividade = $this->actividadeRepository->update($request->all(), $id);
        if (count($request->espazos)) {
            $actividade->espazos()->sync($request->espazos);
        } else {
            $actividade->espazos()->detach();
        }

        Flash::success('Actividade updated successfully.');

        return redirect(route('actividades.index'));
    }

    /**
     * Remove the specified Actividade from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $actividade = $this->actividadeRepository->findWithoutFail($id);

        if (empty($actividade)) {
            Flash::error('Actividade not found');

            return redirect(route('actividades.index'));
        }

        $this->actividadeRepository->delete($id);

        Flash::success('Actividade deleted successfully.');

        return redirect(route('actividades.index'));
    }
}
