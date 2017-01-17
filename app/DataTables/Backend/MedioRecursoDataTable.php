<?php

namespace App\DataTables\Backend;

use App\Models\Backend\MedioRecurso;
use Form;
use Yajra\Datatables\Services\DataTable;

class MedioRecursoDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'backend.medio_recursos.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $medioRecursos = MedioRecurso::query();

        return $this->applyScopes($medioRecursos);
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
            'entidad' => ['name' => 'entidad', 'data' => 'entidad'],
            'tipo_medio' => ['name' => 'tipo_medio', 'data' => 'tipo_medio'],
            'codigo' => ['name' => 'codigo', 'data' => 'codigo'],
            'descripcion' => ['name' => 'descripcion', 'data' => 'descripcion'],
            'valor' => ['name' => 'valor', 'data' => 'valor'],
            'medida' => ['name' => 'medida', 'data' => 'medida'],
            'tipo_riesgo' => ['name' => 'tipo_riesgo', 'data' => 'tipo_riesgo'],
            'modelo' => ['name' => 'modelo', 'data' => 'modelo'],
            'matricula' => ['name' => 'matricula', 'data' => 'matricula'],
            'transporte' => ['name' => 'transporte', 'data' => 'transporte'],
            'grua' => ['name' => 'grua', 'data' => 'grua'],
            'responsable' => ['name' => 'responsable', 'data' => 'responsable'],
            'contacto' => ['name' => 'contacto', 'data' => 'contacto'],
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
        return 'medioRecursos';
    }
}
