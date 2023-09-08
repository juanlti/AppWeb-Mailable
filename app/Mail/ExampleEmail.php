<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;

use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;



class ExampleEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(public $name)
    {

        // constructor de la instancia ExampleEmail
    }

    public function envelope():Envelope
    {
        //establace todos los parametros del email  pero no el mail en si mismo ( contenido )
        //ejemplo, asuntos, nobmre del usuarios del emisor, nombre del usuario receptor
        return new Envelope(
            from: new Address(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME')),
            subject: 'This is na Example Mail', // asunto
            //from: new Address('miEmailEmisor@gmail.com','nombre del emisor'); => No recomenado

            /*  =>forma recomendada
            from:=>[
                'address'=>env('MAIL_FROM_ADDRESS','no-reply@myplataform.com'),  //definimos la variable de entorno
                'name'=>env('MAIL_FROM_NAME','My Platform'),
                ];
            */
            /*
        'reply_to'=>['address'=>'Example@example.com','name'=>'Plataform']; // indicamos la dirrecion y el nombre, de correo a cual se le entraga la replica del email enviado
        */


            );
    }
    public function content()
    {
        //establece el contenido del email

        return new Content(
            //lo recomendado es retornar una vista y no un texto plano (como se hace en la mayoria de  los casos)
        // al retornar una vista, podemos personalizar dicho email
            view: 'emails.example',
        );
    }

    public function attachments(): array
    {
        //se encarga de enviar los archivos adjuntos
        //$invoide es el archivo adjunto, pdf de la factura
        return [];
    }
}
