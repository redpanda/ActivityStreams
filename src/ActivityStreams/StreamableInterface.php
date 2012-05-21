<?php 

namespace ActivityStreams;

interface StreamableInterface
{
    function getStreamIdentifier();
    function getStreamType();
}
