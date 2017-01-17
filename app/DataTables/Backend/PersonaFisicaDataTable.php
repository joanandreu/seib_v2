<?php

namespace App\DataTables\Backend;

use App\Models\Backend\PersonaFisica;
use Form;
use Yajra\Datatables\Services\DataTable;

class PersonaFisicaDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'backend.persona_fisicas.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $personaFisicas = PersonaFisica::query();

        return $this->applyScopes($personaFisicas);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->addAction(['width' => '10%'])
            ->ajax('')
            ->parameters([
                'dom' => 'Bfrtip',
                'scrollX' => false,
                'buttons' => [
                    'print',
                    'reset',
                    'reload',
                    [
                         'extend'  => 'collection',
                         'text'    => '<i class="fa fa-download"></i> Export',
                         'buttons' => [
                             'csv',
                             'excel',
                             'pdf',
                         ],
                    ],
                    'colvis'
                ]
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    private function getColumns()
    {
        return [
            'parent_id' => ['name' => 'parent_id', 'data' => 'parent_id'],
            'entidad' => ['name' => 'entidad', 'data' => 'entidad'],
            'cargo' => ['name' => 'cargo', 'data' => 'cargo'],
            'nombre' => ['name' => 'nombre', 'data' => 'nombre'],
            'apellidos' => ['name' => 'apellidos', 'data' => 'apellidos'],
            'nif' => ['name' => 'nif', 'data' => 'nif'],
            'estado' => ['name' => 'estado', 'data' => 'estado'],
            'telefonos' => ['name' => 'telefonos', 'data' => 'telefonos'],
            'horarios' => ['name' => 'horarios', 'data' => 'horarios'],
            'emails' => ['name' => 'emails', 'data' => 'emails']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'personaFisicas';
    }
}
