<?php
namespace PMVC\PlugIn\file_info;

class FileTime
{
    public $times;
    public $format = 'Y/m/d H:i:s';

    public function __construct($file)
    {
        $this->times = array(
            'a' => fileatime($file),
            'c' => filectime($file),
            'm' => filemtime($file)
        );
    }

    public function atime()
    {
        return new FileTimeFormat($this->times['a'], $this->format);
    }

    public function ctime()
    {
        return new FileTimeFormat($this->times['c'], $this->format);
    }

    public function mtime()
    {
        return new FileTimeFormat($this->times['m'], $this->format);
    }
}

class FileTimeFormat
{
    private $_time;
    private $_format;

    function __construct($time, $format)
    {
        $this->_time = $time;
        $this->_format = $format;
    }

    function __toString()
    {
        return date($this->_format, $this->_time);
    }
}
