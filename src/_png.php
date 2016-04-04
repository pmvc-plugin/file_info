<?php
namespace PMVC\PlugIn\file_info;
${_INIT_CONFIG}[_CLASS] = __NAMESPACE__.'\png';

class png
{
    function __invoke()
    {
        return $this;
    }

    function getContentType()
    {
        return 'image/png';
    }
}
