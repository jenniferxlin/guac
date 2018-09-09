<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Failed;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Log;
use Request;

class LogFailedLogin
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
     * @param  Failed  $event
     * @return void
     */
    public function handle(Failed $event)
    {
        $ip = Request::ip();
        if($event->user) {
            $username = $event->user->name;
            $email = $event->user->email;
        }
        else {
            $username = "unknown";
            $email = "unknown";
        }
        Log::warning("Failed login: User $username with email $email from IP $ip");
    }
}
