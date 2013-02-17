<?php

namespace spec\Usecase\Message\Send;

use PHPSpec2\ObjectBehavior;

class Recipient extends ObjectBehavior
{
    use Validate;

    /**
     * @param Data\Person $person
     */
    function let($person)
    {
        $person->name = 'John Doe';
        $person->email = 'contact@johndoeinc.com';
        $this->beConstructedWith($person);
    }

    function it_should_be_initializable()
    {
        $this->shouldHaveType('Usecase\Message\Send\Recipient');
    }

    function it_should_be_a_person()
    {
        $this->shouldHaveType('Data\Person');
        $this->name->shouldBe('John Doe');
        $this->email->shouldBe('contact@johndoeinc.com');
    }
}
