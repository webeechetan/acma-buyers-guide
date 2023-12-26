<?php

namespace App\DataTables;

use App\Models\Company;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Carbon\Carbon;




class CompanyDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->editColumn('updated_at', function ($data) {
                return carbon::parse($data->updated_at)->format('Y-m-d');
            });
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Company $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('company-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        
                        Button::make('pdf'),
                        Button::make('print'),
                      
                    Button::make('Download All')->extend('csv')->filename($this->filename())->exportOptions(['page' => 'all']),
                       
                    ])->parameters([
                        'paging' => false, // Disable pagination for export
                    ]);
    }

   

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id'),
            Column::make('name')
            ->data('name', 'name'),
            Column::make('email'),
            Column::make('website'),
            Column::make('updated_at'),
            

        ];
    }

    // Column::computed('action')
    //         ->defaultContent(function ($data) {
    //             return '<a href="'.route('admin.companies.destroy', ['id' => $data->id]).'"><button class="btn btn-danger btn-sm">Delete</button></a>';
    //         }),

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Company_' . date('YmdHis');
    }
}
