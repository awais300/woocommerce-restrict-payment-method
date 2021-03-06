<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit097e8cafea4e346c015d5c986eabde98
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'EWA\\RestrictPaymentMethod\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'EWA\\RestrictPaymentMethod\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit097e8cafea4e346c015d5c986eabde98::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit097e8cafea4e346c015d5c986eabde98::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit097e8cafea4e346c015d5c986eabde98::$classMap;

        }, null, ClassLoader::class);
    }
}
