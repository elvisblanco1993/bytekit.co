<div>
    <button wire:click="$toggle('editCustomerModal')" role="menuitem" tabindex="-1" id="menu-item-1" class="w-full text-left text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-900">
        <div class="flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-500" viewBox="0 0 20 20" fill="currentColor">
                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
            </svg>
            <span>{{__("Edit")}}</span>
        </div>
    </button>

    <x-jet-dialog-modal wire:model="editCustomerModal">
        <x-slot name="title">
            <div class="font-semibold text-xl text-gray-800 leading-tight">{{__("Edit customer")}}</div>
        </x-slot>
        <x-slot name="content">
            <div class="">
                <x-jet-label for="name" value="{{__('Business name')}}"/>
                <x-jet-input id="name" type="text" wire:model.defer="name" class="mt-1 w-full" />
                <x-jet-input-error for="name" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-jet-label for="email" value="{{__('E-mail')}}"/>
                <x-jet-input id="email" type="email" wire:model.defer="email" class="mt-1 w-full" />
                <x-jet-input-error for="email" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-jet-label for="phone" value="{{__('Phone')}}"/>
                <x-jet-input id="phone" type="tel" wire:model.defer="phone" class="mt-1 w-full" />
                <x-jet-input-error for="phone" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-jet-label for="address" value="{{__('Postal address')}}"/>
                <x-jet-input id="address" type="text" wire:model.defer="address" class="mt-1 w-full" />
                <x-jet-input-error for="address" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-jet-label for="size" value="{{__('Company size')}}"/>
                <x-jet-input id="size" type="number" wire:model.defer="size" class="mt-1 w-full" />
                <x-jet-input-error for="size" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-jet-label for="computers" value="{{__('Computers')}}"/>
                <x-jet-input id="computers" type="number" wire:model.defer="computers" class="mt-1 w-full" />
                <x-jet-input-error for="computers" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-jet-label for="servers" value="{{__('Servers')}}"/>
                <x-jet-input id="servers" type="number" wire:model.defer="servers" class="mt-1 w-full" />
                <x-jet-input-error for="servers" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-jet-label for="contracted_hours" value="{{__('Contracted Hours')}}"/>
                <x-jet-input id="contracted_hours" type="number" wire:model.defer="contracted_hours" class="mt-1 w-full" />
                <x-jet-input-error for="contracted_hours" class="mt-2" />
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('editCustomerModal')">{{__("Dismiss")}}</x-jet-secondary-button>
            <x-jet-button class="ml-4" wire:click="save">{{__("Update")}}</x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
