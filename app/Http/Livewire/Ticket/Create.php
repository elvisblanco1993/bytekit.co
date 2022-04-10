<?php

namespace App\Http\Livewire\Ticket;

use Carbon\Carbon;
use App\Models\Ticket;
use Livewire\Component;
use App\Models\Activity;
use App\Mail\TicketCreated;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Notifications\SendNewTicketNotification;

class Create extends Component
{
    use WithFileUploads;

    public $customer;
    public $createTicketModal;
    public $type, $severity_level, $subject, $description, $contact_method, $cc_email, $attachment;

    public function save()
    {
        $this->validate([
            'type' => 'required',
            'severity_level' => 'required',
            'subject' => 'required',
            'description' => 'required',
            'contact_method' => 'required',
        ]);

        try {
            // Upload attachment
            $attachment = null;
            if ($this->attachment) {
                $this->attachment->storeAs('/attachments', $this->attachment->getFileName());
                $attachment = $this->attachment->getFileName();
            }
            // Create ticket
            $ticket = Ticket::create([
                'customer_id' => $this->customer->id,
                'type' => $this->type,
                'severity_level' => $this->severity_level,
                'subject' => $this->subject,
                'description' => $this->description,
                'contact_method' => $this->contact_method,
                'cc_email' => $this->contact_method ?? null,
                'attachment' => $attachment,
            ]);

            Activity::create([
                'ticket_id' => $ticket->id,
                'type' => 'status',
                'status' => 'new',
                'from' => auth()->user()->name,
                'message' => null,
                'created_at' => Carbon::now(),
            ]);

            // Send notification via Slack
            try {
                auth()->user()->notify(new SendNewTicketNotification($ticket));
            } catch (\Throwable $th) {
                Log::error($th);
            }

            // Send notification via Email to customer
            try {
                Mail::to($this->customer->email)->send(new TicketCreated($ticket));
            } catch (\Throwable $th) {
                Log::error($th);
            }

        } catch (\Throwable $th) {
            Log::error($th);
        }

        return redirect()->route('tickets');
    }

    public function updatedAttachment()
    {
        $this->validate([
            'attachment' => 'image|max:2048', // 2MB Max
        ]);
    }

    public function render()
    {
        return view('livewire.ticket.create');
    }
}
