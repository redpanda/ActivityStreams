<?php

namespace ActivityStreams\Tests\Fixtures;

use ActivityStreams\StreamableInterface;

class User implements StreamableInterface
{
    protected $id;
    protected $username;

    public function __construct($id, $username)
    {
        $this->id = $id;
        $this->username = $username;
    }   

    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getStreamIdentifier()
    {
        return $this->getId();
    }

    public function getStreamType()
    {
        return 'user';
    }
}
