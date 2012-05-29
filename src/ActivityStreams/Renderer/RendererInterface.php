<?php

namespace ActivityStreams\Renderer;

use ActivityStreams\Action\ActionInterface;

interface RendererInterface
{
    function render(ActionInterface $action, array $options = array());
    function getType();
}
