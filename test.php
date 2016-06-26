<?php
PMVC\Load::plug();
PMVC\addPlugInFolders(['../']);
class File_infoTest extends PHPUnit_Framework_TestCase
{
    private $_plug = 'file_info';
    function testPlugin()
    {
        ob_start();
        print_r(PMVC\plug($this->_plug));
        $output = ob_get_contents();
        ob_end_clean();
        $this->assertContains($this->_plug,$output);
    }

    function testPath()
    {
        $p = PMVC\plug($this->_plug);
        $ext = $p->path('/abc.png')->getExt();
        $this->assertContains('png', $ext);
    }

    function testGetContentType()
    {
        $p = PMVC\plug($this->_plug);
        $contentType = $p->path('/abc.png')->getContentType();
        $this->assertContains('image/png', $contentType);
    }

    function testGetFileSize()
    {
        $p = PMVC\plug($this->_plug);
        $f = $p->file(__FILE__);
        $this->assertTrue((bool)strlen((string)$f->getSize()));
    }

    function testGetFileTime()
    {
        $p = PMVC\plug($this->_plug);
        $f = $p->file(__FILE__);
        $atime = fileatime($f->realPath());
        $time = date('Y/m/d H:i:s', $atime); 
        $this->assertEquals($time, (string)$f->getTime()->atime());
    }
}
