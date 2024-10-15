<?php

namespace App\Listeners;

use App\Models\Candidat;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\UpdateStatusReponseSondage;
use Illuminate\Contracts\Queue\ShouldQueue;

class UpdatesReponseSondage
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UpdateStatusReponseSondage $event): void
    {
      
      $upds=Candidat::find($event->ids);
   $upds->update([
    'reponsesondage'=>'non'
   ]);
    }
}
