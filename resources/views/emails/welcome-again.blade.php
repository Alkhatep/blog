@component('mail::message')
# Introduction

Thanks so much for registering!

@component('mail::button', ['url' => 'http://google.com'])
Start Browsing
@endcomponent

@component('mail::panel', ['url' => ''])
Some words to go here. :)
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
