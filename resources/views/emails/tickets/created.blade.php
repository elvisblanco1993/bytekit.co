@component('mail::message')
# Ticket received

We have received your support request with subject: {{ $ticket->subject }}.
@component('mail::table')
|                   |                               |
| ----------------- |:----------------------------- |
| Type              | {{$ticket->type}}             |
| Severity          | {{$ticket->severity_level}}   |
| Subject           | {{$ticket->subject}}          |
| Contact method    | {{$ticket->contact_method}}   |
@endcomponent

Ticket description:

{{ $ticket->description }}

<hr>

Please wait while our team reviews your ticket. Someone will contact you soon on your {{ $ticket->contact_method }}.

If this is an emergency, please call us to our support line.

With kind regards,<br>
The team at {{ config('app.name') }}
@endcomponent
