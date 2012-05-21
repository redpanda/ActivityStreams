<?php

namespace ActivityStreams\Tests\Fixtures;

use ActivityStreams\StreamableInterface;

class Post implements StreamableInterface
{
    protected $id;
    protected $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }   

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getStreamIdentifier()
    {
        return $this->getId();
    }

    public function getStreamType()
    {
        return 'post';
    }
}
