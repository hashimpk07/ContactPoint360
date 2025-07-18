<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotificationAdminEmail;

class NewUserMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public $user;
    public function __construct($user)
    {
        $this->user  = $user;
        
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        
        Mail::to($this->user->email)->send(new NotificationAdminEmail($this->user ));
        
    }
}
