<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CompraLibrosMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $subject = "Información de contacto";
    public $contactoLibro;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contactoLibro)
    {
       $this->contactoLibro = $contactoLibro;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.compraLibros');
    }
}
