<?php 

namespace ActivityStreams\Renderer;

use ActivityStreams\ActionInterface;

class RendererProvider implements RendererProviderInterface
{
    protected $renderers;

    public function __construct(RendererInterface $defaultRenderer, array $renderers = array())
    {
        $this->renderers = array();
        
        foreach ($renderers as $renderer) {
            $this->addRenderer($renderer);
        }

        $this->renderers['default'] = $defaultRenderer;
    }

    public function addRenderer(RendererInterface $renderer)
    {
        $this->renderers[$renderer->getType()] = $renderer;
        $renderer->setProvider($this);
    }

    public function all()
    {
        return $this->renderers;
    }
    
    public function get($type = 'default')
    {
        if (!$this->has($type)) {
            throw new \RuntimeException(sprintf('The renderer "%s" does not exists', $type));
        }
        
        return $this->renderers[$type];
    }

    public function has($name)
    {
        return isset($this->renderers[$name]);
    }
}
