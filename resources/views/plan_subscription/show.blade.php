<x-splade-modal class="font-main">
    <h1 class="text-2xl font-bold mb-4">{{trans('tomato-admin::global.crud.view')}} PlanSubscription #{{$model->id}}</h1>

    <div class="flex flex-col space-y-4">
        
          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      Account id
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->account_id}}
                  </h3>
              </div>
          </div>

          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      Plan id
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->plan_id}}
                  </h3>
              </div>
          </div>

          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      Status
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->status}}
                  </h3>
              </div>
          </div>

          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      Is current
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->is_current}}
                  </h3>
              </div>
          </div>

    </div>
</x-splade-modal>
