<?php

namespace App\Listeners;

use App\Events\SchoolCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\SchoolCreated as SchoolCreatedMail;
use Illuminate\Support\Facades\Mail;

class SendSchoolCreatedNotification
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
     * @param  SchoolCreated  $event
     * @return void
     */
    public function handle(SchoolCreated $event)
    {
		Mail::to($event->school->owner->email)->send(new SchoolCreatedMail($event->school,date('d.m.Y H:i:s',time())));

	}

}
