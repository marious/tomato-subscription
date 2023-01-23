
<x-tomato-admin-layout>
    <x-slot name="header">
        {{trans('tomato-admin::global.crud.create')}} Plan
    </x-slot>

    <x-splade-form
        :unguarded="['name', 'description']"
        :default="[
            'invoice_interval' => 'month',
            'invoice_period' => 1,
            'order' => \Modules\Plan\Entities\Plan::count() + 1,
        ]" class="flex flex-col space-y-4" action="{{route('admin.plans.store')}}" method="post" :default="['features'=>[]]">

        <x-splade-input name="name.ar" type="text"  placeholder="Name AR" />
        <x-splade-input name="name.en" type="text"  placeholder="Name EN" />
        <x-splade-textarea name="description.ar" placeholder="Description AR" autosize />
        <x-splade-textarea name="description.en" placeholder="Description EN" autosize />
        <x-splade-select name="invoice_interval" placeholder="Invoice interval" choices>
            <option value="day">Day</option>
            <option value="week">Week</option>
            <option value="month">Month</option>
            <option value="year">Year</option>
        </x-splade-select>
        <div class="flex justify-between space-x-2">
            <x-splade-input class="w-full" name="invoice_period" type="number"  placeholder="Invoice period" />
            <x-splade-input class="w-full" name="price" type="number"  placeholder="Price" />
        </div>
        <x-splade-input type="text" name="order" label="Order" />

        <div class="grid grid-cols-2 gap-2">
            <x-splade-checkbox name="is_recurring" value="0" label="Is recurring" />
            <x-splade-checkbox name="is_active" value="1" label="Is active" />
            <x-splade-checkbox name="is_free" value="0" label="Is free" />
            <x-splade-checkbox name="is_default" value="0" label="Is default" />
        </div>
        <x-tomato-repeater :options="['feature', 'value']" type="repeater" id="features" name="features" label="Features">
            <div class="flex flex-col justify-center space-y-4">
                <x-splade-select option-label="name.{{app()->getLocale()}}" option-value="id" remote-root="model.data" remote-url="{{route('admin.plan-features.api')}}" v-model="repeater.main[key].feature"  label="Feature"  />
                <x-splade-input v-model="repeater.main[key].value" name="value" type="text"  label="Value" />
            </div>
        </x-tomato-repeater>

        <x-splade-submit label="{{trans('tomato-admin::global.crud.create-new')}} Plan" :spinner="true" />
    </x-splade-form>

</x-tomato-admin-layout>
