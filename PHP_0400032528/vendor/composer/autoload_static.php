<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2f7827d34e7cb6e615de5bab8c8e268b
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2f7827d34e7cb6e615de5bab8c8e268b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2f7827d34e7cb6e615de5bab8c8e268b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2f7827d34e7cb6e615de5bab8c8e268b::$classMap;

        }, null, ClassLoader::class);
    }
}
