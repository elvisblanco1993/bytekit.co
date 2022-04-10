<div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="px-4 sm:px-0 my-6 flex items-center justify-between">
            <h3 class="text-lg leading-6 font-medium text-gray-900">{{__("Ticket Activity")}}</h3>
            @if (! $ticket->resolved_at)
                @livewire('activity.create', ['ticket_id' => $ticket->id])
            @endif
        </div>
        <div class="shadow overflow-hidden sm:rounded-lg bg-white py-12 px-6">

            @forelse ($activities as $activity)
                {{-- Item --}}
                @if ($activity->type === 'status')
                    @if ($activity->status === 'new')
                        <div class="flex items-center justify-between ">
                            <div class="flex items-center">
                                <div class="w-8 h-8 flex items-center justify-center rounded-full bg-red-600 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 animate-pulse" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-4 font-light">{{__("Issue opened by")}} <span class="font-semibold">{{$activity->from}}</span></div>
                            </div>
                            <div class="font-light">{{ date('M d, Y @ H:i a', strtotime($activity->created_at)) }}</div>
                        </div>
                    @elseif ($activity->status === 'working')
                        <div class="flex items-center justify-between ">
                            <div class="flex items-center">
                                <div class="w-8 h-8 flex items-center justify-center rounded-full bg-orange-400 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 animate-spin" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-4 font-light">{{__("Working on issue by ")}} <span class="font-semibold">{{$activity->from}}</span></div>
                            </div>
                            <div class="font-light">{{ date('M d, Y @ H:i a', strtotime($activity->created_at)) }}</div>
                        </div>
                    @elseif ($activity->status === 'resolved')
                        <div class="flex items-center justify-between ">
                            <div class="flex items-center">
                                <div class="w-8 h-8 flex items-center justify-center rounded-full bg-emerald-400 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-4 font-light">{{__("Issue marked resolved by ")}} <span class="font-semibold">{{$activity->from}}</span></div>
                            </div>
                            <div class="font-light">{{ date('M d, Y @ H:i a', strtotime($activity->created_at)) }}</div>
                        </div>
                    @endif

                @elseif ($activity->type === 'message')
                    <div class="flex items-center justify-between ">
                        <div class="flex items-center">
                            <div class="w-8 h-8 flex items-center justify-center rounded-full bg-blue-500 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-4 font-light">{!! "<i>" . $activity->message . __(" </i> . Said ") !!} <span class="font-semibold">{{$activity->from}}</span></div>
                        </div>
                        <div class="font-light">{{ date('M d, Y @ H:i a', strtotime($activity->created_at)) }}</div>
                    </div>
                @endif
                {{-- End of item --}}
                @if (! $loop->last)
                    {{-- Item separator --}}
                    <div class="ml-4 my-1 h-6 border-l-2 border-slate-200"></div>
                @endif
            @empty

            @endforelse

        </div>
    </div>
</div>
