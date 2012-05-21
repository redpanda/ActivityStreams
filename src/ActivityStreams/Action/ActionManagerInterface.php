<?php 

namespace ActivityStreams\Action;

use ActivityStreams\StreamableInterface;
use ActivityStreams\Action\ActionInterface;

interface ActionManagerInterface
{
    function createAction(StreamableInterface $actor, $verb, StreamableInterface $object = null, StreamableInterface $target = null);
    function updateAction(ActionInterface $action);
}
