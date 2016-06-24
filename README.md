[![Latest Stable Version](https://poser.pugx.org/pmvc-plugin/file_info/v/stable)](https://packagist.org/packages/pmvc-plugin/file_info) 
[![Latest Unstable Version](https://poser.pugx.org/pmvc-plugin/file_info/v/unstable)](https://packagist.org/packages/pmvc-plugin/file_info) 
[![Build Status](https://travis-ci.org/pmvc-plugin/file_info.svg?branch=master)](https://travis-ci.org/pmvc-plugin/file_info)
[![License](https://poser.pugx.org/pmvc-plugin/file_info/license)](https://packagist.org/packages/pmvc-plugin/file_info)
[![Total Downloads](https://poser.pugx.org/pmvc-plugin/file_info/downloads)](https://packagist.org/packages/pmvc-plugin/file_info) 

File Information Plugin
===============

## Table of Contents
- [Install with Composer](#install-with-composer)
- [How to use](#how-to-use)


## Install with Composer
### 1. Download composer
   * mkdir test_folder
   * curl -sS https://getcomposer.org/installer | php

### 2. Install by composer.json or use command-line directly
#### 2.1 Install by composer.json
   * vim composer.json
```
{
    "require": {
        "pmvc-plugin/file_info": "dev-master"
    }
}
```
   * php composer.phar install

#### 2.2 Or use composer command-line
   * php composer.phar require pmvc-plugin/file_info

## How to use

### Use Path only (file don't need exists)
```
include_once('vendor/autoload.php');
PMVC\Load::plug();
$fileInfo = \PMVC\plug('file_info');
$fileInfo->path('/abc/abc.php')->getExt(); // will return "php"
```
#### Path functions
   * getExt()
   * getContentType()
      * Return content-type, such as "image/png" 

### Use with file (file need exists)
```
include_once('vendor/autoload.php');
PMVC\Load::plug();
$fileInfo = \PMVC\plug('file_info');
$fileInfo->file('/abc/abc.php')->getExt(); // will return "php"
```
### File functions (extends all Path functions)
   * realPath()
      * Get realpath
   * getSize()
```
   $fileInfo = \PMVC\plug('file_info');
   $size = $fileInfo->file('/abc/abc.php')->getSize();
   echo $size; //transafer to readable format automatically by __tostring()
```
   * getTime()
```
   $fileInfo = \PMVC\plug('file_info');
   $accessTime = $fileInfo->file('/abc/abc.php')->getTime()->atime();
   echo $accessTime; //transafer to readable format automatically by __tostring()
```
