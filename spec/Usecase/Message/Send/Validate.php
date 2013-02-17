<?php

namespace spec\Usecase\Message\Send;

use PHPSpec2\ObjectBehavior;

trait Validate
{
    function it_validates_its_own_existence($person)
    {
        $this->validate();
    }

    function it_invalidates_unamed_people($person)
    {
        $person->name = NULL;
        $this->shouldThrow('Exception')
            ->duringValidate();
    }

    function it_invalidates_improper_emails($person)
    {
        $person->email = '';
        $this->shouldThrow('Exception')
            ->duringValidate();
    }

    function it_invalidates_fake_domains($person)
    {
        $person->email = 'foo@fwohju23098.com';
        $this->shouldThrow('Exception')
            ->duringValidate();
    }
}
