<?php

namespace ActivityStreams\DataResolver;

abstract class AbstractDataResolver implements DataResolverInterface
{
    private $object;

    public function setObject($id)
    {
        $this->object = $this->getObjectQuery($id);
    }

    public function getObject()
    {
        return $this->object;
    }
}
