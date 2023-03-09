<?php

namespace App\Mail;

use app\models\User;

use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Headers;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Envelope;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderShipped extends Mailable implements ShouldQueue
{
  use Queueable, SerializesModels;
  public $orderUrl;
  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct(
    protected $users
    ) { }

  /**
   * Get the message envelope.
   *
   * @return \Illuminate\Mail\Mailables\Envelope
   */
  public function envelope()
  {   
      return new Envelope(
        replyTo: [
          new Address('cpd@saquarema.rj.gov.br', 'TI-PMS'),
      ],
        subject: 'Pedido Enviado',
      );
  }

  /**
   * Get the message content definition.
   *
   * @return \Illuminate\Mail\Mailables\Content
   */
  public function content()
  {   
      return new Content(
        markdown: 'emails.orders.shipped',
        with: [
            'url' => $this->orderUrl,
            'users' => $this->users,
          ],

      );
  }

  /**
   * Get the attachments for the message.
   *
   * @return array
   */
  public function attachments()
  {
    //
  }

  public function headers(): Headers
  {
    return new Headers(
        messageId: 'custom-message-id@example.com',
        references: ['previous-message@example.com'],
        text: [
            'X-Custom-Header' => 'Custom Value',
        ],
    );
  }
}
