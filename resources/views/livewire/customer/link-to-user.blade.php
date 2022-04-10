<div>
    <button wire:click="$toggle('syncUserModal')" role="menuitem" tabindex="-1" id="menu-item-1" class="w-full text-left text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-900">
        <div class="flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-500" viewBox="0 0 20 20" fill="currentColor">
                <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
            </svg>
            <span>{{__("Assign user")}}</span>
        </div>
    </button>

    <x-jet-dialog-modal wire:model="syncUserModal">
        <x-slot name="title">
            <div class="font-semibold text-xl text-gray-800 leading-tight">{{__("Assign customer to user")}}</div>
        </x-slot>
        <x-slot name="content">
            <div class="">
                <x-jet-label for="user" value="{{__('Select a user')}}"/>
                <select wire:model="user_selected" id="user" class="mt-1 w-full">
                    <option></option>
                    @forelse ($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @empty
                    @endforelse
                </select>
                <x-jet-input-error for="name" class="mt-2" />
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('syncUserModal')">{{__("Dismiss")}}</x-jet-secondary-button>
            <x-jet-button class="ml-4" wire:click="save">{{__("Sync now")}}</x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
