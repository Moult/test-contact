<?php

namespace Usecase\Message\Send;

use Data;

class Recipient extends Data\Person
{
    use Validate;

    public function __construct(Data\Person $person)
    {
        foreach ($person as $property => $value)
        {
            $this->$property = $value;
        }
    }
}
