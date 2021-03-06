<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc68d0ff0b958ab8ba308fd9a041a71c1
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc68d0ff0b958ab8ba308fd9a041a71c1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc68d0ff0b958ab8ba308fd9a041a71c1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc68d0ff0b958ab8ba308fd9a041a71c1::$classMap;

        }, null, ClassLoader::class);
    }
}
