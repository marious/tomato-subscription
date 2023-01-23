<?php

namespace Queents\TomatoSubscription\Tables;

use Illuminate\Http\Request;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class PlanFeatureTable extends AbstractTable
{
    /**
     * Create a new instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the user is authorized to perform bulk actions and exports.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        return true;
    }

    /**
     * The resource or query builder.
     *
     * @return mixed
     */
    public function for()
    {
        return \Queents\TomatoSubscription\Models\PlanFeature::query();
    }

    /**
     * Configure the given SpladeTable.
     *
     * @param \ProtoneMedia\Splade\SpladeTable $table
     * @return void
     */
    public function configure(SpladeTable $table)
    {
        $table
            ->withGlobalSearch(label: trans('tomato-admin::global.search'),columns: ['id','name',])
            ->bulkAction(
                label: trans('tomato-admin::global.crud.delete'),
                each: fn (\Queents\TomatoSubscription\Models\PlanFeature $model) => $model->delete(),
                after: fn () => Toast::danger('PlanFeature Has Been Deleted')->autoDismiss(2),
                confirm: true
            )
            ->export()
            ->defaultSort('id')
            ->column(label: 'Id', sortable: true)
            ->column(label: 'Name', sortable: true)
            ->column(label: 'Key', sortable: true)
            ->column(label: 'Value', sortable: true)
            ->column(label: 'Description', sortable: true)
            ->column(label: 'Extra', sortable: true)
            ->column(label: 'Is_active', sortable: true)
            ->column(key: 'actions',label: trans('tomato-admin::global.crud.actions'))
            ->paginate(15);
    }
}
