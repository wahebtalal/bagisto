<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9c3ba288a52448f6f5b9c278bb7c6212
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Webkul\\Shop\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Webkul\\Shop\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9c3ba288a52448f6f5b9c278bb7c6212::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9c3ba288a52448f6f5b9c278bb7c6212::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9c3ba288a52448f6f5b9c278bb7c6212::$classMap;

        }, null, ClassLoader::class);
    }
}
