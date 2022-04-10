<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="px-4 sm:px-0 flex items-center justify-between">
                <x-jet-input type="search" wire:model="search" placeholder="Search by subject"/>
                @if (!request()->routeIs('tickets'))
                    @livewire('ticket.create')
                @endif
            </div>
            <div class="my-4"></div>
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{__("Status")}}</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{__("Severity")}}</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{__("Date")}}</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{__("Subject")}}</th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($tickets as $ticket)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div @class([
                                                    'h-4 w-4 rounded-full',
                                                    'bg-green-400' => $ticket->resolved_at,
                                                    'bg-red-600' => !$ticket->resolved_at
                                                ])>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-xs font-medium text-gray-900">
                                                <div @class([
                                                    'inline-block px-3 rounded-full uppercase',
                                                    'bg-yellow-100 text-yellow-800' => $ticket->severity_level == 'low',
                                                    'bg-orange-100 text-orange-800' => $ticket->severity_level == 'medium',
                                                    'bg-rose-100 text-rose-800' => $ticket->severity_level == 'high',
                                                    'bg-red-100 text-red-800' => $ticket->severity_level == 'sos',
                                                ])>
                                                    {{ $ticket->severity_level }}
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">{{ date('m-d-Y', strtotime($ticket->created_at)) }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">{{ $ticket->subject }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="{{ route('ticket.show', ['ticket' => $ticket->id]) }}" class="text-indigo-600 hover:text-indigo-900">{{__("Details")}}</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="px-4 sm:px-0 mt-6">
                            {{ $tickets->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
