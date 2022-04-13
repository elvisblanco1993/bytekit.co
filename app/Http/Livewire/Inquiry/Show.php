<?php

namespace App\Http\Livewire\Inquiry;

use Livewire\Component;

class Show extends Component
{
    public $inquiry, $modal;
    public function render()
    {
        return view('livewire.inquiry.show');
    }
}
