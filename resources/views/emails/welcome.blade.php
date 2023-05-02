<x-mail::message>
# Hello {{ $data['name'] }}

You are welcome to the hospital management system

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
