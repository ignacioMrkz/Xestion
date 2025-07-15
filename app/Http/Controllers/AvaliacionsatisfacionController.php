<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAvaliacionsatisfacionRequest;
use App\Http\Requests\UpdateAvaliacionsatisfacionRequest;
use App\Repositories\AvaliacionsatisfacionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AvaliacionsatisfacionController extends AppBaseController
{
    /** @var  AvaliacionsatisfacionRepository */
    private $avaliacionsatisfacionRepository;

    public function __construct(AvaliacionsatisfacionRepository $avaliacionsatisfacionRepo)
    {
        $this->avaliacionsatisfacionRepository = $avaliacionsatisfacionRepo;
    }

    /**
     * Display a listing of the Avaliacionsatisfacion.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->avaliacionsatisfacionRepository->pushCriteria(new RequestCriteria($request));
        $avaliacionsatisfacions = $this->avaliacionsatisfacionRepository->all();

        return view('avaliacionsatisfacions.index')
            ->with('avaliacionsatisfacions', $avaliacionsatisfacions);
    }

    /**
     * Show the form for creating a new Avaliacionsatisfacion.
     *
     * @return Response
     */
    public function create()
    {
        $actividades = \App\Models\Actividade::all();
        return view('avaliacionsatisfacions.create')->with('actividades', $actividades);
    }

    /**
     * Store a newly created Avaliacionsatisfacion in storage.
     *
     * @param CreateAvaliacionsatisfacionRequest $request
     *
     * @return Response
     */
    public function store(CreateAvaliacionsatisfacionRequest $request)
    {
        $input = $request->all();

        $avaliacionsatisfacion = $this->avaliacionsatisfacionRepository->create($input);

        Flash::success('Avaliacionsatisfacion saved successfully.');

        return redirect(route('avaliacionsatisfacions.index'));
    }

    /**
     * Display the specified Avaliacionsatisfacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $avaliacionsatisfacion = $this->avaliacionsatisfacionRepository->findWithoutFail($id);

        if (empty($avaliacionsatisfacion)) {
            Flash::error('Avaliacionsatisfacion not found');

            return redirect(route('avaliacionsatisfacions.index'));
        }

        return view('avaliacionsatisfacions.show')->with('avaliacionsatisfacion', $avaliacionsatisfacion);
    }

    /**
     * Show the form for editing the specified Avaliacionsatisfacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $avaliacionsatisfacion = $this->avaliacionsatisfacionRepository->findWithoutFail($id);

        if (empty($avaliacionsatisfacion)) {
            Flash::error('Avaliacionsatisfacion not found');

            return redirect(route('avaliacionsatisfacions.index'));
        }

        $actividades = \App\Models\Actividade::all();
        return view('avaliacionsatisfacions.edit')->with('avaliacionsatisfacion', $avaliacionsatisfacion)->with('actividades', $actividades);
    }

    /**
     * Update the specified Avaliacionsatisfacion in storage.
     *
     * @param  int              $id
     * @param UpdateAvaliacionsatisfacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAvaliacionsatisfacionRequest $request)
    {
        $avaliacionsatisfacion = $this->avaliacionsatisfacionRepository->findWithoutFail($id);

        if (empty($avaliacionsatisfacion)) {
            Flash::error('Avaliacionsatisfacion not found');

            return redirect(route('avaliacionsatisfacions.index'));
        }

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
        $avaliacionsatisfacion = $this->avaliacionsatisfacionRepository->update($input, $id);

        Flash::success('Avaliacionsatisfacion updated successfully.');

        return redirect(route('avaliacionsatisfacions.index'));
    }

    /**
     * Remove the specified Avaliacionsatisfacion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $avaliacionsatisfacion = $this->avaliacionsatisfacionRepository->findWithoutFail($id);

        if (empty($avaliacionsatisfacion)) {
            Flash::error('Avaliacionsatisfacion not found');

            return redirect(route('avaliacionsatisfacions.index'));
        }

        $this->avaliacionsatisfacionRepository->delete($id);

        Flash::success('Avaliacionsatisfacion deleted successfully.');

        return redirect(route('avaliacionsatisfacions.index'));
    }
}
