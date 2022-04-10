<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TicketUpdated extends Mailable
{
    use Queueable, SerializesModels;

    public $ticket, $activity;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($ticket, $activity)
    {
        $this->ticket = $ticket;
        $this->activity = $activity;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to($this->ticket->customer->email)->markdown('emails.tickets.updated');
    }
}
