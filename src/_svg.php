<?php
namespace PMVC\PlugIn\file_info;
${_INIT_CONFIG}[_CLASS] = __NAMESPACE__.'\svg';

class svg
{
    function __invoke()
    {
        return $this;
    }

    function getContentType()
    {
        return 'image/svg+xml';
    }
}
