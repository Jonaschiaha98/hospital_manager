<x-mail::message>
# Greetings {{ $data['name'] }}

<p>this is to inform you that you just booked an appointment with a doctor with the email {{ $data['email'] }}</p>
<p>We will notify you once your request is approved.</p>
<p>Thank you.</p>

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
