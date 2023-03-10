<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2c8aa75b23f29c421967a3f9a5373996
{
    public static $files = array (
        '69ad9ca0e3474f038920e2cc58adf11c' => __DIR__ . '/../..' . '/config/constants.php',
    );

    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lib\\' => 4,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lib\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2c8aa75b23f29c421967a3f9a5373996::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2c8aa75b23f29c421967a3f9a5373996::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
