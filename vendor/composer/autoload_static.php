<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc5017fb21f5a1e18ef65c50a4ffdefb4
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Gusta\\Gustavo\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Gusta\\Gustavo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc5017fb21f5a1e18ef65c50a4ffdefb4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc5017fb21f5a1e18ef65c50a4ffdefb4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc5017fb21f5a1e18ef65c50a4ffdefb4::$classMap;

        }, null, ClassLoader::class);
    }
}
