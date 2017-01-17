<?php

namespace App\DataTables\Backend;

use App\Models\Backend\CatalogoMedio;
use Form;
use Yajra\Datatables\Services\DataTable;

class CatalogoMedioDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'backend.catalogo_medios.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $catalogoMedios = CatalogoMedio::query();

        return $this->applyScopes($catalogoMedios);
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
            'codigo' => ['name' => 'codigo', 'data' => 'codigo'],
            'descripcion' => ['name' => 'descripcion', 'data' => 'descripcion'],
            'unidad_medida' => ['name' => 'unidad_medida', 'data' => 'unidad_medida']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'catalogoMedios';
    }
}
