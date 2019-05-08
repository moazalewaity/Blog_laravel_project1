@component('mail::message')
# Introduction

The body of your message.
<hr/>
{{ $data->title }}

@component('mail::button', ['url' => ''])
Click Hier
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
