<?php

namespace ActivityStreams\DataResolver;

interface DataResolverInterface
{
    function getName();
    function getUrl();
    function getImage();
    function getType();
    function setObject($id);
    function getObject();
    function getObjectQuery($id);
}
