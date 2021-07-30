<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CommentReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $team;
    public $comment;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($team, $comment)
    {
        $this->team = $team;
        $this->comment = $comment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.comment-received', [
            'team' => $this->team,
            'user' => $this->comment->user,
            'comment' => $this->comment,
        ]);
    }
}
