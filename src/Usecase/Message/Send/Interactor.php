<?php

namespace Usecase\Message\Send;

class Interactor
{
    public function __construct(Sender $sender, Recipient $recipient)
    {
        $this->sender = $sender;
        $this->recipient = $recipient;
    }

    public function execute()
    {
        $this->sender->validate();
        $this->recipient->validate();
        $this->sender->deliver_message_to($this->recipient);
    }
}
