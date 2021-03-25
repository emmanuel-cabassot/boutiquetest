<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit45477e463369415541fbdd723d2da77a
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit45477e463369415541fbdd723d2da77a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit45477e463369415541fbdd723d2da77a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit45477e463369415541fbdd723d2da77a::$classMap;

        }, null, ClassLoader::class);
    }
}
