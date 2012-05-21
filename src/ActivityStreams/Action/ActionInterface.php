<?php

namespace ActivityStreams\Action;

use ActivityStreams\StreamableInterface;

interface ActionInterface
{
    function setActorId($actorId);
    
    function getActorId();
    
    function setActorType($actorType);
    
    function getActorType();
    
    function setActorUrl($actorUrl);
    
    function getActorUrl();
    
    function setActorName($name);
    
    function getActorName();
    
    function setVerb($verb);
    
    function getVerb();
    
    function setObjectId($objectId);
    
    function getObjectId();
    
    function setObjectType($objectType);
    
    function getObjectType();
    
    function setObjectUrl($objectUrl);
    
    function getObjectUrl();
    
    function setObjectName($objectName);
    
    function getObjectName();
    
    function setTargetId($targetId);
    
    function getTargetId();
    
    function setTargetType($targetType);
    
    function getTargetType();
    
    function setTargetUrl($targetUrl);
    
    function getTargetUrl();
    
    function setTargetName($targetName);
    
    function getTargetName();

    function setPublishedAt($publishedAt);

    function getPublishedAt();
}
