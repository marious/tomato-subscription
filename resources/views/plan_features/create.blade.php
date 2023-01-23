<x-splade-modal class="font-main">
    <h1 class="text-2xl font-bold mb-4">{{trans('tomato-admin::global.crud.create')}} PlanFeature</h1>

    <x-splade-form class="flex flex-col space-y-4" action="{{route('admin.plan-features.store')}}" method="post">

          <x-splade-input name="name.ar" type="text"  placeholder="Name AR" />
          <x-splade-input name="name.en" type="text"  placeholder="Name EN" />
        <x-splade-textarea name="description.ar" placeholder="Description AR" autosize />
        <x-splade-textarea name="description.en" placeholder="Description EN" autosize />

        <x-splade-select  name="key" placeholder="Key" choices>
              @foreach(Route::getRoutes() as $route)
                  @if(isset($route->action['as'])))
                    <option value="{{$route->action['as']}}">{{$route->uri}}</option>
                  @endif
              @endforeach
          </x-splade-select>
          <x-splade-input name="value" type="number"  placeholder="Value" />

          <x-splade-checkbox name="is_active" label="Is active" />

        <x-splade-submit label="{{trans('tomato-admin::global.crud.create-new')}} PlanFeature" :spinner="true" />
    </x-splade-form>
</x-splade-modal>
