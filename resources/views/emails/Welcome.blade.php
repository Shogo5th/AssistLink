@component('mail::message')
# Welcome to AssistLink

Here is your account information.
<br><br>
Fullname: {{ $fullname }}<br>
Username: {{ $username }}<br>
Password: {{ $password }}<br>
Organization: {{ $organization }}<br>
Job Title: {{ $jobTitle }}<br>
<br><br>

@component('mail::button', ['url' => 'http://127.0.0.1:8000/'])
Go to AssistLink!
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
