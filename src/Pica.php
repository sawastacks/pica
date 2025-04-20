<?php

namespace Sawastacks\Utils;


class Pica
{
    protected $file;
    protected $filename;
    protected $disk = 'public';
    protected $path = '';
    protected $extension;
    protected $image;

    public static function getFile($file, $filename)
    {
       
    }

    public function setDisk($disk)
    {
        $this->disk = $disk;
        return $this;
    }

    public function setPath($path)
    {
        $this->path = trim($path, '/');
        return $this;
    }

    public function setExtension($ext)
    {
        $this->extension = $ext;
        return $this;
    }

    public function save()
    {
        
    }
}
