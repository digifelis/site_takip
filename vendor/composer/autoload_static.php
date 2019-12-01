<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1ae978e6a208e3bce9d66b20604ae19c
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1ae978e6a208e3bce9d66b20604ae19c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1ae978e6a208e3bce9d66b20604ae19c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}