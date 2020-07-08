@component('mail::message')
Thank Your For Your Trust With Us

Please pay first before your next step <br>
Your Package is {{ $details['level'] }} Total Rp.{{$details['price']}}.000 <br>
<b>{{ $details['payment'] }}</b>
<br>
note : if you'll completed your payment, lets go to login and upload your payment <br><br>
For your account login : <br>
email : {{ $details['email'] }} <br>
password : {{ $details['password'] }}

@component('mail::button', ['url' => ''])
Go to Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
