@component('mail::message')
# Congratulations!

You just have created a school!

@component('mail::button', ['url' => ''])
Go to Masterhub
@endcomponent

Send,<br>
{{$date}}
@endcomponent
