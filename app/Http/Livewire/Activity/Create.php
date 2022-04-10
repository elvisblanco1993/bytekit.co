<?php

namespace App\Http\Livewire\Activity;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Activity;
use App\Mail\TicketUpdated;
use App\Models\Ticket;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Notifications\TicketUpdateNotification;

class Create extends Component
{
    public $updateCaseModal;
    public $ticket_id, $type, $status, $from, $message;

    public function save()
    {
        $this->validate([
            'type' => 'required',
            'status' => 'required_if:type,status',
            'message' => 'required_if:type,message',
        ]);

        try {
            $activity = Activity::create([
                'ticket_id' => $this->ticket_id,
                'type' => $this->type,
                'status' => $this->status,
                'from' => auth()->user()->name,
                'message' => $this->message,
                'created_at' => Carbon::now(),
            ]);

        /**
         * Notify parties involved
         */
        if ($this->type === 'status') {
            // Send notification via Slack
            if ($this->status === 'resolved') {

                $activity->ticket->resolved_at = Carbon::now();
                $activity->ticket->save();

                try {
                    auth()->user()->notify(new TicketUpdateNotification($activity->ticket));
                } catch (\Throwable $th) {
                    Log::error($th);
                }
            }
        }

        // Send notification via Email to customer
        try {
            Mail::to($activity->ticket->customer->email)->send(new TicketUpdated($activity->ticket, $activity));
        } catch (\Throwable $th) {
            Log::error($th);
        }

        } catch (\Throwable $th) {
            Log::error($th);
        }

        return redirect()->route('ticket.show', ['ticket' => $this->ticket_id]);
    }

    public function render()
    {
        return view('livewire.activity.create');
    }
}
