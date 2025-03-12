<?php

namespace App\Mail;

use App\Models\Car;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuoteSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $car;
    public $quoteData;

    /**
     * Create a new message instance.
     */
    public function __construct(Car $car, array $quoteData)
    {
        $this->car = $car;
        $this->quoteData = $quoteData;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('New Offer for Your Car: ' . $this->car->title)
                   ->markdown('emails.quotes.submitted');
    }
}
