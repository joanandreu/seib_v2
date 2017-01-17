<?php

namespace App\DataTables\Backend;

use App\Models\Backend\Entidad;
use Form;
use Yajra\Datatables\Services\DataTable;

class EntidadDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'backend.entidads.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $entidads = Entidad::query();

        return $this->applyScopes($entidads);
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
            'nombre' => ['name' => 'nombre', 'data' => 'nombre'],
            'abreviatura' => ['name' => 'abreviatura', 'data' => 'abreviatura'],
            'tipoentidad' => ['name' => 'tipoentidad', 'data' => 'tipoentidad'],
            'nivel' => ['name' => 'nivel', 'data' => 'nivel'],
            'cif' => ['name' => 'cif', 'data' => 'cif'],
            'estado' => ['name' => 'estado', 'data' => 'estado'],
            'telefonos' => ['name' => 'telefonos', 'data' => 'telefonos'],
            'emails' => ['name' => 'emails', 'data' => 'emails'],
            'horarios' => ['name' => 'horarios', 'data' => 'horarios'],
            'responsable' => ['name' => 'responsable', 'data' => 'responsable'],
            'municipio' => ['name' => 'municipio', 'data' => 'municipio'],
            'nucleo' => ['name' => 'nucleo', 'data' => 'nucleo'],
            'calle' => ['name' => 'calle', 'data' => 'calle'],
            'ine_via' => ['name' => 'ine_via', 'data' => 'ine_via'],
            'numero' => ['name' => 'numero', 'data' => 'numero'],
            'piso' => ['name' => 'piso', 'data' => 'piso'],
            'puerta' => ['name' => 'puerta', 'data' => 'puerta'],
            'escalera' => ['name' => 'escalera', 'data' => 'escalera'],
            'lon' => ['name' => 'lon', 'data' => 'lon'],
            'lat' => ['name' => 'lat', 'data' => 'lat']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'entidads';
    }
}
