<?php

namespace App\Http\Livewire\Customer;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class LinkToUser extends Component
{
    public $syncUserModal, $customer, $users, $user_selected;

    public function mount()
    {
        $this->users = User::all();
    }

    public function save()
    {
        try {
            $this->customer->users()->attach($this->user_selected);
        } catch (\Throwable $th) {
            Log::error($th);
        }

        return redirect()->route('customer.view', ['customer' => $this->customer->id]);
    }

    public function render()
    {
        return view('livewire.customer.link-to-user');
    }
}
