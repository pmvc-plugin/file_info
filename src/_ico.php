<?php
namespace PMVC\PlugIn\file_info;
${_INIT_CONFIG}[_CLASS] = __NAMESPACE__.'\ico';

class ico 
{
    function __invoke()
    {
        return $this;
    }

    function getContentType()
    {
        return 'image/x-icon';
    }
}
