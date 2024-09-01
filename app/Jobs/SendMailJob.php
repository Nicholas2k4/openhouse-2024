<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use App\Http\Controllers\MailController;
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $mail;
    public $nrp;
    public $failOnTimeout = true;
    public $timeout = 60;
    public $tries = 5;

    /**
     * Create a new job instance.
     */
    public function __construct(Mailable $mail, $nrp)
    {
        $this->mail = $mail;
        $this->nrp = $nrp;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->nrp . '@john.petra.ac.id')->send($this->mail);
    }
}
