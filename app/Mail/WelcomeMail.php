<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;


    public $parameter;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($parameter)
    {
        $this->parameter = $parameter;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   
        $email = $this->parameter['email'];

        $fullname = $this->parameter['fullname'];
        $username = $this->parameter['username'];
        $password = $this->parameter['password'];
        $organization = $this->parameter['orgName'];
        $jobTitle = $this->parameter['jobTitle'];
        

        //return $this->markdown('emails.Welcome');
        return $this->markdown('emails.Welcome')->to($email)  // send from
        ->subject('Hello New Reperesentative!') 
        ->view('emails.Welcome')  // body of email
        ->with([

            'fullname' => $fullname,
            'username' => $username,
            'password' => $password,
            'organization' => $organization,
            'jobTitle' => $jobTitle

        ]);   // send value
    }
}
