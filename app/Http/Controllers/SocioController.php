<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSocioRequest;
use App\Http\Requests\UpdateSocioRequest;
use App\Repositories\SocioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SocioController extends AppBaseController
{
    /** @var  SocioRepository */
    private $socioRepository;

    public function __construct(SocioRepository $socioRepo)
    {
        $this->socioRepository = $socioRepo;
    }

    /**
     * Display a listing of the Socio.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->socioRepository->pushCriteria(new RequestCriteria($request));
        $socios = $this->socioRepository->all();

        return view('socios.index')
            ->with('socios', $socios);
    }

    /**
     * Show the form for creating a new Socio.
     *
     * @return Response
     */
    public function create()
    {
        return view('socios.create');
    }

    /**
     * Store a newly created Socio in storage.
     *
     * @param CreateSocioRequest $request
     *
     * @return Response
     */
    public function store(CreateSocioRequest $request)
    {
        $input = $request->all();

        $socio = $this->socioRepository->create($input);

        Flash::success('Socio saved successfully.');

        return redirect(route('socios.index'));
    }

    /**
     * Display the specified Socio.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $socio = $this->socioRepository->findWithoutFail($id);

        if (empty($socio)) {
            Flash::error('Socio not found');

            return redirect(route('socios.index'));
        }

        return view('socios.show')->with('socio', $socio);
    }

    /**
     * Show the form for editing the specified Socio.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $socio = $this->socioRepository->findWithoutFail($id);

        if (empty($socio)) {
            Flash::error('Socio not found');

            return redirect(route('socios.index'));
        }

        return view('socios.edit')->with('socio', $socio);
    }

    /**
     * Update the specified Socio in storage.
     *
     * @param  int              $id
     * @param UpdateSocioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSocioRequest $request)
    {
        $socio = $this->socioRepository->findWithoutFail($id);

        if (empty($socio)) {
            Flash::error('Socio not found');

            return redirect(route('socios.index'));
        }

        $socio = $this->socioRepository->update($request->all(), $id);

        Flash::success('Socio updated successfully.');

        return redirect(route('socios.index'));
    }

    /**
     * Remove the specified Socio from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $socio = $this->socioRepository->findWithoutFail($id);

        if (empty($socio)) {
            Flash::error('Socio not found');

            return redirect(route('socios.index'));
        }

        $this->socioRepository->delete($id);

        Flash::success('Socio deleted successfully.');

        return redirect(route('socios.index'));
    }

    public function getSorteo()
    {
        return view('socios.sorteo');
    }

    public function postSorteo(Request $request)
    {
        $matriz = [];
        $total = $request->azul + $request->multiusos + $request->froebel + $request->luz;
        for ($i=0; $i < $request->azul; $i++) { 
            array_push($matriz, 'CA'.sprintf("%'03d", $i+1));
        }
        for ($i=0; $i < $request->multiusos; $i++) { 
            array_push($matriz, 'DE'.sprintf("%'03d", $i+1));
        }
        for ($i=0; $i < $request->froebel; $i++) { 
            array_push($matriz, 'FR'.sprintf("%'03d", $i+1));
        }
        for ($i=0; $i < $request->luz; $i++) { 
            array_push($matriz, 'CL'.sprintf("%'03d", $i+1));
        }
        $sorteo = array_rand($matriz, $request->ganadores);
        $resultado = [];
        foreach ($sorteo as $valor) {
            array_push($resultado, $matriz[$valor]);
        }
        return view('socios.resultado')->with('resultados', $resultado);
    }
}
