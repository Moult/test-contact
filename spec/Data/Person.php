<?php

namespace spec\Data;

use PHPSpec2\ObjectBehavior;

class Person extends ObjectBehavior
{
    function it_should_be_initializable()
    {
        $this->shouldHaveType('Data\Person');
    }

    function it_has_a_name()
    {
        $this->name->shouldBe(NULL);
    }

    function it_has_an_email()
    {
        $this->email->shouldBe(NULL);
    }
}
