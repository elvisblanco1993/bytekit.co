<div>
    <x-jet-button wire:click="$toggle('createCustomerModal')" class="-my-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
        </svg>
        <span class="ml-2">{{__("New Customer")}}</span>
    </x-jet-button>

    <x-jet-dialog-modal wire:model="createCustomerModal">
        <x-slot name="title">
            <div class="font-semibold text-xl text-gray-800 leading-tight">{{__("New customer")}}</div>
        </x-slot>
        <x-slot name="content">
            <div class="">
                <x-jet-label for="name" value="{{__('Company name')}}"/>
                <x-jet-input id="name" type="text" wire:model="name" class="mt-1 w-full" />
                <x-jet-input-error for="name" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-jet-label for="email" value="{{__('E-mail')}}"/>
                <x-jet-input id="email" type="email" wire:model="email" class="mt-1 w-full" />
                <x-jet-input-error for="email" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-jet-label for="phone" value="{{__('Phone')}}"/>
                <x-jet-input id="phone" type="tel" wire:model="phone" class="mt-1 w-full" />
                <x-jet-input-error for="phone" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-jet-label for="address" value="{{__('Postal address')}}"/>
                <x-jet-input id="address" type="text" wire:model="address" class="mt-1 w-full" />
                <x-jet-input-error for="address" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-jet-label for="size" value="{{__('Company size')}}"/>
                <x-jet-input id="size" type="number" wire:model="size" class="mt-1 w-full" />
                <x-jet-input-error for="size" class="mt-2" />
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('createCustomerModal')">{{__("Dismiss")}}</x-jet-secondary-button>
            <x-jet-button class="ml-4" wire:click="save">{{__("Create")}}</x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
