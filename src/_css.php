<?php
namespace PMVC\PlugIn\file_info;
${_INIT_CONFIG}[_CLASS] = __NAMESPACE__.'\css';

class css
{
    function __invoke()
    {
        return $this;
    }

    function getContentType()
    {
        return 'text/css';
    }
}
