<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NovoContato extends Mailable
{
    use 
        Queueable, 
        SerializesModels;

    public $formData;
    public $nonMetaFields = [
        'nome',
        'sobrenome',
        'email',
        'telefone',
        'sobre',
        'tipo_servico',
    ];

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($formData)
    {
        $this->formData = $formData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contato.novo');
    }
}
