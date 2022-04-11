<?php

namespace App\Observers;

use App\Models\Covid;
use Illuminate\Support\Facades\Cache;

class CovidObserver
{
    /**
     * Handle the Covid "created" event.
     *
     * @param  \App\Models\Covid  $covid
     * @return void
     */
    public function created(Covid $covid)
    {
        //
        Cache::forget('cases');
    }

    /**
     * Handle the Covid "updated" event.
     *
     * @param  \App\Models\Covid  $covid
     * @return void
     */
    public function updated(Covid $covid)
    {
        //
    }

    /**
     * Handle the Covid "deleted" event.
     *
     * @param  \App\Models\Covid  $covid
     * @return void
     */
    public function deleted(Covid $covid)
    {
        //
    }

    /**
     * Handle the Covid "restored" event.
     *
     * @param  \App\Models\Covid  $covid
     * @return void
     */
    public function restored(Covid $covid)
    {
        //
    }

    /**
     * Handle the Covid "force deleted" event.
     *
     * @param  \App\Models\Covid  $covid
     * @return void
     */
    public function forceDeleted(Covid $covid)
    {
        //
    }
}
