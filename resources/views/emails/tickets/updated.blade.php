@component('mail::message')
# Ticket update

@if ($activity->type === 'status' && $activity->status === 'working')
    We have started working on your case.
@endif

@if ($activity->type === 'status' && $activity->status === 'resolved')
    Your case has been marked as *resolved*.
@endif

@if ($activity->type === 'message')
    {{$activity->from}} says:

    {{$activity->message}}
@endif


With kind regards,<br>
The team at {{ config('app.name') }}
@endcomponent
