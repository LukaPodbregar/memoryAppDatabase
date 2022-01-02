<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit26193a682f3ec77ac9c2eda2d66c0c40
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'ReallySimpleJWT\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ReallySimpleJWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/rbdwllr/reallysimplejwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit26193a682f3ec77ac9c2eda2d66c0c40::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit26193a682f3ec77ac9c2eda2d66c0c40::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit26193a682f3ec77ac9c2eda2d66c0c40::$classMap;

        }, null, ClassLoader::class);
    }
}