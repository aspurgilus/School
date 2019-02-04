<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SchoolCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $school;
    public $date;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($school,$date)
    {
		$this->school = $school;
		$this->date = $date;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.school-created');
    }
}
