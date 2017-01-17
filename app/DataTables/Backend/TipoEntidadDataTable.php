<?php

namespace App\DataTables\Backend;

use App\Models\Backend\TipoEntidad;
use Form;
use Yajra\Datatables\Services\DataTable;

class TipoEntidadDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'backend.tipo_entidads.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $tipoEntidads = TipoEntidad::query();

        return $this->applyScopes($tipoEntidads);
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
            'tipo' => ['name' => 'tipo', 'data' => 'tipo'],
            'abreviatura' => ['name' => 'abreviatura', 'data' => 'abreviatura'],
            'tipo_funcional' => ['name' => 'tipo_funcional', 'data' => 'tipo_funcional'],
            'cargos' => ['name' => 'cargos', 'data' => 'cargos']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'tipoEntidads';
    }
}
