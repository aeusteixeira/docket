<?php

namespace App\Mail;

use App\Models\Email;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Pattern extends Mailable
{
    use Queueable, SerializesModels;
    public $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Email $email)
    {
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject($this->email->title);
        $groups = $this->email->groups;
        foreach ($groups as $group) {
            $users = $group->users;
            foreach ($users as $user) {
                $this->to($user->email);
            }
        }

        return $this->markdown('emails.templates.pattern', [
            'email' => $this->email,
        ]);
    }
}
