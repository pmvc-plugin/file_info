<?php
namespace PMVC\PlugIn\file_info;

class FilePath
{
    protected $_path = null;
    public $pathinfo = null;

    function __construct($path)
    {
        $this->_path = $path;
        $this->pathinfo = pathinfo($path);        
    }

    function getExt()
    {
        return \PMVC\get($this->pathinfo, 'extension');
    }

    function getContentType()
    {
        $plug = \PMVC\plug('file_info');
        $ext = $this->getExt();
        if ($plug->isCallable($ext)) {
            return call_user_func([$plug, $this->getExt()])
                ->getContentType();
        }
    }
}
