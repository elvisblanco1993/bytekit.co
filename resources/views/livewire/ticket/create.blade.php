<div>
    <x-jet-button wire:click="$toggle('createTicketModal')">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd" />
        </svg>
        <span class="ml-2">{{__("New ticket")}}</span>
    </x-jet-button>

    <x-jet-dialog-modal wire:model="createTicketModal">
        <x-slot name="title">
            <div class="font-semibold text-xl text-gray-800 leading-tight">{{__("New ticket")}}</div>
        </x-slot>
        <x-slot name="content">
            <div class="">
                <x-jet-label for="type" value="{{__('Ticket type')}}"/>
                <select id="type" wire:model="type" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 w-full">
                    <option></option>
                    <option value="hardware">{{__("Hardware")}}</option>
                    <option value="software">{{__("Software")}}</option>
                    <option value="network">{{__("Network")}}</option>
                    <option value="phones">{{__("VoIP / Phones")}}</option>
                    <option value="website">{{__("Website")}}</option>
                    <option value="other">{{__("Other (Please specify in description)")}}</option>
                </select>
                <x-jet-input-error for="type" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-jet-label for="severity_level" value="{{__('Severity level')}}"/>
                <select id="severity_level" wire:model="severity_level" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 w-full">
                    <option></option>
                    <option value="low">{{__("Low - (Does not affect current business operations)")}}</option>
                    <option value="medium">{{__("Medium - (Some business operations are affected)")}}</option>
                    <option value="high">{{__("High - (Most of our operation is stopped because of this)")}}</option>
                    <option value="sos">{{__("Worst - (System has collapsed. Need help ASAP!)")}}</option>
                </select>
                <x-jet-input-error for="severity_level" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-jet-label for="subject" value="{{__('Subject')}}"/>
                <x-jet-input id="subject" type="text" wire:model="subject" class="mt-1 w-full" />
                <x-jet-input-error for="subject" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-jet-label for="description" value="{{__('Description')}}"/>
                <textarea id="description" wire:model="description" cols="30" rows="4" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 w-full"></textarea>
                <x-jet-input-error for="description" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-jet-label for="contact_method" value="{{__('How should we contact you?')}}"/>
                <select id="contact_method" wire:model="contact_method" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 w-full">
                    <option></option>
                    <option value="email">{{__("Email")}}</option>
                    <option value="phone">{{__("Phone")}}</option>
                </select>
                <x-jet-input-error for="contact_method" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-jet-label for="cc_email" value="{{__('CC Email (optional)')}}"/>
                <x-jet-input id="cc_email" type="text" wire:model="cc_email" class="mt-1 w-full" />
                <x-jet-input-error for="cc_email" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-jet-label for="attachment" value="{{__('Upload an attachment (optional)')}}"/>
                {{-- <x-jet-input id="attachment" type="file" wire:model="attachment" class="mt-1 w-full" /> --}}
                <label class="block">
                    <span class="sr-only">{{__("Choose a file")}}</span>
                    <input type="file" wire:model="attachment" class="cursor-pointer block mt-1 w-full text-sm text-slate-500 file:bg-indigo-100 file:border-0 file:px-4 file:py-2 file:rounded-full file:text-indigo-600"/>
                  </label>
                <x-jet-input-error for="attachment" class="mt-2" />
            </div>

        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('createTicketModal')">{{__("Dismiss")}}</x-jet-secondary-button>
            <x-jet-button class="ml-4" wire:click="save">{{__("Create")}}</x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
