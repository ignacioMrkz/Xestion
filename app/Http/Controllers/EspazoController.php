<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEspazoRequest;
use App\Http\Requests\UpdateEspazoRequest;
use App\Repositories\EspazoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EspazoController extends AppBaseController
{
    /** @var  EspazoRepository */
    private $espazoRepository;

    public function __construct(EspazoRepository $espazoRepo)
    {
        $this->espazoRepository = $espazoRepo;
    }

    /**
     * Display a listing of the Espazo.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->espazoRepository->pushCriteria(new RequestCriteria($request));
        $espazos = $this->espazoRepository->all();

        return view('espazos.index')
            ->with('espazos', $espazos);
    }

    /**
     * Show the form for creating a new Espazo.
     *
     * @return Response
     */
    public function create()
    {
        return view('espazos.create');
    }

    /**
     * Store a newly created Espazo in storage.
     *
     * @param CreateEspazoRequest $request
     *
     * @return Response
     */
    public function store(CreateEspazoRequest $request)
    {
        $input = $request->all();

        $espazo = $this->espazoRepository->create($input);

        Flash::success('Espazo saved successfully.');

        return redirect(route('espazos.index'));
    }

    /**
     * Display the specified Espazo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $espazo = $this->espazoRepository->findWithoutFail($id);

        if (empty($espazo)) {
            Flash::error('Espazo not found');

            return redirect(route('espazos.index'));
        }

        return view('espazos.show')->with('espazo', $espazo);
    }

    /**
     * Show the form for editing the specified Espazo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $espazo = $this->espazoRepository->findWithoutFail($id);

        if (empty($espazo)) {
            Flash::error('Espazo not found');

            return redirect(route('espazos.index'));
        }

        return view('espazos.edit')->with('espazo', $espazo);
    }

    /**
     * Update the specified Espazo in storage.
     *
     * @param  int              $id
     * @param UpdateEspazoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEspazoRequest $request)
    {
        $espazo = $this->espazoRepository->findWithoutFail($id);

        if (empty($espazo)) {
            Flash::error('Espazo not found');

            return redirect(route('espazos.index'));
        }

        $espazo = $this->espazoRepository->update($request->all(), $id);

        Flash::success('Espazo updated successfully.');

        return redirect(route('espazos.index'));
    }

    /**
     * Remove the specified Espazo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $espazo = $this->espazoRepository->findWithoutFail($id);

        if (empty($espazo)) {
            Flash::error('Espazo not found');

            return redirect(route('espazos.index'));
        }

        $this->espazoRepository->delete($id);

        Flash::success('Espazo deleted successfully.');

        return redirect(route('espazos.index'));
    }
}
