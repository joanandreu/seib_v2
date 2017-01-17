<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Backend\PersonaFisicaDataTable;
use App\Http\Requests\Backend;
use App\Http\Requests\Backend\CreatePersonaFisicaRequest;
use App\Http\Requests\Backend\UpdatePersonaFisicaRequest;
use App\Repositories\Backend\PersonaFisicaRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class PersonaFisicaController extends AppBaseController
{
    /** @var  PersonaFisicaRepository */
    private $personaFisicaRepository;

    public function __construct(PersonaFisicaRepository $personaFisicaRepo)
    {
        $this->personaFisicaRepository = $personaFisicaRepo;
    }

    /**
     * Display a listing of the PersonaFisica.
     *
     * @param PersonaFisicaDataTable $personaFisicaDataTable
     * @return Response
     */
    public function index(PersonaFisicaDataTable $personaFisicaDataTable)
    {
        return $personaFisicaDataTable->render('backend.persona_fisicas.index');
    }

    /**
     * Show the form for creating a new PersonaFisica.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.persona_fisicas.create');
    }

    /**
     * Store a newly created PersonaFisica in storage.
     *
     * @param CreatePersonaFisicaRequest $request
     *
     * @return Response
     */
    public function store(CreatePersonaFisicaRequest $request)
    {
        $input = $request->all();

        $personaFisica = $this->personaFisicaRepository->create($input);

        Flash::success('Persona Fisica saved successfully.');

        return redirect(route('backend.personaFisicas.index'));
    }

    /**
     * Display the specified PersonaFisica.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $personaFisica = $this->personaFisicaRepository->findWithoutFail($id);

        if (empty($personaFisica)) {
            Flash::error('Persona Fisica not found');

            return redirect(route('backend.personaFisicas.index'));
        }

        return view('backend.persona_fisicas.show')->with('personaFisica', $personaFisica);
    }

    /**
     * Show the form for editing the specified PersonaFisica.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $personaFisica = $this->personaFisicaRepository->findWithoutFail($id);

        if (empty($personaFisica)) {
            Flash::error('Persona Fisica not found');

            return redirect(route('backend.personaFisicas.index'));
        }

        return view('backend.persona_fisicas.edit')->with('personaFisica', $personaFisica);
    }

    /**
     * Update the specified PersonaFisica in storage.
     *
     * @param  int              $id
     * @param UpdatePersonaFisicaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePersonaFisicaRequest $request)
    {
        $personaFisica = $this->personaFisicaRepository->findWithoutFail($id);

        if (empty($personaFisica)) {
            Flash::error('Persona Fisica not found');

            return redirect(route('backend.personaFisicas.index'));
        }

        $personaFisica = $this->personaFisicaRepository->update($request->all(), $id);

        Flash::success('Persona Fisica updated successfully.');

        return redirect(route('backend.personaFisicas.index'));
    }

    /**
     * Remove the specified PersonaFisica from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $personaFisica = $this->personaFisicaRepository->findWithoutFail($id);

        if (empty($personaFisica)) {
            Flash::error('Persona Fisica not found');

            return redirect(route('backend.personaFisicas.index'));
        }

        $this->personaFisicaRepository->delete($id);

        Flash::success('Persona Fisica deleted successfully.');

        return redirect(route('backend.personaFisicas.index'));
    }
}
