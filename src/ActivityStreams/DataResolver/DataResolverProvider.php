<?php

namespace ActivityStreams\DataResolver;

use ActivityStreams\Action\ActionInterface;

class DataResolverProvider
{
    protected $resolvers;
    
    public function __construct()
    {
        $this->resolvers = array();
    }
    
    public function addDataResolver(DataResolverInterface $resolver)
    {
        if ($this->has($resolver->getType())) {
            throw new \InvalidArgumentException(sprintf('The data resolver "%s" is already defined', $resolver->getType()));
        }
        
        $this->resolvers[$resolver->getType()] = $resolver;
    }
    
    public function has($type)
    {
        return isset($this->resolvers[$type]);
    }
    
    public function get($id, $type)
    {
        if (!$this->has($type)) {
            throw new \LogicException(sprintf('The data resolver %s does not exist', $type));
        }
        
        $resolver = $this->resolvers[$type];
        $resolver->setObject($id);

        return $resolver;
    }
}
