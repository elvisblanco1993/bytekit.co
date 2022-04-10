<?php

namespace App\Http\Livewire\Customer;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Edit extends Component
{
    public $customer;
    public $editCustomerModal;
    public $name, $email, $phone, $address, $size, $computers, $servers, $contracted_hours;

    public function save()
    {
        $this->validate([
            'name' => 'required|',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'size' => 'required',
        ]);

        try {

            $this->customer->update([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'address' => $this->address,
                'size' => $this->size,
                'computers' => $this->computers,
                'servers' => $this->servers,
                'contracted_hours' => $this->contracted_hours,
            ]);

            session()->flash('flash.banner', 'The details have been successfully updated!');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Throwable $th) {
            Log::error('There was an error while saving the customer details. See ' . $th);
            session()->flash('banner', 'The details have been successfully updated!');
            session()->flash('bannerStyle', 'danger');
        }

        return redirect()->route('customer.view', ['customer' => $this->customer->id]);
    }

    public function render()
    {
        $this->name = $this->customer->name;
        $this->email = $this->customer->email;
        $this->phone = $this->customer->phone;
        $this->address = $this->customer->address;
        $this->size = $this->customer->size;
        $this->computers = $this->customer->computers;
        $this->servers = $this->customer->servers;
        $this->contracted_hours = $this->customer->contracted_hours;

        return view('livewire.customer.edit');
    }
}
