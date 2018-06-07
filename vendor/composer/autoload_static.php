<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6f9a3e88e6f64a6122c77e602251fa84
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6f9a3e88e6f64a6122c77e602251fa84::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6f9a3e88e6f64a6122c77e602251fa84::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
