@component('mail::message')
# Olá admin,
<br>
<p>Você recebeu uma nova mensagem a partir do formulário de contato em {{ config('app.name') }}</p>
<p>Motivo da mensagem: {{ $textSubject }}</p>
<p>{{ $textMessage }}</p>
@endcomponent
