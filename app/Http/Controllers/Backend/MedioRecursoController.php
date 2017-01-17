<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Backend\MedioRecursoDataTable;
use App\Http\Requests\Backend;
use App\Http\Requests\Backend\CreateMedioRecursoRequest;
use App\Http\Requests\Backend\UpdateMedioRecursoRequest;
use App\Repositories\Backend\MedioRecursoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class MedioRecursoController extends AppBaseController
{
    /** @var  MedioRecursoRepository */
    private $medioRecursoRepository;

    public function __construct(MedioRecursoRepository $medioRecursoRepo)
    {
        $this->medioRecursoRepository = $medioRecursoRepo;
    }

    /**
     * Display a listing of the MedioRecurso.
     *
     * @param MedioRecursoDataTable $medioRecursoDataTable
     * @return Response
     */
    public function index(MedioRecursoDataTable $medioRecursoDataTable)
    {
        return $medioRecursoDataTable->render('backend.medio_recursos.index');
    }

    /**
     * Show the form for creating a new MedioRecurso.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.medio_recursos.create');
    }

    /**
     * Store a newly created MedioRecurso in storage.
     *
     * @param CreateMedioRecursoRequest $request
     *
     * @return Response
     */
    public function store(CreateMedioRecursoRequest $request)
    {
        $input = $request->all();

        $medioRecurso = $this->medioRecursoRepository->create($input);

        Flash::success('Medio Recurso saved successfully.');

        return redirect(route('backend.medioRecursos.index'));
    }

    /**
     * Display the specified MedioRecurso.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $medioRecurso = $this->medioRecursoRepository->findWithoutFail($id);

        if (empty($medioRecurso)) {
            Flash::error('Medio Recurso not found');

            return redirect(route('backend.medioRecursos.index'));
        }

        return view('backend.medio_recursos.show')->with('medioRecurso', $medioRecurso);
    }

    /**
     * Show the form for editing the specified MedioRecurso.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $medioRecurso = $this->medioRecursoRepository->findWithoutFail($id);

        if (empty($medioRecurso)) {
            Flash::error('Medio Recurso not found');

            return redirect(route('backend.medioRecursos.index'));
        }

        return view('backend.medio_recursos.edit')->with('medioRecurso', $medioRecurso);
    }

    /**
     * Update the specified MedioRecurso in storage.
     *
     * @param  int              $id
     * @param UpdateMedioRecursoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMedioRecursoRequest $request)
    {
        $medioRecurso = $this->medioRecursoRepository->findWithoutFail($id);

        if (empty($medioRecurso)) {
            Flash::error('Medio Recurso not found');

            return redirect(route('backend.medioRecursos.index'));
        }

        $medioRecurso = $this->medioRecursoRepository->update($request->all(), $id);

        Flash::success('Medio Recurso updated successfully.');

        return redirect(route('backend.medioRecursos.index'));
    }

    /**
     * Remove the specified MedioRecurso from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $medioRecurso = $this->medioRecursoRepository->findWithoutFail($id);

        if (empty($medioRecurso)) {
            Flash::error('Medio Recurso not found');

            return redirect(route('backend.medioRecursos.index'));
        }

        $this->medioRecursoRepository->delete($id);

        Flash::success('Medio Recurso deleted successfully.');

        return redirect(route('backend.medioRecursos.index'));
    }
}
