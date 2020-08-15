<?php
namespace DevFramework\Kernel\Server;

class Request
{
    /**
     * @return string
     */
    public static function getRequestUri() : string
    {
        return $_SERVER['REQUEST_URI'];
    }

    /**
     * @return string
     */
    public static function getRequestMethod() : string
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    /**
     * @return string
     */
    public static function getHostName() : string
    {
        return $_SERVER['HTTP_HOST'];
    }
}
