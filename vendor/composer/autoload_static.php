<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5e68c74ee067bde52f8b5f8a6e985a28
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Nikits\\Project\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Nikits\\Project\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5e68c74ee067bde52f8b5f8a6e985a28::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5e68c74ee067bde52f8b5f8a6e985a28::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5e68c74ee067bde52f8b5f8a6e985a28::$classMap;

        }, null, ClassLoader::class);
    }
}
