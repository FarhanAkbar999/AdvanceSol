<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderAcceptMail extends Mailable
{ 
    use Queueable, SerializesModels;

    public $orderdata;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($orderdata)
    {
        $this->orderdata = $orderdata;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $orderdata = $this->orderdata;

        return $this->from('support@mycabinetspro.com')->view('mail.order_accept_mail',compact('orderdata'))->subject('Order Status Updated');
    }
}
