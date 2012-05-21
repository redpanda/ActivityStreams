<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ActivityStreams\DataResolver;

/**
 * Description of DataResolverInterface
 *
 * @author jleger
 */
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
