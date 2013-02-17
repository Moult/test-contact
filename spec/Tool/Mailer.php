<?php

namespace spec\Tool;

use PHPSpec2\ObjectBehavior;

class Mailer extends ObjectBehavior
{
    function it_should_be_initializable()
    {
        $this->shouldHaveType('Tool\Mailer');
    }
}
