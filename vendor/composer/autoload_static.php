<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8aa46372b8674e3d30fb8e4d23c284c6
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Amber\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Amber\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8aa46372b8674e3d30fb8e4d23c284c6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8aa46372b8674e3d30fb8e4d23c284c6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8aa46372b8674e3d30fb8e4d23c284c6::$classMap;

        }, null, ClassLoader::class);
    }
}