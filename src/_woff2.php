<?php
namespace PMVC\PlugIn\file_info;
${_INIT_CONFIG}[_CLASS] = __NAMESPACE__.'\woff2';

class woff2 
{
    function __invoke()
    {
        return $this;
    }

    function getContentType()
    {
        return 'application/font-woff2';
    }
}
