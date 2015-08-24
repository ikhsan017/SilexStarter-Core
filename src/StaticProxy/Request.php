<?php

namespace SilexStarter\StaticProxy;

use XStatic\StaticProxy;

class Request extends StaticProxy
{
    public static function getInstanceIdentifier()
    {
        return 'request';
    }

    public static function ajax()
    {
        return static::$container->get('request')-> isXmlHttpRequest();
    }

    public static function get($key = null)
    {
        return ($key)
                ? static::$container->get('request')->request->get($key)
                : static::$container->get('request')->request->all();
    }

    public static function query($key = null)
    {
        return ($key)
                ? static::$container->get('request')->query->get($key)
                : static::$container->get('request')->query->all();
    }

    public static function cookie($key = null)
    {
        return ($key)
                ? static::$container->get('request')->cookies->get($key)
                : static::$container->get('request')->cookies->all();
    }

    public static function file($key = null)
    {
        return ($key)
                ? static::$container->get('request')->files->get($key)
                : static::$container->get('request')->files->all();
    }

    public static function server($key = null)
    {
        return ($key)
                ? static::$container->get('request')->server->get($key)
                : static::$container->get('request')->server->all();
    }

    public static function header($key = null)
    {
        return ($key)
                ? static::$container->get('request')->headers->get($key)
                : static::$container->get('request')->headers->all();
    }
}
