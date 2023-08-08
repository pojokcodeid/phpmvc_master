<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit01c39b83c5a84d4a381383547e8e7e96
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MyApp\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MyApp\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit01c39b83c5a84d4a381383547e8e7e96::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit01c39b83c5a84d4a381383547e8e7e96::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit01c39b83c5a84d4a381383547e8e7e96::$classMap;

        }, null, ClassLoader::class);
    }
}
