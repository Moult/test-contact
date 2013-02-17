<?php

namespace spec\Usecase\Message\Send;

use PHPSpec2\ObjectBehavior;

class Interactor extends ObjectBehavior
{
    /**
     * @param Usecase\Message\Send\Sender $sender
     * @param Usecase\Message\Send\Recipient $recipient
     */
    function let($sender, $recipient)
    {
        $this->beConstructedWith($sender, $recipient);
    }

    function it_should_be_initializable()
    {
        $this->shouldHaveType('Usecase\Message\Send\Interactor');
    }

    function it_should_execute_the_usecase($sender, $recipient)
    {
        $sender->validate()->shouldBeCalled();
        $recipient->validate()->shouldBeCalled();
        $sender->deliver_message_to($recipient)->shouldBeCalled();
        $this->execute();
    }
}
