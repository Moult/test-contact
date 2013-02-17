<?php

namespace Usecase\Message\Send;

trait Validate
{
    public function validate()
    {
        if (empty($this->name)
            OR ! filter_var($this->email, FILTER_VALIDATE_EMAIL)
            OR ! checkdnsrr(explode('@', $this->email)[1], 'MX'))
            throw new \Exception('I\'m not a real person!');
    }
}
