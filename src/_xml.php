<?php
namespace PMVC\PlugIn\file_info;
${_INIT_CONFIG}[_CLASS] = __NAMESPACE__.'\xml';

class xml 
{
    function __invoke()
    {
        return $this;
    }

    function getContentType()
    {
        return 'text/xml';
    }
}
