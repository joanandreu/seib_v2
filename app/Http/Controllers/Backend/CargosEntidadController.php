<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateCargosEntidadRequest;
use App\Http\Requests\Backend\UpdateCargosEntidadRequest;
use App\Repositories\Backend\CargosEntidadRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CargosEntidadController extends AppBaseController
{
    /** @var  CargosEntidadRepository */
    private $cargosEntidadRepository;

    public function __construct(CargosEntidadRepository $cargosEntidadRepo)
    {
        $this->cargosEntidadRepository = $cargosEntidadRepo;
    }

    /**
     * Display a listing of the CargosEntidad.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->cargosEntidadRepository->pushCriteria(new RequestCriteria($request));
        $cargosEntidads = $this->cargosEntidadRepository->all();

        return view('backend.cargos_entidads.index')
            ->with('cargosEntidads', $cargosEntidads);
    }

    /**
     * Show the form for creating a new CargosEntidad.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.cargos_entidads.create');
    }

    /**
     * Store a newly created CargosEntidad in storage.
     *
     * @param CreateCargosEntidadRequest $request
     *
     * @return Response
     */
    public function store(CreateCargosEntidadRequest $request)
    {
        $input = $request->all();

        $cargosEntidad = $this->cargosEntidadRepository->create($input);

        Flash::success('Cargos Entidad saved successfully.');

        return redirect(route('backend.cargosEntidads.index'));
    }

    /**
     * Display the specified CargosEntidad.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cargosEntidad = $this->cargosEntidadRepository->findWithoutFail($id);

        if (empty($cargosEntidad)) {
            Flash::error('Cargos Entidad not found');

            return redirect(route('backend.cargosEntidads.index'));
        }

        return view('backend.cargos_entidads.show')->with('cargosEntidad', $cargosEntidad);
    }

    /**
     * Show the form for editing the specified CargosEntidad.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cargosEntidad = $this->cargosEntidadRepository->findWithoutFail($id);

        if (empty($cargosEntidad)) {
            Flash::error('Cargos Entidad not found');

            return redirect(route('backend.cargosEntidads.index'));
        }

        return view('backend.cargos_entidads.edit')->with('cargosEntidad', $cargosEntidad);
    }

    /**
     * Update the specified CargosEntidad in storage.
     *
     * @param  int              $id
     * @param UpdateCargosEntidadRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCargosEntidadRequest $request)
    {
        $cargosEntidad = $this->cargosEntidadRepository->findWithoutFail($id);

        if (empty($cargosEntidad)) {
            Flash::error('Cargos Entidad not found');

            return redirect(route('backend.cargosEntidads.index'));
        }

        $cargosEntidad = $this->cargosEntidadRepository->update($request->all(), $id);

        Flash::success('Cargos Entidad updated successfully.');

        return redirect(route('backend.cargosEntidads.index'));
    }

    /**
     * Remove the specified CargosEntidad from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cargosEntidad = $this->cargosEntidadRepository->findWithoutFail($id);

        if (empty($cargosEntidad)) {
            Flash::error('Cargos Entidad not found');

            return redirect(route('backend.cargosEntidads.index'));
        }

        $this->cargosEntidadRepository->delete($id);

        Flash::success('Cargos Entidad deleted successfully.');

        return redirect(route('backend.cargosEntidads.index'));
    }
}
