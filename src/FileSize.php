<?php
namespace PMVC\PlugIn\file_info;
use SplFixedArray;

/**
 * Get File Size
 */
class FileSize
{
    public $size;

    public function __construct($file)
    {
        $this->size = filesize($file);
    }

    public function convert($bytes)
    {
        $bytes = floatval($bytes);
        $units = new SplFixedArray(5);
        $units[0] = __NAMESPACE__.'\Trillionbyte::';
        $units[1] = __NAMESPACE__.'\Gigabyte::';
        $units[2] = __NAMESPACE__.'\Megabyte::';
        $units[3] = __NAMESPACE__.'\Kilobyte::';
        $units[4] = __NAMESPACE__.'\Byte::';
        foreach($units as $unit){
            if ($bytes >= constant($unit.'v')) {
                $result = $bytes / constant($unit.'v');
                $result = str_replace(
                    '.', 
                    ',',
                    strval(round($result, 2))
                ).' '.constant($unit.'s');
                break;
            }
        }
        return $result;
    }

    public function __toString()
    {
        return $this->convert($this->size);
    }

}

class Byte
{
    const s = 'Bytes';
    const v = 1;
}

class Kilobyte
{
    const s = 'KB';
    const v = 1024;
}

define('Megabyte', pow(1024,2));
class Megabyte
{
    const s = 'MB';
    const v = Megabyte;
}

define('Gigabyte', pow(1024,3));
class Gigabyte
{
    const s = 'GB';
    const v = Gigabyte;
}

define('Trillionbyte', pow(1024,4));
class Trillionbyte
{
    const s = 'TB';
    const v = Trillionbyte;
}
