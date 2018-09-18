<?php
namespace PMVC\PlugIn\file_info;
${_INIT_CONFIG}[_CLASS] = __NAMESPACE__.'\text';

class text 
{
    function __invoke()
    {
        return $this;
    }

    function getContentType()
    {
        return 'text/plain';
    }
}
