@component('mail::message')
# San Luis Del Mar

Welcome to San Luis Del Mar Website. <br>
You have successfully registered your account.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
