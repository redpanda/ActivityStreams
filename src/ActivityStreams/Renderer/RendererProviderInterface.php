<?php

namespace ActivityStreams\Renderer;

use ActivityStreams\Action\ActionInterface;

interface RendererProviderInterface
{
    function get($name = null);
    function has($name);
}
