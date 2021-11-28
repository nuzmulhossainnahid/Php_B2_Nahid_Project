<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita8eb04f4d6b1c1ee965f5a41db58284c
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita8eb04f4d6b1c1ee965f5a41db58284c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita8eb04f4d6b1c1ee965f5a41db58284c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita8eb04f4d6b1c1ee965f5a41db58284c::$classMap;

        }, null, ClassLoader::class);
    }
}
