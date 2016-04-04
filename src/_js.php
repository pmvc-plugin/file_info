<?php
namespace PMVC\PlugIn\file_info;
${_INIT_CONFIG}[_CLASS] = __NAMESPACE__.'\js';

class js
{
    function __invoke()
    {
        return $this;
    }

    function getContentType()
    {
        return 'application/javascript';
    }
}
