<?php

namespace App\Http\Livewire\Activity;

use Livewire\Component;

class Index extends Component
{
    public $ticket;

    public function render()
    {
        return view('livewire.activity.index', [
            'activities' => $this->ticket->activities,
        ]);
    }
}
