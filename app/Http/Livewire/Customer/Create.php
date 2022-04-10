<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;
use App\Models\Customer;
use Illuminate\Support\Facades\Log;

class Create extends Component
{
    public $createCustomerModal;
    public $name;
    public $email;
    public $phone;
    public $address;
    public $size;

    public function save()
    {
        $validated = $this->validate([
            'name' => 'required|',
            'email' => 'required|email|unique:customers,email',
            'phone' => 'required',
            'address' => 'required',
            'size' => 'required',
        ]);

        try {
            $customer = Customer::create($validated);
            $customer->createAsStripeCustomer();
        } catch (\Throwable $th) {
            Log::error($th);
        }

        return to_route('customers');
    }

    public function render()
    {
        return view('livewire.customer.create');
    }
}
