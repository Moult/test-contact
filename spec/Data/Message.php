<?php

namespace spec\Data;

use PHPSpec2\ObjectBehavior;

class Message extends ObjectBehavior
{
    function it_should_be_initializable()
    {
        $this->shouldHaveType('Data\Message');
    }
}
