<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;
use App\Models\Customer;
use Illuminate\Support\Facades\Log;

class View extends Component
{
    public function mount(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function detach($user_id)
    {
        try {
            $this->customer->users()->detach($user_id);
        } catch (\Throwable $th) {
            Log::error($th);
        }

        return redirect()->route('customer.view', ['customer' => $this->customer->id]);
    }

    public function render()
    {
        return view('livewire.customer.view');
    }
}
