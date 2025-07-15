<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAvaliacionmonitorRequest;
use App\Http\Requests\UpdateAvaliacionmonitorRequest;
use App\Repositories\AvaliacionmonitorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AvaliacionmonitorController extends AppBaseController
{
    /** @var  AvaliacionmonitorRepository */
    private $avaliacionmonitorRepository;

    public function __construct(AvaliacionmonitorRepository $avaliacionmonitorRepo)
    {
        $this->avaliacionmonitorRepository = $avaliacionmonitorRepo;
    }

    /**
     * Display a listing of the Avaliacionmonitors.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->avaliacionmonitorRepository->pushCriteria(new RequestCriteria($request));
        $avaliacionmonitors = $this->avaliacionmonitorRepository->all();

        return view('avaliacionmonitors.index')
            ->with('avaliacionmonitors', $avaliacionmonitors);
    }

    /**
     * Show the form for creating a new Avaliacionmonitors.
     *
     * @return Response
     */
    public function create()
    {
        $espazos = \App\Models\Espazo::all();
        $actividades = \App\Models\Actividade::all();
        $coordinadores = \App\Coordinador::all();
        return view('avaliacionmonitors.create')->with('espazos', $espazos)->with('actividades', $actividades)->with('coordinadores', $coordinadores);
    }

    /**
     * Store a newly created Avaliacionmonitors in storage.
     *
     * @param CreateAvaliacionmonitorRequest $request
     *
     * @return Response
     */
    public function store(CreateAvaliacionmonitorRequest $request)
    {
        $input = $request->all();

        $avaliacionmonitors = $this->avaliacionmonitorRepository->create($input);

        Flash::success('Avaliacionmonitors saved successfully.');

        return redirect(route('avaliacionmonitors.index'));
    }

    /**
     * Display the specified Avaliacionmonitors.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $avaliacionmonitors = $this->avaliacionmonitorRepository->findWithoutFail($id);

        if (empty($avaliacionmonitors)) {
            Flash::error('Avaliacionmonitors not found');

            return redirect(route('avaliacionmonitors.index'));
        }

        return view('avaliacionmonitors.show')->with('avaliacionmonitors', $avaliacionmonitors);
    }

    /**
     * Show the form for editing the specified Avaliacionmonitors.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $avaliacionmonitors = $this->avaliacionmonitorRepository->findWithoutFail($id);

        if (empty($avaliacionmonitors)) {
            Flash::error('Avaliacionmonitors not found');

            return redirect(route('avaliacionmonitors.index'));
        }
        $espazos = \App\Models\Espazo::all();
        $actividades = \App\Models\Actividade::all();
        $coordinadores = \App\Coordinador::all();

        return view('avaliacionmonitors.edit')->with('avaliacionmonitors', $avaliacionmonitors)->with('espazos', $espazos)->with('actividades', $actividades)->with('coordinadores', $coordinadores);
    }

    /**
     * Update the specified Avaliacionmonitors in storage.
     *
     * @param  int              $id
     * @param UpdateAvaliacionmonitorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAvaliacionmonitorRequest $request)
    {
        $avaliacionmonitors = $this->avaliacionmonitorRepository->findWithoutFail($id);

        if (empty($avaliacionmonitors)) {
            Flash::error('Avaliacionmonitors not found');

            return redirect(route('avaliacionmonitors.index'));
        }

        $avaliacionmonitors = $this->avaliacionmonitorRepository->update($request->all(), $id);

        Flash::success('Avaliacionmonitors updated successfully.');

        return redirect(route('avaliacionmonitors.index'));
    }

    /**
     * Remove the specified Avaliacionmonitors from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $avaliacionmonitors = $this->avaliacionmonitorRepository->findWithoutFail($id);

        if (empty($avaliacionmonitors)) {
            Flash::error('Avaliacionmonitors not found');

            return redirect(route('avaliacionmonitors.index'));
        }

        $this->avaliacionmonitorRepository->delete($id);

        Flash::success('Avaliacionmonitors deleted successfully.');

        return redirect(route('avaliacionmonitors.index'));
    }

    public function cambiarRevisada($id)
    {
        $avaliacionmonitor = $this->avaliacionmonitorRepository->findWithoutFail($id);
        $avaliacionmonitor->revisada = !$avaliacionmonitor->revisada;
        $avaliacionmonitor->save();

        return redirect()->action('AvaliacionmonitorController@index');
    }
}
