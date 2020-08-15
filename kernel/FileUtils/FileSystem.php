<?php

namespace DevFramework\Kernel\FileUtils;


class FileSystem
{
    /**
     * @return string
     */
    public static function getRootPath() : string
    {
        $path = __DIR__;
        return $path . '/..';
    }
}
