<div>
    <button class="text-indigo-600 hover:text-indigo-900" wire:click="$toggle('modal')">Details</button>

    <x-jet-dialog-modal wire:model="modal" class="text-left">
        <x-slot name="title" class="text-left">Details</x-slot>
        <x-slot name="content">
            <div class="">Date: <span class="font-light">{{$inquiry->created_at}}</span></div>
            <div class="mt-2">From: <span class="font-light">{{$inquiry->name}}</span></div>
            <div class="mt-2">Company name: <span class="font-light">{{$inquiry->company_name}}</span></div>
            <div class="mt-2">Company size: <span class="font-light">{{$inquiry->company_size}}</span></div>
            <div class="mt-2">Phone: <span class="font-light">{{$inquiry->phone}}</span></div>
            <div class="mt-2">Email: <span class="font-light">{{$inquiry->email}}</span></div>
            <div class="mt-2">Subject: <span class="font-light">{{$inquiry->subject}}</span></div>
            <div class="mt-2">Message: <span class="font-light">{{$inquiry->message}}</span></div>
        </x-slot>
        <x-slot name="footer"></x-slot>
    </x-jet-dialog-modal>
</div>
