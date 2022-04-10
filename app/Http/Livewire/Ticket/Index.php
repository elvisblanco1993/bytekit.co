<?php

namespace App\Http\Livewire\Ticket;

use App\Models\Ticket;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.ticket.index', [
            'tickets' => Ticket::where('subject', 'like', '%'.$this->search.'%')->orderByRaw("CASE WHEN resolved_at IS NOT NULL THEN 0 ELSE 1 END ")->orderBy('created_at', 'desc')->paginate(10),
        ]);
    }
}
