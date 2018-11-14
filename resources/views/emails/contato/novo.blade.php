@component('mail::message')
# Nova mensagem de contato

** {{ $formData['nome'] . ' ' . $formData['sobrenome'] }} ** entrou em contato com interesse em: ** {{ $formData['tipo_servico'] }} **

@component('mail::panel')

## Dados

- Email: {{ $formData['email'] }}</li>
- Telefone: {{ $formData['telefone'] }}</li>
@if ($formData['sobre'])
- Mensagem: {{ $formData['sobre'] }}</li>
@endif


@endcomponent

@component('mail::panel')
    
## Dados complementares (metadados)

@foreach ($formData as $index => $value)
@if (!in_array($index, $nonMetaFields))
- {{ $index . ': ' . $value }}</li>
@endif
@endforeach
@endcomponent

Atenciosamente,<br>
{{ config('app.name') }}
@endcomponent
