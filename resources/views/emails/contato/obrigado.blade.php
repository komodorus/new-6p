@component('mail::message')
Olá **{{ $formData['nome'] }}**, 
recebemos sua mensagem!

Em breve alguem irá lê-la e entrará em contato.

Para lembrá-lo, temos outros canais de comunicação e estamos sempre a postos durante o horário comercial para atendê-lo.

@component('mail::panel')
## Informações

- Telefone: <a href="tel:+55(16)39311266">(16) 3931 1266</a> 
- E-mail: <a href="mailto:contato@6p.com.br">contato@6p.com.br</a> 
- Endereço: 
    Rua Professor Mário Roxo, 260 
    Alto da Boa Vista 
    Ribeirão Preto – SP 
    CEP 14025-460 
@endcomponent

@component('mail::button', ['url' => route('portfolio')])
Veja nosso portfólio!
@endcomponent

Obrigado,<br>
Equipe {{ config('app.name') }}
@endcomponent
