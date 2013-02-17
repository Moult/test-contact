<?php

namespace spec\Usecase\Message\Send;

use PHPSpec2\ObjectBehavior;

class Sender extends ObjectBehavior
{
    use Validate;

    /**
     * @param Data\Person $person
     * @param Data\Message $message
     * @param Tool\Formatter $formatter
     * @param Tool\Mailer $mailer
     */
    function let($person, $message, $formatter, $mailer)
    {
        $person->name = 'Dion Moult';
        $person->email = 'dion@thinkmoult.com';
        $this->beConstructedWith($person, $message, $formatter, $mailer);
    }

    function it_should_be_initializable()
    {
        $this->shouldHaveType('Usecase\Message\Send\Sender');
    }

    function it_is_a_person()
    {
        $this->shouldHaveType('Data\Person');
        $this->name->shouldBe('Dion Moult');
        $this->email->shouldBe('dion@thinkmoult.com');
    }

    /**
     * @param Usecase\Message\Send\Recipient $recipient
     */
    function it_delivers_a_message($recipient, $message, $formatter, $mailer)
    {
        $recipient->name = 'John Doe Inc';
        $recipient->email = 'contact@johndoeinc.com';

        $formatter->format($message)->shouldBeCalled()
            ->willReturn('My message');

        $mailer->send(
            'contact@johndoeinc.com',
            'dion@thinkmoult.com',
            'New message for John Doe Inc',
            'My message'
        )->shouldBeCalled();

        $this->deliver_message_to($recipient);
    }
}
