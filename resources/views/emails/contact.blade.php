<x-mail::message>
# Hallo, Sie haben ein Enquiry!

<h3>Vorname: {{ $data['vorname'] }}</h3>
<h3>Nachname: {{ $data['nachname'] }}</h3>
<h3>Email: {{ $data['email'] }}</h3>
<h3>Telefon: {{ $data['telefon'] }}</h3>

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
