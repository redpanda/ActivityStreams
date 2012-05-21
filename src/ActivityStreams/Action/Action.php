<?php

namespace ActivityStreams\Action;

use ActivityStreams\StreamableInterface;

abstract class Action implements ActionInterface
{
    protected $actorId;
    protected $actorType;
    protected $actorUrl;
    protected $actorName;
    protected $verb;
    protected $objectId;
    protected $objectType;
    protected $objectUrl;
    protected $objectName;
    protected $targetId;
    protected $targetType;
    protected $targetUrl;
    protected $targetName;
    protected $publishedAt;

    public function setActorId($actorId)
    {
        $this->actorId = $actorId;
    }
    
    public function getActorId()
    {
        return $this->actorId;
    }
    
    public function setActorType($actorType)
    {
        $this->actorType = $actorType;
    }
    
    public function getActorType()
    {
        return $this->actorType;
    }
    
    public function setActorUrl($actorUrl)
    {
        $this->actorUrl = $actorUrl;
    }
    
    public function getActorUrl()
    {
        return $this->actorUrl;
    }
    
    public function setActorName($actorName)
    {
        $this->actorName = $actorName;
    }
    
    public function getActorName()
    {
        return $this->actorName;
    }
    
    public function setActorImage($actorImage)
    {
        $this->actorImage = $actorImage;
    }
    
    public function getActorImage()
    {
        return $this->actorImage;
    }
    
    public function setVerb($verb)
    {
        $this->verb = $verb;
    }

    public function getVerb()
    {
        return $this->verb;
    }
    
    public function setObjectId($objectId)
    {
        $this->objectId = $objectId;
    }
    
    public function getObjectId()
    {
        return $this->objectId;
    }
    
    public function setObjectType($objectType)
    {
        $this->obectType = $objectType;
    }
    
    public function getObjectType()
    {
        return $this->objectType;
    }
    
    public function setObjectUrl($objectUrl)
    {
        $this->objectUrl = $objectUrl;
    }
    
    public function getObjectUrl()
    {
        return $this->objectUrl;
    }
    
    public function setObjectName($objectName)
    {
        $this->objectName = $objectName;
    }
    
    public function getObjectName()
    {
        return $this->objectName;
    }
    
    public function setObjectImage($objectImage)
    {
        $this->objectImage = $objectImage;
    }
    
    public function getObjectImage()
    {
        return $this->objectImage;
    }
    
    public function setTargetId($targetId)
    {
        $this->targetId = $targetId;
    }
    
    public function getTargetId()
    {
        return $this->targetId;
    }
    
    public function setTargetType($targetType)
    {
        $this->targetType = $targetType;
    }
    
    public function getTargetType()
    {
        return $this->targetType;
    }
    
    public function setTargetUrl($targetUrl)
    {
        $this->targetUrl = $targetUrl;
    }
    
    public function getTargetUrl()
    {
        return $this->targetUrl;
    }
    
    public function setTargetName($targetName)
    {
        $this->targetName = $targetName;
    }
    
    public function getTargetName()
    {
        return $this->targetName;
    }
    
    public function setTargetImage($targetImage)
    {
        $this->targetImage = $targetImage;
    }
    
    public function getTargetImage()
    {
        return $this->targetImage;
    }
    
    public function setPublishedAt($publishedAt)
    {
        $this->publishedAt = $publishedAt;
    }
    
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }
}
