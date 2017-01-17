<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Backend\CatalogoMedioDataTable;
use App\Http\Requests\Backend;
use App\Http\Requests\Backend\CreateCatalogoMedioRequest;
use App\Http\Requests\Backend\UpdateCatalogoMedioRequest;
use App\Repositories\Backend\CatalogoMedioRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class CatalogoMedioController extends AppBaseController
{
    /** @var  CatalogoMedioRepository */
    private $catalogoMedioRepository;

    public function __construct(CatalogoMedioRepository $catalogoMedioRepo)
    {
        $this->catalogoMedioRepository = $catalogoMedioRepo;
    }

    /**
     * Display a listing of the CatalogoMedio.
     *
     * @param CatalogoMedioDataTable $catalogoMedioDataTable
     * @return Response
     */
    public function index(CatalogoMedioDataTable $catalogoMedioDataTable)
    {
        return $catalogoMedioDataTable->render('backend.catalogo_medios.index');
    }

    /**
     * Show the form for creating a new CatalogoMedio.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.catalogo_medios.create');
    }

    /**
     * Store a newly created CatalogoMedio in storage.
     *
     * @param CreateCatalogoMedioRequest $request
     *
     * @return Response
     */
    public function store(CreateCatalogoMedioRequest $request)
    {
        $input = $request->all();

        $catalogoMedio = $this->catalogoMedioRepository->create($input);

        Flash::success('Catalogo Medio saved successfully.');

        return redirect(route('backend.catalogoMedios.index'));
    }

    /**
     * Display the specified CatalogoMedio.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $catalogoMedio = $this->catalogoMedioRepository->findWithoutFail($id);

        if (empty($catalogoMedio)) {
            Flash::error('Catalogo Medio not found');

            return redirect(route('backend.catalogoMedios.index'));
        }

        return view('backend.catalogo_medios.show')->with('catalogoMedio', $catalogoMedio);
    }

    /**
     * Show the form for editing the specified CatalogoMedio.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $catalogoMedio = $this->catalogoMedioRepository->findWithoutFail($id);

        if (empty($catalogoMedio)) {
            Flash::error('Catalogo Medio not found');

            return redirect(route('backend.catalogoMedios.index'));
        }

        return view('backend.catalogo_medios.edit')->with('catalogoMedio', $catalogoMedio);
    }

    /**
     * Update the specified CatalogoMedio in storage.
     *
     * @param  int              $id
     * @param UpdateCatalogoMedioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCatalogoMedioRequest $request)
    {
        $catalogoMedio = $this->catalogoMedioRepository->findWithoutFail($id);

        if (empty($catalogoMedio)) {
            Flash::error('Catalogo Medio not found');

            return redirect(route('backend.catalogoMedios.index'));
        }

        $catalogoMedio = $this->catalogoMedioRepository->update($request->all(), $id);

        Flash::success('Catalogo Medio updated successfully.');

        return redirect(route('backend.catalogoMedios.index'));
    }

    /**
     * Remove the specified CatalogoMedio from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $catalogoMedio = $this->catalogoMedioRepository->findWithoutFail($id);

        if (empty($catalogoMedio)) {
            Flash::error('Catalogo Medio not found');

            return redirect(route('backend.catalogoMedios.index'));
        }

        $this->catalogoMedioRepository->delete($id);

        Flash::success('Catalogo Medio deleted successfully.');

        return redirect(route('backend.catalogoMedios.index'));
    }
}
