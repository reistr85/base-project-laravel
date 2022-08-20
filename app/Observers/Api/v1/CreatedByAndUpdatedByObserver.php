<?php

namespace App\Observers\Api\v1;

class CreatedByAndUpdatedByObserver
{
    /**
     * Handle the User "created" event.
     *
     * @param $model
     * @return void
     */
    public function creating($model)
    {
        if($model->name != 'Admin') {
            $model->created_by = auth()->user() ? auth()->user()->id : null;
            $model->updated_by = auth()->user() ? auth()->user()->id : null;
        }
    }

    /**
     * Handle the User "created" event.
     *
     * @param $model
     * @return void
     */
    public function updating($model)
    {
        $model->updated_by = auth()->user() ? auth()->user()->id : null;
    }
}
