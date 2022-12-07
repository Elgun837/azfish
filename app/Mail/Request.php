<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Catalog\Product;

class Request extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The product instance.
     *
     * @var \App\Models\Catalog\Product
     */
    public $product;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Product $product, $data)
    {
        $this->product = $product;
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.request');
    }
}
