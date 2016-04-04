<?php
namespace PMVC\PlugIn\file_info;
${_INIT_CONFIG}[_CLASS] = __NAMESPACE__.'\file_info';
\PMVC\l(__DIR__.'/src/FilePath.php');
\PMVC\l(__DIR__.'/src/File.php');

class file_info extends \PMVC\PlugIn
{
    function path($path)
    {
        return new FilePath($path);
    }

    function file($path)
    {
        return new File($path);
    }
}
