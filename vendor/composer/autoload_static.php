<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd0d7318fdf754192ce0dd06fe6ef40e1
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'ExemploPDOMySQL\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ExemploPDOMySQL\\' => 
        array (
            0 => __DIR__ . '/../..' . '/scr',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd0d7318fdf754192ce0dd06fe6ef40e1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd0d7318fdf754192ce0dd06fe6ef40e1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd0d7318fdf754192ce0dd06fe6ef40e1::$classMap;

        }, null, ClassLoader::class);
    }
}
