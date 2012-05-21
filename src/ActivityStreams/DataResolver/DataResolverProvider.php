<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ActivityStreams\DataResolver;

use ActivityStreams\Action\ActionInterface;

/**
 * Description of DataResolverProvider
 *
 * @author jleger
 */
class DataResolverProvider implements \IteratorAggregate, \Countable
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
    
    public function all()
    {
        return $this->resolvers;
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
    
    public function getIterator()
    {
        return new \ArrayObject($this->resolvers);
    }
    
    public function count()
    {
        return count($this->resolvers);
    }
}
