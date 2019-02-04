@component('mail::message')
# Congratulations!

You just have created a school!
Now you may add new courses, actions and stuff to your school.

@component('mail::button', ['url' => 'google.com'])
Go to Masterhub
@endcomponent

Send,<br>
{{$date}}
@endcomponent
