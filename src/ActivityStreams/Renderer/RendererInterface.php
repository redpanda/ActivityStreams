<?php

namespace ActivityStreams\Renderer;

use ActivityStreams\Action\ActionInterface;

interface RendererInterface
{
    public function render(ActionInterface $action, array $options = array());
}
