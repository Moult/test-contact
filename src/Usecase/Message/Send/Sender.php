<?php

namespace Usecase\Message\Send;

use Data;
use Tool;

class Sender extends Data\Person
{
    use Validate;

    private $message;
    private $formatter;
    private $mailer;

    public function __construct(
        Data\Person $person,
        Data\Message $message,
        Tool\Formatter $formatter,
        Tool\Mailer $mailer)
    {
        foreach ($person as $property => $value)
        {
            $this->$property = $value;
        }

        $this->message = $message;
        $this->formatter = $formatter;
        $this->mailer = $mailer;
    }

    public function deliver_message_to(Recipient $recipient)
    {
        $this->mailer->send(
            $recipient->email,
            $this->email,
            'New message for '.$recipient->name,
            $this->formatter->format($this->message)
        );
    }
}
