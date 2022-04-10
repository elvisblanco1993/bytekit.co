<?php

namespace App\Http\Livewire\Inquiry;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\WebsiteInquiry;

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
        return view('livewire.inquiry.index', [
            'inquiries' => WebsiteInquiry::where('name', 'like', '%'.$this->search.'%')->paginate(10),
        ]);
    }
}
