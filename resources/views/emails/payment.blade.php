@component('mail::message')

@if($details['status'] == "Paid")
    Thank Your For Your Trust With Us <br>
    Your Status Payment is Paid. <br>
    You can test online right now. 
@else
    Sorry your payment is Danied <br>
    Please check your billing or you can contact with us. 
@endif

Thanks,<br>
{{ config('app.name') }}
@endcomponent
