<?php

namespace App\Listeners;

use App\SerbianSoldier;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class HappySerbians
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $serbianSolder = new SerbianSoldier(0.8,0.8,0.4,1);
        $serbianSolder->attack();
    }
}
