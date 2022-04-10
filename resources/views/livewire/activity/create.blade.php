<div>
    <x-jet-button wire:click="$toggle('updateCaseModal')">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
        </svg>
        <span class="ml-2">{{__("Update")}}</span>
    </x-jet-button>

    <x-jet-dialog-modal wire:model="updateCaseModal">
        <x-slot:title>{{__("Log activity")}}</x-slot>
        <x-slot:content>
            <div class="">
                <x-jet-label for="type" value="Type"/>
                <select wire:model="type" id="type" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 w-full">
                    <option></option>
                    <option value="status">{{__("Change status")}}</option>
                    <option value="message">{{__("Send message")}}</option>
                </select>
                <x-jet-input-error for="type" class="mt-2" />
            </div>

            @if ($type === "status")
            <div class="mt-4">
                <x-jet-label for="status" value="Status"/>
                <select wire:model="status" id="status" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 w-full">
                    <option></option>
                    <option value="working">{{__("In progress")}}</option>
                    <option value="resolved">{{__("Case resolved")}}</option>
                </select>
                <x-jet-input-error for="status" class="mt-2" />
            </div>
            @endif

            @if ($type === "message")
            <div class="mt-4">
                <x-jet-label for="message" value="Message"/>
                <textarea id="message" cols="30" rows="6" wire:model="message" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 w-full"></textarea>
                <x-jet-input-error for="message" class="mt-2" />
            </div>
            @endif
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('updateCaseModal')">{{__("Nevermind")}}</x-jet-secondary-button>
            <x-jet-button class="ml-2" wire:click="save">{{__("Update")}}</x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
