<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite79ee649ba19d2dfa4c4ddc42c544b8a
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite79ee649ba19d2dfa4c4ddc42c544b8a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite79ee649ba19d2dfa4c4ddc42c544b8a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite79ee649ba19d2dfa4c4ddc42c544b8a::$classMap;

        }, null, ClassLoader::class);
    }
}