<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;
class promoEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $user;
    public $data;
    public $coverimage;

    public function __construct(User $user, array $data, $coverimage)
    {
        $this->user = $user;
        $this->data = $data;
        $this->coverimage = $coverimage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('naksproperties@gmail.com')
                    ->subject($this->data['subject'])
                    ->view('auth.promoEmail', compact('user','coverimage','data'));
    }
}
