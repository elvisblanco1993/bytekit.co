<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use App\Models\Ticket;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard', [
            'customers' => Customer::count(),
            'open_tickets' => Ticket::whereNull('resolved_at')->count(),
            'resolved_tickets' => Ticket::whereNotNull('resolved_at')->count()
        ]);
    }
}
