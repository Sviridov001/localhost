<?php

class GuestBookRecord
{
    protected $messade;
    public function __construct($message)
    {
        $this->messade = $message;
    }
    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->messade;
    }
    public function getMessage()
    {
        return $this->messade;
    }
}