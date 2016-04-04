<?php
namespace PMVC\PlugIn\file_info;
\PMVC\l(__DIR__.'/FileSize.php');
\PMVC\l(__DIR__.'/FileTime.php');

class File extends FilePath
{
    function __construct($path)
    {
        $realPath = \PMVC\realPath($path);
        if (!$realPath) {
            return !trigger_error('File not exists. ['.$path.']');
        } else {
            parent::__construct($realPath);
        }
    }

    function realPath()
    {
        return $this->_path;
    }

    function getSize()
    {
        return new FileSize($this->_path);
    }

    function getTime()
    {
        return new FileTime($this->_path); 
    }
}
