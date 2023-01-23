<x-splade-modal class="font-main">
    <h1 class="text-2xl font-bold mb-4">{{trans('tomato-admin::global.crud.edit')}} PlanSubscription #{{$model->id}}</h1>

    <x-splade-form class="flex flex-col space-y-4" action="{{route('admin.plan-subscription.update', $model->id)}}" method="post" :default="$model">

        <x-splade-select placeholder="Types" name="model_type"  choices>
            @foreach(config('tomato-subscription.types') as $key=>$type)
                <option value="{{$key}}">{{$type['label']}}</option>
            @endforeach
        </x-splade-select>
        <x-splade-select v-if="form.model_type" placeholder="User" name="model_id" remote-url="`/admin/plans/${form.model_type}/api`" remote-root="model" option-label="name" option-value="id" choices/>
        <x-splade-select placeholder="Plan" name="plan_id" remote-url="/admin/plans/api" remote-root="model.data" option-label="name.{{app()->getLocale()}}" option-value="id" choices/>
        <x-splade-select name="status" placeholder="Status" choices>
            <option value="active">Active</option>
            <option value="pending">Pending</option>
            <option value="canceled">Canceled</option>
        </x-splade-select>
        <x-splade-checkbox name="is_current" label="Is current" />


        <x-splade-submit label="{{trans('tomato-admin::global.crud.update')}} PlanSubscription" :spinner="true" />
    </x-splade-form>
</x-splade-modal>
