<?php

namespace ActivityStreams\Tests;

use ActivityStreams\DataResolver\DataResolverProvider;

class DataResolverProviderTest extends \PHPUnit_Framework_TestCase
{
    public function testAddDataResolver()
    {
        $provider = new DataResolverProvider();

        $this->assertAttributeEquals(array(), 'resolvers', $provider);
        
        $foo = $this->getDataResolverMock();
        $foo->expects($this->any())
             ->method('getType')
             ->will($this->returnValue('foo'));
        
        $bar = $this->getDataResolverMock();
        $bar->expects($this->any())
             ->method('getType')
             ->will($this->returnValue('bar'));

        $provider->addDataResolver($foo);
        $provider->addDataResolver($bar);

        $this->assertAttributeEquals(array('foo' => $foo, 'bar' => $bar), 'resolvers', $provider);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testAddTwiceTheSameResolver()
    {
        $resolver = $this->getDataResolverMock();
        
        $resolver->expects($this->any())
             ->method('getType')
             ->will($this->returnValue('foo'));
        
        $provider = new DataResolverProvider();

        $provider->addDataResolver($resolver);
        $provider->addDataResolver($resolver);
    }

    public function testHasTransformer()
    {
        $resolver = $this->getDataResolverMock();
        
        $resolver->expects($this->any())
             ->method('getType')
             ->will($this->returnValue('foo'));
        
        $provider = new DataResolverProvider();

        $this->assertFalse($provider->has($resolver->getType()), '->has() returns FALSE when the given provider is not registered');

        $provider->addDataResolver($resolver);

        $this->assertTrue($provider->has($resolver->getType()), '->has() returns TRUE when the given provider is not registered');
    }

    public function testGetTransformer()
    {
        $dummy = $this->getStreamMock();
        $dummy
            ->expects($this->any())
            ->method('getStreamType')
            ->will($this->returnValue('foo'));

        $dummy
            ->expects($this->any())
            ->method('getStreamIdentifier')
            ->will($this->returnValue(1));

        $foo = $this->getDataResolverMock();
        $foo->expects($this->any())
             ->method('getType')
             ->will($this->returnValue('foo'));
        
        $bar = $this->getDataResolverMock();
        $bar->expects($this->any())
             ->method('getType')
             ->will($this->returnValue('bar'));

        $provider = new DataResolverProvider();
        $provider->addDataResolver($foo);
        $provider->addDataResolver($bar);

        $this->assertEquals($foo, $provider->get($dummy->getStreamIdentifier(), $dummy->getStreamType()));
    }

    /**
     * @expectedException LogicException
     */
    public function testGetWithNoRegisteredResolver()
    {
        $dummy = $this->getStreamMock();
        $dummy
            ->expects($this->any())
            ->method('getStreamType')
            ->will($this->returnValue('foo'));

        $dummy
            ->expects($this->any())
            ->method('getStreamIdentifier')
            ->will($this->returnValue(1));
        
        $provider = new DataResolverProvider();
        $provider->get($dummy->getStreamIdentifier(), $dummy->getStreamType());
    }

    public function getDataResolverMock()
    {
        return $this->getMock('ActivityStreams\DataResolver\DataResolverInterface');
    }
    
    public function getStreamMock()
    {
        return $this->getMock('ActivityStreams\StreamableInterface');
    }
}
