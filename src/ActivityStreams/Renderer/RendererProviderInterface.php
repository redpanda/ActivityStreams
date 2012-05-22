<?php

namespace ActivityStreams\Renderer;

use ActivityStreams\Action\ActionInterface;

interface RendererProviderInterface
{
    function addRenderer(RendererInterface $renderer);
    function get($name = null);
    function has($name);
}
