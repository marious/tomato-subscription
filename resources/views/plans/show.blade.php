<x-splade-modal class="font-main">
    <h1 class="text-2xl font-bold mb-4">{{trans('tomato-admin::global.crud.view')}} Plan #{{$model->id}}</h1>

    <div class="flex flex-col space-y-4">
        
          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      Name
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->name}}
                  </h3>
              </div>
          </div>

          
          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      Description
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->description}}
                  </h3>
              </div>
          </div>

          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      Order
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->order}}
                  </h3>
              </div>
          </div>

          
          
          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      Invoice interval
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->invoice_interval}}
                  </h3>
              </div>
          </div>

          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      Is recurring
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->is_recurring}}
                  </h3>
              </div>
          </div>

          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      Is active
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->is_active}}
                  </h3>
              </div>
          </div>

          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      Is free
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->is_free}}
                  </h3>
              </div>
          </div>

          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      Is default
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->is_default}}
                  </h3>
              </div>
          </div>

    </div>
</x-splade-modal>
